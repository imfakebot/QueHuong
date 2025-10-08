<?php
// Cài đặt thông tin cơ bản cho trang
$pageTitle = 'Khám Phá Việt Nam: Phiêu Lưu, Di Sản & Thư Giãn';
$pageDescription = 'Từ những cuộc phiêu lưu ngoài trời, khám phá di sản văn hóa sâu sắc, đến những giây phút thư giãn và chăm sóc sức khỏe tuyệt vời. Việt Nam có mọi trải nghiệm dành cho bạn.';

// Khai báo file CSS cần thiết
$pageStyles = [
    '/css/things.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
];

$pageScripts = [
    '/js/things.js'
];

// Khai báo Google Fonts cần dùng
$googleFonts = [
    'Playfair+Display:wght@700',
    'Roboto:wght@400;500;700'
];

// Main content sections 
$adventureSection = [
    'id' => 'adventure',
    'title' => 'Phiêu Lưu & Ngoài Trời (Adventure & Outdoors)',
    'description' => 'Dành cho những người yêu thích cảm giác mạnh và vẻ đẹp của thiên nhiên. Hãy thử thách giới hạn của bạn với những hoạt động kỳ thú nhất.',

    'background' => 'https://absoluteasiatravel.com/wp-content/uploads/2019/12/zipline-in-Quang-Binh-min-960x636.jpg',
    'activities' => [
        ['trekking-sapa', 'Trekking in Sapa'],
        ['kayaking-ha-long-bay', 'Kayaking in Ha Long Bay'],
        ['exploring-phong-nha-caves', 'Exploring Phong Nha Caves'],
        ['motorbiking-adventures', 'Motorbiking Adventures'],
        ['watersports-beaches', 'Watersports & Beaches'],
        ['canyoning-da-lat', 'Canyoning in Da Lat']
    ],
    'cta' => ['url' => '/things/adventure', 'text' => 'Khám Phá Tour Phiêu Lưu']
];

$cultureSection = [
    'id' => 'culture',
    'title' => 'Văn Hóa & Di Sản (Culture & Heritage)',
    'description' => 'Hòa mình vào đời sống bản địa, khám phá bề dày lịch sử và sự đa dạng văn hóa độc đáo của Việt Nam.',
    'background' => 'https://chus.vn/images/Blog/Tr%E1%BB%91ng%20c%C6%A1m%20ATVNCG/7_Tr%E1%BB%91ng%20C%C6%A1m%2C%20Anh%20Trai%20V%C6%B0%E1%BB%A3t%20Ng%C3%A0n%20Ch%C3%B4ng%20Gai%2C%20ATVNCG%2C%20C%C3%B4ng%20di%E1%BB%85n%201%2C%20nh%C3%A0%20Sao%20S%C3%A1ng%2C%20v%C4%83n%20ho%C3%A1%20Vi%E1%BB%87t%20Nam.jpg?1731295389644',
    'activities' => [
        ['visiting-historical-sites', 'Visiting Historical Sites'],
        ['exploring-museums', 'Exploring Museums'],
        ['hands-on-workshops', 'Hands-on Workshops'],
        ['traditional-performances', 'Traditional Performances'],
        ['wandering-ancient-towns', 'Wandering Ancient Towns'],
        ['visiting-local-markets', 'Visiting Local Markets']
    ],
    'cta' => ['url' => '/things/cultural-heritage-tours', 'text' => 'Tìm Hiểu Tour Văn Hóa']
];

$wellnessSection = [
    'id' => 'wellness',
    'title' => 'Thư Giãn & Chăm Sóc Sức Khỏe<br>(Relaxation & Wellness)',
    'description' => 'Hãy tạm gác lại những lo toan để tìm về sự bình yên cho tâm hồn. Tận hưởng, thư thái và tái tạo lại năng lượng của bạn.',
    'background' => 'https://safety4sea.com/wp-content/uploads/2023/08/shutterstock_275140940.jpg',
    'activities' => [
        ['spa-massage-therapies', 'Spa & Massage Therapies'],
        ['beach-escapes', 'Beach Escapes'],
        ['yoga-meditation-retreats', 'Yoga & Meditation Retreats'],
        ['relaxing-river-bay-cruises', 'Relaxing River & Bay Cruises'],
        ['enjoying-scenic-cafes', 'Enjoying Scenic Cafes'],
        ['natural-hot-springs', 'Natural Hot Springs']
    ],
    'cta' => ['url' => '/tours/wellness', 'text' => 'Tìm Chốn Bình Yên']
];

// Hero section configuration
$heroConfig = [
    // Gợi ý ảnh: Một cảnh đẹp tổng quan của Việt Nam, ví dụ Vịnh Hạ Long
    'background' => 'https://cdn-media.sforum.vn/storage/app/media/anh-vinh-ha-long-28.jpg',
    'overlay' => true
];
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>" />
    <title><?php echo htmlspecialchars($pageTitle); ?> | VietNam Travel</title>

    <!-- Google Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=<?php echo implode('&family=', $googleFonts); ?>&display=swap" rel="stylesheet" />

    <!-- Nhúng file CSS -->
    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
    <?php endforeach; ?>
</head>

<!-- ===== HERO SECTION ===== -->
<section class="hero" style="background-image: url('<?php echo htmlspecialchars($heroConfig['background']); ?>');">
    <?php if ($heroConfig['overlay']): ?>
        <div class="hero-overlay"></div>
    <?php endif; ?>
    <div class="hero-text fade-in">
        <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
        <p><?php echo htmlspecialchars($pageDescription); ?></p>
    </div>
</section>

<!-- ===== MAIN CONTENT - CÁC SECTION CHI TIẾT VỚI NỘI DUNG MỚI ===== -->
<main class="detailed-categories-wrapper">

    <!-- SECTION 1: PHIÊU LƯU & NGOÀI TRỜI -->
    <section id="<?php echo htmlspecialchars($adventureSection['id']); ?>" class="category-feature-section fade-in">
        <div class="category-feature__background" style="background-image: url('<?php echo htmlspecialchars($adventureSection['background']); ?>');"></div>
        <div class="category-feature__overlay"></div>
        <div class="page-container">
            <div class="category-feature__content category-feature__content--align-left">
                <h2 class="category-feature__title"><?php echo htmlspecialchars($adventureSection['title']); ?></h2>
                <p class="category-feature__description">
                    <?php echo htmlspecialchars($adventureSection['description']); ?>
                </p>
                <div class="category-feature__list-wrapper">
                    <ul class="category-feature__list">
                        <?php foreach ($adventureSection['activities'] as $activity): ?>
                            <li><a href="/things/<?php echo htmlspecialchars($activity[0]); ?>"><?php echo htmlspecialchars($activity[1]); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="<?php echo htmlspecialchars($adventureSection['cta']['url']); ?>" class="btn-cta btn-cta--light"><?php echo htmlspecialchars($adventureSection['cta']['text']); ?></a>
            </div>
        </div>
    </section>

    <!-- SECTION 2: VĂN HÓA & DI SẢN -->
    <section id="<?php echo htmlspecialchars($cultureSection['id']); ?>" class="category-feature-section fade-in">
        <div class="category-feature__background" style="background-image: url('<?php echo htmlspecialchars($cultureSection['background']); ?>');"></div>
        <div class="category-feature__overlay"></div>
        <div class="page-container">
            <div class="category-feature__content category-feature__content--align-right">
                <h2 class="category-feature__title"><?php echo htmlspecialchars($cultureSection['title']); ?></h2>
                <p class="category-feature__description">
                    <?php echo htmlspecialchars($cultureSection['description']); ?>
                </p>
                <div class="category-feature__list-wrapper">
                    <ul class="category-feature__list">
                        <?php foreach ($cultureSection['activities'] as $activity): ?>
                            <li><a href="/things/<?php echo htmlspecialchars($activity[0]); ?>"><?php echo htmlspecialchars($activity[1]); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="<?php echo htmlspecialchars($cultureSection['cta']['url']); ?>" class="btn-cta btn-cta--light"><?php echo htmlspecialchars($cultureSection['cta']['text']); ?></a>
            </div>
        </div>
    </section>

    <!-- SECTION 3: THƯ GIÃN & CHĂM SÓC SỨC KHỎE -->
    <section id="<?php echo htmlspecialchars($wellnessSection['id']); ?>" class="category-feature-section fade-in">
        <div class="category-feature__background" style="background-image: url('<?php echo htmlspecialchars($wellnessSection['background']); ?>');"></div>
        <div class="category-feature__overlay"></div>
        <div class="page-container">
            <div class="category-feature__content category-feature__content--align-left">
                <h2 class="category-feature__title"><?php echo html_entity_decode($wellnessSection['title']); ?></h2>
                <p class="category-feature__description">
                    <?php echo htmlspecialchars($wellnessSection['description']); ?>
                </p>
                <div class="category-feature__list-wrapper">
                    <ul class="category-feature__list">
                        <?php foreach ($wellnessSection['activities'] as $activity): ?>
                            <li><a href="/things/<?php echo htmlspecialchars($activity[0]); ?>"><?php echo htmlspecialchars($activity[1]); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="<?php echo htmlspecialchars($wellnessSection['cta']['url']); ?>" class="btn-cta btn-cta--light"><?php echo htmlspecialchars($wellnessSection['cta']['text']); ?></a>
            </div>
        </div>
    </section>

</main>

<!-- Nhúng file JS -->
<?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>" defer></script>
<?php endforeach; ?>