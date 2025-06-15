<?php
$pageTitle = 'Liên hệ với chúng tôi';


$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Đây là nơi bạn xử lý gửi email hoặc lưu vào database
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $success = true; // giả lập là gửi thành công
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
            background: linear-gradient(to right, #d9e4f5, #f9fafe);
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #004aad;
            color: #fff;
            padding: 5px 0;
            text-align: center;
            box-shadow: 0 3px 8px rgba(0,0,0,0.2);
        }

        header h1 {
            font-size: 2.5rem;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea {
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
            border: none;
            padding: 12px;
            font-size: 16px;
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
            Cảm ơn bạn <strong><?php echo $name; ?></strong> đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <label for="name">Họ và tên</label>
        <input type="text" id="name" name="name" placeholder="Nhập họ tên của bạn" required>

        <label for="email">Địa chỉ Email</label>
        <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>

        <label for="message">Nội dung liên hệ</label>
        <textarea id="message" name="message" placeholder="Bạn muốn nhắn gì?" required></textarea>

        <button type="submit">Gửi liên hệ</button>
    </form>
</div>

<div class="footer">
    &copy; <?php echo date('Y'); ?> Nhóm Trần Tuấn Anh & Trương Vĩnh Trường Linh. Liên hệ bất cứ lúc nào!
</div>

</body>
</html>
