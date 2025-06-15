<?php
$eventTitle = "The 21st Southern Fruit Festival 2025";
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
      background: #fffde7;
      color: #4e342e;
    }

    .hero-fruitfest {
      background-image: url('https://images.vietnamtourism.gov.vn/en/images/2025/jun/anh_1_%281%29.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-fruitfest::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-fruitfest .content {
      position: relative;
      z-index: 1;
    }

    .hero-fruitfest h1 {
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
      color: #8bc34a;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .highlight-box {
      background: #f0f4c3;
      border-left: 6px solid #aed581;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #8bc34a;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #689f38;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-fruitfest">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Trái cây phương Nam – Hương vị ngọt lành, bản sắc văn hóa</p>
  
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    Lễ hội Trái cây Nam Bộ lần thứ 21 (The 21st Southern Fruit Festival 2025) diễn ra từ ngày <strong>01/06 đến 31/08/2025</strong> tại Khu du lịch Suối Tiên – TP.HCM. Đây là lễ hội mùa hè nổi bật, nơi trưng bày, giới thiệu hàng trăm loại trái cây đặc sản từ các tỉnh miền Nam, kết hợp nhiều hoạt động vui chơi, biểu diễn và văn hóa dân gian.
  </p>

  <div class="highlight-box">
    Từ sầu riêng, chôm chôm, măng cụt đến dưa hấu hình thỏi vàng – bạn sẽ được chiêm ngưỡng thế giới trái cây kỳ lạ và hấp dẫn như trong truyện cổ tích nhiệt đới!
  </div>

  <img src="https://images2.thanhnien.vn/528068263637045248/2024/5/25/12-17166088043791857725117.jpg" alt="Gian hàng trái cây khổng lồ tại Suối Tiên">

  <h2>Hoạt Động Nổi Bật</h2>
  <ul>
    <li>🍍 Lễ diễu hành “Vương quốc trái cây” đầy màu sắc</li>
    <li>🍉 Hội thi “Trái ngon an toàn” & tác phẩm tạo hình trái cây nghệ thuật</li>
    <li>🥭 Không gian chợ nổi trái cây – giá siêu rẻ, ăn tại chỗ</li>
    <li>🎭 Trình diễn đờn ca tài tử, múa lân, múa rồng dân gian</li>
    <li>👩‍🌾 Góc trải nghiệm làm nông dân, thu hoạch và chế biến trái cây tại chỗ</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>Thời gian: Từ 01/06 đến 31/08/2025</p>
  <p>Địa điểm: Khu Du Lịch Văn Hóa Suối Tiên, Quận 9, TP.HCM</p>
</main>

<!-- CTA -->
<div class="cta">
  
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
