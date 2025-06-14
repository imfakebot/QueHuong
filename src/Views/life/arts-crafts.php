<?php

$pageTitle = 'Arts & Handicrafts - Nghệ Thuật & Thủ Công Việt Nam';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Nghệ thuật truyền thống
$artsCrafts = [
    'Tranh Đông Hồ – Nghệ thuật dân gian sống động',
    'Sơn mài – Tinh hoa thủ công độc đáo',
    'Thêu tay – Tỉ mỉ và tinh xảo trong từng đường kim',
    'Chạm khắc gỗ – Từ bàn thờ đến tượng phật đầy hồn Việt',
    'Làm nón lá – Biểu tượng duyên dáng của người Việt'
];

// Làng nghề nổi bật
$craftVillages = [
    'Làng gốm Bát Tràng – Truyền thống và sáng tạo',
    'Làng lụa Vạn Phúc – Tơ tằm Việt Nam vang danh',
    'Làng mây tre đan Phú Vinh – Đậm chất truyền thống',
    'Làng tranh Đông Hồ – Nơi lưu giữ ký ức văn hóa',
    'Làng nghề sơn mài Tương Bình Hiệp – Đậm hồn xưa'
];

// Vai trò trong hiện đại
$modernRole = [
    'Gìn giữ bản sắc và văn hóa dân tộc',
    'Phát triển du lịch văn hóa và làng nghề',
    'Tạo sinh kế và việc làm cho người dân',
    'Sự kết hợp hài hòa giữa truyền thống và sáng tạo mới',
    'Nâng cao giá trị nghệ thuật thủ công Việt trên thị trường quốc tế'
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
  <header class="hero" style="background-image: url('https://i.ytimg.com/vi/Lm-ikxQi-Ls/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLB6KMzfJGywXBzqY8h22ZLFp6eKFQ');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Arts & Handicrafts</h1>
        <p class="hero__subtitle">Tìm hiểu vẻ đẹp sáng tạo và tinh hoa thủ công truyền thống của người Việt.</p>
        <a href="#section-arts" class="btn btn--light">Khám Phá Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: NGHỆ THUẬT THỦ CÔNG -->
    <section id="section-arts" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://cdnmedia.baotintuc.vn/2014/08/26/23/40/roi-nuoc.jpg" alt="Tranh Đông Hồ">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Nghệ Thuật Truyền Thống</h2>
          <p>Những tác phẩm thủ công truyền thống mang trong mình hồn cốt văn hóa dân tộc Việt.</p>
          <ul class="activity-list">
            <?php foreach ($artsCrafts as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/craft-heritage" class="btn btn--primary">Khám Phá Di Sản</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: LÀNG NGHỀ -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://dantra.vn/assets/san-pham/2023_09/lang-non-tay-ho.jpg" alt="Làng nghề truyền thống">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Làng Nghề Nổi Bật</h2>
          <p>Các làng nghề truyền thống là nơi lưu giữ và lan tỏa tinh hoa nghệ thuật Việt.</p>
          <ul class="activity-list">
            <?php foreach ($craftVillages as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/craft-villages" class="btn btn--primary">Xem Làng Nghề</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: VAI TRÒ TRONG HIỆN ĐẠI -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://phuong3.tayninh.gov.vn/uploads/news/2022_11/12.jpeg" alt="Thủ công hiện đại">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Vai Trò Trong Cuộc Sống Hiện Đại</h2>
          <p>Nghệ thuật và thủ công truyền thống ngày càng được gìn giữ và phát huy trong xã hội hiện đại.</p>
          <ul class="activity-list">
            <?php foreach ($modernRole as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/modern-craft" class="btn btn--primary">Xem Chi Tiết</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
