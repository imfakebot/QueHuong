<?php
$eventTitle = "Vietnamese Lunar New Year 2025";
$pageStyles = ['/css/lunaryear.css'];
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
<header class="hero-newyear" style="background-image: url('https://static.idctravel.com/wp-content/uploads/v/45/Vietnam-Lunar-New-Year.jpg');">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Tết Nguyên Đán – dịp lễ truyền thống thiêng liêng, rực rỡ và đầy cảm xúc của người Việt.</p>
    <br>
    <a href="/life/festivals" class="btn btn--light">← Quay lại Trang Lễ Hội</a>
  </div>
</header>

<!-- SECTION 1 -->
<section class="section-newyear">
  <img src="https://greenway.com.vn/wp-content/uploads/2020/11/photo-1579225151412-1579225152884329241054.jpeg" alt="Tết truyền thống Việt Nam">
  <div class="highlight-box">
    <h2>Giới Thiệu</h2>
    <p>
      Tết Nguyên Đán 2025 bắt đầu từ ngày 29/01/2025 (mùng 1 Âm lịch) – là khoảnh khắc đánh dấu năm mới theo âm lịch, gắn liền với những giá trị truyền thống thiêng liêng, phong tục tốt đẹp và niềm hy vọng về một năm an khang thịnh vượng.
    </p>
  </div>
</section>

<!-- SECTION 2 -->
<section class="section-newyear" >
  <div class="highlight-box">
    <h2>Hoạt Động Đặc Trưng</h2>
    <ul>
      <li>🎁 Gói bánh chưng, bánh tét</li>
      <li>🏮 Treo đèn lồng, trang trí mai đào</li>
      <li>👨‍👩‍👧‍👦 Sum họp gia đình, mừng tuổi</li>
      <li>🙏 Lễ chùa đầu năm, cầu bình an</li>
      <li>🔥 Múa lân, bắn pháo hoa đón giao thừa</li>
    </ul>
  </div>
  <img src="https://tiki.vn/blog/wp-content/uploads/2023/02/phong-tuc-ngay-tet-1.jpg" alt="Phong tục Tết">
</section>

<!-- CTA -->


</body>
</html>
