<?php

$pageTitle = 'Vietnamese Coffee Culture';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Các loại cà phê nổi bật
$mustTryDishes = [
    'Cà phê sữa đá – Biểu tượng quốc dân với vị đậm và ngọt béo',
    'Cà phê đen – Hương vị nguyên bản, đậm đà và mạnh mẽ',
    'Cà phê trứng – Sự sáng tạo độc đáo của Hà Nội với vị kem béo ngậy',
    'Cà phê muối – Đặc sản Huế kết hợp vị mặn và đắng đầy tinh tế',
    'Cà phê cốt dừa – Biến tấu hiện đại với hương dừa thơm ngậy'
];

// Trải nghiệm cà phê phong phú
$culinaryJourney = [
    'Thưởng thức cà phê ở vỉa hè, quán cổ, hay quán hiện đại đều mang lại cảm giác khác biệt',
    'Cà phê là phần không thể thiếu trong nhịp sống người Việt',
    'Nghi thức pha phin chậm rãi là nét văn hóa đặc trưng',
    'Mỗi vùng miền có cách thưởng thức và pha chế riêng biệt',
    'Từ cà phê sáng sớm đến hẹn hò chiều muộn, cà phê luôn hiện diện'
];

// Vai trò trong văn hóa & cộng đồng
$culturalSignificance = [
    'Cà phê không chỉ là thức uống mà là một phong cách sống',
    'Là nơi gặp gỡ, trò chuyện và kết nối trong đời sống xã hội',
    'Thể hiện tính cách con người Việt – mộc mạc, sâu sắc, điềm đạm',
    'Cà phê Việt được bạn bè quốc tế yêu thích và tìm hiểu',
    'Là cầu nối giao lưu văn hóa và sáng tạo nghệ thuật qua không gian quán'
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
  <header class="hero" style="background-image: url('https://i.pinimg.com/736x/36/77/08/367708bdc87f01535a385ad43377f2ec.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Vietnamese Coffee</h1>
        <p class="hero__subtitle">Khám phá văn hóa cà phê độc đáo của Việt Nam.</p>
        <a href="#section-dishes" class="btn btn--light">Khám Phá Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: CÁC LOẠI CÀ PHÊ -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://vinbarista.com/uploads/news/top-5-cac-loai-ca-phe-pha-may-pho-bien-tai-viet-nam-202405211808.jpg" alt="Các loại cà phê Việt">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Những Loại Cà Phê Đặc Trưng</h2>
          <p>Việt Nam nổi tiếng với nhiều loại cà phê sáng tạo và độc đáo.</p>
          <ul class="activity-list">
            <?php foreach ($mustTryDishes as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/coffee-experiences" class="btn btn--primary">Trải Nghiệm Cà Phê</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: TRẢI NGHIỆM CÀ PHÊ -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://imgcdn.tapchicongthuong.vn/thumb/w_1000/tcct-media/23/10/9/8-trai-nghiem-tuyet-voi-tai-khu-du-lich-ca-phe-tam-trinh-khong-the-bo-lo_6523c343a0998.jpg" alt="Trải nghiệm cà phê">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Trải Nghiệm Cà Phê</h2>
          <p>Cà phê là phần hồn trong nhịp sống hàng ngày của người Việt.</p>
          <ul class="activity-list">
            <?php foreach ($culinaryJourney as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/cafe-culture" class="btn btn--primary">Khám Phá Quán Cà Phê</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: VAI TRÒ VĂN HÓA -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd8-1vvUG7Tjgxt3W8GOHduOYrpL23yTwbCg&s" alt="Văn hóa cà phê">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Cà Phê & Văn Hóa</h2>
          <p>Văn hóa cà phê phản ánh nhịp sống và tính cách người Việt.</p>
          <ul class="activity-list">
            <?php foreach ($culturalSignificance as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/coffee-culture" class="btn btn--primary">Khám Phá Văn Hóa</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
