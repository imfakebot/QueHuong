<?php
$eventTitle = "Sea Tourism and Culture Festival 2025";
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
      background: #e0f7fa;
      color: #004d40;
    }

    .hero-seafest {
      background-image: url('https://image.vietnamnews.vn/uploadvnnews/Article/2024/11/14/387445_5008084991858881_image.png');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-seafest::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 60, 60, 0.5);
    }

    .hero-seafest .content {
      position: relative;
      z-index: 1;
    }

    .hero-seafest h1 {
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
      color: #00796b;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .highlight-box {
      background: #b2ebf2;
      border-left: 6px solid #0097a7;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #009688;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #00695c;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-seafest">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Lễ hội biển 2025 – Rực rỡ sắc màu văn hóa và du lịch ven biển Việt Nam</p>
  
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    Lễ hội Du lịch và Văn hóa Biển 2025 là sự kiện đặc biệt được tổ chức tại các thành phố biển lớn như Đà Nẵng, Nha Trang, Phan Thiết… diễn ra xuyên suốt từ <strong>ngày 1 đến 30 tháng 6 năm 2025</strong>. Đây là dịp để tôn vinh vẻ đẹp biển đảo Việt Nam, quảng bá du lịch và giao lưu văn hóa biển.
  </p>

  <div class="highlight-box">
    Với các hoạt động trình diễn sôi động, thể thao biển, ẩm thực đặc sản ven biển và các tour trải nghiệm, lễ hội mang lại một mùa hè đầy màu sắc và cảm xúc.
  </div>

  <img src="https://baokhanhhoa.vn/file/e7837c02857c8ca30185a8c39b582c03/032025/img_4870_a_20250314090107.jpg" alt="Sự kiện Lễ hội biển tại Nha Trang">

  <h2>Hoạt Động Nổi Bật</h2>
  <ul>
    <li>🏄 Trình diễn thể thao biển: lướt ván, đua thuyền kayak, bóng chuyền bãi biển</li>
    <li>🎶 Đêm hội âm nhạc EDM ven biển với DJ quốc tế</li>
    <li>🎨 Triển lãm tranh, ảnh chủ đề biển – hải đảo quê hương</li>
    <li>🍤 Không gian ẩm thực vùng duyên hải: hải sản tươi, món ăn địa phương</li>
    <li>🚤 Các tour du thuyền, tour câu cá, lặn ngắm san hô trong ngày</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>Thời gian: Từ 01/06 đến 30/06/2025</p>
  <p>Địa điểm chính: TP. Nha Trang, Đà Nẵng, Quy Nhơn, Phan Thiết và các vùng biển lân cận</p>
</main>

<!-- CTA -->
<div class="cta">

  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
