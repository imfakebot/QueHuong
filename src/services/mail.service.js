import nodemailer from 'nodemailer';

export class MailService {
    constructor() {
        // Cấu hình transporter cho nodemailer.
        // Bạn nên sử dụng biến môi trường (environment variables) để lưu trữ các thông tin nhạy cảm này.
        this.transporter = nodemailer.createTransport({
            host: process.env.MAIL_HOST, // ví dụ: 'smtp.ethereal.email' cho testing
            port: process.env.MAIL_PORT, // ví dụ: 587
            secure: process.env.MAIL_PORT == 465, // true cho port 465, false cho các port khác
            auth: {
                user: process.env.MAIL_USER, // Tên đăng nhập dịch vụ email (ví dụ: từ Ethereal, Mailgun, SendGrid)
                pass: process.env.MAIL_PASS, // Mật khẩu dịch vụ email
            },
        });
    }

    /**
     * Gửi email xác thực tài khoản
     * @param {string} to Email của người nhận
     * @param {string} token Token xác thực duy nhất
     */
    async sendVerificationEmail(to, token) {
        const verificationUrl = `${process.env.APP_URL}/api/auth/verify-email/${token}`;

        const mailOptions = {
            from: `"Quê Hương" <${process.env.MAIL_FROM_ADDRESS}>`, // địa chỉ người gửi
            to: to, // người nhận
            subject: 'Xác thực địa chỉ email của bạn', // Dòng tiêu đề
            html: `
                <div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
                    <h2>Chào mừng bạn đến với Quê Hương!</h2>
                    <p>Cảm ơn bạn đã đăng ký. Vui lòng nhấp vào nút bên dưới để xác thực địa chỉ email của bạn. Liên kết này sẽ hết hạn sau 1 giờ.</p>
                    <a href="${verificationUrl}" style="background-color: #007bff; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; display: inline-block;">Xác thực Email</a>
                    <p>Nếu bạn không thể nhấp vào nút, vui lòng sao chép và dán URL sau vào trình duyệt của bạn:</p>
                    <p><a href="${verificationUrl}">${verificationUrl}</a></p>
                    <p>Nếu bạn không đăng ký tài khoản này, vui lòng bỏ qua email này.</p>
                </div>`,
        };

        await this.transporter.sendMail(mailOptions);
    }
}