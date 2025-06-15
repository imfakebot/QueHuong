<?php
$pageTitle = 'Điểm Đến Hàng Đầu - Khám Phá Việt Nam';

// Tải các tệp CSS cần thiết
$pageStyles = [
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
    '/css/destination.css'
];

$pageScripts = [
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    '/js/destination.js'
];

// Dữ liệu mẫu cho các điểm đến
$destinations = [
    [
        'slug' => 'hanoi',
        'name' => 'Hà Nội',
        'image' => '/images/destinations/Ha-Noi/Hanoi-review.jpg',
        'description' => 'Thủ đô nghìn năm văn hiến với nét cổ kính và ẩm thực đặc trưng.'
    ],
    [
        'slug' => 'ha-giang',
        'name' => 'Hà Giang',
        'image' => '/images/destinations/HaGiang/review.jpg',
        'description' => 'Vùng cực Bắc hùng vĩ với cao nguyên đá và những cung đường đèo tuyệt đẹp.'
    ],
    [
        'slug' => 'ha-long',
        'name' => 'Vịnh Hạ Long',
        'image' => '/images/destinations/HaLong/review.jpg',
        'description' => 'Di sản thiên nhiên thế giới với hàng nghìn đảo đá vôi trên làn nước xanh ngọc.'
    ],
    [
        'slug' => 'mai-chau',
        'name' => 'Mai Châu',
        'image' => '/images/destinations/MaiChau/review.jpg',
        'description' => 'Thung lũng yên bình với nhà sàn, ruộng lúa xanh mướt và văn hóa người Thái.'
    ],
    [
        'slug' => 'ninh-binh',
        'name' => 'Ninh Bình',
        'image' => '/images/destinations/NinhBinh/review.jpg',
        'description' => '“Vịnh Hạ Long trên cạn” với Tràng An, Tam Cốc và cố đô Hoa Lư.'
    ],
    [
        'slug' => 'sapa',
        'name' => 'Sa Pa',
        'image' => '/images/destinations/Sapa/review.jpg',
        'description' => 'Thị trấn sương mù với ruộng bậc thang và bản sắc văn hóa dân tộc độc đáo.'
    ],
    [
        'slug' => 'da-nang',
        'name' => 'Đà Nẵng',
        'image' => '/images/destinations/Da-Nang/BaNaHills.jpg',
        'description' => 'Thành phố biển năng động với cầu nổi tiếng, bãi biển đẹp và núi non hùng vĩ.'
    ],
    [
        'slug' => 'da-lat',
        'name' => 'Đà Lạt',
        'image' => '/images/destinations/Da-Lat/DaLat-review.jpg',
        'description' => 'Thành phố ngàn hoa với khí hậu mát mẻ, hồ thơ mộng và kiến trúc Pháp.'
    ],
    [
        'slug' => 'hoi-an',
        'name' => 'Hội An',
        'image' => '/images/destinations/Hoi-An/review.jpg',
        'description' => 'Phố cổ yên bình với đèn lồng rực rỡ và kiến trúc truyền thống.'
    ],
    [
        'slug' => 'hue',
        'name' => 'Huế',
        'image' => '/images/destinations/Hue/review.jpg',
        'description' => 'Kinh đô xưa thơ mộng bên dòng sông Hương với Hoàng thành và lăng tẩm vua chúa.'
    ],
    [
        'slug' => 'nha-trang',
        'name' => 'Nha Trang',
        'image' => '/images/destinations/NhaTrang/review.jpg',
        'description' => 'Thành phố biển sôi động với vịnh đẹp, đảo hoang sơ và hoạt động lặn biển hấp dẫn.'
    ],
    [
        'slug' => 'phong-nha',
        'name' => 'Phong Nha',
        'image' => '/images/destinations/PhongNha/review1.jpg',
        'description' => 'Công viên quốc gia với những hang động kỳ vĩ, trong đó có hang Sơn Đoòng lớn nhất thế giới.'
    ],
    [
        'slug' => 'ho-chi-minh',
        'name' => 'TP. Hồ Chí Minh',
        'image' => '/images/destinations/HCM/hcm.jpg',
        'description' => 'Trung tâm kinh tế sôi động với những công trình lịch sử và cuộc sống hiện đại náo nhiệt.'
    ],
    [
        'slug' => 'con-dao',
        'name' => 'Côn Đảo',
        'image' => '/images/destinations/ConDao/review.jpg',
        'description' => 'Quần đảo hoang sơ với bãi biển đẹp, di tích lịch sử và hệ sinh thái biển phong phú.'
    ],
    [
        'slug' => 'binh-thuan',
        'name' => 'Bình Thuận',
        'image' => '/images/destinations/BinhThuan/review.jpg',
        'description' => 'Nổi tiếng với Mũi Né, đồi cát đỏ, biển xanh và các khu nghỉ dưỡng cao cấp.'
    ],
    [
        'slug' => 'can-tho',
        'name' => 'Cần Thơ',
        'image' => '/images/destinations/CanTho/review.jpg',
        'description' => 'Trái tim của miền Tây với chợ nổi, vườn cây trái và văn hóa sông nước đặc trưng.'
    ],
    [
        'slug' => 'chau-doc',
        'name' => 'Châu Đốc',
        'image' => '/images/destinations/ChauDoc/review.jpg',
        'description' => 'Điểm đến tâm linh với miếu Bà Chúa Xứ và rừng tràm Trà Sư thơ mộng.'
    ],
    [
        'slug' => 'phu-quoc',
        'name' => 'Phú Quốc',
        'image' => '/images/destinations/PhuQuoc/review.jpg',
        'description' => 'Đảo ngọc với biển cát trắng, rừng nguyên sinh và các khu vui chơi hiện đại.'
    ]
];
?>

<section class="hero" style="background-image: url('https://cms.junglebosstours.com/assets/0a767e37-3aa6-45e5-9222-6caeb8983e45?format=webp');">
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <h1>Khám Phá Những Điểm Đến Tuyệt Vời</h1>
        <p>Vẻ đẹp Việt Nam đang chờ bạn — từ núi non hùng vĩ đến bãi biển mộng mơ.</p>
    </div>
</section>

<main class="container page-container" style="padding-top: 2rem; padding-bottom: 2rem;">
    <section class="content-section destination-listing">
        <h2 style="text-align: center; margin-bottom: 2rem;">Tất Cả Các Điểm Đến</h2>
        <div class="cards">
            <?php foreach ($destinations as $destination): ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($destination['image']); ?>" alt="Hình ảnh <?php echo htmlspecialchars($destination['name']); ?>" style="width:100%; height:auto; object-fit: cover; aspect-ratio: 16/9;">
                    <h3 style="margin-top: 1rem; color:red"><?php echo htmlspecialchars($destination['name']); ?></h3>
                    <p><?php echo htmlspecialchars($destination['description']); ?></p>
                    <a href="/destinations/<?php echo htmlspecialchars($destination['slug']); ?>" class="btn-cta" style="display: inline-block; margin-top: 10px; text-align: center;">Xem Chi Tiết</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>
