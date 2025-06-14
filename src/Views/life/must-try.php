<?php

$pageTitle = 'Must-Try Dishes in Vietnam';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Những món ăn không thể bỏ qua
$mustTryDishes = [
    'Phở – Tinh hoa ẩm thực Việt với nước dùng đậm đà, bánh phở mềm mại',
    'Bún chả – Sự kết hợp hoàn hảo giữa thịt nướng, bún và nước mắm pha',
    'Bánh mì – Món ăn nhanh nổi tiếng thế giới với nhân đa dạng',
    'Cao lầu – Đặc sản Hội An với mì dai, rau sống, thịt xá xíu',
    'Chả cá Lã Vọng – Món đặc trưng Hà Nội với cá nướng và mắm tôm'
];

// Hành trình ẩm thực đa dạng
$culinaryJourney = [
    'Ẩm thực mỗi vùng miền đều mang hương vị và nguyên liệu riêng biệt',
    'Món ăn không chỉ ngon mà còn phản ánh lịch sử và văn hóa',
    'Từ món ăn đường phố đến món cao cấp đều đáng trải nghiệm',
    'Nguyên liệu tươi sống và thảo mộc được sử dụng tinh tế',
    'Sự cân bằng giữa vị chua, cay, mặn, ngọt tạo nên đặc trưng'
];

// Vai trò trong văn hóa & quảng bá
$culturalSignificance = [
    'Là niềm tự hào của người Việt trên bản đồ ẩm thực thế giới',
    'Góp phần thu hút du khách quốc tế đến khám phá Việt Nam',
    'Thể hiện sự sáng tạo và khéo léo trong chế biến món ăn',
    'Mỗi món ăn là câu chuyện văn hóa của từng địa phương',
    'Được quảng bá rộng rãi qua các lễ hội, chương trình truyền hình'
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
  <header class="hero" style="background-image: url('https://televisionofnomads.com/wp-content/uploads/2024/01/top-10-vietnamese-dishes-title.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Must-Try Dishes</h1>
        <p class="hero__subtitle">Những món ăn bạn nhất định phải thử khi đến Việt Nam.</p>
        <a href="#section-dishes" class="btn btn--light">Khám Phá Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: MÓN NGON NÊN THỬ -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://topgotourist.vn/img/news/full_topgotourist_10-mon-ngon-phai-thu-khi-toi-viet-nam-162-20241817223.jpeg" alt="Món nên thử">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Món Ngon Nên Thử</h2>
          <p>Ẩm thực Việt Nam hấp dẫn từ món truyền thống đến hiện đại.</p>
          <ul class="activity-list">
            <?php foreach ($mustTryDishes as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/food-tours" class="btn btn--primary">Khám Phá Món Ngon</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: HÀNH TRÌNH ẨM THỰC -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://static.gia-hanoi.com/uploads/2024/02/3639_160126224550363737441452448-min.jpg" alt="Hành trình ẩm thực">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Hành Trình Ẩm Thực</h2>
          <p>Từ Bắc đến Nam, ẩm thực Việt mang theo bản sắc từng vùng miền.</p>
          <ul class="activity-list">
            <?php foreach ($culinaryJourney as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/vietnamese-cuisine" class="btn btn--primary">Trải Nghiệm Vị Việt</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: VAI TRÒ VĂN HÓA -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://banhkhome.com/uploads/images/am-thuc-viet.jpg" alt="Văn hóa ẩm thực">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Ẩm Thực & Văn Hóa</h2>
          <p>Ẩm thực là cầu nối văn hóa và niềm tự hào của người Việt.</p>
          <ul class="activity-list">
            <?php foreach ($culturalSignificance as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/food-and-culture" class="btn btn--primary">Tìm Hiểu Văn Hóa</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
