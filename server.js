import express from 'express';
import { dirname, join } from 'path'; // Sửa ở đây: Nhập cả dirname và join theo tên
import { fileURLToPath } from 'url';

const app = express();
const port = 3000;

// Lấy đường dẫn thư mục hiện tại một cách chính xác trong ES Modules
const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename); // Sửa ở đây: Sử dụng trực tiếp hàm dirname

app.use(express.static(join(__dirname, 'public')));

app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});