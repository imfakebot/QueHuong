import bcrypt from 'bcrypt';

export class AuthService {
    constructor({ userService, accountModel, db }) {
        this.userService = userService;
        this.Account = accountModel;
        this.sequelize = db; // 'db' là instance của sequelize từ container
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
                address
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
}