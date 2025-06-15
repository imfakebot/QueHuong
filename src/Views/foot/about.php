<?php
$pageTitle = 'Giới thiệu về nhóm chúng tôi';
$pageStyles = ['/css/about.css'];
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
    <div class="intro">
        <p>Chúng tôi là một nhóm nhỏ gồm 2 thành viên, đam mê công nghệ, sáng tạo và luôn nỗ lực xây dựng những sản phẩm chất lượng.</p>
    </div>

    <div class="members">
        <div class="member">
            <img src="/images/avt/tlinh.jpg" alt="Thành viên 1">
            <h3>Trương Vĩnh Trường Linh</h3>
            <p>Lập trình viên PHP, thích tối ưu hiệu suất và xây dựng giao diện đẹp mắt.</p>
        </div>
        <div class="member">
            <img src="/images/avt/tanh.jpg" alt="Thành viên 2">
            <h3>Trần Tuấn Anh</h3>
            <p>Chuyên xử lý cơ sở dữ liệu, backend và triển khai hệ thống.</p>
        </div>
    </div>
</div>

<div class="footer">
    &copy; <?php echo date('Y'); ?> Nhóm Trần Tuấn Anh & Trương Vĩnh Trường Linh. Mọi quyền được bảo lưu.
</div>

</body>
</html>
