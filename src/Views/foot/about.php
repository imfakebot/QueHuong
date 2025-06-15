<?php
$pageTitle = 'Giới thiệu về nhóm chúng tôi';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset & base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #0066cc;
            color: #fff;
            padding: 5px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        header h1 {
            font-size: 2.8rem;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .intro {
            text-align: center;
            margin-bottom: 30px;
        }

        .members {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 30px;
        }

        .member {
            flex: 1 1 250px;
            background: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .member:hover {
            transform: translateY(-5px);
            background: #e8f4ff;
        }

        .member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 4px solid #007acc;
        }

        .member h3 {
            margin-bottom: 5px;
            color: #007acc;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #555;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 2rem;
            }
        }
    </style>
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
