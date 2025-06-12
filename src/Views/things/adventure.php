<?php
$pageTitle = 'Adventure and Outdoor - Khám Phá Phiêu Lưu';

$pageStyles = [
    '/css/things.css'
];

$googleFonts = [
    'Roboto:wght@400;700',
    'Playfair+Display:wght@700'
];

$pageScripts = ['/js/adventure.js'];

// Data for camping spots
$campingSpots = [
    [
        'image' => 'https://picsum.photos/seed/forestcamp/400/300',
        'alt' => 'Cắm trại rừng thông',
        'title' => 'Rừng Thông Đà Lạt',
        'description' => 'Không gian yên tĩnh, không khí trong lành, lý tưởng cho những buổi cắm trại cuối tuần cùng bạn bè và gia đình.'
    ],
    [
        'image' => 'https://picsum.photos/seed/lakecamp/400/300',
        'alt' => 'Cắm trại ven hồ',
        'title' => 'Hồ Ba Bể, Bắc Kạn',
        'description' => 'Cắm trại ven hồ, chèo thuyền kayak khám phá hồ nước ngọt tự nhiên lớn nhất Việt Nam giữa núi rừng hùng vĩ.'
    ],
    [
        'image' => 'https://picsum.photos/seed/beachcamp/400/300',
        'alt' => 'Cắm trại bãi biển',
        'title' => 'Coco Beachcamp, Lagi',
        'description' => 'Trải nghiệm cắm trại trên bãi biển với không gian đầy màu sắc, các hoạt động vui chơi và âm nhạc sôi động.'
    ]
];

// Mountain activities
$mountainActivities = [
    ['Leo núi Fansipan', '#'],
    ['Trekking Tà Xùa săn mây', '#'],
    ['Khám phá cao nguyên đá Hà Giang', '#'],
    ['Cắm trại qua đêm trên núi', '#'],
    ['Ngắm bình minh & hoàng hôn', '#'],
    ['Tìm hiểu văn hóa bản địa', '#']
];

// Water activities
$waterActivities = [
    ['Lặn biển ngắm san hô Phú Quốc', '#'],
    ['Chèo thuyền kayak Vịnh Hạ Long', '#'],
    ['Lướt ván tại Mũi Né', '#'],
    ['Câu cá giải trí ngoài khơi', '#'],
    ['Du thuyền ngắm cảnh', '#'],
    ['Khám phá đảo hoang', '#']
];
?>

<!-- HERO SECTION -->
<header class="hero fade-in" style="background-image: url('https://picsum.photos/seed/adventurehero/1920/1080');">
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <h1>Khám Phá Phiêu Lưu & Ngoài Trời</h1>
        <p>Những chuyến đi kỳ thú và trải nghiệm thiên nhiên hoang dã đang chờ đón bạn. Hãy bắt đầu hành trình của mình!</p>
        <a href="#section-mountains" class="btn-cta--light">Khám Phá Ngay</a>
    </div>
</header>

<main>
    <!-- SECTION 1: MOUNTAINS -->
    <section id="section-mountains" class="category-feature-section">
        <div class="category-feature__background" style="background-image: url('https://picsum.photos/seed/mountainsview/1600/900');"></div>
        <div class="category-feature__overlay"></div>
        <div class="page-container">
            <div class="category-feature__content category-feature__content--align-left fade-in">
                <h2 class="category-feature__title">Chinh Phục Đỉnh Cao</h2>
                <p class="category-feature__description">
                    Trải nghiệm cảm giác hùng vĩ từ những đỉnh núi cao nhất, khám phá những cung đường trekking đầy thử thách và tận hưởng không khí trong lành của núi rừng.
                </p>
                <div class="category-feature__list-wrapper">
                    <ul class="category-feature__list">
                        <?php foreach (array_slice($mountainActivities, 0, 3) as [$text, $link]): ?>
                            <li><a href="<?php echo $link; ?>"><?php echo $text; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <ul class="category-feature__list">
                        <?php foreach (array_slice($mountainActivities, 3) as [$text, $link]): ?>
                            <li><a href="<?php echo $link; ?>"><?php echo $text; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="#" class="btn-cta--light">Xem Các Tour Leo Núi</a>
            </div>
        </div>
    </section>

    <!-- SECTION 3: CAMPING SPOTS -->
    <section id="section-camping" class="page-container fade-in">
        <h2 class="category-feature__title">Điểm Đến Cắm Trại Lý Tưởng</h2>
        <div class="cards">
            <?php foreach ($campingSpots as $spot): ?>
                <article class="card">
                    <img src="<?php echo $spot['image']; ?>" alt="<?php echo $spot['alt']; ?>">
                    <div class="card-content">
                        <h3><?php echo $spot['title']; ?></h3>
                        <p><?php echo $spot['description']; ?></p>
                        <a href="#" class="btn-card">Xem Chi Tiết</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>