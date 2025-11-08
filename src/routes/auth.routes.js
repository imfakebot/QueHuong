import { Router } from 'express';
import { validationMiddleware } from '../middleware/validation.middleware.js';
import { registerSchema } from '../schema/register.schema.js';

/**
 * Tạo router cho các chức năng xác thực.
 * @param {object} container - Container của Awilix.
 * @returns {Router} Router của Express.
 */
export default function createAuthRouter({ authController }) {
    const router = Router();

    // Route để đăng ký tài khoản mới, có middleware để validate dữ liệu
    router.post('/register', validationMiddleware(registerSchema), authController.register);

    // Route để xử lý khi người dùng nhấp vào link xác thực email
    router.get('/verify-email/:token', authController.verifyEmail);

    return router;
}
