<?php

$pageTitle = 'Safety & Health in Vietnam';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// An toàn cá nhân khi du lịch
$safetyTips = [
    'Luôn giữ tài sản có giá trị ở nơi an toàn – hạn chế mang theo quá nhiều tiền mặt',
    'Không để túi xách, balo hớ hênh trên xe máy hoặc nơi công cộng',
    'Sử dụng taxi hoặc xe công nghệ đáng tin cậy thay vì xe không rõ nguồn gốc',
    'Cảnh giác khi giao dịch tiền bạc nơi đông người hoặc vào ban đêm',
    'Tuân thủ luật giao thông và chú ý khi băng qua đường phố đông đúc'
];

// Chăm sóc sức khỏe
$healthTips = [
    'Mang theo thuốc cơ bản: cảm cúm, tiêu hóa, chống muỗi',
    'Uống nước đóng chai, tránh nước máy chưa đun sôi',
    'Cẩn thận với thực phẩm sống, chọn nơi ăn uy tín, sạch sẽ',
    'Luôn có bảo hiểm du lịch để hỗ trợ y tế khẩn cấp',
    'Nếu cần, hãy đến các bệnh viện quốc tế lớn tại các thành phố lớn'
];

// Yêu cầu y tế & tiêm chủng
$medicalRequirements = [
    'Không có yêu cầu tiêm chủng bắt buộc khi nhập cảnh Việt Nam',
    'Khuyến khích tiêm ngừa viêm gan A, B, thương hàn, và bệnh dại nếu du lịch dài ngày',
    'Kiểm tra kỹ các loại thuốc mang theo – cần kê đơn hợp pháp với thuốc mạnh',
    'Dịch vụ y tế chất lượng tốt tại các thành phố lớn như Hà Nội, TP.HCM, Đà Nẵng',
    'Luôn giữ liên lạc với đại sứ quán hoặc tổng lãnh sự nếu có tình huống khẩn cấp'
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
  <header class="hero" style="background-image: url('https://www.netmeds.com/images/cms/wysiwyg/blog/2025/04/1745600094_1714152730_Cover_1280x720_(1).jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Safety & Health</h1>
        <p class="hero__subtitle">Bảo vệ bản thân và chăm sóc sức khỏe trong suốt hành trình tại Việt Nam.</p>
        <a href="#section-dishes" class="btn btn--light">Tìm Hiểu Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: AN TOÀN CÁ NHÂN -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://espc.com.vn/mediacenter/media/images/1595/news/ava/s800_600/aig-image003-1507174070.jpg" alt="An toàn cá nhân">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>An Toàn Cá Nhân</h2>
          <p>Hãy chuẩn bị kỹ lưỡng để đảm bảo chuyến đi an toàn và thoải mái.</p>
          <ul class="activity-list">
            <?php foreach ($safetyTips as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Mẹo Du Lịch An Toàn</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: CHĂM SÓC SỨC KHỎE -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://nutrimiennam.com/wp-content/uploads/2025/04/tang-suc-khoe-khi-di-du-lich.png" alt="Chăm sóc sức khỏe">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Chăm Sóc Sức Khỏe</h2>
          <p>Duy trì sức khỏe tốt là yếu tố then chốt cho trải nghiệm du lịch trọn vẹn.</p>
          <ul class="activity-list">
            <?php foreach ($healthTips as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Xem Lời Khuyên</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: THÔNG TIN Y TẾ -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://cdn.tiemchunglongchau.com.vn/quy_trinh_tiem_chung_tai_tram_y_te_dam_bao_an_toan_va_hieu_qua_98a7c1b8a0.png" alt="Tiêm chủng và y tế">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Y Tế & Tiêm Chủng</h2>
          <p>Chuẩn bị về mặt y tế giúp bạn an tâm hơn trên hành trình khám phá Việt Nam.</p>
          <ul class="activity-list">
            <?php foreach ($medicalRequirements as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a class="btn btn--primary">Tìm Hiểu Dịch Vụ Y Tế</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
