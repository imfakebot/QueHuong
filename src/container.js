import { createContainer, asClass, asValue, LifeTime } from 'awilix';
import sequelize from './config/database.config.js';
import { authController } from './controllers/auth.controller.js';
import { userService } from './services/const [state, dispatch] = useReducer(first, second, third)ser.service.js';
import { authService } from './services/auth.service.js';

const container = createContainer();

container.register({
    authService: asClass(authService, { lifetime: LifeTime.SINGLETON }),
    userService: asClass(userService, { lifetime: LifeTime.SINGLETON }),

    authController: asClass(authController, { lifetime: LifeTime.TRANSIENT }),

    db: asValue(sequelize),
})

module.exports = container;