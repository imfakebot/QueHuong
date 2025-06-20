<?php
// === DỮ LIỆU GIẢ CHO CÁC TOUR LEO NÚI ===
// Trong thực tế, bạn sẽ lấy dữ liệu này từ database
function create_slug($text)
{
    // Chuyển hết sang chữ thường (UTF-8 safe)
    // Điều này cần extension mbstring được kích hoạt trong PHP.
    if (function_exists('mb_strtolower')) {
        $text = mb_strtolower($text, 'UTF-8');
    } else {
        $text = strtolower($text); // Fallback nếu mbstring không có
    }

    // Xóa dấu và chuyển sang ASCII
    // Thêm //IGNORE để bỏ qua các ký tự không thể chuyển đổi và tránh lỗi/notice
    if (function_exists('iconv')) {
        $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);
    }
    // Nếu iconv không tồn tại hoặc vẫn còn ký tự không mong muốn,
    // các bước preg_replace tiếp theo sẽ dọn dẹp.

    // Giữ lại chữ cái (a-z), số (0-9) và dấu gạch ngang (-)
    // Loại bỏ các ký tự khác.
    $text = preg_replace('/[^a-z0-9-]+/', '', $text);

    // Thay thế nhiều dấu gạch ngang liên tiếp bằng một dấu gạch ngang duy nhất
    $text = preg_replace('/-+/', '-', $text);

    // Xóa dấu gạch ngang ở đầu và cuối chuỗi
    $text = trim($text, '-');
    return $text;
}

// Dữ liệu cho các tour nổi bật được thêm vào
$suggested_mountain_tours_data = [
    [
        'id' => 201, // ID mới, đảm bảo không trùng
        'title' => 'Sapa Terraces Adventure',
        'image' => '/images/tours/sapa.jpg', // Đường dẫn từ trang chủ
        'duration' => '4 Days 3 Nights', // Từ trang chủ
        'difficulty' => 'Trung bình', // Giả định, bạn có thể điều chỉnh
        'price' => '4,800,000 VNĐ',
        'summary' => 'Khám phá những thửa ruộng bậc thang kỳ vĩ và văn hóa địa phương độc đáo của Sapa.',
        'filename' => 'trekking-in-sapa.php' // Tên file chi tiết
    ],
    [
        'id' => 202, // ID mới
        'title' => 'Da Lat Romantic Getaway',
        'image' => '/images/tours/dalat-city.jpg', // Đường dẫn từ trang chủ
        'duration' => '3 Days 2 Nights', // Từ trang chủ
        'difficulty' => 'Dễ', // Giả định
        'price' => '3,840,000 VNĐ',
        'summary' => "Khám phá 'Thành phố Ngàn hoa' Đà Lạt với những thác nước, hồ và vườn hoa tuyệt đẹp.",
        'filename' => 'da-lat-romantic-getaway-detail.php' // Placeholder, bạn cần tạo file này
    ],
    [
        'id' => 203, // ID mới
        'title' => 'Phong Nha Caves Adventure',
        'image' => '/images/tours/phong-nha.webp', // Đường dẫn từ trang chủ
        'duration' => '3 Days 2 Nights', // Từ trang chủ
        'difficulty' => 'Trung bình', // Giả định
        'price' => '5,280,000 VNĐ',
        'summary' => 'Khám phá hệ thống hang động kỳ vĩ tại Vườn Quốc gia Phong Nha - Kẻ Bàng, di sản UNESCO.',
        'filename' => 'exploring-phongnha-cave.php' // Tên file chi tiết
    ],
];

// Dữ liệu các tour núi hiện có của bạn
$existing_mountain_tours_data = [
    [
        'id' => 101, // Giữ ID cũ
        'title' => 'Trekking Tà Xùa Săn Mây',
        'image' => 'https://www.vietnambooking.com/wp-content/uploads/2020/07/ta-xua-san-may-1.jpg',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Trung bình',
        'price' => '2,500,000 VNĐ',
        'summary' => 'Hành trình chinh phục "sống lưng khủng long" và biển mây huyền ảo tại một trong những cung đường trekking đẹp nhất miền Bắc.',
        'filename' => 'trekking-ta-xua-detail.php' // Placeholder
    ],
    [
        'id' => 102, // Giữ ID cũ
        'title' => 'Chinh Phục Đỉnh Fansipan',
        'image' => 'https://toiphuot.net/uploads/news/2025_01/huong-dan-chinh-phuc-dinh-fansipan-diem-den-hap-dan-du-khach-trong-va-ngoai-nuoc-1.jpg',
        'duration' => '2 Ngày 1 Đêm',
        'difficulty' => 'Khó',
        'price' => '3,200,000 VNĐ',
        'summary' => 'Thử thách giới hạn bản thân với hành trình leo lên "Nóc nhà Đông Dương" hùng vĩ, một trải nghiệm không thể nào quên.',
        'filename' => 'fansipan-conquest-detail.php' // Placeholder
    ],
    [
        'id' => 103,
        'title' => 'Khám Phá Cao Nguyên Đá Đồng Văn',
        'image' => 'https://dantocmiennui-media.baotintuc.vn/images/84426cb421b40f0fbef0009243df48a9fe6f464c46ac0c39b3a978ac43328566c9cc6e84362d6f215645354bd0bb73da1b1ac1cf370e166550ff28d599083434ec839f2b2b7895c187dd22d291d419d3495d79d3d341c423adc64b6aa015fa915782e4f5fbba4d663ae8449b82c35383c5cdac33d59923a08f897cc71a673809cbe8e35505cd548a91afcb0edeab5b86/vna-potal-kham-pha-net-dep-tren-cao-nguyen-da-dong-van-ha-giang-mua-du-lich-7695520-1-1335.jpg',
        'duration' => '4 Ngày 3 Đêm',
        'difficulty' => 'Dễ',
        'price' => '3,800,000 VNĐ',
        'summary' => 'Chiêm ngưỡng vẻ đẹp hùng vĩ của công viên địa chất toàn cầu UNESCO, từ những cung đường đèo uốn lượn đến những bản làng bình yên.',
        'filename' => 'dong-van-plateau-detail.php' // Placeholder
    ],
    [
        'id' => 104,
        'title' => 'Trekking Cung Đường Tà Năng - Phan Dũng',
        'image' => 'https://media-cdn-v2.laodong.vn/storage/newsportal/2023/10/8/1251758/Ta-Nang---Phan-Dung--02.jpg',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Trung bình - Khó',
        'price' => '2,900,000 VNĐ',
        'summary' => 'Một trong những cung đường trekking đẹp nhất Việt Nam, trải dài qua ba tỉnh Lâm Đồng, Ninh Thuận và Bình Thuận với cảnh quan đa dạng.',
        'filename' => 'ta-nang-phan-dung-detail.php' // Placeholder
    ],
    [
        'id' => 105,
        'title' => 'Leo Núi Bà Đen - Tây Ninh',
        'image' => 'https://www.xanhtourist.com.vn/wp-content/uploads/2024/06/baden-hinh1.webp',
        'duration' => '1 Ngày',
        'difficulty' => 'Dễ - Trung bình',
        'price' => '850,000 VNĐ',
        'summary' => 'Chinh phục "Nóc nhà Nam Bộ", ngắm nhìn toàn cảnh đồng bằng và hồ Dầu Tiếng từ trên cao, kết hợp viếng chùa Bà linh thiêng.',
        'filename' => 'ba-den-mountain-detail.php' // Placeholder
    ],
    [
        'id' => 106,
        'title' => 'Khám Phá Pù Luông Thanh Hóa',
        'image' => 'https://vcdn1-dulich.vnecdn.net/2022/04/26/PuLuongThanhHoa-1650946350-6138-1650947117.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=UrnBcBoJpvLm6c6vyCMiAg',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Dễ',
        'price' => '2,700,000 VNĐ',
        'summary' => 'Đắm mình trong không gian xanh mát của khu bảo tồn thiên nhiên Pù Luông, khám phá ruộng bậc thang và văn hóa bản địa đặc sắc.',
        'filename' => 'pu-luong-discovery-detail.php' // Placeholder
    ],

    [
        'id' => 108,
        'title' => 'Leo Núi Langbiang - Đà Lạt',
        'image' => 'https://parkhoteldalat.vn/wp-content/uploads/2021/12/news_01.jpg',
        'duration' => '1 Ngày',
        'difficulty' => 'Dễ - Trung bình',
        'price' => '950,000 VNĐ',
        'summary' => 'Chinh phục đỉnh núi huyền thoại của Đà Lạt, ngắm nhìn toàn cảnh thành phố ngàn hoa từ trên cao và tìm hiểu câu chuyện tình yêu bất diệt.',
        'filename' => 'langbiang-mountain-detail.php' // Placeholder
    ],
    [
        'id' => 109,
        'title' => 'Trekking Bidoup - Núi Bà',
        'image' => 'https://dalatravel.vn/wp-content/uploads/2020/11/dinh-bidoup-tour-trekking-tai-da-lat-loi-cuon-rat-nhieu-phuot-thu-1.jpg',
        'duration' => '2 Ngày 1 Đêm',
        'difficulty' => 'Trung bình - Khó',
        'price' => '2,600,000 VNĐ',
        'summary' => 'Khám phá Vườn Quốc Gia Bidoup Núi Bà, một trong những trung tâm đa dạng sinh học lớn nhất Việt Nam, với hệ động thực vật phong phú.',
        'filename' => 'bidoup-nuiba-trek-detail.php' // Placeholder
    ],
    [
        'id' => 111,
        'title' => 'Khám Phá Y Tý - Lảo Thẩn',
        'image' => 'https://humtto.vn/wp-content/uploads/2024/03/trekking-lao-than-.jpg',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Trung bình',
        'price' => '3,100,000 VNĐ',
        'summary' => 'Trải nghiệm săn mây trên đỉnh Lảo Thẩn và khám phá vẻ đẹp hoang sơ, bình dị của vùng đất Y Tý, Lào Cai.',
        'filename' => 'y-ty-lao-than-detail.php' // Placeholder
    ]
];

// Gộp các tour gợi ý vào đầu danh sách
$mountain_tours_data = array_merge($suggested_mountain_tours_data, $existing_mountain_tours_data);

// Thêm slug vào dữ liệu
// Và đảm bảo 'filename' tồn tại, nếu không có thì tạo từ slug (cần đảm bảo file này tồn tại)
$mountain_tours = array_map(function ($tour) {
    $tour['slug'] = create_slug($tour['title']);
    // Nếu 'filename' chưa được đặt ở trên, tạo một filename mặc định từ slug
    $tour['filename'] = $tour['filename'] ?? $tour['slug'] . '.php';
    return $tour;
}, $mountain_tours_data);

// Cấu hình trang
$pageTitle = 'Các Tour Trekking & Leo Núi';
$pageStyles = ['/css/mountain-tours.css']; // CSS riêng cho trang này
$pageScripts = ['/js/mountain-tours.js']; // Thêm file JS cho việc lọc

// Hàm để chuyển đổi độ khó sang một giá trị class/data đơn giản
function normalize_difficulty_for_filter($difficulty)
{
    $normalized = strtolower(trim($difficulty));
    if (str_contains($normalized, 'trung bình - khó') || str_contains($normalized, 'khó - trung bình')) return 'medium-hard';
    if (str_contains($normalized, 'dễ - trung bình') || str_contains($normalized, 'trung bình - dễ')) return 'easy-medium';
    if (str_contains($normalized, 'trung bình')) return 'medium';
    if (str_contains($normalized, 'khó')) return 'hard';
    if (str_contains($normalized, 'dễ')) return 'easy';
    return 'all'; // Mặc định nếu không khớp
}
?>
<!-- Phần nội dung chính của trang mountain-tours -->
<header class="tour-list-header" style=" background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)),
    url('https://images.unsplash.com/photo-1551632811-561732d1e306?q=80&w=1770&auto=format&fit=crop')
    no-repeat center center/cover;height:77vh">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
    <p>Chọn một hành trình và bắt đầu chuyến phiêu lưu của bạn!</p>
    <a href="/things/adventure" class="btn-light" style="margin-top: 20px;">← Quay lại trang Phiêu Lưu</a>
</header>

<div class="filter-bar">
    <div class="container">
        <div class="filter-controls">
            <label>Lọc theo độ khó:</label>
            <button class="filter-button active" data-filter="all">Tất cả</button>
            <button class="filter-button" data-filter="easy">Dễ</button>
            <button class="filter-button" data-filter="medium">Trung bình</button>
            <button class="filter-button" data-filter="hard">Khó</button>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="tour-grid">
            <?php foreach ($mountain_tours as $tour): ?>
                <?php $tour_difficulty_filter_class = normalize_difficulty_for_filter($tour['difficulty']); ?>
                <article class="tour-card" data-difficulty="<?php echo $tour_difficulty_filter_class; ?>">
                    <img src="<?php echo htmlspecialchars($tour['image']); ?>" alt="<?php echo htmlspecialchars($tour['title']); ?>" class="tour-card__image">
                    <div class="tour-card-content">
                        <h3><?php echo htmlspecialchars($tour['title']); ?></h3>
                        <div class="tour-info">
                            <span><strong>Thời gian:</strong> <?php echo htmlspecialchars($tour['duration']); ?></span>
                            <span><strong>Độ khó:</strong> <?php echo htmlspecialchars($tour['difficulty']); ?></span>
                        </div>
                        <p><?php echo htmlspecialchars($tour['summary']); ?></p>
                        <!-- Tour card content -->
                        <a href="/tours/<?php echo htmlspecialchars($tour['slug']); ?>"
                            class="btn btn--primary"
                            title="<?php echo htmlspecialchars($tour['title']); ?>">
                            Xem Chi Tiết
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<!-- Kết thúc phần nội dung chính của trang mountain-tours -->