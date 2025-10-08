<?php
$eventTitle = "Double Seventh Festival 2025 (Lễ Thất Tịch)";
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
      background: #fce4ec;
      color: #4a148c;
    }

    .hero-double7 {
      background-image: url('https://www.chinatrainbooking.com/pic/festival/qixi/meet.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-double7::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-double7 .content {
      position: relative;
      z-index: 1;
    }

    .hero-double7 h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      color: #ff80ab;
    }

    .section {
      padding: 50px 20px;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #ad1457;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
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
<header class="hero-double7">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Chuyện tình Ngưu Lang – Chức Nữ & ngày hội của các cặp đôi</p>
   
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Truyền Thuyết & Ý Nghĩa</h2>
  <p>
    Double Seventh Festival (Lễ Thất Tịch) diễn ra vào <strong>ngày 7 tháng 7 âm lịch</strong>. Tương truyền là ngày duy nhất trong năm mà Ngưu Lang và Chức Nữ – hai ngôi sao bị chia cắt – được gặp nhau trên cầu Ô Thước do chim trời kết thành. 
  </p>

  <div class="highlight-box">
    Tại Việt Nam, Thất Tịch được xem là “Valentine châu Á”. Người độc thân cầu duyên, các cặp đôi thể hiện tình cảm bằng cách cùng ăn chè đậu đỏ để mong yêu nhau bền lâu 💑
  </div>

  <img src="https://cdn.tgdd.vn/Files/2022/07/05/1445042/nguon-goc-y-nghia-su-tich-nguu-lang-chuc-nu-mung-7-7-202207060655587875.jpg" alt="Cầu Ô Thước - Truyền thuyết Ngưu Lang Chức Nữ">

  <h2>Hoạt Động Phổ Biến</h2>
  <ul>
    <li>💖 Ăn chè đậu đỏ – món ăn may mắn cầu duyên</li>
    <li>🌌 Cắm hoa, trang trí bàn thờ tổ tiên, bày lễ ngũ quả</li>
    <li>📿 Cầu nguyện tình duyên – hôn nhân – hòa hợp</li>
    <li>🎨 Vẽ tranh, thi thơ tình yêu, làm quà thủ công tặng người thương</li>
    <li>🎬 Xem phim lãng mạn, cùng nhau dạo phố và ngắm sao đêm</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>Thời gian: Thứ Ba, ngày 5 tháng 8 năm 2025 (7/7 âm lịch)</p>
  <p>Địa điểm: Trên cả nước, đặc biệt rộn ràng tại các đền chùa, khu du lịch, quán cafe, và phố đi bộ</p>
</main>

<!-- CTA -->
<div class="cta">

  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
