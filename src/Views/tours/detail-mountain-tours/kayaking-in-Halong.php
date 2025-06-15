<?php
// Dữ liệu cụ thể cho trang "Kayaking in Ha Long Bay"
// CẤU TRÚC ĐÃ ĐƯỢC ĐỒNG BỘ HOÀN TOÀN VỚI TRANG SAPA
$tour_details = [
    'title' => 'Chèo Kayak Khám Phá Vịnh Hạ Long',
    'subtitle' => 'Một ngày đắm mình trong kỳ quan thiên nhiên thế giới, tự do len lỏi qua những hang động và bãi biển ẩn mình bằng chính chiếc thuyền kayak của bạn.',
    'hero_image' => 'https://images.vietnamtourism.gov.vn/vn/images/2016/anhInternet/00Halong-kayak.jpg', // Ảnh hero cho Hạ Long
    'overview' => [
        'duration' => 'Trọn 1 Ngày',
        'departure' => 'Hàng ngày từ Hạ Long',
        'difficulty' => 'Dễ (Phù hợp cho mọi lứa tuổi)',
        'group_size' => 'Tối đa 15 người'
    ],
    'gallery' => [
        ['url' => 'https://www.dulichhalong.net/wp-content/uploads/2013/07/Kayak-VInh-Ha-Long.jpg', 'alt' => 'Du khách chèo kayak qua một hang động'],
        ['url' => 'https://dulichviet.com.vn/images/bandidau/bai-tam-ba-trai-dao-ha-long.jpg', 'alt' => 'Một bãi biển hoang sơ trong vịnh'],
        ['url' => 'https://owa.bestprice.vn/images/cruises/uploads/du-thuyen-ambassador-1-ngay-6507fce2dfcfe.jpg', 'alt' => 'Du thuyền trên Vịnh Hạ Long'],
        ['url' => 'https://www.1travel.vn/uploads/photo-e/blog/Am-Thuc-Du-Thuyen-Ha-Long/Untitled%20design%20(16)-ori.jpg', 'alt' => 'Bữa trưa hải sản tươi ngon trên tàu'],
    ],
    'itinerary' => [
        'day_1' => [ // Sử dụng 'day_1' để giữ cấu trúc, dù tour chỉ có 1 ngày
            'title' => 'TRỌN NGÀY | HẠ LONG – KHÁM PHÁ VỊNH BẰNG KAYAK',
            'details' => [
                '<strong>8:00:</strong> Xe đón tại khách sạn hoặc điểm hẹn ở khu vực Bãi Cháy, Hạ Long, di chuyển đến bến tàu du lịch.',
                '<strong>9:00:</strong> Lên du thuyền, bắt đầu hành trình khám phá Vịnh. Hướng dẫn viên sẽ phổ biến lịch trình và các quy tắc an toàn khi chèo kayak.',
                '<strong>10:00:</strong> Tàu dừng tại khu vực Hang Luồn. Quý khách nhận kayak và bắt đầu chèo thuyền, len lỏi qua các hang động để khám phá các áng, hồ nước yên tĩnh bên trong núi đá.',
                '<strong>12:00:</strong> Thưởng thức bữa trưa trên du thuyền với các món hải sản tươi sống được chế biến theo phong cách địa phương.',
                '<strong>13:30:</strong> Tàu di chuyển đến khu vực đảo Ti Tốp. Quý khách có thể tự do tắm biển, nghỉ ngơi trên bãi cát trắng mịn hoặc leo lên đỉnh núi để ngắm toàn cảnh Vịnh Hạ Long.',
                '<strong>15:30:</strong> Quý khách lên tàu quay trở về đất liền. Thư giãn và ngắm cảnh hoàng hôn buông xuống trên Vịnh.',
                '<strong>16:30:</strong> Tàu cập bến. Xe đưa quý khách về lại điểm đón ban đầu. Kết thúc chương trình.'
            ]
        ]
    ],
    'includes' => ['Xe đưa đón tại Hạ Long', 'Du thuyền tham quan Vịnh', 'Hướng dẫn viên chuyên nghiệp', 'Thuyền Kayak và áo phao', 'Vé thắng cảnh', '01 bữa trưa hải sản', 'Nước uống trên tàu'],
    'excludes' => ['Đồ uống gọi thêm', 'Chi phí cá nhân ngoài chương trình', 'Tiền tip cho HDV & lái xe (không bắt buộc)'],
    'price' => '850,000 VNĐ / người'
];
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tour_details['title']); ?></title>
    <!-- Link đến file CSS CHUNG cho cả 2 trang -->
    <link rel="stylesheet" href="/css/detail-page-mountain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Lora:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="tour-detail-page">
        <!-- HERO SECTION -->
        <header class="tour-hero" style="background-image: url('<?php echo htmlspecialchars($tour_details['hero_image']); ?>');">
            <div class="tour-hero-content">
                <h1><?php echo htmlspecialchars($tour_details['title']); ?></h1>
                <p><?php echo htmlspecialchars($tour_details['subtitle']); ?></p>
            </div>
        </header>

        <div class="page-container">
            <div class="tour-main-content">
                <!-- TOUR OVERVIEW -->
                <section class="tour-overview">
                    <div class="overview-grid">
                        <div class="overview-item">
                            <span class="overview-icon">⏳</span>
                            <span class="overview-label">Thời gian</span>
                            <span class="overview-value"><?php echo htmlspecialchars($tour_details['overview']['duration']); ?></span>
                        </div>
                        <div class="overview-item">
                            <span class="overview-icon">🚣</span> <!-- Thay icon phù hợp -->
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

                <!-- GALLERY -->
                <section class="tour-gallery">
                    <?php foreach ($tour_details['gallery'] as $image): ?>
                        <img src="<?php echo htmlspecialchars($image['url']); ?>" alt="<?php echo htmlspecialchars($image['alt']); ?>">
                    <?php endforeach; ?>
                </section>

                <!-- ITINERARY SECTION -->
                <section class="tour-itinerary">
                    <h2>Lịch trình</h2>
                    <div class="timeline">
                        <?php foreach ($tour_details['itinerary'] as $day_data): ?>
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
                </section>
            </div>

            <!-- SIDEBAR -->
            <aside class="tour-sidebar">
                <div class="booking-widget">
                    <div class="price-section">
                        <span class="price-label">Giá từ</span>
                        <span class="price-value"><?php echo htmlspecialchars($tour_details['price']); ?></span>
                    </div>
                    <form class="booking-form" action="/booking" method="post">
                        <input type="hidden" name="tour_name" value="<?php echo htmlspecialchars($tour_details['title']); ?>">
                        <div class="form-group">
                            <label for="booking-date">Chọn ngày khởi hành</label>
                            <input type="date" id="booking-date" name="booking_date" required>
                        </div>
                        <div class="form-group">
                            <label for="num-travelers">Số người</label>
                            <input type="number" id="num-travelers" name="num_travelers" min="1" value="1" required>
                        </div>
                        <button type="submit" class="btn-book-now">Đặt Tour Ngay</button>
                    </form>
                    <div class="tour-includes-excludes">
                        <h4>Bao gồm</h4>
                        <ul class="includes-list">
                            <?php foreach ($tour_details['includes'] as $item) echo "<li>" . htmlspecialchars($item) . "</li>"; ?>
                        </ul>
                        <h4>Không bao gồm</h4>
                        <ul class="excludes-list">
                            <?php foreach ($tour_details['excludes'] as $item) echo "<li>" . htmlspecialchars($item) . "</li>"; ?>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <div id="image-modal-viewer" class="modal-viewer">
        <span class="close-modal-btn">×</span>
        <div class="modal-content">
            <a class="prev-btn">❮</a>
            <img id="modal-image" src="" alt="Xem ảnh chi tiết">
            <a class="next-btn">❯</a>
        </div>
    </div>
    <script src="/js/detail-mountain-tours.js"></script>
</body>

</html>