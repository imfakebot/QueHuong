import express from 'express';
import { dirname, join } from 'path';
import { fileURLToPath } from 'url';
import hbs from 'hbs';
import session from 'express-session';
import MySQLStoreFactory from 'express-mysql-session';
import authRoutes from './src/routes/auth.js';
import pool from './src/config/db.js';
require('reflect-data')


const app = express();
const port = process.env.PORT || 3000;

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

app.use(express.static(join(__dirname, 'public')));
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.set('view engine', 'hbs');
app.set('views', join(__dirname, 'views'));
hbs.registerPartials(join(__dirname, 'views', 'partials'));

const MySQLStore = MySQLStoreFactory(session);
const sessionStore = new MySQLStore({}, pool.promise ? pool.promise() : pool);

app.use(
    session({
        key: 'connect.sid',
        secret: process.env.SESSION_SECRET,
        store: sessionStore,
        resave: false,
        saveUninitialized: false,
        cookie: {
            maxAge: 1000 * 60 * 60 * 24,
            httpOnly: true,
            sameSite: 'lax',
        },
    })
);


 app.use(authRoutes);

app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});