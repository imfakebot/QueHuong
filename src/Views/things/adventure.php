<?php

$pageTitle = 'Adventure & Outdoor - Trải Nghiệm Mạo Hiểm Tại Việt Nam';
$pageStyles = ['/css/adventure.css'];
$pageScripts = ['/js/adventure.js'];

// Hoạt động trên Núi cao (Trekking & Motorbiking)
$mountainAdventures = [
    'Trekking Sapa chinh phục bản làng',
    'Chinh phục "nóc nhà Đông Dương" Fansipan',
    'Thực hiện "Hà Giang Loop" bằng xe máy',
    'Săn mây trên đỉnh Tà Xùa, Lảo Thẩn',
    'Khám phá văn hóa các dân tộc thiểu số'
];

// Hoạt động dưới lòng đất & trên vách đá (Caving & Canyoning)
$caveAndCliffsAdventures = [
    'Khám phá hang Sơn Đoòng - hang động lớn nhất thế giới',
    'Thám hiểm hệ thống hang động Tú Làn',
    'Đu dây vượt thác (Canyoning) tại Đà Lạt',
    'Chèo thuyền kayak trong hang tối Phong Nha',
    'Leo núi đá (Rock climbing) tại Cát Bà'
];

// Hoạt động trên mặt nước (Watersports)
$waterAdventures = [
    'Chèo thuyền kayak giữa các đảo đá vôi Vịnh Hạ Long',
    'Lặn biển ngắm san hô tại Phú Quốc, Côn Đảo',
    'Lướt ván diều và lướt sóng tại Mũi Né',
    'Đi du thuyền trên sông Mekong',
    'Thư giãn tại những bãi biển hoang sơ'
];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Google Fonts và Stylesheets giữ nguyên -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
    <?php endforeach; ?>
</head>

<body class="adventure-page-wrapper">

    <!-- HERO SECTION -->
    <header class="hero" style="background-image: url('https://cdn.kimkim.com/files/a/images/874f8b6171ffb2918ada73dc1b45f4a7766ee597/original-2d498d395e4ba8a7f7d8660533dde8f5.jpg');">
        <div class="hero__overlay"></div>
        <div class="hero__content animate-on-scroll">
            <h1 class="hero__title">Adventure & Outdoors</h1>
            <p class="hero__subtitle">Thrills & Nature's Best: Từ đỉnh núi cao nhất đến hang động sâu nhất, Việt Nam là sân chơi cho những tâm hồn ưa mạo hiểm.</p>
            <a href="#section-mountains" class="btn btn--light">Bắt Đầu Hành Trình</a>
        </div>
    </header>

    <main>
        <!-- SECTION 1: NÚI CAO (TREKKING & MOTORBIKING) -->
        <section id="section-mountains" class="feature-section">
            <div class="container feature-section__container">
                <div class="feature-section__image-wrapper animate-on-scroll">
                    <img src="https://kinhtevadubao.vn/stores/news_dataimages/kinhtevadubaovn/122017/12/17/nhung-cung-duong-deo-dep-va-hiem-tro-nhat-09-.7289.jpg" alt="Chinh phục những cung đường đèo hùng vĩ ở Hà Giang">
                </div>
                <div class="feature-section__content animate-on-scroll">
                    <h2>Trên Những Cung Đường Núi Cao</h2>
                    <p>Cảm nhận sự tự do tuyệt đối trên những cung đường đèo uốn lượn hay bước chân trên những con đường mòn xuyên qua ruộng bậc thang hùng vĩ.</p>
                    <ul class="activity-list">
                        <?php foreach ($mountainAdventures as $activity): ?>
                            <li><?php echo htmlspecialchars($activity); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/tours/mountain-tours" class="btn btn--primary">Tour Vùng Cao</a>
                </div>
            </div>
        </section>

        <!-- SECTION 2: HANG ĐỘNG & VÁCH ĐÁ (CAVING & CANYONING) -->
        <section id="section-caves" class="feature-section feature-section--reverse" style="background-color: var(--adventure-accent-bg);">
            <div class="container feature-section__container">
                <div class="feature-section__image-wrapper animate-on-scroll">
                    <img src="https://thanhnien.mediacdn.vn/Uploaded/phucndh/2022_04_14/a4-5211.jpg" alt="Khám phá hang động kỳ vĩ ở Phong Nha">
                </div>
                <div class="feature-section__content animate-on-scroll">
                    <h2>Thám Hiểm Thế Giới Ngầm & Vách Đá</h2>
                    <p>Việt Nam là nơi có những hang động lớn nhất hành tinh và địa hình độc đáo cho các môn thể thao mạo hiểm như đu dây vượt thác.</p>
                    <ul class="activity-list">
                        <?php foreach ($caveAndCliffsAdventures as $activity): ?>
                            <li><?php echo htmlspecialchars($activity); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/tours/caving" class="btn btn--primary">Tour Thám Hiểm</a>
                </div>
            </div>
        </section>

        <!-- SECTION 3: MẶT NƯỚC (KAYAKING & WATERSPORTS) -->
        <section id="section-water" class="feature-section">
            <div class="container feature-section__container">
                <div class="feature-section__image-wrapper animate-on-scroll">
                    <img src="https://villasflcsamson.com/wp-content/uploads/2021/01/d39ac399ac99cec53a7c7821cb3d41a4.jpg" alt="Chèo thuyền kayak ở Vịnh Hạ Long">
                </div>
                <div class="feature-section__content animate-on-scroll">
                    <h2>Khuấy Động Sóng Nước</h2>
                    <p>Lặng lẽ chèo thuyền kayak giữa di sản thiên nhiên thế giới, lặn ngắm san hô rực rỡ hay chinh phục những con sóng bạc đầu.</p>
                    <ul class="activity-list">
                        <?php foreach ($waterAdventures as $activity): ?>
                            <li><?php echo htmlspecialchars($activity); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/tours/water" class="btn btn--primary">Tour Biển Đảo</a>
                </div>
            </div>
        </section>

    </main>

    <!-- Scripts -->
    <?php foreach ($pageScripts as $script): ?>
        <script src="<?php echo htmlspecialchars($script); ?>"></script>
    <?php endforeach; ?>

</body>

</html>