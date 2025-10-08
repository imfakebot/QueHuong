<?php

$pageTitle = 'Áo Dài - Vietnamese Traditional Dress';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Lịch sử & nguồn gốc
$history = [
    'Bắt nguồn từ trang phục “áo tứ thân” truyền thống',
    'Cải tiến dưới thời Nguyễn thành áo dài ngũ thân',
    'Phong cách áo dài Lê Phổ (1930s) mang hơi hướng hiện đại',
    'Áo dài cách tân gắn liền với thời trang đương đại',
    'Biểu tượng gắn liền với nữ sinh, giáo viên và các dịp lễ trọng đại'
];

// Ý nghĩa văn hóa
$culturalValues = [
    'Thể hiện sự kín đáo, duyên dáng và tôn vinh vóc dáng người phụ nữ',
    'Biểu tượng của lòng tự hào dân tộc',
    'Được mặc trong các sự kiện văn hóa, lễ hội và ngày truyền thống',
    'Xuất hiện trong các cuộc thi sắc đẹp và ngoại giao quốc tế',
    'Truyền cảm hứng cho các thiết kế thời trang hiện đại'
];

// Áo dài trong thời đại mới
$modernUses = [
    'Thiết kế áo dài cách tân phù hợp với giới trẻ',
    'Sử dụng chất liệu hiện đại và đa dạng màu sắc',
    'Kết hợp yếu tố truyền thống và cá nhân hóa',
    'Trở thành xu hướng thời trang cưới và trình diễn',
    'Được quảng bá mạnh mẽ trong du lịch văn hóa Việt'
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
  <header class="hero" style="background-image: url('https://special.vietnamplus.vn/wp-content/uploads/2021/03/2909aodai2-1601344550-91-1568x1226.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Áo Dài</h1>
        <p class="hero__subtitle">Khám phá vẻ đẹp và giá trị văn hóa truyền thống của trang phục biểu tượng Việt Nam.</p>
        <a href="#section-history" class="btn btn--light">Khám Phá Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: LỊCH SỬ & NGUỒN GỐC -->
    <section id="section-history" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://bvhttdl.mediacdn.vn/documents/491813/1276456/khong-gian-trung-bay-ao-dai-15428587146951978083931.jpg" alt="Lịch sử áo dài">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Lịch Sử Hình Thành</h2>
          <p>Áo dài có lịch sử lâu đời, phản ánh nét văn hóa đặc trưng của người Việt.</p>
          <ul class="activity-list">
            <?php foreach ($history as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Khám Phá Di Sản</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: Ý NGHĨA VĂN HÓA -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://vnp.1cdn.vn/2023/10/26/coveraodai3.jpg" alt="Ý nghĩa văn hóa áo dài">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Ý Nghĩa Văn Hóa</h2>
          <p>Áo dài là biểu tượng thiêng liêng trong văn hóa Việt Nam.</p>
          <ul class="activity-list">
            <?php foreach ($culturalValues as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Tìm Hiểu Thêm</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: ÁO DÀI TRONG HIỆN ĐẠI -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://vnp.1cdn.vn/2023/10/24/anh21.jpg" alt="Áo dài hiện đại">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Áo Dài Trong Thời Đại Mới</h2>
          <p>Trang phục truyền thống vẫn không ngừng được đổi mới để phù hợp thời đại.</p>
          <ul class="activity-list">
            <?php foreach ($modernUses as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Xem Xu Hướng</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
