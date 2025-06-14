<?php

$pageTitle = 'Vietnamese Food & Drink';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

$foodSections = [
    [
        'title' => 'Street Food Guide',
        'desc' => 'Khám phá thế giới ẩm thực đường phố – nơi bạn có thể nếm thử những món ăn ngon miệng như bánh mì, phở và bún chả với giá cực kỳ bình dân.',
        'img' => 'https://www.vietnamescapetours.com/uploads/galleries/streetfoodculture-DqQ0.jpg',
        'link' => '/life/street-food'
    ],
    [
        'title' => 'Must-Try Dishes',
        'desc' => 'Danh sách các món ăn bạn nhất định phải thử khi đến Việt Nam – từ phở bò truyền thống đến cao lầu đậm chất Hội An.',
        'img' => 'https://televisionofnomads.com/wp-content/uploads/2024/01/top-10-vietnamese-dishes-title.jpg',
        'link' => '/life/must-try'
    ],
    [
        'title' => 'Vietnamese Coffee',
        'desc' => 'Cà phê Việt nổi bật với hương vị mạnh, độc đáo – từ cà phê sữa đá đến cà phê trứng – một phần không thể thiếu trong đời sống hàng ngày.',
        'img' => 'https://i.pinimg.com/736x/36/77/08/367708bdc87f01535a385ad43377f2ec.jpg',
        'link' => '/life/coffee-culture'
    ],
    [
        'title' => 'Regional Specialties',
        'desc' => 'Mỗi vùng miền đều có món ăn riêng biệt: miền Bắc thanh đạm, miền Trung cay nồng, miền Nam ngọt đậm đà.',
        'img' => 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2020/03/am-thuc-ba-mien.jpg',
        'link' => '/life/regional-cuisine'
    ],
    [
        'title' => 'Local Markets',
        'desc' => 'Chợ địa phương không chỉ là nơi mua sắm mà còn là thiên đường ẩm thực với đủ món ăn truyền thống, nguyên liệu tươi ngon.',
        'img' => 'https://cafebiz.cafebizcdn.vn/zoom/700_438/162123310254002176/2022/10/31/avatar1667183742913-16671837433421242371.png',
        'link' => '/life/markets'
    ]
];

?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $pageTitle; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>
  <?php foreach ($pageStyles as $style): ?>
    <link rel="stylesheet" href="<?php echo $style; ?>">
  <?php endforeach; ?>
</head>
<body class="culture-page-wrapper">

  <!-- HERO -->
  <header class="hero" style="background-image: url('https://i.ytimg.com/vi/7GrrfK-USjM/hqdefault.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
      <h1 class="hero__title">Vietnamese Food & Drink</h1>
      <p class="hero__subtitle">Hành trình ẩm thực đầy sắc màu – từ món ăn đường phố đến cà phê trứng độc đáo.</p>
      <a href="#food-content" class="btn btn--light">Khám phá ngay</a>
    </div>
  </header>

  <main id="food-content">
    <?php foreach ($foodSections as $index => $section): ?>
      <section class="feature-section <?php echo $index % 2 === 1 ? 'feature-section--reverse accent-bg' : ''; ?>">
        <div class="container feature-section__container">
          <div class="feature-section__image-wrapper animate-on-scroll">
            <img src="<?php echo $section['img']; ?>" alt="<?php echo $section['title']; ?>">
          </div>
          <div class="feature-section__content animate-on-scroll">
            <h2><?php echo $section['title']; ?></h2>
            <p><?php echo $section['desc']; ?></p>
            <a href="<?php echo $section['link']; ?>" class="btn btn--primary">Tìm hiểu thêm</a>
          </div>
        </div>
      </section>
    <?php endforeach; ?>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo $script; ?>"></script>
  <?php endforeach; ?>
</body>
</html>
