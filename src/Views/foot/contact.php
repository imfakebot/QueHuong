<?php
$pageTitle = 'Liên hệ với chúng tôi';
$pageStyles = ['/css/contact.css'];

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
