<?php
// Dữ liệu cho trang Beach Escapes
$page_details = [
    'title' => 'Những Bờ Biển Thiên Đường',
    'subtitle' => 'Làn nước trong xanh, bãi cát trắng mịn và ánh nắng vàng rực rỡ. Khám phá những bãi biển đẹp nhất Việt Nam, nơi bạn có thể gác lại mọi lo toan và hòa mình vào thiên nhiên.',
    'hero_image' => 'https://images2.thanhnien.vn/528068263637045248/2023/11/14/gettyrf526834933-16999266510381656128541.jpg',
];

// Mảng chứa thông tin các bãi biển
$beaches = [
    [
        'name' => 'Bãi Sao, Phú Quốc',
        'location' => 'Đảo Ngọc Phú Quốc, Kiên Giang',
        'image' => 'https://mia.vn/media/uploads/blog-du-lich/bai-sao-phu-quoc-diem-dung-chan-ly-tuong-tren-dao-ngoc-1610608235.jpg',
        'description' => 'Được mệnh danh là một trong những bãi biển đẹp nhất hành tinh, Bãi Sao quyến rũ du khách bởi bãi cát trắng mịn như kem và làn nước xanh màu ngọc bích. Đây là nơi lý tưởng để thư giãn, bơi lội và tận hưởng không khí trong lành.',
        'activities' => ['Tắm biển & phơi nắng', 'Lặn ngắm san hô', 'Chèo thuyền kayak', 'Thưởng thức hải sản tươi sống']
    ],
    [
        'name' => 'Vịnh Nha Trang',
        'location' => 'Thành phố Nha Trang, Khánh Hòa',
        'image' => 'https://cdn1.nhatrangtoday.vn/images/photos/Vinh-Nha-Trang-13.jpg',
        'description' => 'Vịnh Nha Trang là một quần thể du lịch đa dạng với các hòn đảo lớn nhỏ và một trong những vịnh biển đẹp nhất thế giới. Nơi đây không chỉ có bãi tắm đẹp mà còn nổi tiếng với các hoạt động thể thao dưới nước sôi động.',
        'activities' => ['Du thuyền khám phá vịnh', 'Dù lượn, mô tô nước', 'Tham quan Viện Hải dương học', 'Tắm bùn khoáng nóng']
    ],
    [
        'name' => 'Bãi biển Mỹ Khê',
        'location' => 'Thành phố Đà Nẵng',
        'image' => 'https://havi-web.s3.ap-southeast-1.amazonaws.com/bien_my_khe_da_nang_8_11zon_22a69d7f00.webp',
        'description' => 'Tạp chí Forbes đã bình chọn Mỹ Khê là một trong sáu bãi biển quyến rũ nhất hành tinh. Với đường bờ biển dài, cát trắng và sóng ôn hòa, Mỹ Khê là điểm đến yêu thích của cả người dân địa phương và du khách quốc tế.',
        'activities' => ['Lướt sóng cho người mới bắt đầu', 'Bóng chuyền bãi biển', 'Ngắm bình minh và hoàng hôn', 'Dạo bộ dọc bờ biển']
    ]
];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_details['title']); ?></title>

    <!-- Nạp DUY NHẤT file CSS cho trang Beach -->
    <link rel="stylesheet" href="/css/page-beach-escapes.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <main class="beach-page">
        <!-- HERO SECTION -->
        <header class="hero-section" style="background-image: url('<?php echo htmlspecialchars($page_details['hero_image']); ?>');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="hero-title"><?php echo htmlspecialchars($page_details['title']); ?></h1>
                <p class="hero-subtitle"><?php echo htmlspecialchars($page_details['subtitle']); ?></p>
            </div>
        </header>

        <!-- BEACHES INTRO SECTION -->
        <section class="beach-intro-section">
            <div class="container">
                <h2 class="section-title">Điểm Đến Hàng Đầu</h2>
                <div class="beach-list">
                    <?php foreach ($beaches as $beach): ?>
                        <article class="beach-card">
                            <div class="beach-image">
                                <img src="<?php echo htmlspecialchars($beach['image']); ?>" alt="<?php echo htmlspecialchars($beach['name']); ?>">
                            </div>
                            <div class="beach-content">
                                <h3 class="beach-name"><?php echo htmlspecialchars($beach['name']); ?></h3>
                                <span class="beach-location"><?php echo htmlspecialchars($beach['location']); ?></span>
                                <p class="beach-description"><?php echo htmlspecialchars($beach['description']); ?></p>
                                <h4>Hoạt động không thể bỏ lỡ:</h4>
                                <ul class="activity-list">
                                    <?php foreach ($beach['activities'] as $activity): ?>
                                        <li><?php echo htmlspecialchars($activity); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- AMENITIES SECTION -->
        <section class="amenities-section">
            <div class="container">
                <h2 class="section-title">Trải Nghiệm Trọn Vẹn</h2>
                <p class="section-subtitle">Mọi thứ bạn cần cho một kỳ nghỉ hoàn hảo đều ở đây.</p>
                <div class="amenities-grid">
                    <div class="amenity-item">
                        <div class="amenity-icon">🏖️</div>
                        <h3>Bãi tắm công cộng</h3>
                        <p>An toàn, sạch sẽ với đội ngũ cứu hộ chuyên nghiệp.</p>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">🏨</div>
                        <h3>Resort & Khách sạn</h3>
                        <p>Đa dạng lựa chọn từ bình dân đến cao cấp ngay sát biển.</p>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">🦞</div>
                        <h3>Ẩm thực địa phương</h3>
                        <p>Thưởng thức hải sản tươi ngon tại các nhà hàng ven biển.</p>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">☀️</div>
                        <h3>Dịch vụ cho thuê</h3>
                        <p>Dễ dàng thuê ghế, dù, ván lướt sóng và các thiết bị khác.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CALL TO ACTION / BOOKING SECTION -->
        <section class="booking-cta-section">
            <div class="container">
                <h2 class="section-title">Sẵn Sàng Cho Kỳ Nghỉ Biển?</h2>
                <p class="section-subtitle">Liên hệ với chúng tôi để được tư vấn và đặt những gói dịch vụ tốt nhất cho chuyến đi của bạn đến những bờ biển thiên đường này!</p>
                <div class="contact-actions">
                    <a href="/contact" class="btn-primary">Liên Hệ Tư Vấn</a>
                    <a href="/tours/water-tours" class="btn-secondary">Xem Các Tour Biển</a>
                </div>
                <div class="contact-details-inline">
                    <p>Hoặc gọi ngay: <a href="tel:+84123456789">(+84) 123 456 789</a></p>
                    <p>Email: <a href="mailto:booking@vietnamquehuong.com">booking@vietnamquehuong.com</a></p>
                </div>
            </div>
        </section>

    </main>

</body>

</html>