import bcrypt from 'bcrypt';
import crypto from 'crypto'; // Thêm thư viện crypto để tạo token

export class AuthService {
    constructor({ userService, accountModel, db, mailService }) { // Giả sử có mailService
        this.userService = userService;
        this.Account = accountModel;
        this.sequelize = db; // 'db' là instance của sequelize từ container
        this.mailService = mailService; // Inject mailService
    }

    /**
     * Xử lý logic đăng ký người dùng mới.
     * Tạo User và Account trong một transaction để đảm bảo toàn vẹn dữ liệu.
     * @param {object} registerData Dữ liệu đăng ký từ người dùng.
     * @returns {object} Người dùng và tài khoản vừa được tạo.
     */
    async register(registerData) {
        const t = await this.sequelize.transaction();
        try {
            const {
                fullName,
                email,
                phoneNumber,
                address,
                userName,
                password,
                is2FAEnabled,
                twoFactorSecret
            } = registerData;

            // 1. Tạo người dùng (User)
            const newUser = await this.userService.createUser({
                fullname: fullName,
                email,
                phoneNumber,
                address,
                // Thêm các trường để lưu token và trạng thái xác thực
                // Bạn cần thêm các trường này vào model User của mình
                emailVerificationToken: crypto.randomBytes(32).toString('hex'),
                emailVerificationExpires: Date.now() + 3600000, // Hết hạn sau 1 giờ
            }, { transaction: t });

            // 2. Băm mật khẩu
            const salt = await bcrypt.genSalt(10);
            const passwordhash = await bcrypt.hash(password, salt);

            // 3. Tạo tài khoản (Account) và liên kết với User
            const newAccount = await this.Account.create({
                username: userName,
                passwordhash,
                is2FAEnabled,
                twoFactorSecret: is2FAEnabled ? twoFactorSecret : null,
                userId: newUser.id // Liên kết với user vừa tạo
            }, { transaction: t });

            // Nếu mọi thứ thành công, commit transaction
            await t.commit();

            // 4. Gửi email xác thực (thực hiện sau khi commit thành công)
            try {
                await this.mailService.sendVerificationEmail(newUser.email, newUser.emailVerificationToken);
            } catch (emailError) {
                // Ghi log lỗi gửi email nhưng không cần rollback transaction
                console.error('Lỗi gửi email xác thực:', emailError);
            }

            // Trả về dữ liệu, loại bỏ mật khẩu
            const accountJson = newAccount.toJSON();
            delete accountJson.passwordhash;

            return { user: newUser, account: accountJson };

        } catch (error) {
            // Nếu có lỗi, rollback tất cả thay đổi
            await t.rollback();
            console.error('Lỗi khi đăng ký:', error);
            // Ném lỗi ra ngoài để controller có thể bắt và xử lý
            throw new Error('Đăng ký không thành công. ' + error.message);
        }
    }

    /**
     * Xác thực thông tin đăng nhập của người dùng.
     * @param {string} username Tên đăng nhập.
     * @param {string} password Mật khẩu.
     * @returns {Promise<object|null>} Trả về thông tin tài khoản nếu hợp lệ, ngược lại trả về null.
     */
    async login(username, password) {
        // Logic đăng nhập sẽ được thêm ở đây
        // Ví dụ: tìm tài khoản, so sánh mật khẩu, tạo token/session...
    }

    /**
     * Xác thực email của người dùng dựa trên token.
     * @param {string} token Token xác thực từ URL.
     * @returns {Promise<object>} Đối tượng người dùng đã được xác thực.
     */
    async verifyEmail(token) {
        // 1. Tìm người dùng có token tương ứng và chưa hết hạn
        const user = await this.userService.findUser({
            emailVerificationToken: token,
            // emailVerificationExpires: { [Op.gt]: new Date() } // Cần import Op từ sequelize
        });

        if (!user || user.emailVerificationExpires < new Date()) {
            throw new Error('Token không hợp lệ hoặc đã hết hạn.');
        }

        // 2. Cập nhật trạng thái xác thực và xóa token
        user.isEmailVerified = true;
        user.emailVerificationToken = null;
        user.emailVerificationExpires = null;

        await user.save();

        return user;
    }
}