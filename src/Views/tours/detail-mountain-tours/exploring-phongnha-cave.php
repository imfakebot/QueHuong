<?php
// Dữ liệu cụ thể cho trang "Khám Phá Hang Động Phong Nha"
$tour_details = [
    'title' => 'Khám Phá Hang Động Phong Nha - Kẻ Bàng',
    'subtitle' => 'Hành trình 2 ngày 1 đêm khám phá Di sản Thiên nhiên Thế giới, chèo thuyền trên dòng sông ngầm và chiêm ngưỡng vẻ đẹp kỳ ảo của thạch nhũ.',
    'hero_image' => 'https://phongnhadiscovery.com/sites/default/files/styles/original/public/362251951_659907446173634_8123523357854651626_n_5.jpg?itok=nbZchWw9', // Ảnh hero Phong Nha
    'overview' => [
        'duration' => '2 Ngày / 1 Đêm',
        'departure' => 'Hàng ngày từ Đồng Hới / Phong Nha',
        'difficulty' => 'Dễ - Trung bình (Đi bộ và thuyền)',
        'group_size' => 'Tối đa 12 người'
    ],
    'gallery' => [
        ['url' => 'https://phongnhacavestour.com/wp-content/uploads/2016/11/Phong-Nha-Cave-2.jpg', 'alt' => 'Thuyền đưa du khách vào cửa Động Phong Nha'],
        ['url' => 'https://quangbinhgo.com/wp-content/uploads/2020/04/paradise-cave-tourist.jpg', 'alt' => 'Vẻ đẹp tráng lệ bên trong Động Thiên Đường'],
        ['url' => 'https://mia.vn/media/uploads/blog-du-lich/tat-tan-tat-trai-nghiem-zipline-song-chay-hang-toi-quang-binh-01-1653480770.jpeg', 'alt' => 'Du khách chơi zipline trên Sông Chày'],
        ['url' => 'https://image.sggp.org.vn/w1000/Uploaded/2025/zfuswurkxr/2021_01_11/fb_img_1557874683112_riko_MPZF.jpg', 'alt' => 'Thạch nhũ với hình thù kỳ ảo'],
    ],
    'itinerary' => [
        'day_1' => [
            'title' => 'NGÀY 1 | ĐỒNG HỚI – ĐỘNG PHONG NHA – LÀNG PHONG NHA',
            'details' => [
                '<strong>Sáng:</strong> Xe và hướng dẫn viên đón quý khách tại Đồng Hới (sân bay, ga tàu, khách sạn). Khởi hành đi Vườn Quốc gia Phong Nha - Kẻ Bàng, Di sản Thiên nhiên Thế giới.',
                '<strong>Trưa:</strong> Đến Phong Nha, quý khách dùng bữa trưa tại nhà hàng địa phương với các món ăn đặc sản.',
                '<strong>Chiều:</strong> Quý khách lên thuyền, ngược dòng sông Son thơ mộng để đến với Động Phong Nha. Thuyền sẽ đi sâu vào trong hang để quý khách chiêm ngưỡng "7 cái nhất": hang nước dài nhất, cửa hang cao và rộng nhất, bãi cát và đá đẹp nhất, hồ ngầm đẹp nhất, thạch nhũ tráng lệ và kỳ ảo nhất, dòng sông ngầm dài nhất Việt Nam và hang khô rộng và đẹp nhất.',
                '<strong>Tối:</strong> Quý khách nhận phòng khách sạn/homestay tại Phong Nha. Ăn tối và tự do khám phá thị trấn Phong Nha yên bình về đêm.'
            ]
        ],
        'day_2' => [
            'title' => 'NGÀY 2 | ĐỘNG THIÊN ĐƯỜNG – SÔNG CHÀY & HANG TỐI (Tùy chọn) – ĐỒNG HỚI',
            'details' => [
                '<strong>Sáng:</strong> Sau bữa sáng, xe đưa quý khách tham quan Động Thiên Đường, được mệnh danh là "hoàng cung trong lòng đất". Quý khách sẽ đi bộ qua hệ thống cầu thang gỗ dài 1km để chiêm ngưỡng vô vàn thạch nhũ lộng lẫy, tráng lệ.',
                '<strong>Trưa:</strong> Quý khách ăn trưa tại nhà hàng.',
                '<strong>Chiều (Tùy chọn 1):</strong> Tham gia các hoạt động mạo hiểm tại Sông Chày – Hang Tối: đu zipline qua sông, chèo kayak, tắm bùn khoáng tự nhiên trong hang.',
                '<strong>Chiều (Tùy chọn 2):</strong> Nếu không tham gia Hang Tối, quý khách có thể ghé thăm Suối Moọc để thư giãn và tắm suối.',
                '<strong>16:00:</strong> Xe đưa quý khách trở về Đồng Hới, kết thúc hành trình khám phá Phong Nha đầy thú vị.'
            ]
        ]
    ],
    'includes' => ['Xe du lịch đời mới đưa đón tại Đồng Hới', 'Hướng dẫn viên am hiểu', 'Các bữa ăn trong chương trình (2 trưa, 1 tối, 1 sáng)', 'Vé tham quan các điểm (Động Phong Nha, Động Thiên Đường)', 'Thuyền tham quan', '1 đêm tại khách sạn/homestay', 'Nước uống'],
    'excludes' => ['Vé tham quan Sông Chày - Hang Tối hoặc Suối Moọc (tùy chọn)', 'Đồ uống trong bữa ăn', 'Chi phí cá nhân', 'Tiền tip cho HDV & lái xe'],
    'price' => '2,850,000 VNĐ / người'
];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tour_details['title']); ?></title>
    <!-- Link đến file CSS CHUNG cho tất cả các trang chi tiết -->
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
                            <span class="overview-icon">🪨</span> <!-- Icon hang động -->
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

    <!-- ===== MODAL XEM ẢNH (Tái sử dụng)===== -->
    <div id="image-modal-viewer" class="modal-viewer">
        <span class="close-modal-btn">×</span>
        <div class="modal-content">
            <a class="prev-btn">❮</a>
            <img id="modal-image" src="" alt="Xem ảnh chi tiết">
            <a class="next-btn">❯</a>
        </div>
    </div>

    <!-- ===== SCRIPT ĐIỀU KHIỂN GALLERY (Tái sử dụng)===== -->
    <script src="/js/detail-mountain-tours.js"></script>

</body>

</html>