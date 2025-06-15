<?php
// =================================================================
// PHẦN LOGIC VÀ DỮ LIỆU CỦA PHP
// =================================================================

// Trong thực tế, bạn sẽ include tệp chứa hàm này thay vì định nghĩa lại
function create_slug($text)
{
    $text = strtolower($text);
    $char_map = [
        'á' => 'a',
        'à' => 'a',
        'ả' => 'a',
        'ã' => 'a',
        'ạ' => 'a',
        'ă' => 'a',
        'ắ' => 'a',
        'ằ' => 'a',
        'ẳ' => 'a',
        'ẵ' => 'a',
        'ặ' => 'a',
        'â' => 'a',
        'ấ' => 'a',
        'ầ' => 'a',
        'ẩ' => 'a',
        'ẫ' => 'a',
        'ậ' => 'a',
        'đ' => 'd',
        'é' => 'e',
        'è' => 'e',
        'ẻ' => 'e',
        'ẽ' => 'e',
        'ẹ' => 'e',
        'ê' => 'e',
        'ế' => 'e',
        'ề' => 'e',
        'ể' => 'e',
        'ễ' => 'e',
        'ệ' => 'e',
        'í' => 'i',
        'ì' => 'i',
        'ỉ' => 'i',
        'ĩ' => 'i',
        'ị' => 'i',
        'ó' => 'o',
        'ò' => 'o',
        'ỏ' => 'o',
        'õ' => 'o',
        'ọ' => 'o',
        'ô' => 'o',
        'ố' => 'o',
        'ồ' => 'o',
        'ổ' => 'o',
        'ỗ' => 'o',
        'ộ' => 'o',
        'ơ' => 'o',
        'ớ' => 'o',
        'ờ' => 'o',
        'ở' => 'o',
        'ỡ' => 'o',
        'ợ' => 'o',
        'ú' => 'u',
        'ù' => 'u',
        'ủ' => 'u',
        'ũ' => 'u',
        'ụ' => 'u',
        'ư' => 'u',
        'ứ' => 'u',
        'ừ' => 'u',
        'ử' => 'u',
        'ữ' => 'u',
        'ự' => 'u',
        'ý' => 'y',
        'ỳ' => 'y',
        'ỷ' => 'y',
        'ỹ' => 'y',
        'ỵ' => 'y',
    ];
    $text = strtr($text, $char_map);
    $text = preg_replace('/[^a-z0-9_ -]+/', '', $text);
    $text = preg_replace('/[\s_]+/', '-', $text);
    $text = preg_replace('/-+/', '-', $text);
    $text = trim($text, '-');
    return $text;
}


// Dữ liệu giả (mock data) cho các tour Biển & Đảo
$water_tours_data = [
    [
        'id' => 201,
        'title' => 'Lặn Biển Ngắm San Hô Phú Quốc',
        'image' => 'https://statics.vinpearl.com/lan-bien-phu-quoc-5_1628671421.jpg',
        'duration' => '1 Ngày',
        'activity_type' => 'Lặn biển',
        'price' => '1,200,000 VNĐ',
        'summary' => 'Khám phá thế giới đại dương kỳ thú với hàng trăm loài san hô và sinh vật biển đầy màu sắc tại Nam đảo Phú Quốc.'
    ],
    [
        'id' => 202,
        'title' => 'Chèo Kayak Khám Phá Vịnh Lan Hạ',
        'image' => 'https://vcdn1-dulich.vnecdn.net/2024/11/21/z6054476171792-4dd18ad3a60ed88-7532-3425-1732164461.jpg?w=460&h=0&q=100&dpr=2&fit=crop&s=D7iwY5oZMu81BA5MX0PUjA',
        'duration' => '2 Ngày 1 Đêm',
        'activity_type' => 'Chèo kayak',
        'price' => '2,800,000 VNĐ',
        'summary' => 'Tự do lướt trên mặt nước xanh biếc, luồn lách qua các hang động và bãi tắm hoang sơ của Vịnh Lan Hạ xinh đẹp.'
    ],
    [
        'id' => 203,
        'title' => 'Tour Du Thuyền Vịnh Hạ Long 5 Sao',
        'image' => 'https://travelhalong.com.vn/UserFiles/images/Du%20thuy%E1%BB%81n%205%20sao/Heritage/heritage-cruise-1.jpg',
        'duration' => '2 Ngày 1 Đêm',
        'activity_type' => 'Du thuyền',
        'price' => '4,500,000 VNĐ',
        'summary' => 'Tận hưởng kỳ nghỉ sang trọng trên du thuyền đẳng cấp, ngắm nhìn di sản thiên nhiên thế giới và tham gia các hoạt động thú vị.'
    ],
    [
        'id' => 204,
        'title' => 'Lướt Ván & Khám Phá Mũi Né',
        'image' => 'https://langchaixua.com/wp-content/uploads/2024/04/14-1.jpg',
        'duration' => '1 Ngày',
        'activity_type' => 'Lướt ván',
        'price' => '950,000 VNĐ',
        'summary' => 'Chinh phục những con sóng tại "thủ đô resort" Mũi Né, một trải nghiệm đầy năng lượng và sảng khoái cho người yêu thể thao.'
    ]
];

// Thêm slug vào dữ liệu
$water_tours = array_map(function ($tour) {
    $tour['slug'] = create_slug($tour['title']);
    return $tour;
}, $water_tours_data);

// Cấu hình trang
$pageTitle = 'Các Tour Biển & Hoạt Động Dưới Nước';
$pageStyles = ['/css/adventure.css', '/css/water-tours.css'];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
    <?php endforeach; ?>
</head>

<body class="adventure-page-wrapper">

    <!-- Bạn có thể thêm Header chung của website vào đây (dạng include) -->
    <!-- <?php // include 'partials/header.php'; 
            ?> -->

    <!-- Đặt ảnh nền qua inline style, lớp phủ sẽ được xử lý bởi CSS -->
    <header class="tour-list-header" style="background-image: url('https://kampatour.com/pic/blog/8de94f57-a74f-4168-8b86-6026565bdc34.jpg');">
        <h1 class="hero__title">Khám Phá Biển Xanh</h1>
        <p class="hero__subtitle">Những hòn đảo thiên đường, làn nước trong vắt và các hoạt động dưới nước sôi động đang chờ bạn!</p>
        <a href="/things/adventure" class="btn btn--light" style="margin-top: 20px;">← Quay lại trang Phiêu Lưu</a>
    </header>

    <main>
        <div class="container">
            <div class="tour-grid">
                <?php foreach ($water_tours as $tour): ?>
                    <article class="tour-card animate-on-scroll">
                        <div class="tour-card__image-container">
                            <img src="<?php echo htmlspecialchars($tour['image']); ?>" alt="<?php echo htmlspecialchars($tour['title']); ?>" class="tour-card__image">
                        </div>
                        <div class="tour-card__content">
                            <h3 class="tour-card__title"><?php echo htmlspecialchars($tour['title']); ?></h3>
                            <div class="tour-card__info">
                                <span><i class="icon-time"></i> <?php echo htmlspecialchars($tour['duration']); ?></span>
                                <span><i class="icon-activity"></i> <?php echo htmlspecialchars($tour['activity_type']); ?></span>
                            </div>
                            <p class="tour-card__summary"><?php echo htmlspecialchars($tour['summary']); ?></p>
                            <a href="/tours/<?php echo htmlspecialchars($tour['slug']); ?>" class="btn btn--primary">Xem Chi Tiết & Đặt Tour</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <!-- Bạn có thể thêm Footer chung của website vào đây (dạng include) -->
    <!-- <?php // include 'partials/footer.php'; 
            ?> -->

    <script src="/js/adventure.js"></script>
</body>

</html>