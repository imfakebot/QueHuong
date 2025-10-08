<?php
$eventTitle = "Central Highlands Gong Festival 2025 (Lễ hội Cồng Chiêng Tây Nguyên)";
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
      background: #f3f0e7;
      color: #3e2723;
    }

    .hero-gong {
      background-image: url('https://image.vovworld.vn/w500/Uploaded/vovworld/vjryqdxwp/2022_11_18/festiuva_PSHJ.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-gong::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-gong .content {
      position: relative;
      z-index: 1;
    }

    .hero-gong h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      color: #ffcc80;
    }

    .section {
      padding: 50px 20px;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #5d4037;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .highlight-box {
      background: #d7ccc8;
      border-left: 6px solid #a1887f;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #6d4c41;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #4e342e;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-gong">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Âm vang đại ngàn – Linh hồn của người Tây Nguyên</p>
  
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    Lễ hội Cồng Chiêng Tây Nguyên 2025 được tổ chức tại các tỉnh Gia Lai, Kon Tum, Đắk Lắk từ ngày <strong>12 đến 18 tháng 8 năm 2025</strong>. Đây là sự kiện tôn vinh không gian văn hóa cồng chiêng – di sản phi vật thể đại diện của nhân loại được UNESCO công nhận.
  </p>

  <div class="highlight-box">
    Cồng chiêng không chỉ là nhạc cụ – mà là tiếng nói linh thiêng kết nối con người với thần linh, với đất trời đại ngàn.
  </div>

  <img src="https://images.vietnamtourism.gov.vn/vn/images/2023/thang12/le_hoi_cong_chieng_tay_nguyen_-_gia_tri_van_hoa_ngan_doi_-_baodantocvn.jpg" alt="Trình diễn cồng chiêng trong lễ hội">

  <h2>Hoạt Động Nổi Bật</h2>
  <ul>
    <li>🥁 Diễu hành và trình diễn đại hợp xướng cồng chiêng</li>
    <li>🔥 Lễ mừng lúa mới, lễ hội đâm trâu, lễ bỏ mả</li>
    <li>🛖 Dựng nhà Rông, tái hiện nghi thức tín ngưỡng dân tộc thiểu số</li>
    <li>🌾 Giao lưu ẩm thực – dệt thổ cẩm – đan lát – chế tác nhạc cụ truyền thống</li>
    <li>🌙 Đêm hội lửa trại, giao lưu thanh thiếu niên các dân tộc Tây Nguyên</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>🗓️ Thời gian: 12–18/08/2025</p>
  <p>📍 Địa điểm: TP. Pleiku (Gia Lai) và các huyện của Tây Nguyên (Đắk Lắk, Kon Tum)</p>
</main>

<!-- CTA -->
<div class="cta">
 
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
