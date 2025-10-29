import express from 'express';
import { dirname, join } from 'path';
import { fileURLToPath } from 'url';
import hbs from 'hbs';
import session from 'express-session';
import MySQLStoreFactory from 'express-mysql-session';
import authRoutes from './routes/auth.js';
import pool from './src/config/db.js';
import bcrypt from 'bcrypt';


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

// Handle form-based login coming from header.php modal (POST /login)
app.post('/login', async (req, res) => {
  const { username, password } = req.body;
  const referer = req.get('Referer') || '/';

  if (!username || !password) {
    return res.redirect(referer + (referer.includes('?') ? '&' : '?') + 'login_error=missing');
  }

  try {
    const [rows] = await pool.query('SELECT * FROM Account WHERE userName = ? LIMIT 1', [username]);
    const account = rows[0];
    if (!account) {
      return res.redirect(referer + (referer.includes('?') ? '&' : '?') + 'login_error=invalid');
    }

    const match = await bcrypt.compare(password, account.passwordHash);
    if (!match) {
      return res.redirect(referer + (referer.includes('?') ? '&' : '?') + 'login_error=invalid');
    }

    // Save session and redirect back
    req.session.user = {
      accountID: account.accountID ? account.accountID.toString('hex') : null,
      userName: account.userName,
    };

    return res.redirect(referer + (referer.includes('?') ? '&' : '?') + 'login_success=1');
  } catch (err) {
    console.error('Form login error', err);
    return res.status(500).send('Lỗi server');
  }
});

// API đăng xuất (kept in routes/auth.js as well, but keep a form-friendly logout here)
app.post('/logout', (req, res) => {
  req.session.destroy(() => {
    res.redirect('/');
  });
});

app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});