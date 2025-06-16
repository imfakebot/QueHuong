<?php
// Dữ liệu cụ thể cho trang "Ninh Bình - Di Sản Kép"
$tour_details = [
    'title' => 'Ninh Bình: Di Sản Kép Tràng An & Cố Đô Hoa Lư',
    'subtitle' => 'Một ngày về với vùng đất "Hạ Long trên cạn", xuôi thuyền giữa non nước Tràng An và ngược dòng lịch sử tại cố đô Hoa Lư xưa.',
    'hero_image' => 'https://dichungtaxi.com/blog/wp-content/uploads/2023/03/Hoa-Lu-2.png', // Sửa link ảnh
    'overview' => [
        'duration' => 'Trọn 1 Ngày',
        'departure' => 'Hàng ngày từ Hà Nội',
        'difficulty' => 'Dễ (Phù hợp mọi lứa tuổi)',
        'group_size' => 'Tối đa 20 người'
    ],
    'gallery' => [
        ['url' => 'https://baovinhlong.com.vn/file/e7837c027f6ecd14017ffa4e5f2a0e34/dataimages/201911/original/images2242181_image007.jpg', 'alt' => 'Thuyền đi qua các hang động ở Tràng An'],
        ['url' => 'https://cdn.24h.com.vn/upload/3-2024/images/2024-07-16/1721065408-z5629688620531d903462ec59d5894dc9860b57dc1548c-1720863211103823106453-width640height360.jpg', 'alt' => 'Cổng vào khu di tích Cố đô Hoa Lư'],
        ['url' => 'https://t2.ex-cdn.com/crystalbay.com/resize/1860x570/files/news/2024/08/09/hang-mua-diem-den-check-in-dep-nhu-mo-o-ninh-binh-145243.jpg', 'alt' => 'Đỉnh Hang Múa nhìn xuống dòng sông uốn lượn'],
        ['url' => 'https://i2.ex-cdn.com/crystalbay.com/files/content/2025/02/28/nen-di-hang-mua-luc-may-gio-3-1432.jpg', 'alt' => 'Cảnh đồng lúa xanh mướt ven đường'],
    ],
    'itinerary' => [
        'day_1' => [
            'title' => 'TRỌN NGÀY | HÀ NỘI – HOA LƯ – TRÀNG AN – HANG MÚA',
            'details' => [
                '<strong>07:30 - 08:00:</strong> Xe limousine và hướng dẫn viên đón quý khách tại khu vực Phố Cổ Hà Nội, khởi hành đi Ninh Bình.',
                '<strong>10:00:</strong> Đến Cố đô Hoa Lư, kinh đô đầu tiên của nhà nước phong kiến Việt Nam. Quý khách tham quan đền vua Đinh Tiên Hoàng và vua Lê Đại Hành.',
                '<strong>12:00:</strong> Thưởng thức bữa trưa buffet tại nhà hàng địa phương với các đặc sản nổi tiếng như thịt dê núi, cơm cháy.',
                '<strong>13:30:</strong> Lên thuyền nan tại khu du lịch Tràng An, bắt đầu hành trình khám phá hệ thống hang động và núi đá vôi được UNESCO công nhận.',
                '<strong>15:30:</strong> Chinh phục gần 500 bậc thang đá tại Hang Múa để lên tới đỉnh Ngọa Long, ngắm trọn vẹn vẻ đẹp của Tam Cốc từ trên cao.',
                '<strong>17:00:</strong> Lên xe trở về Hà Nội. Kết thúc một ngày khám phá đáng nhớ.'
            ]
        ]
    ],
    'includes' => ['Xe Limousine đưa đón', 'Hướng dẫn viên song ngữ', 'Bữa trưa buffet', 'Vé tham quan các điểm', 'Thuyền tham quan Tràng An', 'Nước uống'],
    'excludes' => ['Đồ uống trong bữa ăn', 'Chi phí cá nhân', 'Thuế VAT', 'Tiền tip cho HDV & lái xe'],
    'notes' => [
        'Nên mang theo mũ, kính râm và kem chống nắng.',
        'Trang phục lịch sự khi vào thăm đền, chùa.',
        'Mang giày thể thao thoải mái, tiện cho việc đi bộ và leo núi.',
        'Lịch trình có thể thay đổi tùy thuộc vào điều kiện thời tiết.'
    ],
    'price' => '1,250,000 VNĐ / người'
];

// Giả định $pageTitle sẽ được đặt ở đây để header.php có thể sử dụng
$pageTitle = htmlspecialchars($tour_details['title']);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Link đến file CSS chung -->
    <link rel="stylesheet" href="/css/cultural-tours.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Lora:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="tour-detail-page">
        <!-- Các section HTML giữ nguyên cấu trúc như trước -->
        <header class="tour-hero" style="background-image: url('<?php echo htmlspecialchars($tour_details['hero_image']); ?>');">
            <div class="tour-hero-content">
                <h1><?php echo htmlspecialchars($tour_details['title']); ?></h1>
                <p><?php echo htmlspecialchars($tour_details['subtitle']); ?></p>
            </div>
        </header>

        <div class="page-container">
            <div class="tour-main-content">
                <section class="tour-overview">
                    <div class="overview-grid">
                        <div class="overview-item">
                            <span class="overview-icon">⏳</span>
                            <span class="overview-label">Thời gian</span>
                            <span class="overview-value"><?php echo htmlspecialchars($tour_details['overview']['duration']); ?></span>
                        </div>
                        <div class="overview-item">
                            <span class="overview-icon">🏞️</span> <!-- Icon cho Di sản Kép -->
                            <span class="overview-label">Độ khó</span>
                            <span class="overview-value"><?php echo htmlspecialchars($tour_details['overview']['difficulty']); ?></span>
                        </div>
                        <div class="overview-item">
                            <span class="overview-icon">📍</span>
                            <span class="overview-label">Khởi hành</span>
                            <span class="overview-value"><?php echo htmlspecialchars($tour_details['overview']['departure']); ?></span>
                        </div>
                        <div class="overview-item">
                            <span class="overview-icon">👥</span>
                            <span class="overview-label">Nhóm</span>
                            <span class="overview-value"><?php echo htmlspecialchars($tour_details['overview']['group_size']); ?></span>
                        </div>
                    </div>
                </section>
                <section class="tour-gallery">
                    <?php foreach ($tour_details['gallery'] as $image): ?>
                        <img src="<?php echo htmlspecialchars($image['url']); ?>" alt="<?php echo htmlspecialchars($image['alt']); ?>">
                    <?php endforeach; ?>
                </section>
                <section class="tour-tabs">
                    <div class="tab-buttons">
                        <button class="tab-button active" data-tab="itinerary">Lịch trình</button>
                        <button class="tab-button" data-tab="details">Chi tiết Tour</button>
                        <button class="tab-button" data-tab="notes">Lưu ý quan trọng</button>
                    </div>
                    <div class="tab-content-container">
                        <div id="itinerary" class="tab-content active">
                            <div class="timeline">
                                <?php foreach ($tour_details['itinerary'] as $day_key => $day_data): ?>
                                    <div class="timeline-item">
                                        <div class="timeline-content">
                                            <h3><?php echo htmlspecialchars($day_data['title']); ?></h3>
                                            <?php foreach ($day_data['details'] as $detail): ?>
                                                <p><?php echo $detail; // Cho phép thẻ <strong> 
                                                    ?></p>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div id="details" class="tab-content">
                            <h4>Bao gồm trong tour:</h4>
                            <ul class="includes-list">
                                <?php foreach ($tour_details['includes'] as $item): ?>
                                    <li><?php echo htmlspecialchars($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <h4>Không bao gồm trong tour:</h4>
                            <ul class="excludes-list">
                                <?php foreach ($tour_details['excludes'] as $item): ?>
                                    <li><?php echo htmlspecialchars($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div id="notes" class="tab-content">
                            <h4>Những điều cần lưu ý:</h4>
                            <ul class="notes-list">
                                <?php foreach ($tour_details['notes'] as $note): ?>
                                    <li><?php echo htmlspecialchars($note); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <aside class="tour-sidebar">
                <div class="booking-widget">
                    <div class="price-section">
                        <span class="price-label">Giá chỉ từ</span>
                        <span class="price-value"><?php echo htmlspecialchars($tour_details['price']); ?></span>
                    </div>
                    <form class="booking-form" action="/booking-process" method="POST"> <input type="hidden" name="tour_id" value="ninh-binh-heritage"> <input type="hidden" name="tour_name" value="<?php echo htmlspecialchars($tour_details['title']); ?>">
                        <div class="form-group"> <label for="booking-date">Chọn ngày đi:</label> <input type="date" id="booking-date" name="booking_date" required> </div>
                        <div class="form-group"> <label for="num-travelers">Số lượng khách:</label> <input type="number" id="num-travelers" name="num_travelers" value="1" min="1" required> </div> <button type="submit" class="btn-book-now">Đặt Tour Ngay</button>
                    </form>
                    <div class="contact-info-sidebar">
                        <p>Hoặc liên hệ tư vấn:</p>
                        <p>📞 <a href="tel:+84123456789">(+84) 123 456 789</a></p>
                        <p>📧 <a href="mailto:info@vietnamquehuong.com">info@vietnamquehuong.com</a></p>
                    </div>
                </div>
            </aside>
        </div>
    </main>



    <!-- Link đến file JavaScript chung -->
    <script src="/js/cultural-tours.js"></script>
</body>

</html>