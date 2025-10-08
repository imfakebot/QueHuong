<?php
$pageTitle = 'Gửi Yêu Cầu Hỗ Trợ';

// Xử lý gửi form (giả lập)
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $success = true; // Giả lập gửi thành công
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e2e8f0, #f8fafc);
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #0066cc;
            color: white;
            text-align: center;
            padding: 5px 0;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 6px;
            font-weight: bold;
        }

        input, textarea, select {
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 120px;
        }

        button {
            background-color: #007acc;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #005f99;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $pageTitle; ?></h1>
</header>

<div class="container">
    <?php if ($success): ?>
        <div class="success-message">
            Cảm ơn bạn <strong><?php echo $name; ?></strong> đã gửi yêu cầu hỗ trợ. Chúng tôi sẽ phản hồi qua email: <strong><?php echo $email; ?></strong> sớm nhất có thể.
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <label for="name">Họ và tên</label>
        <input type="text" id="name" name="name" placeholder="Tên đầy đủ của bạn" required>

        <label for="email">Địa chỉ Email</label>
        <input type="email" id="email" name="email" placeholder="Email liên hệ" required>

        <label for="subject">Chủ đề</label>
        <select id="subject" name="subject" required>
            <option value="">-- Chọn một chủ đề --</option>
            <option value="Lỗi kỹ thuật">Lỗi kỹ thuật</option>
            <option value="Không đăng nhập được">Không đăng nhập được</option>
            <option value="Câu hỏi chung">Câu hỏi chung</option>
            <option value="Góp ý cải tiến">Góp ý cải tiến</option>
            <option value="Khác">Khác</option>
        </select>

        <label for="message">Nội dung chi tiết</label>
        <textarea id="message" name="message" placeholder="Mô tả chi tiết vấn đề hoặc yêu cầu hỗ trợ" required></textarea>

        <button type="submit">Gửi yêu cầu</button>
    </form>
</div>

<div class="footer">
    &copy; <?php echo date('Y'); ?> Nhóm Trần Tuấn Anh & Trương Vĩnh Trường Linh. Hỗ trợ khách hàng 24/7.
</div>

</body>
</html>
