import { createContainer, asClass, asValue, Lifetime } from 'awilix';
import sequelize from './config/database.config.js';
import { authController } from './controllers/auth.controller.js';
import { userService } from './services/user.service.js';
import { AuthService } from './services/auth.service.js';
import db from './models/index.js'; // Import từ file index của models

const container = createContainer();

container.register({
    authService: asClass(AuthService, { lifetime: Lifetime.SINGLETON }),
    userService: asClass(userService, { lifetime: Lifetime.SINGLETON }),
    userModel: asValue(db.User), // Đăng ký model User từ db object
    accountModel: asValue(db.Account), // Đăng ký thêm Account model nếu cần

    authController: asClass(authController, { lifetime: Lifetime.TRANSIENT }),

    db: asValue(sequelize),
})

export default container;