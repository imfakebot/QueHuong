<?php
$eventTitle = "Vu Lan Festival 2025 (Lễ Vu Lan Báo Hiếu)";
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
      color: #4e342e;
    }

    .hero-vulan {
      background-image: url('https://file.hstatic.net/200000427529/file/le_vu_lan_nam_2023_la_gi_may_819a9054830c4383b6d20b5d1422f6b9_grande.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 100px 20px;
      text-align: center;
      color: white;
    }

    .hero-vulan::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-vulan .content {
      position: relative;
      z-index: 1;
    }

    .hero-vulan h1 {
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
      color: #d84315;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .highlight-box {
      background: #ffe0b2;
      border-left: 6px solid #fb8c00;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #ef6c00;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #e65100;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-vulan">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Tháng Bảy Vu Lan – Mùa báo hiếu & tri ân sâu sắc</p>
  
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Ý Nghĩa Lễ Vu Lan</h2>
  <p>
    Vu Lan là ngày lễ lớn trong Phật giáo, được tổ chức vào <strong>ngày rằm tháng 7 âm lịch</strong>, tương đương <strong>thứ Sáu, ngày 8 tháng 8 năm 2025</strong>. Đây là dịp để con cháu thể hiện lòng hiếu thảo, biết ơn cha mẹ, tổ tiên – cả khi còn sống lẫn đã khuất.
  </p>

  <div class="highlight-box">
    Hành động cài hoa hồng lên ngực – đỏ nếu còn mẹ, trắng nếu mẹ đã mất – là biểu tượng xúc động, đánh thức lòng hiếu trong mỗi người con.
  </div>

  <img src="https://media.chuabavang.com/resize/1000x561/files/nguyen_vi_anh/2021/08/22/nhung-bong-hoa-cai-y-ao-chu-tang-dai-le-vu-lan-1325.jpg" alt="Lễ cài hoa hồng ngày Vu Lan">

  <h2>Hoạt Động Truyền Thống</h2>
  <ul>
    <li>🌺 Cài hoa hồng tưởng nhớ công ơn cha mẹ</li>
    <li>🕯️ Lễ cầu siêu tại chùa, thắp nến tri ân tổ tiên</li>
    <li>🍱 Làm cơm chay, phóng sinh, làm từ thiện</li>
    <li>📿 Nghe pháp thoại về đạo làm con và lòng hiếu</li>
    <li>🎁 Viết thư tay, tặng quà cho cha mẹ còn sống</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>🗓️ Thời gian: Thứ Sáu, ngày 8/8/2025 (Rằm tháng 7 âm lịch)</p>
  <p>📍 Địa điểm: Các chùa trên toàn quốc, đặc biệt là chùa Giác Ngộ, chùa Hoằng Pháp (TP.HCM), chùa Quán Sứ (Hà Nội), chùa Bái Đính (Ninh Bình)</p>
</main>

<!-- CTA -->
<div class="cta">
 
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
