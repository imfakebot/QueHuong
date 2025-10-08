<?php

$pageTitle = 'Vietnamese Culture';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

$cultureSections = [
    [
        'title' => 'Festivals & Holidays',
        'desc' => 'Việt Nam là quốc gia của các lễ hội – từ Tết Nguyên Đán đến lễ hội chùa Hương, mỗi dịp đều mang đậm bản sắc truyền thống.',
        'img' => 'https://vietnamdiscovery.com/wp-content/uploads/2020/06/Festivals-in-Vietnam.jpg',
        'link' => '/life/festivals'
    ],
    [
        'title' => 'Social Etiquette',
        'desc' => 'Hiểu cách cư xử, phép lịch sự trong đời sống hàng ngày sẽ giúp du khách hòa nhập văn hóa bản địa một cách tinh tế.',
        'img' => 'https://news.library.ualberta.ca/wp-content/uploads/2021/12/Vietnamese-Etiquette.png',
        'link' => '/life/etiquette'
    ],
    [
        'title' => 'Beliefs & Spirituality',
        'desc' => 'Tôn giáo và tín ngưỡng đóng vai trò quan trọng trong đời sống người Việt, thể hiện qua đền chùa, lễ cúng, và nghi thức truyền thống.',
        'img' => 'https://jackfruitadventure.com/wp-content/uploads/2024/10/AdobeStock_225004692-1024x683.jpeg',
        'link' => '/life/beliefs'
    ],
    [
        'title' => 'Arts & Handicrafts',
        'desc' => 'Từ tranh dân gian Đông Hồ đến gốm Bát Tràng, nghệ thuật và thủ công Việt Nam phản ánh nét tài hoa và lịch sử lâu đời.',
        'img' => 'https://i.ytimg.com/vi/Lm-ikxQi-Ls/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLB6KMzfJGywXBzqY8h22ZLFp6eKFQ',
        'link' => '/life/arts-crafts'
    ],
    [
        'title' => 'Ao Dai: National Dress',
        'desc' => 'Áo dài là biểu tượng văn hóa – trang phục truyền thống tôn vinh vẻ đẹp dịu dàng và sự thanh lịch của người Việt.',
        'img' => 'https://special.vietnamplus.vn/wp-content/uploads/2021/03/2909aodai2-1601344550-91-1568x1226.jpg',
        'link' => '/life/ao-dai'
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
  <header class="hero" style="background-image: url('https://previews.123rf.com/images/lisaanfisa/lisaanfisa1609/lisaanfisa160900028/62821294-travel-to-vietnam-set-of-traditional-vietnamese-cultural-symbols-vietnamese-landmarks-and.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
      <h1 class="hero__title">Vietnamese Culture</h1>
      <p class="hero__subtitle">Khám phá chiều sâu văn hóa Việt qua các truyền thống, tín ngưỡng và nghệ thuật đặc sắc.</p>
      <a href="#culture-content" class="btn btn--light">Bắt đầu hành trình</a>
    </div>
  </header>

  <main id="culture-content">
    <?php foreach ($cultureSections as $index => $section): ?>
      <section class="feature-section <?php echo $index % 2 === 1 ? 'feature-section--reverse accent-bg' : ''; ?>">
        <div class="container feature-section__container">
          <div class="feature-section__image-wrapper animate-on-scroll">
            <img src="<?php echo $section['img']; ?>" alt="<?php echo $section['title']; ?>">
          </div>
          <div class="feature-section__content animate-on-scroll">
            <h2><?php echo $section['title']; ?></h2>
            <p><?php echo $section['desc']; ?></p>
            <a href="<?php echo $section['link']; ?>" class="btn btn--primary">Khám phá</a>
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
