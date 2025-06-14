<?php
// === CÀI ĐẶT THÔNG TIN TRANG ===
$pageTitle = 'Khám Phá Hang Động Việt Nam - Caving Adventures';
$pageDescription = 'Dấn thân vào hành trình khám phá thế giới ngầm kỳ vĩ tại Việt Nam, quê hương của những hang động lớn và đẹp nhất hành tinh.';

// === KHAI BÁO FILE CSS VÀ JS ===
$pageStyles = [
    '/css/caving-styles.css', // File CSS riêng cho trang này
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
];
$pageScripts = ['/js/animations.js']; // Dùng lại script animation chung

// === KHAI BÁO GOOGLE FONTS ===
$googleFonts = ['Playfair+Display:wght@700', 'Roboto:wght@400;500;700'];

// === HÀM HỖ TRỢ ===
function create_slug($text)
{
    // ... Sao chép hàm tạo slug bạn đã có vào đây ...
    $text = strtolower($text);
    $char_map = ['á' => 'a', 'à' => 'a', 'ả' => 'a', 'ã' => 'a', 'ạ' => 'a', 'đ' => 'd', /* ... các ký tự khác ... */];
    $text = strtr($text, $char_map);
    $text = preg_replace('/[^a-z0-9_ -]+/', '', $text);
    $text = preg_replace('/[\s_]+/', '-', $text);
    $text = preg_replace('/-+/', '-', $text);
    return trim($text, '-');
}

// === DỮ LIỆU CÁC TOUR HANG ĐỘNG ===
// Trong thực tế, bạn sẽ lấy dữ liệu này từ database
$caving_tours_data = [
    [
        'id' => 201,
        'title' => 'Thám Hiểm Sơn Đoòng - Hang Động Lớn Nhất Thế Giới',
        'location' => 'Quảng Bình',
        'image' => 'https://file.vietmy.net.vn/data/images/0/2024/01/04/upload_2139/2.jpg?w=825',
        'duration' => '4 Ngày 3 Đêm',
        'difficulty' => 'Chuyên gia',
        'summary' => 'Chuyến thám hiểm độc nhất vô nhị vào lòng đất, khám phá một hệ sinh thái riêng biệt và những cấu trúc thạch nhũ khổng lồ.'
    ],
    [
        'id' => 202,
        'title' => 'Khám Phá Hang Én - Hang Động Lớn Thứ 3 Thế Giới',
        'location' => 'Quảng Bình',
        'image' => 'https://wetrek.vn/pic/Service/images/kham-pha-hang-en-nguyen-phuong-dung.jpg',
        'duration' => '2 Ngày 1 Đêm',
        'difficulty' => 'Trung bình - Khó',
        'summary' => 'Trải nghiệm cắm trại trên bãi biển trong lòng hang, giữa hàng vạn cánh én bay lượn tạo nên một khung cảnh siêu thực.'
    ],
    [
        'id' => 203,
        'title' => 'Hệ Thống Hang Động Tú Làn',
        'location' => 'Quảng Bình',
        'image' => 'https://www.wowweekend.vn/document_root/upload/articles/image/BrowseContent/Discover/10.2018/TuLan%20va%20nhung%20cot%20moc%20dang%20nho/1.jpg',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Trung bình',
        'summary' => 'Thử thách bản thân với các hoạt động trekking, bơi trong hang tối và khám phá hệ thống hang động nguyên sơ, hùng vĩ.'
    ],
    [
        'id' => 204,
        'title' => 'Khám Phá Thiên Đường Động & Sông Chày - Hang Tối',
        'location' => 'Quảng Bình',
        'image' => 'https://cms.junglebosstours.com/assets/33c9d47c-64cd-4d22-9e33-6cf5d85a5577?width=1900&height=1266',
        'duration' => '1 Ngày',
        'difficulty' => 'Dễ',
        'summary' => 'Chuyến đi trong ngày phù hợp cho mọi đối tượng, chiêm ngưỡng vẻ đẹp tráng lệ của Thiên Đường Động và các trò chơi mạo hiểm.'
    ]
];

// Thêm slug vào dữ liệu
$cavingTours = array_map(function ($tour) {
    $tour['slug'] = create_slug($tour['title']);
    return $tour;
}, $caving_tours_data);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=<?php echo implode('&family=', $googleFonts); ?>&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
    <?php endforeach; ?>
</head>

<body class="caving-page-wrapper">

    <!-- HERO SECTION -->
    <header class="hero" style="background-image: url('https://mia.vn/media/uploads/blog-du-lich/top-nhung-hang-dong-quang-binh-ban-khong-nen-bo-lo-1-1653583500.jpg');">
        <div class="hero__overlay"></div>
        <div class="hero__content animate-on-scroll">
            <h1 class="hero__title">Khám Phá Thế Giới Ngầm Kỳ Vĩ</h1>
            <p class="hero__subtitle">Việt Nam, ngôi nhà của những hang động ngoạn mục nhất hành tinh, đang chờ bạn đến chinh phục.</p>
        </div>
    </header>

    <main>
        <!-- PREPARATION GUIDE SECTION -->
        <section class="guide-section section-padding">
            <div class="container">
                <div class="section-header animate-on-scroll">
                    <h2>Chuẩn Bị Gì Cho Chuyến Đi?</h2>
                    <p>An toàn và sự chuẩn bị kỹ lưỡng là chìa khóa cho một chuyến thám hiểm thành công.</p>
                </div>
                <div class="guide-grid">
                    <div class="guide-item animate-on-scroll">
                        <i class="fa-solid fa-person-hiking"></i>
                        <h4>Trang Phục</h4>
                        <p>Quần áo nhanh khô, co giãn. Giày trekking chuyên dụng có độ bám tốt. Mang theo áo khoác mỏng và đồ bơi.</p>
                    </div>
                    <div class="guide-item animate-on-scroll">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h4>An Toàn & Sức Khỏe</h4>
                        <p>Luôn tuân thủ hướng dẫn của chuyên gia. Chuẩn bị thể lực tốt. Mang theo thuốc men cá nhân và kem chống côn trùng.</p>
                    </div>
                    <div class="guide-item animate-on-scroll">
                        <i class="fa-solid fa-camera-retro"></i>
                        <h4>Thiết Bị Cần Thiết</h4>
                        <p>Đèn pin đội đầu, bình nước cá nhân, máy ảnh (nên có túi chống nước), và một tinh thần sẵn sàng phiêu lưu!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TOUR LIST SECTION -->
        <section class="tour-list-section section-padding">
            <div class="container">
                <div class="section-header animate-on-scroll">
                    <h2>Các Chuyến Thám Hiểm Nổi Bật</h2>
                    <p>Từ những chuyến đi dễ dàng trong ngày đến những cuộc thám hiểm chuyên sâu, hãy chọn hành trình phù hợp với bạn.</p>
                </div>
                <div class="tour-grid">
                    <?php foreach ($cavingTours as $tour): ?>
                        <article class="tour-card animate-on-scroll">
                            <a href="tour-detail.php?slug=<?php echo htmlspecialchars($tour['slug']); ?>" class="tour-card__link-wrapper">
                                <div class="tour-card__image-container">
                                    <img src="<?php echo htmlspecialchars($tour['image']); ?>" alt="<?php echo htmlspecialchars($tour['title']); ?>" class="tour-card__image">
                                </div>
                                <div class="tour-card__content">
                                    <span class="tour-card__location"><i class="fa-solid fa-location-dot"></i> <?php echo htmlspecialchars($tour['location']); ?></span>
                                    <h3 class="tour-card__title"><?php echo htmlspecialchars($tour['title']); ?></h3>
                                    <p class="tour-card__summary"><?php echo htmlspecialchars($tour['summary']); ?></p>
                                    <div class="tour-card__meta">
                                        <span><i class="fa-regular fa-clock"></i> <?php echo htmlspecialchars($tour['duration']); ?></span>
                                        <span><i class="fa-solid fa-mountain"></i> <?php echo htmlspecialchars($tour['difficulty']); ?></span>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endforeach; ?>
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