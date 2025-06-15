<?php
$eventTitle = "Vietnamese Women’s Day 2025 (Ngày Phụ Nữ Việt Nam)";
$pageStyles = ['/css/festivals.css'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <title><?php echo $eventTitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php foreach ($pageStyles as $style): ?>
    <link rel="stylesheet" href="<?php echo $style; ?>">
  <?php endforeach; ?>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: #fff0f5;
      color: #4e342e;
    }

    .hero-women {
      background-image: url('https://vnvis.com/wp-content/uploads/2021/10/HW2019-1-1-800x365.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-women::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.4);
    }

    .hero-women .content {
      position: relative;
      z-index: 1;
    }

    .hero-women h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      color: #ffb6c1;
    }

    .section {
      padding: 50px 20px;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #c2185b;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .highlight-box {
      background: #f8bbd0;
      border-left: 6px solid #ec407a;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #ec407a;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #c2185b;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-women">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Lan tỏa yêu thương – Tôn vinh vẻ đẹp, trí tuệ và bản lĩnh phụ nữ Việt</p>
   
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Vì Sao Có Ngày 20/10?</h2>
  <p>
    Ngày Phụ nữ Việt Nam (20/10) được tổ chức lần đầu năm 1930, đánh dấu sự kiện thành lập Hội Phụ nữ phản đế Việt Nam. Từ đó đến nay, ngày 20/10 trở thành dịp đặc biệt để xã hội bày tỏ sự kính trọng và tri ân tới mẹ, vợ, chị, em gái – những người phụ nữ tuyệt vời trong mỗi gia đình và cộng đồng.
  </p>

  <div class="highlight-box">
    “Không có người phụ nữ xấu – chỉ có người phụ nữ chưa được yêu thương đúng cách.” 💐  
    20/10 – dịp để yêu thương lên tiếng!
  </div>

  <img src="https://thiepmung.com/uploads/worigin/2021/09/21/mien-phi-thiep-hoa-dong-tien-chuc-mung-ngay-phu-nu-viet-nam_4bc5c.jpg" alt="Thiệp chúc mừng ngày 20/10">

  <h2>Những Hoạt Động Ý Nghĩa</h2>
  <ul>
    <li>💐 Tặng hoa, quà, thiệp cảm ơn đến phụ nữ trong gia đình và công ty</li>
    <li>🎤 Tổ chức cuộc thi nấu ăn, thi tài năng nữ, văn nghệ chào mừng</li>
    <li>✍️ Viết thư tay, đăng bài cảm ơn phụ nữ trên mạng xã hội</li>
    <li>☕ Mời mẹ, vợ, người yêu đi cafe, ăn tối, mua sắm cùng nhau</li>
    <li>🎁 Tặng voucher làm đẹp, spa, quần áo, đồ handmade xinh xắn</li>
  </ul>

  <h2>Thời Gian & Không Gian</h2>
  <p>🗓️ Ngày: Thứ Hai, 20 tháng 10 năm 2025</p>
  <p>📍 Tổ chức tại nhà, công ty, trường học, hội phụ nữ, trung tâm thương mại...</p>
</main>

<!-- CTA -->
<div class="cta">
  
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
