<?php
// Dữ liệu cho trang Spa & Massage
$page_details = [
    'title' => 'Spa & Massage: Tái Tạo Năng Lượng, Đánh Thức Giác Quan',
    'subtitle' => 'Tận hưởng những giây phút thư giãn tuyệt đối với các liệu pháp spa chuyên nghiệp, kết hợp giữa kỹ thuật truyền thống Việt Nam và phương pháp hiện đại trong một không gian thanh lịch và yên tĩnh.',
    'hero_image' => 'https://nvhphunu.vn/wp-content/uploads/images/2025-05/c3.jpg',
    'sections' => [
        'why_choose' => [
            'title' => 'Tại Sao Chọn Dịch Vụ Spa Của Chúng Tôi?',
            'items' => [
                [
                    'icon' => 'https://www.svgrepo.com/show/56152/massage-spa-body-treatment.svg',
                    'title' => 'Chuyên Gia Lành Nghề',
                    'description' => 'Đội ngũ kỹ thuật viên được đào tạo chuyên sâu, giàu kinh nghiệm, đảm bảo mang đến cho bạn những liệu trình hiệu quả và an toàn nhất.'
                ],
                [
                    'icon' => 'https://www.svgrepo.com/show/352495/spa.svg',
                    'title' => 'Sản Phẩm Thiên Nhiên',
                    'description' => 'Chúng tôi ưu tiên sử dụng các sản phẩm hữu cơ, tinh dầu và thảo dược tự nhiên, an toàn cho mọi loại da và tốt cho sức khỏe.'
                ],
                [
                    'icon' => 'https://www.svgrepo.com/show/26418/relaxing-spa-ornaments.svg',
                    'title' => 'Không Gian Tinh Tế',
                    'description' => 'Thiết kế không gian sang trọng, ấm cúng với âm nhạc du dương và hương thơm dịu nhẹ, giúp bạn hoàn toàn thư giãn tâm trí và cơ thể.'
                ]
            ]
        ]
    ],
    'service_packages' => [
        [
            'name' => 'Massage Thảo Dược Việt Nam',
            'duration' => '60 / 90 phút',
            'price' => 'Từ 750,000 VNĐ',
            'description' => 'Liệu pháp kết hợp kỹ thuật massage truyền thống với túi thảo dược nóng, giúp giảm đau nhức cơ bắp, cải thiện tuần hoàn máu và mang lại cảm giác thư thái sâu.',
            'image' => 'https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_750,h_500/https://saigonsmilespa.com.vn/images/a-trong/massage-body-tui-thao-duoc.jpg'
        ],
        [
            'name' => 'Chăm Sóc Da Mặt Chuyên Sâu',
            'duration' => '75 phút',
            'price' => 'Từ 900,000 VNĐ',
            'description' => 'Làm sạch sâu, tẩy tế bào chết, đắp mặt nạ và massage da mặt bằng các sản phẩm hữu cơ. Giúp làn da của bạn trở nên tươi sáng, mịn màng và tràn đầy sức sống.',
            'image' => 'https://images.squarespace-cdn.com/content/v1/58f0309d29687f8742512130/1608466601452-47P6A9MML504T0E82TMW/ch%C4%83m+s%C3%B3c+da+m%E1%BA%B7t+chuy%C3%AAn+s%C3%A2u.jpeg'
        ],
        [
            'name' => 'Massage Đá Nóng',
            'duration' => '90 phút',
            'price' => 'Từ 1,100,000 VNĐ',
            'description' => 'Sử dụng những viên đá bazan được làm nóng, đặt lên các huyệt đạo trên cơ thể. Hơi nóng từ đá giúp giải tỏa căng thẳng, giảm stress và cân bằng năng lượng.',
            'image' => 'https://htgsoft.vn/wp-content/uploads/2023/12/massage-da-nong-la-gi.jpg'
        ],
        [
            'name' => 'Gói Tái Tạo Năng Lượng Toàn Thân',
            'duration' => '120 phút',
            'price' => 'Từ 1,800,000 VNĐ',
            'description' => 'Gói dịch vụ cao cấp bao gồm tẩy tế bào chết toàn thân, ủ dưỡng thể và massage thư giãn. Một trải nghiệm hoàn hảo để nuông chiều bản thân.',
            'image' => 'https://lamourspadalat.com/wp-content/uploads/2023/07/combo-1.png'
        ]
    ],
    'gallery' => [
        ['url' => 'https://www.intercontinentalphuquoc.com/uploads/harnn-spa/harnn-spa-reception.jpg', 'alt' => 'Không gian lễ tân spa'],
        ['url' => 'https://www.marriott.com/content/dam/mar-biz/hotels/property-images/repository-images/hnasi/hnasi-spa-treatment-room-9993-hor-clsc.jpg', 'alt' => 'Phòng trị liệu đôi'],
        ['url' => 'https://www.hyatt.com/content/dam/hyatt/hyattdam/images/2022/04/12/1443/DADXT-P0219-Xuan-Spa-Single-Treatment-Room.jpg', 'alt' => 'Chi tiết sản phẩm spa'],
        ['url' => 'https://www.aman.com/sites/default/files/2021-03/Amanoi-Spa-massage-treatment.jpg', 'alt' => 'Khách hàng đang thư giãn']
    ]
];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_details['title']); ?></title>
    <!-- Link đến file CSS mới cho trang Spa -->
    <link rel="stylesheet" href="/css/page-spa-massage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <main class="spa-page">
        <!-- HERO SECTION -->
        <header class="spa-hero" style="background-image: url('<?php echo htmlspecialchars($page_details['hero_image']); ?>');">
            <div class="spa-hero-overlay"></div>
            <div class="spa-hero-content">
                <h1 class="spa-title"><?php echo htmlspecialchars($page_details['title']); ?></h1>
                <p class="spa-subtitle"><?php echo htmlspecialchars($page_details['subtitle']); ?></p>
                <a href="#service-packages" class="btn-discover">Khám Phá Dịch Vụ</a>
            </div>
        </header>

        <!-- WHY CHOOSE US SECTION -->
        <section class="why-choose-section">
            <div class="container">
                <h2 class="section-title"><?php echo htmlspecialchars($page_details['sections']['why_choose']['title']); ?></h2>
                <div class="features-grid">
                    <?php foreach ($page_details['sections']['why_choose']['items'] as $item): ?>
                        <div class="feature-item">
                            <img src="<?php echo htmlspecialchars($item['icon']); ?>" alt="" class="feature-icon">
                            <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                            <p><?php echo htmlspecialchars($item['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- SERVICE PACKAGES SECTION -->
        <section id="service-packages" class="service-packages-section">
            <div class="container">
                <h2 class="section-title">Các Gói Dịch Vụ Nổi Bật</h2>
                <div class="packages-grid">
                    <?php foreach ($page_details['service_packages'] as $package): ?>
                        <div class="package-card">
                            <div class="package-image">
                                <img src="<?php echo htmlspecialchars($package['image']); ?>" alt="<?php echo htmlspecialchars($package['name']); ?>">
                            </div>
                            <div class="package-content">
                                <h3><?php echo htmlspecialchars($package['name']); ?></h3>
                                <div class="package-meta">
                                    <span>⏳ <?php echo htmlspecialchars($package['duration']); ?></span>
                                    <span>💰 <?php echo htmlspecialchars($package['price']); ?></span>
                                </div>
                                <p><?php echo htmlspecialchars($package['description']); ?></p>
                                <a href="#contact-booking" class="btn-book-package">Đặt Lịch Ngay</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- GALLERY SECTION -->
        <section class="spa-gallery-section">
            <div class="container">
                <h2 class="section-title">Không Gian Trải Nghiệm</h2>
                <div class="gallery-grid">
                    <?php foreach ($page_details['gallery'] as $image): ?>
                        <div class="gallery-item">
                            <img src="<?php echo htmlspecialchars($image['url']); ?>" alt="<?php echo htmlspecialchars($image['alt']); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- BOOKING/CONTACT SECTION -->
        <section id="contact-booking" class="booking-section">
            <div class="container">
                <h2 class="section-title">Đặt Lịch Hẹn</h2>
                <p class="section-subtitle">Vui lòng liên hệ với chúng tôi qua điện thoại hoặc email để được tư vấn và đặt lịch hẹn cho trải nghiệm thư giãn của bạn.</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <strong>Điện thoại:</strong> <a href="tel:+84123456789">(+84) 123 456 789</a>
                    </div>
                    <div class="contact-item">
                        <strong>Email:</strong> <a href="mailto:booking.spa@vietnamquehuong.com">booking.spa@vietnamquehuong.com</a>
                    </div>
                    <div class="contact-item">
                        <strong>Giờ mở cửa:</strong> 9:00 - 22:00 hàng ngày
                    </div>
                </div>
            </div>
        </section>

    </main>
</body>

</html>