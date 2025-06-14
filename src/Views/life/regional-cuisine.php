<?php

$pageTitle = 'Regional Specialties';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Món ngon nổi bật theo vùng
$mustTryDishes = [
    'Phở Hà Nội – Tinh túy Bắc Bộ với nước dùng thanh ngọt',
    'Bún bò Huế – Món ăn đậm đà và cay nồng miền Trung',
    'Cơm tấm Sài Gòn – Hương vị miền Nam dân dã và thơm ngon',
    'Chả cá Lã Vọng – Đặc sản lâu đời của thủ đô',
    'Mì Quảng – Món ăn đặc trưng xứ Quảng đầy màu sắc'
];

// Trải nghiệm ẩm thực vùng miền
$culinaryJourney = [
    'Khám phá ẩm thực là hành trình khám phá bản sắc từng vùng miền',
    'Mỗi món ăn gắn liền với phong tục, tập quán và lịch sử riêng',
    'Ẩm thực Bắc – Trung – Nam thể hiện sự đa dạng và hài hòa',
    'Từ món ăn đường phố đến đặc sản cung đình đều có hồn riêng',
    'Ẩm thực vùng miền là niềm tự hào và bản sắc của người Việt'
];

// Ý nghĩa văn hóa của món ăn địa phương
$culturalSignificance = [
    'Mỗi món ăn là một câu chuyện văn hóa được truyền lại qua nhiều thế hệ',
    'Ẩm thực là cầu nối giữa con người và truyền thống',
    'Lễ hội, phong tục và ẩm thực luôn gắn bó mật thiết',
    'Ẩm thực địa phương giúp du khách hiểu sâu hơn về văn hóa vùng miền',
    'Giữ gìn món ăn truyền thống là gìn giữ hồn dân tộc'
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
  <header class="hero" style="background-image: url('https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2020/03/am-thuc-ba-mien.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Regional Specialties</h1>
        <p class="hero__subtitle">Khám phá món ngon đặc trưng ba miền Việt Nam.</p>
        <a href="#section-dishes" class="btn btn--light">Khám Phá Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: MÓN NGON ĐẶC TRƯNG -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://page.com.vn/admincp/MOTATTINTUC/NhieuAnh/nhung-dac-san-mien-bac-20240918185442442.png" alt="Đặc sản vùng miền Việt Nam">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Món Ngon Đặc Trưng</h2>
          <p>Mỗi vùng miền đều có những món ăn đặc sản mang bản sắc riêng biệt.</p>
          <ul class="activity-list">
            <?php foreach ($mustTryDishes as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/food-regions" class="btn btn--primary">Khám Phá Ẩm Thực Vùng</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: TRẢI NGHIỆM VÙNG MIỀN -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://cdnphoto.dantri.com.vn/e2jE2m6wwR0Rrm_3G5Gwuz7FHYs=/dansinh/2024/01/31/1-1706687453695.jpg" alt="Trải nghiệm ẩm thực vùng miền">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Trải Nghiệm Ẩm Thực Vùng Miền</h2>
          <p>Ẩm thực vùng miền là sự pha trộn hài hòa giữa thiên nhiên và con người.</p>
          <ul class="activity-list">
            <?php foreach ($culinaryJourney as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/local-delights" class="btn btn--primary">Khám Phá Hành Trình</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: VĂN HÓA ẨM THỰC -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://cdn.phongthuytamnguyen.com/pttn/uploads/2021/10/20/2021_10_20___1634718310___y-nghia-van-hoa-am-thuc-viet-nam.jpg" alt="Văn hóa ẩm thực vùng miền">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Ẩm Thực & Văn Hóa</h2>
          <p>Ẩm thực địa phương là tấm gương phản chiếu văn hóa và tâm hồn Việt.</p>
          <ul class="activity-list">
            <?php foreach ($culturalSignificance as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/food-culture" class="btn btn--primary">Tìm Hiểu Văn Hóa</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
