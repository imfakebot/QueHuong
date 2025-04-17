<?php

declare(strict_types=1); // Khai báo kiểu chặt chẽ (nên dùng)

// Tải file autoloader do Composer tạo ra
require_once __DIR__ . '/../vendor/autoload.php';

// --- Code còn lại của bạn bắt đầu từ đây ---

// Ví dụ: require file config (vẫn cần làm thủ công)
require_once __DIR__ . '/../src/Config/database.php';

echo "Composer Autoload is working!";

// Giờ đây, khi bạn tạo một lớp mới với namespace đúng, ví dụ:
// $db = new Anh14\QueHuong\Models\Database();
// PHP sẽ tự động tìm và nạp file src/Models/Database.php
