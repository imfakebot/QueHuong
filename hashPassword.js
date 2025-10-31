import bcrypt from 'bcrypt';

const plainPassword = '123'; // ← mật khẩu thật bạn đang dùng
const hashed = await bcrypt.hash(plainPassword, 10);
console.log('Bcrypt hash:', hashed);
