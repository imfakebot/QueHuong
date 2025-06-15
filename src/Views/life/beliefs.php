<?php

$pageTitle = 'Belief & Spirituality - Tín Ngưỡng và Tâm Linh Việt Nam';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Tín ngưỡng truyền thống
$spiritualBeliefs = [
    'Thờ cúng tổ tiên – Gốc rễ đạo lý làm người',
    'Tín ngưỡng thờ Mẫu – Văn hóa bản địa độc đáo',
    'Phật giáo – Tôn giáo phổ biến và ảnh hưởng sâu rộng',
    'Thiên Chúa giáo – Di sản phương Tây kết hợp hài hòa',
    'Các tín ngưỡng dân gian như Thần Tài, Ông Công Ông Táo'
];

// Không gian tâm linh
$spiritualSpaces = [
    'Chùa Một Cột – Biểu tượng Phật giáo ngàn năm',
    'Chùa Thiên Mụ ở Huế – Vẻ đẹp cổ kính bên dòng sông Hương',
    'Nhà thờ Đức Bà – Kiến trúc Gothic giữa lòng Sài Gòn',
    'Đền Hùng – Nơi tôn vinh cội nguồn dân tộc',
    'Miếu Bà Chúa Xứ – Điểm đến tâm linh miền Tây'
];

// Tác động trong đời sống
$spiritualImpact = [
    'Phong tục cúng giỗ, lễ tết, cầu an',
    'Chọn ngày giờ tốt – Niềm tin vào vận mệnh',
    'Đời sống tinh thần cân bằng nhờ niềm tin tâm linh',
    'Tâm linh trong nghệ thuật và văn hóa dân gian',
    'Tín ngưỡng giúp gắn kết cộng đồng và gia đình'
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
  <header class="hero" style="background-image: url('https://jackfruitadventure.com/wp-content/uploads/2024/10/AdobeStock_225004692-1024x683.jpeg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Belief & Spirituality</h1>
        <p class="hero__subtitle">Tìm hiểu đời sống tín ngưỡng phong phú và chiều sâu tâm linh của người Việt qua nhiều thế hệ.</p>
        <a href="#section-beliefs" class="btn btn--light">Khám Phá Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: TÍN NGƯỠNG -->
    <section id="section-beliefs" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://clef.vn/Content/Uploads/images/photo-no-2.jpg" alt="Ancestor Worship">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Tín Ngưỡng Người Việt</h2>
          <p>Tín ngưỡng truyền thống phản ánh thế giới quan và đạo lý sống của dân tộc Việt Nam từ ngàn đời.</p>
          <ul class="activity-list">
            <?php foreach ($spiritualBeliefs as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Xem Thêm</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: KHÔNG GIAN TÂM LINH -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://dieutuongam.com/pictures/catalog/khong-gian-linh-thieng-tu-duong-6.jpg" alt="Chùa tại Việt Nam">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Không Gian Linh Thiêng</h2>
          <p>Các đền chùa, nhà thờ và miếu mạo là nơi kết nối con người với tâm linh và cộng đồng.</p>
          <ul class="activity-list">
            <?php foreach ($spiritualSpaces as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Địa Điểm Tâm Linh</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: ẢNH HƯỞNG TÂM LINH -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://file.hstatic.net/200000891547/article/326735137_1522706061553720_1634376122169642806_n_724756a021414aad92d572b16bcfd79c_1024x1024.jpg" alt="Tâm linh trong đời sống">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Tâm Linh Trong Đời Sống</h2>
          <p>Tín ngưỡng không chỉ là nghi lễ, mà còn là yếu tố nuôi dưỡng tâm hồn và lối sống.</p>
          <ul class="activity-list">
            <?php foreach ($spiritualImpact as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Trải Nghiệm</a>
        </div>
      </div>
    </section>

   
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
