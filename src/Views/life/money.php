<?php

$pageTitle = 'Money & Budgeting in Vietnam';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Loại tiền & thanh toán
$moneyTypes = [
    'Tiền tệ chính là Đồng Việt Nam (VND), chủ yếu dùng tiền mặt',
    'Mệnh giá lớn: 500,000đ, 200,000đ, 100,000đ,... đến 1,000đ',
    'Thẻ tín dụng được chấp nhận ở nhà hàng, khách sạn lớn',
    'Ví điện tử phổ biến như Momo, ZaloPay, Viettel Money',
    'Luôn mang theo tiền mặt lẻ khi mua hàng vỉa hè, chợ'
];

// Ngân sách du lịch hợp lý
$budgetTips = [
    'Ăn uống: Từ 30,000đ - 100,000đ/món ở hàng quán bình dân',
    'Lưu trú: Hostel khoảng 150,000đ – 400,000đ/đêm',
    'Di chuyển: Xe buýt chỉ từ 7,000đ/lượt, xe máy thuê 120,000đ/ngày',
    'Tham quan: Nhiều điểm miễn phí hoặc giá vé từ 20,000đ – 100,000đ',
    'Mua sắm & quà lưu niệm: Ước lượng chi 300,000đ – 1,000,000đ tùy nhu cầu'
];

// Lưu ý & an toàn tài chính
$financialTips = [
    'Tránh đổi tiền tại nơi không rõ nguồn gốc – nên đến ngân hàng, tiệm vàng uy tín',
    'Không mang quá nhiều tiền mặt khi ra ngoài',
    'Luôn kiểm tra hóa đơn, tránh bị thu phí "ẩn"',
    'Mang theo thẻ tín dụng quốc tế có phí rút tiền thấp',
    'Ghi chú số tiền chi tiêu hàng ngày để kiểm soát ngân sách'
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
  <header class="hero" style="background-image: url('https://kenh14cdn.com/203336854389633024/2023/8/15/photo-1-16920834526982128207870.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Money & Budgeting</h1>
        <p class="hero__subtitle">Quản lý chi tiêu và tiền tệ hiệu quả khi du lịch Việt Nam.</p>
        <a href="#section-dishes" class="btn btn--light">Khám Phá Thông Tin</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: TIỀN TỆ & THANH TOÁN -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://visadongnai.com.vn/wp-content/uploads/2024/01/tien-te-vnd-1200x900.jpeg" alt="Tiền Việt Nam">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Tiền Tệ & Thanh Toán</h2>
          <p>Việc hiểu rõ hệ thống tiền tệ sẽ giúp bạn chi tiêu hiệu quả và an toàn.</p>
          <ul class="activity-list">
            <?php foreach ($moneyTypes as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/currency-guide" class="btn btn--primary">Xem Chi Tiết Tiền Tệ</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: NGÂN SÁCH -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="data:image/png;base64,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" alt="Dự toán chi phí">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Lập Ngân Sách Hợp Lý</h2>
          <p>Chi tiêu tại Việt Nam rất linh hoạt, phù hợp nhiều đối tượng du khách.</p>
          <ul class="activity-list">
            <?php foreach ($budgetTips as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/budget-planning" class="btn btn--primary">Lên Kế Hoạch Chi Tiêu</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: LƯU Ý TÀI CHÍNH -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://cafefcdn.com/203337114487263232/2023/6/4/photo-4-1685844484672106716989-1685847531290-16858475316661201671830.jpg" alt="An toàn tài chính">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Lưu Ý Tài Chính</h2>
          <p>Quản lý tiền hiệu quả giúp chuyến đi của bạn suôn sẻ và an toàn hơn.</p>
          <ul class="activity-list">
            <?php foreach ($financialTips as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/tours/money-safety" class="btn btn--primary">Xem Lời Khuyên</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
