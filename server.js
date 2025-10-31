<<<<<<< HEAD
// server.js
import express from 'express';
=======
// Core Node.js modules
>>>>>>> b24341c38846291003122b7f11e63f98f12e1015
import { dirname, join } from 'path';
import { fileURLToPath } from 'url';

// Third-party libraries
import express from 'express';
import hbs from 'hbs';
import session from 'express-session';
import MySQLStoreFactory from 'express-mysql-session';
<<<<<<< HEAD
import dotenv from 'dotenv';
import bcrypt from 'bcrypt';
import authRoutes from './src/routes/auth.js';
import pool from './src/config/db.js';

// 🔹 Load file .env (rất quan trọng)
dotenv.config();
=======
import { scopePerRequest } from 'awilix-express';
import dotenv from 'dotenv';

// Application-specific modules
import authRoutes from './src/routes/auth.routes.js';
import sequelize from './src/config/database.config.js';
import container from './src/container.js';
import { syncDB } from './src/models/index.js';
>>>>>>> b24341c38846291003122b7f11e63f98f12e1015

// --- CONFIGURATION ---
dotenv.config(); // Load environment variables from .env file

<<<<<<< HEAD
// Lấy đường dẫn thực tế
const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

// ✅ Middleware
app.use(express.static(join(__dirname, 'public')));
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// ✅ Cấu hình view engine (Handlebars)
=======
// ES Module equivalent of __dirname
const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

// --- INITIALIZE EXPRESS APP ---
const app = express();
const PORT = process.env.PORT || 3000;

// --- VIEW ENGINE SETUP ---
>>>>>>> b24341c38846291003122b7f11e63f98f12e1015
app.set('view engine', 'hbs');
app.set('views', join(__dirname, 'Views')); // Fix case-sensitive
app.set('view options', { layout: 'layouts/main' }); // Set default layout
hbs.registerPartials(join(__dirname, 'Views', 'layouts')); // Register all layouts as partials

<<<<<<< HEAD
// ✅ Session config (sử dụng MySQL store)
const MySQLStore = MySQLStoreFactory(session);
const sessionStore = new MySQLStore({}, pool); // pool đã là promise-based

app.use(
  session({
    key: 'connect.sid',
    secret: process.env.SESSION_SECRET || 'fallback-secret-key',
    store: sessionStore,
    resave: false,
    saveUninitialized: false,
    cookie: {
      maxAge: 1000 * 60 * 60 * 24, // 1 ngày
      httpOnly: true,
      sameSite: 'lax',
    },
  })
);

// ✅ Đăng ký routes
app.use(authRoutes);

// Route trang chủ
app.get('/', (req, res) => {
  res.render('home/index', {
    pageTitle: 'Trang Chủ - Du Lịch Quê Hương',
    user: req.session.user
  });
});

// ✅ Form login (từ modal giao diện HTML)
app.post('/login', async (req, res) => {
  const { username, password } = req.body;
  const referer = req.get('Referer') || '/';

  if (!username || !password) {
    return res.redirect(`${referer}?login_error=missing`);
  }

  try {
    const [rows] = await pool.query('SELECT * FROM Account WHERE userName = ? LIMIT 1', [username]);
    const account = rows[0];

    if (!account) {
      return res.redirect(`${referer}?login_error=invalid`);
    }

    const match = await bcrypt.compare(password, account.passwordHash);
    if (!match) {
      return res.redirect(`${referer}?login_error=invalid`);
    }

    req.session.user = {
      accountID: account.accountID,
      userName: account.userName,
    };

    return res.redirect(`${referer}?login_success=1`);
  } catch (err) {
    console.error('❌ Form login error:', err);
    return res.status(500).send('Lỗi server');
  }
});

// ✅ Đăng xuất
app.post('/logout', (req, res) => {
  req.session.destroy(() => {
    res.redirect('/');
  });
});

// ✅ Khởi động server
app.listen(port, () => {
  console.log(`🚀 Server is running at http://localhost:${port}`);
});
=======
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
>>>>>>> b24341c38846291003122b7f11e63f98f12e1015
