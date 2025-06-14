<?php
// === DỮ LIỆU GIẢ CHO CÁC TOUR VĂN HÓA & DI SẢN ===

if (!function_exists('create_slug')) {
    function create_slug($text)
    {
        if (function_exists('mb_strtolower')) {
            $text = mb_strtolower($text, 'UTF-8');
        } else {
            $text = strtolower($text);
        }
        if (function_exists('iconv')) {
            $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);
        }
        $text = preg_replace('/[^a-z0-9-]+/', '', $text);
        $text = preg_replace('/-+/', '-', $text);
        $text = trim($text, '-');
        return $text;
    }
}

$cultural_heritage_tours_data = [
    [
        'id' => 301,
        'title' => 'Khám Phá Phố Cổ Hội An',
        'image' => 'https://vietnam.travel/sites/default/files/inline-images/11125-Qu%E1%BA%A3ng%20Nam-huybank%40gmail.com-hoi%20an%20ve%20dem%20.jpg',
        'duration' => '2 Ngày 1 Đêm',
        'region_slug' => 'central', // Thêm vùng miền
        'price' => '2,280,000 VNĐ', // Quy đổi từ $95 USD
        'summary' => 'Dạo bước trên những con phố đèn lồng, khám phá kiến trúc cổ kính và trải nghiệm sự giao thoa văn hóa độc đáo.'
    ],
    [
        'id' => 302,
        'title' => 'Kinh Thành Huế & Lăng Tẩm Vua Chúa',
        'image' => '/images/tours/hue.jpg',
        'duration' => '3 Ngày 2 Đêm',
        'region_slug' => 'central', // Thêm vùng miền
        'price' => '4,320,000 VNĐ', // Quy đổi từ $180 USD
        'summary' => 'Khám phá Đại Nội Huế uy nghi, các lăng tẩm tráng lệ của triều Nguyễn và dòng sông Hương thơ mộng.'
    ],
    [
        'id' => 303,
        'title' => 'Thánh Địa Mỹ Sơn Huyền Bí',
        'image' => 'https://katana.bdatrip.com/image/w=3840,q=100/https://images.bdatrip.com/2021/7/thanh-dia-my-son-7.jpg', // Cần có hình ảnh này
        'duration' => '1 Ngày',
        'region_slug' => 'central', // Thêm vùng miền
        'price' => '1,200,000 VNĐ',
        'summary' => 'Tham quan quần thể đền tháp Chăm Pa cổ kính, một Di sản Văn hóa Thế giới UNESCO ẩn mình giữa thung lũng xanh.'
    ],
    [
        'id' => 304,
        'title' => 'Hà Nội Ngàn Năm Văn Hiến',
        'image' => '/images/destinations/must-visit/hanoi.jpg',
        'duration' => '2 Ngày 1 Đêm',
        'region_slug' => 'north', // Thêm vùng miền
        'price' => '2,500,000 VNĐ',
        'summary' => 'Lạc bước giữa 36 phố phường Hà Nội, thăm Văn Miếu - Quốc Tử Giám, Hồ Gươm và thưởng thức múa rối nước đặc sắc.'
    ],
    [
        'id' => 305,
        'title' => 'Trải Nghiệm Văn Hóa Sông Nước Mekong',
        'image' => '/images/tours/mekong-delta-tours.jpg',
        'duration' => '2 Ngày 1 Đêm',
        'region_slug' => 'south', // Thêm vùng miền
        'price' => '2,880,000 VNĐ', // Quy đổi từ $120 USD
        'summary' => 'Khám phá cuộc sống sông nước miền Tây, thăm chợ nổi Cái Răng, vườn cây ăn trái và nghe đờn ca tài tử Nam Bộ.'
    ],
    [
        'id' => 306,
        'title' => 'Địa Đạo Củ Chi & Chứng Tích Chiến Tranh',
        'image' => '/images/tours/TP-HCM.jpg', // Hình ảnh này có thể cần cụ thể hơn cho Củ Chi
        'duration' => '1 Ngày',
        'region_slug' => 'south', // Thêm vùng miền
        'price' => '950,000 VNĐ',
        'summary' => 'Tìm hiểu lịch sử Việt Nam qua hệ thống địa đạo Củ Chi kiên cố và Bảo tàng Chứng tích Chiến tranh tại TP. Hồ Chí Minh.'
    ],
    [
        'id' => 307,
        'title' => 'Ninh Bình - Di Sản Kép Tràng An & Cố Đô Hoa Lư',
        'image' => '/images/tours/ninh-binh.jpg',
        'duration' => '2 Ngày 1 Đêm',
        'region_slug' => 'north', // Thêm vùng miền
        'price' => '2,640,000 VNĐ', // Quy đổi từ $110 USD
        'summary' => 'Khám phá vẻ đẹp "Hạ Long trên cạn" tại Tràng An, thăm Cố đô Hoa Lư lịch sử và chùa Bái Đính linh thiêng.'
    ],
    [
        'id' => 308,
        'title' => 'Làng Cổ Đường Lâm & Chùa Tây Phương',
        'image' => 'https://bizweb.dktcdn.net/100/176/033/files/chua-thay-12-1350-0859-1747.jpg?v=1578410756346', // Cần có hình ảnh này
        'duration' => '1 Ngày',
        'region_slug' => 'north',
        'price' => '1,100,000 VNĐ',
        'summary' => 'Trở về quá khứ tại làng cổ Đường Lâm với những ngôi nhà đá ong hàng trăm năm tuổi và thăm chùa Tây Phương với kiến trúc độc đáo.'
    ],
    [
        'id' => 309,
        'title' => 'Khám Phá Văn Hóa Chăm Pa - Tháp Bà Ponagar Nha Trang',
        'image' => 'https://storage.googleapis.com/blogvxr-uploads/2025/03/c663ef0c-thap-ba-ponagar-nha-trang-5849686.png', // Cần có hình ảnh này
        'duration' => 'Nửa Ngày',
        'region_slug' => 'central',
        'price' => '750,000 VNĐ',
        'summary' => 'Tìm hiểu về nền văn minh Chăm Pa cổ đại qua quần thể kiến trúc Tháp Bà Ponagar linh thiêng tại Nha Trang.'
    ],
    [
        'id' => 310,
        'title' => 'Bảo Tàng Dân Tộc Học Việt Nam & Múa Rối Nước',
        'image' => 'https://toantienhousing.vn/upload//xem-mua-roi-nuoc-tai-bao-tang-dan-toc-hoc-viet-nam-1.jpg',
        'duration' => '1 Ngày',
        'region_slug' => 'north',
        'price' => '900,000 VNĐ',
        'summary' => 'Hiểu sâu hơn về 54 dân tộc anh em Việt Nam tại Bảo tàng Dân tộc học và thưởng thức nghệ thuật múa rối nước truyền thống.'
    ],
    // Bạn có thể thêm các tour khác vào đây
];

// Thêm slug vào dữ liệu
$cultural_heritage_tours = array_map(function ($tour) {
    $tour['slug'] = create_slug($tour['title']);
    return $tour;
}, $cultural_heritage_tours_data);

// Cấu hình trang
$pageTitle = 'Tour Văn Hóa & Di Sản';
$pageStyles = ['/css/mountain-tours.css']; // Sử dụng CSS riêng hoặc chung
$pageScripts = ['/js/cultural-heritage-tours.js']; // JS riêng cho trang này

?>
<!-- Phần nội dung chính của trang cultural-heritage-tours -->
<header class="tour-list-header" style=" background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)),
    url('https://vitraco.vip/wp-content/uploads/2025/03/Tour-Hoi-An.jpg')
    no-repeat center center/cover;">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
    <p>Khám phá những giá trị văn hóa và di sản trường tồn của Việt Nam!</p>
</header>

<!-- Có thể thêm Filter Bar ở đây nếu cần, ví dụ lọc theo vùng miền, loại hình di sản -->

<div class="filter-bar">
    <div class="container">
        <div class="filter-controls">
            <label>Lọc theo vùng miền:</label>
            <button class="filter-button active" data-filter="all">Tất cả</button>
            <button class="filter-button" data-filter="north">Miền Bắc</button>
            <button class="filter-button" data-filter="central">Miền Trung</button>
            <button class="filter-button" data-filter="south">Miền Nam</button>
        </div>
    </div>
</div>


<main>
    <div class="container">
        <div class="tour-grid">
            <?php foreach ($cultural_heritage_tours as $tour): ?>
                <article class="tour-card" data-region="<?php echo htmlspecialchars($tour['region_slug'] ?? 'all'); ?>">
                    <img src="<?php echo htmlspecialchars($tour['image']); ?>" alt="<?php echo htmlspecialchars($tour['title']); ?>" class="tour-card__image">
                    <div class="tour-card-content">
                        <h3><?php echo htmlspecialchars($tour['title']); ?></h3>
                        <div class="tour-info">
                            <span><strong>Thời gian:</strong> <?php echo htmlspecialchars($tour['duration']); ?></span>
                            <span><strong>Giá từ:</strong> <?php echo htmlspecialchars($tour['price']); ?></span>
                        </div>
                        <p><?php echo htmlspecialchars($tour['summary']); ?></p>
                        <a href="/tours/detail?slug=<?php echo htmlspecialchars($tour['slug']); ?>" class="btn btn--primary">Xem Chi Tiết</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>