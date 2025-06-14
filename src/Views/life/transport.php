<?php

$pageTitle = 'Getting Around in Vietnam';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Các phương tiện phổ biến
$transportOptions = [
    'Xe máy – Linh hoạt, phù hợp với việc di chuyển trong thành phố',
    'Taxi và xe công nghệ – Tiện lợi, phổ biến ở các đô thị lớn',
    'Xe buýt – Rẻ và phủ rộng các tuyến trong và ngoài thành phố',
    'Tàu hỏa – Thích hợp cho hành trình dài, ngắm cảnh dọc đường',
    'Máy bay nội địa – Nhanh chóng giữa các tỉnh thành xa nhau'
];

// Kinh nghiệm di chuyển
$travelTips = [
    'Tải ứng dụng gọi xe (Grab, Be, Gojek) để tiện đặt xe',
    'Luôn hỏi giá trước khi đi xe ôm hoặc taxi truyền thống',
    'Chú ý đến giờ cao điểm và thời tiết khi đi lại bằng xe máy',
    'Mua vé tàu/xe khách tại các điểm bán uy tín hoặc online',
    'Chuẩn bị tiền mặt lẻ để dễ thanh toán các phương tiện công cộng'
];

// Tác động đến trải nghiệm du lịch
$mobilityImpact = [
    'Giúp du khách tiếp cận sâu hơn đời sống địa phương',
    'Tạo điều kiện khám phá nhiều điểm đến linh hoạt',
    'Mang lại trải nghiệm sống động và chân thực',
    'Góp phần kết nối các vùng miền và văn hóa',
    'Thể hiện tính thích nghi và thân thiện của người Việt'
];

?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>
  <?php foreach ($pageStyles as $style): ?>
      <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
  <?php endforeach; ?>
</head>
<body class="festivals-page-wrapper">

  <!-- HERO -->
  <header class="hero" style="background-image: url('https://skypeenglish.vn//wp-content/uploads/2021/02/travel-by-....jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Getting Around</h1>
        <p class="hero__subtitle">Hướng dẫn di chuyển thuận tiện khi du lịch Việt Nam.</p>
        <a href="#section-dishes" class="btn btn--light">Khám Phá Cách Di Chuyển</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: PHƯƠNG TIỆN -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://motorvina.com/uploads/all/JuNOlahYf8Dza4f6uZAtvaO7X4ZVncZNsvgKtFMp.jpg" alt="Phương tiện di chuyển">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Phương Tiện Phổ Biến</h2>
          <p>Có nhiều lựa chọn linh hoạt để khám phá Việt Nam một cách dễ dàng.</p>
          <ul class="activity-list">
            <?php foreach ($transportOptions as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/transport-options" class="btn btn--primary">Tìm Hiểu Chi Tiết</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: KINH NGHIỆM -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://assets.grab.com/wp-content/uploads/sites/11/2019/02/15124214/IMG_9235.jpg" alt="Mẹo di chuyển">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Mẹo & Kinh Nghiệm</h2>
          <p>Những lưu ý thực tế giúp bạn di chuyển dễ dàng và an toàn.</p>
          <ul class="activity-list">
            <?php foreach ($travelTips as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/travel-tips" class="btn btn--primary">Xem Mẹo Hữu Ích</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: TÁC ĐỘNG -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://cdn.tcdulichtphcm.vn/upload/1-2025/images/2025-03-04/-1741076084-766-width1200height800.jpg" alt="Tác động trải nghiệm">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Trải Nghiệm & Kết Nối</h2>
          <p>Phương tiện di chuyển đóng vai trò quan trọng trong hành trình khám phá.</p>
          <ul class="activity-list">
            <?php foreach ($mobilityImpact as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/connected-experience" class="btn btn--primary">Khám Phá Thêm</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
