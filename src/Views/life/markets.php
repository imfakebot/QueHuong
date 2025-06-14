<?php

$pageTitle = 'Local Markets';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Những chợ nổi bật
$mustTryDishes = [
    'Chợ Bến Thành (TP. Hồ Chí Minh) – Biểu tượng văn hóa và du lịch miền Nam',
    'Chợ Đồng Xuân (Hà Nội) – Chợ đầu mối lâu đời giữa lòng phố cổ',
    'Chợ Hàn (Đà Nẵng) – Địa điểm mua đặc sản và khám phá ẩm thực miền Trung',
    'Chợ Cái Răng (Cần Thơ) – Chợ nổi độc đáo trên sông',
    'Chợ Hội An – Nơi lưu giữ nét xưa của phố cổ và hồn Quảng'
];

// Trải nghiệm tại chợ địa phương
$culinaryJourney = [
    'Thưởng thức các món ăn đường phố tươi ngon và đậm chất bản địa',
    'Hòa mình vào không khí nhộn nhịp, thân thiện của người bán hàng',
    'Mua sắm thủ công mỹ nghệ, quà lưu niệm mang đậm dấu ấn địa phương',
    'Tìm hiểu phong tục mua bán truyền thống của người Việt',
    'Chợ là nơi phản ánh chân thực đời sống thường nhật của người dân'
];

// Vai trò văn hóa của chợ
$culturalSignificance = [
    'Chợ là trung tâm sinh hoạt cộng đồng truyền thống của người Việt',
    'Là nơi thể hiện rõ nét phong tục, tập quán và lối sống địa phương',
    'Chợ mang theo ký ức, lịch sử và cả bản sắc văn hóa của từng vùng',
    'Không gian chợ là nơi giao lưu văn hóa giữa người dân và du khách',
    'Bảo tồn chợ truyền thống là giữ lại nhịp đập đời sống bản địa'
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
  <header class="hero" style="background-image: url('https://cafebiz.cafebizcdn.vn/zoom/700_438/162123310254002176/2022/10/31/avatar1667183742913-16671837433421242371.png');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Local Markets</h1>
        <p class="hero__subtitle">Khám phá linh hồn của các vùng miền Việt Nam qua những khu chợ truyền thống.</p>
        <a href="#section-dishes" class="btn btn--light">Bắt Đầu Hành Trình</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: CÁC KHU CHỢ NỔI BẬT -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Ben_Thanh_market_2.jpg" alt="Các khu chợ nổi bật">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Những Khu Chợ Nổi Bật</h2>
          <p>Các khu chợ truyền thống là nơi hội tụ văn hóa, ẩm thực và đời sống địa phương.</p>
          <ul class="activity-list">
            <?php foreach ($mustTryDishes as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/market-tour" class="btn btn--primary">Khám Phá Chợ Việt</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: TRẢI NGHIỆM CHỢ -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://media.vneconomy.vn/640x360/images/upload/2023/10/10/foood-tour.jpg" alt="Trải nghiệm tại chợ">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Trải Nghiệm Tại Chợ</h2>
          <p>Chợ Việt Nam không chỉ là nơi buôn bán, mà còn là điểm đến văn hóa sống động.</p>
          <ul class="activity-list">
            <?php foreach ($culinaryJourney as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/market-experience" class="btn btn--primary">Khám Phá Đời Sống</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: VAI TRÒ VĂN HÓA -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://archives.org.vn:2001/files/ecm/source_files/2021/05/02/7-mot-goc-cho-lang-o-nam-bo-205646-020521-27.jpg" alt="Văn hóa chợ truyền thống">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Chợ & Văn Hóa</h2>
          <p>Chợ là không gian phản ánh đậm nét văn hóa địa phương qua từng mặt hàng, lời rao, con người.</p>
          <ul class="activity-list">
            <?php foreach ($culturalSignificance as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/market-culture" class="btn btn--primary">Tìm Hiểu Văn Hóa</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
