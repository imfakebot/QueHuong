// server.js
import express from 'express';
import { dirname, join } from 'path';
import { fileURLToPath } from 'url';
import hbs from 'hbs';
import session from 'express-session';
import MySQLStoreFactory from 'express-mysql-session';
import dotenv from 'dotenv';
import bcrypt from 'bcrypt';
import authRoutes from './src/routes/auth.js';
import pool from './src/config/db.js';

// 🔹 Load file .env (rất quan trọng)
dotenv.config();

const app = express();
const port = process.env.PORT || 3000;

// Lấy đường dẫn thực tế
const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

// ✅ Middleware
app.use(express.static(join(__dirname, 'public')));
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// ✅ Cấu hình view engine (Handlebars)
app.set('view engine', 'hbs');
app.set('views', join(__dirname, 'Views')); // Fix case-sensitive
app.set('view options', { layout: 'layouts/main' }); // Set default layout
hbs.registerPartials(join(__dirname, 'Views', 'layouts')); // Register all layouts as partials

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
