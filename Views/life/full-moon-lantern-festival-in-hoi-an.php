<?php
$eventTitle = "Full Moon Lantern Festival in Hoi An 2025";
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
      background: #ede7f6;
      color: #311b92;
    }

    .hero-hoian-lantern {
      background-image: url('https://jackytravel.com/wp-content/uploads/2023/12/Hoi-An-Lantern-Festival.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-hoian-lantern::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-hoian-lantern .content {
      position: relative;
      z-index: 1;
    }

    .hero-hoian-lantern h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      color: #ffca28;
    }

    .section {
      padding: 50px 20px;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #5e35b1;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .highlight-box {
      background: #d1c4e9;
      border-left: 6px solid #7e57c2;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #7e57c2;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #5e35b1;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-hoian-lantern">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Đêm trăng phố Hội – Lung linh hàng ngàn chiếc đèn hoa đăng trên sông Hoài</p>
   
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    Lễ hội hoa đăng Hội An là sự kiện diễn ra vào mỗi **đêm rằm hàng tháng** (ngày 14 âm lịch) tại khu phố cổ. Đặc biệt, lễ hội vào **rằm Trung Thu (15/8 âm lịch)** và **Tết Nguyên Tiêu (15/1 âm lịch)** thu hút hàng ngàn du khách tham dự, tạo nên không gian huyền ảo, cổ kính và thơ mộng bên bờ sông Hoài.
  </p>

  <div class="highlight-box">
    Khi ánh đèn lồng hòa cùng ánh trăng rằm, Hội An không còn là phố – mà trở thành một bài thơ sống động giữa lòng thời gian ✨🏮
  </div>

  <img src="https://hoiancreativecity.com/uploads/images/c25749712d67e439bd7616(2).jpg" alt="Đêm lễ hội đèn lồng ở Hội An">

  <h2>Hoạt Động Nổi Bật</h2>
  <ul>
    <li>🏮 Thả hoa đăng cầu may trên sông Hoài</li>
    <li>🎭 Biểu diễn nhạc cụ dân tộc, bài chòi, hát tuồng</li>
    <li>🎨 Trải nghiệm làm đèn lồng thủ công tại làng nghề cổ</li>
    <li>🥮 Chợ đêm, ẩm thực đường phố đặc trưng Hội An</li>
    <li>📸 Check-in ngõ phố cổ dưới trăng, giữa hàng trăm đèn lồng lung linh</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>🗓️ Diễn ra vào các đêm 14 âm lịch hằng tháng (lúc trăng tròn)</p>
  <p>📍 Khu phố cổ Hội An – ven sông Hoài, chợ đêm Nguyễn Hoàng, Chùa Cầu, đường Bạch Đằng</p>
</main>

<!-- CTA -->
<div class="cta">
 
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
