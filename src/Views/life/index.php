<?php
// Cài đặt thông tin cơ bản cho trang
$pageTitle = 'Discover Viet Nam: Culture, Food & Drink, Travel Essentials';
$pageDescription = 'Explore the profound cultural heritage. Come to the special dishes from street food, specialties. Things to note when coming to Vietnam';

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
$CultureSection = [
    'id' => 'Culture',
    'title' => 'Traditionals & Customs',
    'description' => 'For those who love to explore Vietnamese cultural products.',

    'background' => 'https://chus.vn/images/Blog/Tr%E1%BB%91ng%20c%C6%A1m%20ATVNCG/7_Tr%E1%BB%91ng%20C%C6%A1m%2C%20Anh%20Trai%20V%C6%B0%E1%BB%A3t%20Ng%C3%A0n%20Ch%C3%B4ng%20Gai%2C%20ATVNCG%2C%20C%C3%B4ng%20di%E1%BB%85n%201%2C%20nh%C3%A0%20Sao%20S%C3%A1ng%2C%20v%C4%83n%20ho%C3%A1%20Vi%E1%BB%87t%20Nam.jpg?1731295389644',
    'activities' => [
        ['festivals', 'Festivals'],
        ['etiquette', 'Etiquette'],
        ['beliefs', 'Beliefs'],
        ['arts-crafts', 'Arts crafts'],
        ['ao-dai', 'Ao Dai'],
    ],
    'cta' => ['url' => '/life/festivals', 'text' => 'exploration of cultural heritage']
];

$foodSection = [
    'id' => 'Food & Drink',
    'title' => 'Cuisine of Vietnam',
    'description' => 'Immerse yourself in delicious dishes such as: specialties, street food....',
    'background' => 'https://st.ielts-fighter.com/src/ielts-fighter-image/2023/07/21/0862c163-ced6-4ee9-8ce2-beb57f2065a0.jpg',
    'activities' => [
        ['street-food', 'Street food'],
        ['must-try', 'Must Try'],
        ['coffee-culture', 'Coffee culture'],
        ['regional-cuisine', 'Regional cuisine'],
        ['markets', 'Markets'],
       
    ],
    'cta' => ['url' => '/life/food', 'text' => 'Tìm Hiểu Tour Văn Hóa']
];

$essentialSection = [
    'id' => 'Travel Essentials',
    'title' => 'TRAVEL ESSENTIALS',
    'description' => 'Things to prepare for an enjoyable trip.',
    'background' => 'https://lakshmisharath.com/wp-content/uploads/2020/01/Travel-essentials-2-shutterstock-page-001-1024x1024.jpg',
    'activities' => [
        ['visa', 'Visa'],
        ['transport', 'Transport'],
        ['money', 'Money'],
        ['safety', 'Safety'],
        ['language', 'Language'],
        
    ],
    'cta' => ['url' => '/life/visa', 'text' => 'Tìm Chốn Bình Yên']
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

    <!-- SECTION 1: VĂN HÓA & DI SẢN -->
    <section id="<?php echo htmlspecialchars($CultureSection['id']); ?>" class="category-feature-section fade-in">
        <div class="category-feature__background" style="background-image: url('<?php echo htmlspecialchars($CultureSection['background']); ?>');"></div>
        <div class="category-feature__overlay"></div>
        <div class="page-container">
            <div class="category-feature__content category-feature__content--align-left">
                <h2 class="category-feature__title"><?php echo htmlspecialchars($CultureSection['title']); ?></h2>
                <p class="category-feature__description">
                    <?php echo htmlspecialchars($CultureSection['description']); ?>
                </p>
                <div class="category-feature__list-wrapper">
                    <ul class="category-feature__list">
                        <?php foreach ($CultureSection['activities'] as $activity): ?>
                            <li><a href="/things/<?php echo htmlspecialchars($activity[0]); ?>"><?php echo htmlspecialchars($activity[1]); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="<?php echo htmlspecialchars($CultureSection['cta']['url']); ?>" class="btn-cta btn-cta--light"><?php echo htmlspecialchars($CultureSection['cta']['text']); ?></a>
            </div>
        </div>
    </section>

    <!-- SECTION 2: FOOD & DRINK -->
    <section id="<?php echo htmlspecialchars($foodSection['id']); ?>" class="category-feature-section fade-in">
        <div class="category-feature__background" style="background-image: url('<?php echo htmlspecialchars($foodSection['background']); ?>');"></div>
        <div class="category-feature__overlay"></div>
        <div class="page-container">
            <div class="category-feature__content category-feature__content--align-right">
                <h2 class="category-feature__title"><?php echo htmlspecialchars($foodSection['title']); ?></h2>
                <p class="category-feature__description">
                    <?php echo htmlspecialchars($foodSection['description']); ?>
                </p>
                <div class="category-feature__list-wrapper">
                    <ul class="category-feature__list">
                        <?php foreach ($foodSection['activities'] as $activity): ?>
                            <li><a href="/things/<?php echo htmlspecialchars($activity[0]); ?>"><?php echo htmlspecialchars($activity[1]); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="<?php echo htmlspecialchars($foodSection['cta']['url']); ?>" class="btn-cta btn-cta--light"><?php echo htmlspecialchars($foodSection['cta']['text']); ?></a>
            </div>
        </div>
    </section>

    <!-- SECTION 3: TRAVEL ESSENTIAL -->
    <section id="<?php echo htmlspecialchars($essentialSection['id']); ?>" class="category-feature-section fade-in">
        <div class="category-feature__background" style="background-image: url('<?php echo htmlspecialchars($essentialSection['background']); ?>');"></div>
        <div class="category-feature__overlay"></div>
        <div class="page-container">
            <div class="category-feature__content category-feature__content--align-left">
                <h2 class="category-feature__title"><?php echo html_entity_decode($essentialSection['title']); ?></h2>
                <p class="category-feature__description">
                    <?php echo htmlspecialchars($essentialSection['description']); ?>
                </p>
                <div class="category-feature__list-wrapper">
                    <ul class="category-feature__list">
                        <?php foreach ($essentialSection['activities'] as $activity): ?>
                            <li><a href="/things/<?php echo htmlspecialchars($activity[0]); ?>"><?php echo htmlspecialchars($activity[1]); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="<?php echo htmlspecialchars($essentialSection['cta']['url']); ?>" class="btn-cta btn-cta--light"><?php echo htmlspecialchars($essentialSection['cta']['text']); ?></a>
            </div>
        </div>
    </section>

</main>

<!-- Nhúng file JS -->
<?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>" defer></script>
<?php endforeach; ?>