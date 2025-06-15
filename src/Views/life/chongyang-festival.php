<?php
$eventTitle = "Chongyang Festival 2025 (Lễ Trùng Cửu / Người Cao Tuổi)";
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
      background: #f3f7f9;
      color: #3e2723;
    }

    .hero-chongyang {
      background-image: url('https://nhakhoachampion.com/upload/double-ninth-festival-presentation-169-.png');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-chongyang::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-chongyang .content {
      position: relative;
      z-index: 1;
    }

    .hero-chongyang h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      color: #ffd54f;
    }

    .section {
      padding: 50px 20px;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #6d4c41;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .highlight-box {
      background: #fff3e0;
      border-left: 6px solid #ffb300;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #8d6e63;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #5d4037;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-chongyang">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Lễ Trùng Cửu – Ngày tôn vinh người cao tuổi & cầu chúc trường thọ</p>
   
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    Chongyang Festival (Lễ Trùng Cửu) diễn ra vào <strong>ngày 9 tháng 9 âm lịch</strong>, được xem là “Ngày Người Cao Tuổi” tại nhiều quốc gia châu Á, trong đó có Việt Nam. Đây là dịp đặc biệt để thể hiện lòng hiếu thảo, sự kính trọng và biết ơn đối với ông bà, cha mẹ và người lớn tuổi trong gia đình và cộng đồng.
  </p>

  <div class="highlight-box">
    Trùng Cửu mang ý nghĩa “hai số 9” – biểu tượng của sự trường thọ, mạnh khỏe và bền bỉ. Ngày này còn là dịp khởi đầu mùa thu với nhiều lễ hội dân gian và không khí gia đình đầm ấm.
  </div>

  <img src="https://lalago.vn/wp-content/uploads/2025/05/Le-hoi-Trung-Cuu-10-1.jpg" alt="Người cao tuổi dự lễ hội Trùng Cửu">

  <h2>Hoạt Động Ý Nghĩa</h2>
  <ul>
    <li>👵 Tổ chức gặp mặt, tri ân người cao tuổi tại địa phương</li>
    <li>🌾 Dâng hoa cúc, tặng bánh chưng cửu – món truyền thống</li>
    <li>👨‍👩‍👧‍👦 Con cháu về thăm ông bà, chúc thọ và tặng quà</li>
    <li>🚶‍♂️ Leo núi nhẹ, đi bộ thư giãn – biểu tượng của sức khỏe bền vững</li>
    <li>📜 Kể chuyện cổ tích, truyền thống gia đình cho con cháu</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>🗓️ Thời gian: Thứ Năm, ngày 2 tháng 10 năm 2025 (9/9 âm lịch)</p>
  <p>📍 Địa điểm: Các chùa, nhà văn hóa, đình làng, khu dưỡng lão, và trong chính mỗi gia đình Việt</p>
</main>

<!-- CTA -->
<div class="cta">

  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
