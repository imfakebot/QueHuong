

export class authController { // Đổi tên thành chữ thường để nhất quán với container
    constructor({ userService }) {
        this.userService = userService;
    }
    async register(req, res) {
        const registerData = req.body;

        try {
            const newUser = await this.userService.register(registerData);
            res.status(201).json({ message: "User registered successfully", user: newUser });
        } catch (error) {
            res.status(500).json({ message: "User registration failed", error: error.message });
        }
    }
}