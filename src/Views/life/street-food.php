<?php

$pageTitle = 'Street Food in Vietnam';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Những món ăn đường phố nổi bật
$popularDishes = [
    'Phở bò, phở gà – Món ăn sáng phổ biến và tinh tế',
    'Bánh mì kẹp thịt, trứng, chả – Hương vị hòa quyện Đông - Tây',
    'Bún chả, bún riêu, bún bò Huế – Đặc sản vùng miền phong phú',
    'Gỏi cuốn, chả giò – Món ăn nhẹ, tươi ngon',
    'Xôi, bánh cuốn, bánh xèo – Phản ánh sự đa dạng ẩm thực'
];

// Không gian ẩm thực đường phố
$streetExperience = [
    'Gánh hàng rong, xe đẩy trên vỉa hè – Nét đặc trưng quen thuộc',
    'Các chợ đêm sầm uất với đa dạng món ăn',
    'Không khí sôi động, gần gũi và thân thiện',
    'Giá cả bình dân, dễ tiếp cận với mọi tầng lớp',
    'Ẩm thực gắn liền với ký ức và đời sống người dân'
];

// Vai trò trong văn hóa & du lịch
$culturalImpact = [
    'Thu hút đông đảo du khách quốc tế khám phá ẩm thực',
    'Được vinh danh trong các chương trình ẩm thực thế giới',
    'Là phần không thể thiếu trong hành trình trải nghiệm văn hóa',
    'Góp phần định hình bản sắc ẩm thực Việt Nam',
    'Nhiều món ăn trở thành biểu tượng đại diện quốc gia'
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
  <header class="hero" style="background-image: url('https://www.vietnamescapetours.com/uploads/galleries/streetfoodculture-DqQ0.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Street Food</h1>
        <p class="hero__subtitle">Khám phá hương vị đặc trưng từ những con phố sôi động của Việt Nam.</p>
        <a href="#section-dishes" class="btn btn--light">Bắt Đầu Hành Trình</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: MÓN ĂN NỔI BẬT -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://res.klook.com/image/upload/q_85/c_fill,w_750/v1711537582/ttvzkybg1v5gk8bxktsp.jpg" alt="Món ăn nổi bật">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Món Ăn Nổi Bật</h2>
          <p>Ẩm thực đường phố là sự pha trộn tinh tế của truyền thống và sáng tạo.</p>
          <ul class="activity-list">
            <?php foreach ($popularDishes as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/streetfood-flavors" class="btn btn--primary">Khám Phá Hương Vị</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: KHÔNG GIAN ẨM THỰC -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://image.congan.com.vn/thumbnail/CATP-480-2017-5-13/khong-gian-am-thuc-ngu-hanh-1.jpg" alt="Không gian ẩm thực">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Không Gian Ẩm Thực</h2>
          <p>Từng góc phố là một thế giới ẩm thực phong phú và hấp dẫn.</p>
          <ul class="activity-list">
            <?php foreach ($streetExperience as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/night-market" class="btn btn--primary">Khám Phá Chợ Đêm</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: VAI TRÒ VĂN HÓA -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://vinalab.org.vn/Upload/thoi-su/am-thuc-viet-nam-20022023.jpg" alt="Vai trò văn hóa">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Ẩm Thực & Văn Hóa</h2>
          <p>Ẩm thực đường phố phản ánh sâu sắc đời sống và tinh thần Việt.</p>
          <ul class="activity-list">
            <?php foreach ($culturalImpact as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/culinary-culture" class="btn btn--primary">Tìm Hiểu Văn Hóa</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
