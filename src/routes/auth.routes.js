import { Router } from 'express';
import { validationMiddleware } from '../middleware/validation.middleware.js';
import { registerSchema } from '../schemas/register.schema.js';
import { makeInvoker } from 'awilix-express';

const router = Router();
const api = makeInvoker(awilixContainer => awilixContainer.resolve('authController'));

router.post('/register', validationMiddleware(registerSchema), api('register'));

export default router;
