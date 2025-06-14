<?php

$pageTitle = 'Vietnam Travel Essentials';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

$essentialSections = [
    [
        'title' => 'Visa Information',
        'desc' => 'Tìm hiểu các yêu cầu thị thực để đến Việt Nam – bao gồm e-visa, visa tại sân bay và danh sách quốc gia miễn thị thực.',
        'img' => 'https://vietuytin.vn/wp-content/uploads/2024/06/cac-loai-visa-viet-nam-thumbnail.jpg',
        'link' => '/life/visa'
    ],
    [
        'title' => 'Getting Around',
        'desc' => 'Tổng quan các phương tiện di chuyển phổ biến: xe máy, taxi, xe buýt và tàu hỏa – giúp bạn dễ dàng khám phá Việt Nam.',
        'img' => 'https://skypeenglish.vn//wp-content/uploads/2021/02/travel-by-....jpg',
        'link' => '/life/transport'
    ],
    [
        'title' => 'Money & Budgeting',
        'desc' => 'Biết cách đổi tiền, sử dụng thẻ, ATM và mẹo tiết kiệm khi du lịch tại Việt Nam.',
        'img' => 'https://kenh14cdn.com/203336854389633024/2023/8/15/photo-1-16920834526982128207870.jpg',
        'link' => '/life/money'
    ],
    [
        'title' => 'Safety & Health',
        'desc' => 'Lưu ý về sức khỏe và an toàn khi du lịch: từ bảo hiểm, tiêm chủng đến ứng phó với thời tiết và thực phẩm.',
        'img' => 'https://www.netmeds.com/images/cms/wysiwyg/blog/2025/04/1745600094_1714152730_Cover_1280x720_(1).jpg',
        'link' => '/life/safety'
    ],
    [
        'title' => 'Basic Vietnamese Phrases',
        'desc' => 'Một số câu giao tiếp cơ bản giúp bạn dễ dàng nói chuyện, hỏi đường, gọi món khi du lịch Việt Nam.',
        'img' => 'https://www.vietnamvisa.org.vn/wp-content/uploads/2023/10/Basic-Vietnamese-Phrases.jpg',
        'link' => '/life/language'
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
  <header class="hero" style="background-image: url('https://blog.laka.ai/wp-content/uploads/2025/05/planning-a-trip-to-vietnam.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
      <h1 class="hero__title">Vietnam Travel Essentials</h1>
      <p class="hero__subtitle">Những điều bạn cần biết để chuyến đi suôn sẻ và trọn vẹn tại Việt Nam.</p>
      <a href="#tips-content" class="btn btn--light">Xem thông tin</a>
    </div>
  </header>

  <main id="tips-content">
    <?php foreach ($essentialSections as $index => $section): ?>
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
