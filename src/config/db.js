import mysql from 'mysql2/promise';

const DB_HOST = process.env.DB_HOST;
console.log('Database Host:', DB_HOST);
const DB_PORT = process.env.DB_PORT;
console.log('Database Port:', DB_PORT);
const DB_USER = process.env.DB_USER;
console.log('Database User:', DB_USER);
const DB_PASSWORD = process.env.DB_PASSWORD;
console.log('Database Password:', DB_PASSWORD ? '******' : 'Not Set');
const DB_NAME = process.env.DB_NAME;
console.log('Database Name:', DB_NAME);

const pool = mysql.createPool({
  host: DB_HOST,
  port: DB_PORT,
  user: DB_USER,
  password: DB_PASSWORD,
  database: DB_NAME,
  waitForConnections: true,
  connectionLimit: 30,
  queueLimit: 0,
  charset: 'utf8mb4',
});

// Hàm kiểm tra kết nối CSDL
async function testDbConnection() {
  let connection;
  try {
    connection = await pool.getConnection();
    console.log('✅ Database connection successful!');
  } catch (error) {
    console.error('❌ Could not connect to the database:', error.message);
    process.exit(1);
  } finally {
    if (connection) connection.release();
  }
}

testDbConnection();
export default pool;
