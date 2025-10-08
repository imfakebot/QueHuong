<?php
$eventTitle = "Lim Festival 2025";
$pageStyles = ['/css/lim-festival.css'];
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
      background: #fefefe;
      color: #333;
    }

    .hero-lim {
      background-image: url('https://www.vivutravel.com/images/blog17/lim-festival-in-bac-ninh.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      color: white;
      text-align: center;
    }

    .hero-lim::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.45);
    }

    .hero-lim .content {
      position: relative;
      z-index: 1;
    }

    .hero-lim h1 {
      font-size: 3rem;
      font-family: 'Playfair Display', serif;
      color: #ffeb3b;
    }

    .section {
      padding: 50px 20px;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #e91e63;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }

    .highlight-box {
      background: #fff0f5;
      border-left: 6px solid #e91e63;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #e91e63;
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
<header class="hero-lim">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Lễ hội vùng Kinh Bắc tôn vinh dân ca Quan họ – Di sản văn hóa phi vật thể của nhân loại</p>
  
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu Lễ Hội</h2>
  <p>
    Lễ hội Lim được tổ chức vào ngày 13 tháng Giêng âm lịch tại huyện Tiên Du, tỉnh Bắc Ninh – quê hương của làn điệu Quan họ mượt mà. Đây là dịp người dân Kinh Bắc và du khách thập phương hòa mình vào không gian văn hóa truyền thống đặc sắc.
  </p>

  <div class="highlight-box">
    Quan họ không chỉ là âm nhạc, mà còn là lối sống, là phong cách giao lưu văn hóa mang đậm bản sắc vùng đồng bằng sông Hồng.
  </div>

  <img src="https://mediabbn.mediatech.vn/upload/image/202209/medium/67131_e323b91c388736ee58861c553be0617a.jpg" alt="Hát Quan họ trên thuyền">

  <h2>Hoạt Động Nổi Bật</h2>
  <ul>
    <li>🎶 Hát Quan họ đối đáp giữa các liền anh – liền chị</li>
    <li>🛶 Biểu diễn Quan họ trên thuyền rồng dọc sông Cầu</li>
    <li>👘 Trình diễn áo tứ thân – khăn mỏ quạ truyền thống</li>
    <li>🪁 Trò chơi dân gian: bịt mắt bắt dê, đấu vật, chọi gà</li>
    <li>🌾 Dâng hương tại đền thờ Đức vua Bà – người khai sinh Quan họ</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>Thời gian: Ngày 13 tháng Giêng âm lịch (ngày 12 - 13/2/2025)</p>
  <p>Địa điểm: Làng Lim, huyện Tiên Du, tỉnh Bắc Ninh</p>
</main>

<!-- CTA -->
<div class="cta">
 
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
