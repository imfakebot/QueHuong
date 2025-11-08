
export class AuthController {
    constructor({ authService }) {
        this.authService = authService;
    }

    /**
     * Xử lý yêu cầu đăng ký tài khoản mới.
     */
    register = async (req, res, next) => {
        const registerData = req.body;

        try {
            const { user, account } = await this.authService.register(registerData);
            res.status(201).json({
                message: "Đăng ký thành công. Vui lòng kiểm tra email để xác thực tài khoản.",
                user,
                account
            });
        } catch (error) {
            // Chuyển lỗi đến middleware xử lý lỗi tập trung
            next(error);
        }
    };

    /**
     * Xử lý yêu cầu xác thực email từ link người dùng nhấp vào.
     */
    verifyEmail = async (req, res, next) => {
        try {
            const { token } = req.params;
            await this.authService.verifyEmail(token);
            // Phản hồi bằng một trang HTML đơn giản để thông báo thành công
            res.status(200).send('<h1>Xác thực email thành công!</h1><p>Bây giờ bạn có thể đăng nhập vào tài khoản của mình.</p>');
        } catch (error) {
            // Phản hồi lỗi nếu token không hợp lệ hoặc đã hết hạn
            res.status(400).send(`<h1>Lỗi xác thực</h1><p>${error.message}</p>`);
        }
    };
}