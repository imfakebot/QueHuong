// Core Node.js modules
import { dirname, join } from 'path';
import { fileURLToPath } from 'url';

// Third-party libraries
import express from 'express';
import hbs from 'hbs';
import session from 'express-session';
import MySQLStoreFactory from 'express-mysql-session';
import { scopePerRequest } from 'awilix-express';
import dotenv from 'dotenv';

// Application-specific modules
import authRoutes from './src/routes/auth.routes.js';
import sequelize from './src/config/database.config.js';
import container from './src/container.js';
import { syncDB } from './src/models/index.js';

// --- CONFIGURATION ---
dotenv.config(); // Load environment variables from .env file

// ES Module equivalent of __dirname
const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

// --- INITIALIZE EXPRESS APP ---
const app = express();
const PORT = process.env.PORT || 3000;

// --- VIEW ENGINE SETUP ---
app.set('view engine', 'hbs');
app.set('views', join(__dirname, 'views'));
hbs.registerPartials(join(__dirname, 'views', 'partials'));

// --- MIDDLEWARE SETUP ---
// Serve static files (CSS, JS, images)
app.use(express.static(join(__dirname, 'public')));

// Parse JSON and URL-encoded request bodies
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Session middleware setup
const MySQLStore = MySQLStoreFactory(session);
const sessionStore = new MySQLStore({}, sequelize); // Sử dụng sequelize instance

app.use(
    session({
        key: process.env.SESSION_NAME || 'connect.sid',
        secret: process.env.SESSION_SECRET,
        store: sessionStore,
        resave: false,
        saveUninitialized: false,
        cookie: {
            maxAge: 1000 * 60 * 60 * 24, // 1 day
            httpOnly: true,
            secure: process.env.NODE_ENV === 'production', // Use secure cookies in production
            sameSite: 'lax',
        },
    })
);

// Awilix middleware: Tạo một scope container cho mỗi request
app.use(scopePerRequest(container));

// --- ROUTES ---
app.use('/auth', authRoutes);

//==DATABASE SETUP==
sequelize.authenticate()
    .then(() => {
        console.log('Database connection has been established successfully.');
        syncDB();
        // --- START SERVER ---
        app.listen(PORT, () => {
            console.log(`Server is running at http://localhost:${PORT}`);
        });
    })
    .catch((error) => {
        console.error('Unable to connect to the database:', error);
    });
