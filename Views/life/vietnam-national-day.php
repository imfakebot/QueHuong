<?php
$eventTitle = "Vietnam National Day 2025 (Quốc Khánh 2/9)";
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
      background: #fff3e0;
      color: #3e2723;
    }

    .hero-national {
      background-image: url('https://nn.ntt.edu.vn/wp-content/uploads/2023/08/vietnam-national-day-a-poster-to-celebrate-and-welcome-vietnam-independence-with-big-vietnamese-figures-vector.jpeg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-national::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-national .content {
      position: relative;
      z-index: 1;
    }

    .hero-national h1 {
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
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
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
<header class="hero-national">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Ngày hội lớn của dân tộc – Mừng Tổ quốc độc lập, tự do!</p>
  
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Ý Nghĩa Lịch Sử</h2>
  <p>
    Ngày 2/9/1945, Chủ tịch Hồ Chí Minh đọc bản Tuyên ngôn Độc lập tại Quảng trường Ba Đình, chính thức khai sinh nước Việt Nam Dân chủ Cộng hòa – nay là nước Cộng hòa Xã hội Chủ nghĩa Việt Nam. Ngày này trở thành ngày Quốc khánh – lễ trọng đại nhất trong năm đối với mỗi người Việt Nam.
  </p>

  <div class="highlight-box">
    “Tất cả mọi người sinh ra đều có quyền bình đẳng. Tạo hóa cho họ những quyền không ai có thể xâm phạm được...” – Trích bản Tuyên ngôn Độc lập năm 1945.
  </div>

  <img src="https://media.vov.vn/sites/default/files/styles/large_watermark/public/2024-09/thuong_co_quoc_khanh_2-9_13.jpg" alt="Lễ Quốc khánh tại Quảng trường Ba Đình">

  <h2>Hoạt Động Truyền Thống</h2>
  <ul>
    <li>🇻🇳 Lễ thượng cờ tại Quảng trường Ba Đình – Hà Nội</li>
    <li>🎆 Trình diễn pháo hoa tại TP.HCM, Đà Nẵng, Cần Thơ</li>
    <li>🎉 Diễu hành, chương trình nghệ thuật, chiếu phim cách mạng</li>
    <li>🌇 Các khu phố, nhà dân treo cờ đỏ sao vàng rực rỡ</li>
    <li>🛫 Người dân đi du lịch hoặc về quê trong dịp nghỉ lễ dài</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>🗓️ Thời gian: Thứ Ba, ngày 2 tháng 9 năm 2025</p>
  <p>📍 Địa điểm: Trên toàn quốc, đặc biệt là Hà Nội, TP.HCM, Huế, Đà Nẵng, và các địa danh lịch sử</p>
</main>

<!-- CTA -->
<div class="cta">
  
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
