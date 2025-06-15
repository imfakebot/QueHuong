<?php
$pageTitle = 'Điều khoản sử dụng';
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
            background: linear-gradient(to right, #f0f4f8, #e6ecf3);
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #004a99;
            color: #fff;
            padding: 5px 0;
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
            color: #0066cc;
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
    <p>Khi truy cập và sử dụng website của chúng tôi, bạn đồng ý tuân thủ các điều khoản sử dụng được quy định dưới đây. Vui lòng đọc kỹ trước khi tiếp tục sử dụng.</p>

    <h2>1. Quyền và trách nhiệm của người dùng</h2>
    <ul>
        <li>Không sử dụng website vào mục đích phi pháp hoặc vi phạm thuần phong mỹ tục.</li>
        <li>Không can thiệp, phá hoại hệ thống hoặc gây ảnh hưởng đến trải nghiệm người dùng khác.</li>
        <li>Chịu trách nhiệm với nội dung bạn gửi thông qua các biểu mẫu liên hệ hoặc phản hồi.</li>
    </ul>

    <h2>2. Nội dung và quyền sở hữu</h2>
    <p>Tất cả nội dung, hình ảnh, và thông tin trên website thuộc quyền sở hữu của nhóm phát triển. Việc sao chép, trích dẫn cần có sự đồng ý bằng văn bản.</p>

    <h2>3. Bảo mật thông tin</h2>
    <p>Chúng tôi cam kết bảo mật thông tin cá nhân của bạn theo <a href="privacy.php">Chính sách bảo mật</a>. Việc truy cập website không đồng nghĩa bạn bị thu thập thông tin trái phép.</p>

    <h2>4. Sửa đổi điều khoản</h2>
    <p>Chúng tôi có quyền thay đổi các điều khoản bất cứ lúc nào. Những thay đổi sẽ được cập nhật tại trang này, và bạn nên kiểm tra thường xuyên.</p>

    <h2>5. Liên hệ</h2>
    <p>Nếu bạn có bất kỳ câu hỏi hoặc khiếu nại nào liên quan đến điều khoản sử dụng, vui lòng <a href="contact.php">liên hệ với chúng tôi</a>.</p>
</div>

<div class="footer">
    &copy; <?php echo date('Y'); ?> Nhóm Trương Linh & Trương Vĩnh. Điều khoản sử dụng được cập nhật lần cuối vào Tháng 6, 2025.
</div>

</body>
</html>
