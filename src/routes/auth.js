import express from 'express';
import bcrypt from 'bcrypt';
import pool from '../config/db.js';

const router = express.Router();

// Helper to find account by username
async function findAccountByUsername(username) {
  const [rows] = await pool.query('SELECT * FROM Account WHERE userName = ? LIMIT 1', [username]);
  return rows[0];
}

// POST /api/login
router.post('/api/login', async (req, res) => {
  try {
    const { username, password } = req.body;
    if (!username || !password) return res.status(400).json({ ok: false, error: 'Thiếu username hoặc password' });

    const account = await findAccountByUsername(username);
    if (!account) return res.status(401).json({ ok: false, error: 'Tài khoản không tồn tại' });

    const match = await bcrypt.compare(password, account.passwordHash);
    if (!match) return res.status(401).json({ ok: false, error: 'Sai mật khẩu' });

    // Lưu session
    req.session.user = {
      accountID: account.accountID.toString('hex'),
      userName: account.userName,
    };

    return res.json({ ok: true, user: req.session.user });
  } catch (err) {
    console.error('Login error', err);
    return res.status(500).json({ ok: false, error: 'Lỗi server' });
  }
});

// POST /api/logout
router.post('/api/logout', (req, res) => {
  req.session.destroy((err) => {
    if (err) {
      console.error('Destroy session error', err);
      return res.status(500).json({ ok: false, error: 'Không thể logout' });
    }
    res.clearCookie('connect.sid');
    return res.json({ ok: true });
  });
});

// POST /api/register (basic)
router.post('/api/register', async (req, res) => {
  try {
    const { username, password, email, fullName } = req.body;
    if (!username || !password || !email) return res.status(400).json({ ok: false, error: 'Thiếu thông tin bắt buộc' });

    const existing = await findAccountByUsername(username);
    if (existing) return res.status(409).json({ ok: false, error: 'Username đã tồn tại' });

    const passwordHash = await bcrypt.hash(password, 10);

    // For simplicity use UUID_TO_BIN(UUID()) in SQL or generate binary here; we'll insert text username + hash
    const [result] = await pool.query('INSERT INTO Account (userName, passwordHash, createdAt) VALUES (?, ?, NOW())', [username, passwordHash]);

    return res.status(201).json({ ok: true, insertedId: result.insertId });
  } catch (err) {
    console.error('Register error', err);
    return res.status(500).json({ ok: false, error: 'Lỗi server' });
  }
});

// GET /api/me - return current logged-in user from session
router.get('/api/me', (req, res) => {
  if (req.session && req.session.user) {
    return res.json({ ok: true, user: req.session.user });
  }
  return res.status(200).json({ ok: false, user: null });
});

export default router;


