<?php
$eventTitle = "Enjoy DaNang Festivals 2025";
$pageStyles = ['/css/events.css'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title><?php echo $eventTitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php foreach ($pageStyles as $style): ?>
    <link rel="stylesheet" href="<?php echo $style; ?>">
  <?php endforeach; ?>
  <!-- <style>
    .highlight {
      background: var(--festivals-accent-bg);
      padding: 3rem 1rem;
      border-radius: 16px;
      margin: 2rem 0;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .highlight h2 {
      color: var(--festivals-primary);
      font-family: var(--festivals-font-headline);
      font-size: 2rem;
      margin-bottom: 1rem;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin: 2rem 0;
    }
    .gallery img {
      width: 300px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .map-container {
      margin: 2rem 0;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    iframe {
      width: 100%;
      height: 400px;
      border: none;
    }
  </style> -->
</head>
<body class="festivals-page-wrapper">

<!-- HERO -->
<header class="hero" style="background-image: url('https://i.ytimg.com/vi/-_F9TSGH0r8/maxresdefault.jpg');">
  <div class="hero__overlay"></div>
  <div class="hero__content animate-on-scroll">
    <h1 class="hero__title"><?php echo $eventTitle; ?></h1>
    <p class="hero__subtitle">Lễ hội hoành tráng nhất đầu năm tại thành phố đáng sống!</p>
    <a href="/life/festivals" class="btn btn--light">← Quay lại Trang Tổng Quan</a>
  </div>
</header>

<!-- NỘI DUNG -->
<main class="container">

  <section class="highlight animate-on-scroll">
    <h2>Giới Thiệu Chung</h2>
    <p>
      <strong>Enjoy DaNang Festival 2025</strong> diễn ra từ <strong>19/1 đến 23/1/2025</strong>, hứa hẹn sẽ là một đại tiệc ánh sáng, nghệ thuật và văn hóa biển đặc sắc.
    </p>
    <p>
      Với các chương trình như: Diễu hành ánh sáng bên sông Hàn, lễ hội ẩm thực ven biển, biểu diễn pháo hoa, và không gian nghệ thuật đường phố, đây là dịp tuyệt vời để du khách khám phá Đà Nẵng trong không khí đầy cảm xúc.
    </p>
  </section>

  <section class="gallery animate-on-scroll">
    <img src="https://danangfantasticity.com/wp-content/uploads/2025/06/5-ly-do-khong-the-bo-qua-le-hoi-tan-huong-da-nang-2025-enjoy-danang-festival-2025-01.jpg" alt="Sự kiện ánh sáng">
    <img src="https://image.tinnhanhchungkhoan.vn/w660/Uploaded/2025/wpxlcdjwi/2022_06_22/1-7107.jpeg" alt="Biểu diễn đường phố">
    <img src="https://images.vietnamtourism.gov.vn/vn//images/2025/thang_6/0906.dem_thu_2_diff_2.jpg" alt="Pháo hoa đêm lễ hội">
  </section>

  <section class="highlight animate-on-scroll">
    <h2>Lịch Trình Nổi Bật</h2>
    <ul class="activity-list">
      <li><strong>19/1:</strong> Khai mạc và diễu hành ánh sáng</li>
      <li><strong>20/1:</strong> Trình diễn nghệ thuật đường phố</li>
      <li><strong>21/1:</strong> Lễ hội ẩm thực và Carnival đường phố</li>
      <li><strong>22/1:</strong> Trình diễn pháo hoa + âm nhạc EDM</li>
      <li><strong>23/1:</strong> Tổng kết và giao lưu nghệ sĩ</li>
    </ul>
  </section>

  <section class="highlight animate-on-scroll">
    <h2>Địa Điểm Diễn Ra</h2>
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8876922289283!2d108.2226637751318!3d16.071663784609024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c021dab2b1%3A0xfae9d32b09f1a58e!2zQ8O0bmcgdmllbsOgbiBBUEVDLCDEkOG7qWMgTMawxqFuZywgxJDhuqFpIE5hbmcsIFZpZXRuYW0!5e0!3m2!1sen!2sus!4v1700000000000"
        allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </section>

  

</main>

</body>
</html>
