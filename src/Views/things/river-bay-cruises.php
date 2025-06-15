<?php
// Dữ liệu cho trang Du thuyền Sông & Vịnh
$page_details = [
    'title' => 'Du Thuyền Đẳng Cấp',
    'subtitle' => 'Lướt nhẹ trên mặt nước, khám phá những kỳ quan thiên nhiên và di sản văn hóa từ một góc nhìn hoàn toàn mới.',
    'hero_image' => 'https://www.tsttourist.com/vnt_upload/news/08_2023/TSTtourist_top_6_du_thuyen_du_lich_5_sao_dang_cap_nhat_the_gioi_2.jpg',
];

$featured_cruises = [
    [
        'name' => 'Hạ Long Bay Overnight Odyssey',
        'location' => 'Vịnh Hạ Long, Di sản Thế giới UNESCO',
        'image' => 'https://image.vietnamnews.vn/upload/2020/05/29/102521_du-thuyen-ha-long.jpg',
        'description' => 'Hành trình 2 ngày 1 đêm trên du thuyền 5 sao, khám phá những hang động kỳ vĩ, làng chài nổi và chèo thuyền kayak giữa hàng ngàn đảo đá vôi.',
        'highlights' => ['Cabin ban công riêng view vịnh', 'Ăn tối sang trọng trên boong tàu', 'Lớp học Thái Cực Quyền buổi sáng', 'Thăm hang Sửng Sốt']
    ],
    [
        'name' => 'Mekong Delta Discovery',
        'location' => 'Đồng bằng sông Cửu Long',
        'image' => 'https://statics.vinpearl.com/du-thuyen-can-tho-1_1657962777.jpg',
        'description' => 'Khám phá cuộc sống sông nước miền Tây trên những con thuyền gỗ mộc mạc nhưng đầy đủ tiện nghi. Ghé thăm chợ nổi, vườn trái cây và các làng nghề thủ công.',
        'highlights' => ['Trải nghiệm chợ nổi Cái Răng', 'Ghé thăm lò kẹo dừa thủ công', 'Đạp xe khám phá làng quê', 'Thưởng thức đờn ca tài tử']
    ]
];

// Dữ liệu đánh giá mẫu cho các chuyến du thuyền
$page_details['reviews'] = [
    [
        'user_name' => 'Nguyễn Thủy Tiên',
        'rating' => 5,
        'comment' => 'Du thuyền Hạ Long quá tuyệt vời! Phòng ốc sang trọng, đồ ăn ngon, nhân viên chuyên nghiệp. Chèo kayak và ngắm hoàng hôn là những trải nghiệm không thể quên. Highly recommend!',
        'date' => '15/08/2024'
    ],
    [
        'user_name' => 'David Miller',
        'rating' => 4,
        'comment' => 'A very relaxing cruise on the Mekong Delta. The pace was perfect, and the scenery was beautiful. The food was authentic. Our guide was very informative. Some parts of the boat could be a bit more modern, but overall a great trip.',
        'date' => '10/08/2024'
    ]
];
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_details['title']); ?></title>
    <!-- Nạp DUY NHẤT file CSS cho trang Du thuyền -->
    <link rel="stylesheet" href="/css/page-river-bay-cruises.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <main class="cruise-page">
        <!-- HERO SECTION -->
        <header class="hero-section">
            <div class="hero-background" style="background-image: url('<?php echo htmlspecialchars($page_details['hero_image']); ?>');"></div>

            <div class="hero-content-wrapper">
                <div class="hero-content-blurry-background" style="background-image: url('<?php echo htmlspecialchars($page_details['hero_image']); ?>');"></div>
                <div class="hero-content">
                    <h1 class="hero-title"><?php echo htmlspecialchars($page_details['title']); ?></h1>
                    <p class="hero-subtitle"><?php echo htmlspecialchars($page_details['subtitle']); ?></p>
                </div>
            </div>
        </header>

        <!-- INTRO SECTION -->
        <section class="section">
            <div class="container">
                <div class="intro-grid">
                    <div class="intro-image-wrapper">
                        <img src="https://paradisecruises.vn/wp-content/uploads/2023/12/du-thuyen-paradise-delight-nha-hang-2.jpg" alt="Nhà hàng sang trọng trên du thuyền">
                    </div>
                    <div class="intro-content">
                        <h2 class="section-title" style="text-align: left;">Trải Nghiệm Một Chuyến Đi Khác Biệt</h2>
                        <p>Thay vì những chuyến đi vội vã, hãy để dòng nước dẫn lối, đưa bạn đến những nơi tuyệt đẹp một cách chậm rãi và thư thái. Mỗi du thuyền là một khách sạn nổi sang trọng, nơi bạn được phục vụ chu đáo và tận hưởng từng khoảnh khắc.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURED CRUISES SECTION -->
        <section class="section bg-light">
            <div class="container">
                <h2 class="section-title">Các Hành Trình Nổi Bật</h2>
                <div class="cruises-grid">
                    <?php foreach ($featured_cruises as $cruise): ?>
                        <article class="cruise-card">
                            <div class="cruise-image">
                                <img src="<?php echo htmlspecialchars($cruise['image']); ?>" alt="<?php echo htmlspecialchars($cruise['name']); ?>">
                            </div>
                            <div class="cruise-content">
                                <h3><?php echo htmlspecialchars($cruise['name']); ?></h3>
                                <p class="cruise-location"><?php echo htmlspecialchars($cruise['location']); ?></p>
                                <p><?php echo htmlspecialchars($cruise['description']); ?></p>
                                <ul class="highlights-list">
                                    <?php foreach ($cruise['highlights'] as $highlight): ?>
                                        <li><?php echo htmlspecialchars($highlight); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ONBOARD EXPERIENCE SECTION -->
        <section class="section">
            <div class="container">
                <h2 class="section-title">Trải Nghiệm Trên Tàu</h2>
                <p class="section-subtitle">Tận hưởng dịch vụ đẳng cấp và các hoạt động thú vị ngay trên du thuyền.</p>
                <div class="onboard-grid">
                    <div class="experience-item">
                        <div class="experience-icon">🍽️</div>
                        <h3>Ẩm thực tinh hoa</h3>
                        <p>Thưởng thức các món ăn Âu - Á và đặc sản địa phương do các đầu bếp tài năng chế biến.</p>
                    </div>
                    <div class="experience-item">
                        <div class="experience-icon">🛏️</div>
                        <h3>Phòng nghỉ sang trọng</h3>
                        <p>Các cabin tiện nghi với cửa sổ lớn hoặc ban công riêng, mang đến tầm nhìn tuyệt đẹp.</p>
                    </div>
                    <div class="experience-item">
                        <div class="experience-icon">🌅</div>
                        <h3>Sundeck & Bar</h3>
                        <p>Thư giãn trên boong tắm nắng, nhâm nhi một ly cocktail và ngắm hoàng hôn lãng mạn.</p>
                    </div>
                    <div class="experience-item">
                        <div class="experience-icon">🧘</div>
                        <h3>Hoạt động đa dạng</h3>
                        <p>Tham gia các lớp học nấu ăn, câu mực đêm, tập Thái Cực Quyền và nhiều hoạt động khác.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- REVIEWS SECTION -->
        <section class="section tour-reviews"> <!-- Sử dụng class .section để có padding chung và .tour-reviews cho styling -->
            <div class="container">
                <h2 class="section-title">Đánh Giá Từ Du Khách</h2>
                <div class="review-list">
                    <?php if (!empty($page_details['reviews'])): ?>
                        <?php foreach ($page_details['reviews'] as $review): ?>
                            <div class="review-item">
                                <div class="review-header">
                                    <strong class="review-author"><?php echo htmlspecialchars($review['user_name']); ?></strong>
                                    <span class="review-date"><?php echo htmlspecialchars($review['date']); ?></span>
                                </div>
                                <div class="review-stars">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <?php if ($i < $review['rating']): ?>
                                            <span class="star-filled">★</span>
                                        <?php else: ?>
                                            <span class="star-empty">☆</span>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                                <p class="review-comment"><?php echo nl2br(htmlspecialchars($review['comment'])); ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="text-align: center; width: 100%;">Chưa có đánh giá nào cho các hành trình này.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="section cta-section">
            <div class="container">
                <h2 class="section-title">Bắt Đầu Hành Trình Của Bạn</h2>
                <p class="section-subtitle">Khám phá các lựa chọn du thuyền và tìm cho mình chuyến đi trong mơ.</p>
                <a href="/tours/water-tours-list" class="btn-cta">Khám Phá Các Tour Du Thuyền</a>
            </div>
        </section>

    </main>
</body>

</html>