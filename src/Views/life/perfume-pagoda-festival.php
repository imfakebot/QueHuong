<?php
$eventTitle = "Perfume Pagoda Festival 2025";
$pageStyles = ['/css/pagoda.css'];
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
 
</head>
<body>

<!-- HERO -->
<header class="hero-pagoda">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Hành hương đầu xuân về miền Phật tích – nơi non nước Chùa Hương vang vọng tiếng chuông chùa.</p>
    
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu Lễ Hội</h2>
  <p>
    Lễ hội Chùa Hương là một trong những lễ hội Phật giáo lớn nhất Việt Nam, diễn ra tại xã Hương Sơn, huyện Mỹ Đức, Hà Nội. Năm 2025, lễ hội diễn ra từ mùng 6 tháng Giêng âm lịch, kéo dài đến tháng 3 âm lịch.
  </p>
  <div class="highlight-box">
    Đây là dịp hành hương đầu xuân, nơi hàng vạn Phật tử và du khách về dự lễ, chiêm bái động Hương Tích, cầu tài lộc – bình an – sức khỏe cho cả năm.
  </div>

  <img src="https://bhttourist.com/wp-content/uploads/2024/12/huongtich.jpg" alt="Động Hương Tích">

  <h2>Hoạt Động Nổi Bật</h2>
  <ul>
    <li>🛶 Đi thuyền trên suối Yến – cảnh sắc nên thơ đầu xuân</li>
    <li>🚶‍♀️ Leo núi viếng động Hương Tích – “Nam Thiên Đệ Nhất Động”</li>
    <li>🙏 Cầu bình an, phúc lộc đầu năm tại các đền chùa</li>
    <li>🍡 Thưởng thức đặc sản Chùa Hương: rau sắng, mơ rừng, bánh rán</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>Lễ khai hội: mùng 6 tháng Giêng âm lịch (14/02/2025)</p>
  <p>Địa điểm: Khu di tích Chùa Hương – Hương Sơn, Mỹ Đức, Hà Nội</p>
</main>

<!-- CTA -->
<div class="cta">
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
