<?php
$eventTitle = "Vietnam National Day Parade 2025 (Diễu hành Quốc khánh)";
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
      background: #fff8e1;
      color: #3e2723;
    }

    .hero-parade {
      background-image: url('https://localvietnam.com/wp-content/uploads/2023/05/national-day-ba-dinh-square-flag-ceremony-1.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-parade::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-parade .content {
      position: relative;
      z-index: 1;
    }

    .hero-parade h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
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
      color: #d32f2f;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .highlight-box {
      background: #ffe082;
      border-left: 6px solid #f57f17;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #d32f2f;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #b71c1c;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-parade">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Trang nghiêm – Hào hùng – Vang vọng khúc khải hoàn dân tộc</p>
    
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    Lễ diễu hành Quốc khánh 2/9 là một trong những sự kiện lớn nhất cả nước. Diễn ra tại <strong>Quảng trường Ba Đình (Hà Nội)</strong>, sự kiện này thể hiện sức mạnh đoàn kết, niềm tự hào dân tộc và sự tôn vinh các lực lượng vũ trang, nhân dân lao động.
  </p>

  <div class="highlight-box">
    Mỗi bước diễu hành là một nhịp đập lịch sử – nhắc nhớ về thời khắc khai sinh nước Việt Nam độc lập, tự do năm 1945.
  </div>

  <img src="https://media.vov.vn/sites/default/files/styles/large_watermark/public/2024-09/thuong_co_quoc_khanh_2-9_8.jpg" alt="Diễu hành ngày Quốc khánh 2/9 tại Ba Đình">

  <h2>Chương Trình Tiêu Biểu</h2>
  <ul>
    <li>🎖️ Lễ thượng cờ Tổ quốc tại Lăng Chủ tịch Hồ Chí Minh</li>
    <li>🚶‍♂️ Diễu hành của các khối quân đội, công an, dân quân, học sinh, phụ nữ, công nhân</li>
    <li>🎺 Biểu diễn nhạc quân hành và quốc thiều</li>
    <li>🎨 Trang phục truyền thống, khẩu hiệu cổ động yêu nước, hoa và cờ rợp trời</li>
    <li>📺 Truyền hình trực tiếp trên VTV1, VTV4, các nền tảng online</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>🗓️ Thời gian: Sáng thứ Ba, ngày 2/9/2025 – từ 7h00 đến 9h30</p>
  <p>📍 Địa điểm: Quảng trường Ba Đình, Hà Nội – và đồng thời tổ chức tại nhiều địa phương khác</p>
</main>

<!-- CTA -->
<div class="cta">
  
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
