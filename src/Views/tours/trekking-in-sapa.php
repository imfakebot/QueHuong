<?php
// Dữ liệu cụ thể cho trang "Trekking in Sapa"
$tour_details = [
    'title' => 'Trekking Sapa: Chinh Phục Thung Lũng Mường Hoa',
    'subtitle' => 'Một hành trình 2 ngày 1 đêm đi sâu vào trái tim của Hoàng Liên Sơn, khám phá những thửa ruộng bậc thang kỳ vĩ và cuộc sống bản địa mộc mạc.',
    'hero_image' => 'https://vietnamdiscovery.com/wp-content/uploads/2021/03/sapa-trekking-3-1.jpg', // Thay bằng đường dẫn ảnh của bạn
    'overview' => [
        'duration' => '2 Ngày / 1 Đêm',
        'departure' => 'Hàng ngày từ Hà Nội / Sapa',
        'difficulty' => 'Trung bình (Phù hợp cho người có sức khỏe tốt)',
        'group_size' => 'Tối đa 10 người'
    ],
    'gallery' => [
        ['url' => 'https://images2.thanhnien.vn/528068263637045248/2023/8/4/ban-sao-cua-dji0901-1691132710706875636958.jpg', 'alt' => 'Ruộng bậc thang mùa lúa xanh'],
        ['url' => 'https://mia.vn/media/uploads/blog-du-lich/trang-phuc-dan-toc-hmong-hoa-1726418370.jpg', 'alt' => 'Người dân tộc H\'Mông'],
        ['url' => 'https://motogo.vn/wp-content/uploads/2023/03/homestay-ban-ta-van-9.jpg', 'alt' => 'Homestay tại bản Tả Van'],
        ['url' => 'https://fansipanlegend.sunworld.vn/wp-content/uploads/2024/03/5-long-suoi.png', 'alt' => 'Vượt qua một con suối nhỏ'],
    ],
    'itinerary' => [
        'day_1' => [
            'title' => 'NGÀY 1 | HÀ NỘI– SAPA – HÀM RỒNG',
            'details' => [
                '<strong>6:30:</strong> Xe và hướng dẫn viên của chương trình đón quý khách tại khách sạn. Khởi hành đi Lào Cai, trên chạy theo đường cao tốc Nội Bài – Lào Cai dài 245km với chưa đầy 5h đồng hồ. Quý khách nghỉ ngơi trên xe và ngắm phong cảnh tuyệt đẹp trên cung đường này.',
                '<strong>12h00:</strong> Xe đưa du khách đến Sapa cách thành phố Lào cai 38km. Trưa: Đến Sapa, Quý khách ăn trưa và nhận phòng khách sạn. Nghỉ trưa.',
                '<strong>Chiều:</strong> Hướng dẫn viên đón khách tham quan: Khu du lịch Hàm Rồng với khung cảnh hoang sơ, kỳ vĩ. Thăm vườn lan Đông Dương với đủ loại, muôn sắc màu. Đầu Rồng Thạch Lâm kì vĩ, Vượt qua Cổng trời 1, Cổng trời 2, du khách sẽ được đặt chân đến nơi cao nhất của Hàm Rồng đó là sân Mây – nơi giao thoa của đất trời, ngắm toàn cảnh Sapa từ trên cao,...',
                '<strong>Tối:</strong> Quý khách ngủ trở về Khách sạn. Quý khách ăn tối. tự do khám phá thị trấn Sapa về đêm. Nghỉ đêm tại Sapa.'
            ]
        ],
        'day_2' => [
            'title' => 'NGÀY 2 | CÁT CÁT– HÀ NỘI',
            'details' => [
                '<strong>Sáng:</strong> Quý khách ăn sáng tại khách sạn.',
                '<strong>Trưa:</strong> Quý khách làm thủ tục trả phòng và ăn trưa.',
                '<strong>Chiều:</strong> Quý khách tự do mua sắm trước khi lên xe về Hà Nội.'
            ]
        ]
    ],
    // ================== PHẦN MỚI: DỮ LIỆU ĐÁNH GIÁ ==================
    'reviews' => [
        [
            'user_name' => 'Nguyễn Thu An',
            'rating' => 5,
            'comment' => 'Chuyến đi thật tuyệt vời! Hướng dẫn viên rất nhiệt tình, am hiểu văn hóa. Homestay sạch sẽ và đồ ăn rất ngon. Khung cảnh thì không còn gì để chê. Chắc chắn sẽ giới thiệu cho bạn bè!',
            'date' => '20/07/2024'
        ],
        [
            'user_name' => 'John Smith',
            'rating' => 5,
            'comment' => 'An amazing and authentic experience. The trek was challenging but rewarding. Our guide, May, was fantastic. The views are breathtaking. Highly recommended!',
            'date' => '15/07/2024'
        ],
        [
            'user_name' => 'Trần Minh Hoàng',
            'rating' => 4,
            'comment' => 'Tour rất ổn, cảnh đẹp. Chỉ có một góp ý nhỏ là bữa trưa ngày 2 hơi đơn giản. Còn lại mọi thứ đều tốt, đáng tiền.',
            'date' => '05/07/2024'
        ]
    ],
    // ================== KẾT THÚC PHẦN MỚI ==================
    'includes' => ['Xe đưa đón', 'Hướng dẫn viên địa phương', 'Các bữa ăn trong chương trình', 'Phí tham quan', '1 đêm tại khách sạn', 'Nước uống'],
    'excludes' => ['Đồ uống cá nhân', 'Chi phí cá nhân', 'Tiền tip cho HDV & lái xe'],
    'price' => '2,500,000 VNĐ / người'
];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tour_details['title']); ?></title>
    <link rel="stylesheet" href="/css/detail-page-mountain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Lora:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="tour-detail-page">
        <!-- ... (GIỮ NGUYÊN HERO SECTION) ... -->
        <header class="tour-hero" style="background-image: url('<?php echo htmlspecialchars($tour_details['hero_image']); ?>');">
            <div class="tour-hero-content">
                <h1><?php echo htmlspecialchars($tour_details['title']); ?></h1>
                <p><?php echo htmlspecialchars($tour_details['subtitle']); ?></p>
            </div>
        </header>

        <div class="page-container">
            <div class="tour-main-content">
                <!-- ... (GIỮ NGUYÊN TOUR OVERVIEW, GALLERY, ITINERARY) ... -->
                <section class="tour-overview">
                    <div class="overview-grid">
                        <div class="overview-item">
                            <span class="overview-icon">⏳</span>
                            <span class="overview-label">Thời gian</span>
                            <span class="overview-value"><?php echo htmlspecialchars($tour_details['overview']['duration']); ?></span>
                        </div>
                        <div class="overview-item">
                            <span class="overview-icon">⛰️</span>
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
                <section class="tour-itinerary">
                    <h2>Lịch trình</h2>
                    <div class="timeline">
                        <?php foreach ($tour_details['itinerary'] as $day_data): ?>
                            <div class="timeline-item">
                                <div class="timeline-content">
                                    <h3><?php echo htmlspecialchars($day_data['title']); ?></h3>
                                    <?php foreach ($day_data['details'] as $detail): ?>
                                        <p><?php echo $detail; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>


                <!-- ================== PHẦN MỚI: HIỂN THỊ ĐÁNH GIÁ ================== -->
                <section class="tour-reviews">
                    <h2>Đánh giá từ khách hàng</h2>
                    <div class="review-list">
                        <?php if (!empty($tour_details['reviews'])): ?>
                            <?php foreach ($tour_details['reviews'] as $review): ?>
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
                            <p>Chưa có đánh giá nào cho tour này.</p>
                        <?php endif; ?>
                    </div>
                    <div class="review-call-to-action">
                        <p>Đã trải nghiệm tour này? Hãy liên hệ với chúng tôi để chia sẻ cảm nhận của bạn!</p>
                    </div>
                </section>
                <!-- ================== KẾT THÚC PHẦN MỚI ================== -->

            </div>

            <!-- ... (GIỮ NGUYÊN SIDEBAR) ... -->
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
    <!-- ... (GIỮ NGUYÊN MODAL, SCRIPT) ... -->
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