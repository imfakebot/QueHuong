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

$mountain_tours_data = [
    [
        'id' => 101,
        'title' => 'Trekking Tà Xùa Săn Mây',
        'image' => 'https://www.vietnambooking.com/wp-content/uploads/2020/07/ta-xua-san-may-1.jpg',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Trung bình',
        'price' => '2,500,000 VNĐ',
        'summary' => 'Hành trình chinh phục "sống lưng khủng long" và biển mây huyền ảo tại một trong những cung đường trekking đẹp nhất miền Bắc.'
    ],
    [
        'id' => 102,
        'title' => 'Chinh Phục Đỉnh Fansipan',
        'image' => 'https://images.unsplash.com/photo-1589339336502-082195f45f3c?q=80&w=1774&auto=format&fit=crop',
        'duration' => '2 Ngày 1 Đêm',
        'difficulty' => 'Khó',
        'price' => '3,200,000 VNĐ',
        'summary' => 'Thử thách giới hạn bản thân với hành trình leo lên "Nóc nhà Đông Dương" hùng vĩ, một trải nghiệm không thể nào quên.'
    ],
    [
        'id' => 103,
        'title' => 'Khám Phá Cao Nguyên Đá Đồng Văn',
        'image' => 'https://images.unsplash.com/photo-1568951197678-cf0127a83152?q=80&w=1770&auto=format&fit=crop',
        'duration' => '4 Ngày 3 Đêm',
        'difficulty' => 'Dễ',
        'price' => '3,800,000 VNĐ',
        'summary' => 'Chiêm ngưỡng vẻ đẹp hùng vĩ của công viên địa chất toàn cầu UNESCO, từ những cung đường đèo uốn lượn đến những bản làng bình yên.'
    ],
    [
        'id' => 104,
        'title' => 'Trekking Cung Đường Tà Năng - Phan Dũng',
        'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1770&auto=format&fit=crop',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Trung bình - Khó',
        'price' => '2,900,000 VNĐ',
        'summary' => 'Một trong những cung đường trekking đẹp nhất Việt Nam, trải dài qua ba tỉnh Lâm Đồng, Ninh Thuận và Bình Thuận với cảnh quan đa dạng.'
    ],
    [
        'id' => 105,
        'title' => 'Leo Núi Bà Đen - Tây Ninh',
        'image' => 'https://images.unsplash.com/photo-1609670270961-9193c196979a?q=80&w=1770&auto=format&fit=crop',
        'duration' => '1 Ngày',
        'difficulty' => 'Dễ - Trung bình',
        'price' => '850,000 VNĐ',
        'summary' => 'Chinh phục "Nóc nhà Nam Bộ", ngắm nhìn toàn cảnh đồng bằng và hồ Dầu Tiếng từ trên cao, kết hợp viếng chùa Bà linh thiêng.'
    ],
    [
        'id' => 106,
        'title' => 'Khám Phá Pù Luông Thanh Hóa',
        'image' => 'https://images.unsplash.com/photo-1587502537815-07cb093c996e?q=80&w=1770&auto=format&fit=crop',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Dễ',
        'price' => '2,700,000 VNĐ',
        'summary' => 'Đắm mình trong không gian xanh mát của khu bảo tồn thiên nhiên Pù Luông, khám phá ruộng bậc thang và văn hóa bản địa đặc sắc.'
    ],
    [
        'id' => 107,
        'title' => 'Trekking Núi Chúa - Vườn Quốc Gia Núi Chúa',
        'image' => 'https://images.unsplash.com/photo-1604999333679-b86d54738716?q=80&w=1770&auto=format&fit=crop',
        'duration' => '2 Ngày 1 Đêm',
        'difficulty' => 'Trung bình',
        'price' => '2,100,000 VNĐ',
        'summary' => 'Trải nghiệm hệ sinh thái khô hạn độc đáo của Việt Nam, chinh phục các đỉnh núi và khám phá vịnh Vĩnh Hy tuyệt đẹp.'
    ],
    [
        'id' => 108,
        'title' => 'Leo Núi Langbiang - Đà Lạt',
        'image' => 'https://images.unsplash.com/photo-1558430574-0150e470f29b?q=80&w=1770&auto=format&fit=crop',
        'duration' => '1 Ngày',
        'difficulty' => 'Dễ - Trung bình',
        'price' => '950,000 VNĐ',
        'summary' => 'Chinh phục đỉnh núi huyền thoại của Đà Lạt, ngắm nhìn toàn cảnh thành phố ngàn hoa từ trên cao và tìm hiểu câu chuyện tình yêu bất diệt.'
    ],
    [
        'id' => 109,
        'title' => 'Trekking Bidoup - Núi Bà',
        'image' => 'https://images.unsplash.com/photo-1532073150505-2e60000bdd21?q=80&w=1770&auto=format&fit=crop',
        'duration' => '2 Ngày 1 Đêm',
        'difficulty' => 'Trung bình - Khó',
        'price' => '2,600,000 VNĐ',
        'summary' => 'Khám phá Vườn Quốc Gia Bidoup Núi Bà, một trong những trung tâm đa dạng sinh học lớn nhất Việt Nam, với hệ động thực vật phong phú.'
    ],
    [
        'id' => 110,
        'title' => 'Chinh Phục Bạch Mộc Lương Tử (Ky Quan San)',
        'image' => 'https://images.unsplash.com/photo-1593530998390-9053f0d3b2de?q=80&w=1770&auto=format&fit=crop',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Khó',
        'price' => '3,500,000 VNĐ',
        'summary' => 'Một trong tứ đại đỉnh đèo của Tây Bắc, nổi tiếng với biển mây kỳ ảo và cảnh quan núi non hùng vĩ, thử thách ý chí của người leo núi.'
    ],
    [
        'id' => 111,
        'title' => 'Khám Phá Y Tý - Lảo Thẩn',
        'image' => 'https://images.unsplash.com/photo-1618049791136-984a1f1c3f1d?q=80&w=1770&auto=format=fit&crop',
        'duration' => '3 Ngày 2 Đêm',
        'difficulty' => 'Trung bình',
        'price' => '3,100,000 VNĐ',
        'summary' => 'Trải nghiệm săn mây trên đỉnh Lảo Thẩn và khám phá vẻ đẹp hoang sơ, bình dị của vùng đất Y Tý, Lào Cai.'
    ]
];

// Thêm slug vào dữ liệu
$mountain_tours = array_map(function ($tour) {
    $tour['slug'] = create_slug($tour['title']);
    return $tour;
}, $mountain_tours_data);

// Cấu hình trang
$pageTitle = 'Các Tour Trekking & Leo Núi';
$pageStyles = ['/css/mountain-tours.css']; // CSS riêng cho trang này
$pageScripts = []; // Thêm JS nếu có
?>
<!-- Phần nội dung chính của trang mountain-tours -->
<header class="tour-list-header">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
    <p>Chọn một hành trình và bắt đầu chuyến phiêu lưu của bạn!</p>
</header>

<div class="filter-bar">
    <div class="container">
        <div class="filter-controls">
            <label>Lọc theo độ khó:</label>
            <button class="filter-button active" data-difficulty="all">Tất cả</button>
            <button class="filter-button" data-difficulty="easy">Dễ</button>
            <button class="filter-button" data-difficulty="medium">Trung bình</button>
            <button class="filter-button" data-difficulty="hard">Khó</button>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="tour-grid">
            <?php foreach ($mountain_tours as $tour): ?>
                <article class="tour-card">
                    <img src="<?php echo htmlspecialchars($tour['image']); ?>" alt="<?php echo htmlspecialchars($tour['title']); ?>">
                    <div class="tour-card-content">
                        <h3><?php echo htmlspecialchars($tour['title']); ?></h3>
                        <div class="tour-info">
                            <span><strong>Thời gian:</strong> <?php echo htmlspecialchars($tour['duration']); ?></span>
                            <span><strong>Độ khó:</strong> <?php echo htmlspecialchars($tour['difficulty']); ?></span>
                        </div>
                        <p><?php echo htmlspecialchars($tour['summary']); ?></p>
                        <a href="/tours/detail?slug=<?php echo htmlspecialchars($tour['slug']); ?>" class="btn btn--primary">Xem Chi Tiết</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<!-- Kết thúc phần nội dung chính của trang mountain-tours -->