<?php
$pageTitle = 'Chính sách bảo mật';
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
            background: linear-gradient(to right, #f1f5f9, #e2e8f0);
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #005fa3;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.5rem;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }

        h2 {
            margin-top: 30px;
            color: #007acc;
        }

        p {
            margin-bottom: 20px;
            text-align: justify;
        }

        ul {
            margin-left: 20px;
            margin-bottom: 20px;
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
    <p>Chúng tôi cam kết bảo vệ quyền riêng tư và thông tin cá nhân của bạn. Trang Chính sách Bảo mật này mô tả cách chúng tôi thu thập, sử dụng và bảo vệ dữ liệu người dùng khi bạn truy cập vào website của chúng tôi.</p>

    <h2>1. Thu thập thông tin</h2>
    <p>Chúng tôi có thể thu thập các thông tin sau từ người dùng:</p>
    <ul>
        <li>Họ tên, địa chỉ email, số điện thoại</li>
        <li>Thông tin trình duyệt và địa chỉ IP</li>
        <li>Các phản hồi gửi qua biểu mẫu liên hệ</li>
    </ul>

    <h2>2. Mục đích sử dụng</h2>
    <p>Thông tin thu thập được sẽ được sử dụng để:</p>
    <ul>
        <li>Phản hồi các yêu cầu của bạn</li>
        <li>Cải thiện chất lượng nội dung website</li>
        <li>Liên hệ khi cần thiết về vấn đề kỹ thuật hoặc bảo mật</li>
    </ul>

    <h2>3. Bảo mật dữ liệu</h2>
    <p>Chúng tôi sử dụng các biện pháp kỹ thuật và tổ chức để bảo vệ dữ liệu người dùng khỏi truy cập trái phép, thay đổi hoặc xóa bỏ ngoài ý muốn.</p>

    <h2>4. Chia sẻ thông tin</h2>
    <p>Chúng tôi không chia sẻ thông tin cá nhân của bạn với bên thứ ba, trừ khi có sự đồng ý của bạn hoặc theo yêu cầu của pháp luật.</p>

    <h2>5. Quyền của người dùng</h2>
    <p>Bạn có quyền yêu cầu truy cập, chỉnh sửa hoặc xóa dữ liệu cá nhân của mình bằng cách liên hệ với chúng tôi qua trang <a href="contact.php">Liên hệ</a>.</p>

    <h2>6. Thay đổi chính sách</h2>
    <p>Chính sách bảo mật có thể được cập nhật theo thời gian. Mọi thay đổi sẽ được công bố tại trang này.</p>
</div>

<div class="footer">
    &copy; <?php echo date('Y'); ?> Nhóm Trương Linh & Trương Vĩnh. Chính sách bảo mật được cập nhật lần cuối vào Tháng 6, 2025.
</div>

</body>
</html>
