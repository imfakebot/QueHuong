<?php

$pageTitle = 'Vietnamese Phrases for Travelers';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Câu chào hỏi cơ bản
$basicGreetings = [
    'Xin chào – Hello',
    'Cảm ơn – Thank you',
    'Tạm biệt – Goodbye',
    'Vâng / Dạ – Yes',
    'Không – No'
];

// Hỏi đường & giao tiếp cơ bản
$navigationPhrases = [
    'Đi đến… như thế nào? – How to get to…?',
    'Nhà vệ sinh ở đâu? – Where is the restroom?',
    'Tôi bị lạc – I am lost',
    'Bạn có thể giúp tôi không? – Can you help me?',
    'Tôi không nói được tiếng Việt – I don’t speak Vietnamese'
];

// Giao tiếp trong mua sắm & ăn uống
$shoppingDining = [
    'Bao nhiêu tiền? – How much?',
    'Cái này là gì? – What is this?',
    'Tôi muốn mua cái này – I want to buy this',
    'Cho tôi thực đơn – Give me the menu',
    'Không cay, làm ơn – Not spicy, please'
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
  <header class="hero" style="background-image: url('https://www.vietnamvisa.org.vn/wp-content/uploads/2023/10/Basic-Vietnamese-Phrases.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Vietnamese Phrases</h1>
        <p class="hero__subtitle">Giao tiếp dễ dàng hơn khi bạn nắm được những câu nói đơn giản.</p>
        <a href="#section-dishes" class="btn btn--light">Khám Phá Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: CHÀO HỎI CƠ BẢN -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://learningvietnamese.edu.vn/wp-content/uploads/2022/07/greeting-in-vietnamese-1.jpg" alt="Chào hỏi cơ bản">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Chào Hỏi Cơ Bản</h2>
          <p>Những câu chào hỏi lịch sự sẽ tạo ấn tượng tốt với người bản địa.</p>
          <ul class="activity-list">
            <?php foreach ($basicGreetings as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a class="btn btn--primary">Học Thêm Câu Hỏi</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: HỎI ĐƯỜNG VÀ GIAO TIẾP -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://ise.edu.vn/wp-content/uploads/2021/06/chi-duong-bang-tieng-anh-0-min.jpg" alt="Hỏi đường">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Hỏi Đường & Giao Tiếp</h2>
          <p>Biết cách đặt câu hỏi sẽ giúp bạn tự tin khám phá Việt Nam hơn.</p>
          <ul class="activity-list">
            <?php foreach ($navigationPhrases as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Sổ Tay Câu Nói</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: MUA SẮM & ĂN UỐNG -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://cdn2.tuoitre.vn/thumb_w/480/471584752817336320/2024/4/3/am-thuc-17121113036811158467659.jpg" alt="Mua sắm và ăn uống">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Mua Sắm & Ăn Uống</h2>
          <p>Học một vài câu thông dụng sẽ giúp trải nghiệm ẩm thực thú vị hơn.</p>
          <ul class="activity-list">
            <?php foreach ($shoppingDining as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Từ Vựng Ẩm Thực</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
