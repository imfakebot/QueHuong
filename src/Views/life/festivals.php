<?php

$pageTitle = 'Festivals & Holidays - Lễ Hội Và Ngày Lễ Ở Việt Nam';
$pageStyles = ['/css/festivals.css'];
$pageScripts = ['/js/festivals.js'];

// Lễ hội truyền thống
$traditionalFestivals = [
    'Tết Nguyên Đán - Lễ hội quan trọng nhất năm',
    'Lễ hội Chùa Hương - Hành hương mùa xuân',
    'Hội Lim - Lễ hội Quan họ Bắc Ninh',
    'Lễ hội Đền Hùng - Giỗ Tổ Hùng Vương',
    'Lễ hội Đèn Quảng Chiếu ở Huế'
];

// Lễ hội văn hóa & hiện đại
$culturalFestivals = [
    'Festival Huế - Tôn vinh văn hóa cố đô',
    'Lễ hội pháo hoa quốc tế Đà Nẵng',
    'Lễ hội Cà phê Buôn Ma Thuột',
    'Lễ hội Áo dài TP. Hồ Chí Minh',
    'Tuần lễ thời trang Việt Nam'
];

// Ngày lễ & kỳ nghỉ đặc biệt
$holidays = [
    'Tết Dương Lịch (1/1)',
    'Giỗ Tổ Hùng Vương (10/3 âm lịch)',
    'Ngày Giải phóng Miền Nam (30/4)',
    'Ngày Quốc tế Lao động (1/5)',
    'Quốc khánh (2/9)'
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
    <header class="hero" style="background-image: url('https://vietnamdiscovery.com/wp-content/uploads/2020/06/Festivals-in-Vietnam.jpg');">
        <div class="hero__overlay"></div>
        <div class="hero__content animate-on-scroll">
            <h1 class="hero__title">Festivals & Holidays</h1>
            <p class="hero__subtitle">Khám phá nét văn hóa sống động và đầy màu sắc qua các lễ hội truyền thống và ngày lễ Việt Nam.</p>
            <a href="#section-traditional" class="btn btn--light">Khám Phá Ngay</a>
        </div>
    </header>

    <main>
        <!-- SECTION 1: TRUYỀN THỐNG -->
        <section id="section-traditional" class="feature-section">
            <div class="container feature-section__container">
                <div class="feature-section__image-wrapper animate-on-scroll">
                    <img src="https://grandworld.vinhomes.vn/wp-content/uploads/2024/03/tet-nguyen-dan-1.jpg" alt="Lễ hội truyền thống Tết Nguyên Đán">
                </div>
                <div class="feature-section__content animate-on-scroll">
                    <h2>Lễ Hội Truyền Thống</h2>
                    <p>Từ những nghi lễ linh thiêng đến lễ hội dân gian đầy sắc màu, đây là những dịp để gắn kết cộng đồng và giữ gìn bản sắc dân tộc.</p>
                    <ul class="activity-list">
                        <?php foreach ($traditionalFestivals as $activity): ?>
                            <li><?php echo htmlspecialchars($activity); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/tours/traditional-festivals" class="btn btn--primary">Xem Chi Tiết</a>
                </div>
            </div>
        </section>

        <!-- SECTION 2: HIỆN ĐẠI & VĂN HÓA -->
        <section id="section-cultural" class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
            <div class="container feature-section__container">
                <div class="feature-section__image-wrapper animate-on-scroll">
                    <img src="https://media-cdn-v2.laodong.vn/storage/newsportal/2024/12/27/1441529/Phaohoa.jpg" alt="Lễ hội pháo hoa tại Đà Nẵng">
                </div>
                <div class="feature-section__content animate-on-scroll">
                    <h2>Những Sự Kiện Văn Hóa Hiện Đại</h2>
                    <p>Không chỉ có truyền thống, Việt Nam ngày nay còn tổ chức nhiều lễ hội hiện đại đặc sắc, thu hút du khách trong và ngoài nước.</p>
                    <ul class="activity-list">
                        <?php foreach ($culturalFestivals as $activity): ?>
                            <li><?php echo htmlspecialchars($activity); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/tours/cultural-events" class="btn btn--primary">Lịch Sự Kiện</a>
                </div>
            </div>
        </section>

        <!-- SECTION 3: NGÀY LỄ & KỲ NGHỈ -->
        <section id="section-holidays" class="feature-section">
            <div class="container feature-section__container">
                <div class="feature-section__image-wrapper animate-on-scroll">
                    <img src="https://imgnvsk.vnanet.vn/MediaUpload/Content/2024/04/17/vna-potal-le-ruoc-kieu-ve-den-hung-732282117-9-58-40.jpg" alt="Không khí đón Tết tại Việt Nam">
                </div>
                <div class="feature-section__content animate-on-scroll">
                    <h2>Ngày Lễ Quan Trọng</h2>
                    <p>Đây là những dịp đặc biệt trong năm để nghỉ ngơi, sum họp gia đình và cùng nhau kỷ niệm những dấu ấn lịch sử dân tộc.</p>
                    <ul class="activity-list">
                        <?php foreach ($holidays as $activity): ?>
                            <li><?php echo htmlspecialchars($activity); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/tours/holiday-packages" class="btn btn--primary">Gói Nghỉ Lễ</a>
                </div>
            </div>
        </section>
    </main>

    <?php foreach ($pageScripts as $script): ?>
        <script src="<?php echo htmlspecialchars($script); ?>"></script>
    <?php endforeach; ?>
</body>
</html>
