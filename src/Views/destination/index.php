<?php
$pageTitle = 'Các Điểm Đến Hấp Dẫn - Du Lịch Quê Hương';

// Nạp các tệp CSS cần thiết. Giả sử /css/destination.css chứa các style cho .card và .btn-cta
$pageStyles = [
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', // Nếu bạn cần icons
    '/css/destination.css'
];

$pageScripts = [
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    '/js/destination.js'
]; // Thêm script nếu cần

// Dữ liệu mẫu cho các điểm đến. Trong ứng dụng thực tế, bạn sẽ lấy từ database.
$destinations = [
    [
        'slug' => 'hanoi',
        'name' => 'Hà Nội',
        'image' => '/images/destinations/Ha-Noi/Hanoi-review.jpg',
        'description' => 'Thủ đô ngàn năm văn hiến với vẻ đẹp cổ kính, trầm mặc và nền ẩm thực đặc sắc.'
    ],
    [
        'slug' => 'ha-giang',
        'name' => 'Hà Giang',
        'image' => '/images/destinations/Ha-Giang/ha-giang-loop.jpg', // Placeholder, cần ảnh thật
        'description' => 'Vùng đất địa đầu Tổ quốc với cao nguyên đá hùng vĩ và những cung đường đèo ngoạn mục.'
    ],
    [
        'slug' => 'ha-long',
        'name' => 'Vịnh Hạ Long',
        'image' => '/images/destinations/Ha-Long/vinh-ha-long-overview.jpg',
        'description' => 'Kỳ quan thiên nhiên thế giới với hàng ngàn đảo đá vôi hùng vĩ trên mặt nước xanh biếc.'
    ],
    [
        'slug' => 'mai-chau',
        'name' => 'Mai Châu',
        'image' => '/images/destinations/Mai-Chau/mai-chau-valley.jpg', // Placeholder, cần ảnh thật
        'description' => 'Thung lũng yên bình với những nếp nhà sàn, ruộng lúa xanh và văn hóa dân tộc Thái đặc sắc.'
    ],
    [
        'slug' => 'ninh-binh',
        'name' => 'Ninh Bình',
        'image' => '/images/destinations/Ninh-Binh/trang-an-ninh-binh.jpg', // Placeholder, cần ảnh thật
        'description' => 'Được mệnh danh là "Hạ Long trên cạn" với Tràng An, Tam Cốc và cố đô Hoa Lư lịch sử.'
    ],
    [
        'slug' => 'sapa',
        'name' => 'Sa Pa',
        'image' => '/images/destinations/Sapa/sapa-terraces.jpg',
        'description' => 'Thị trấn trong sương với những thửa ruộng bậc thang tuyệt đẹp và văn hóa dân tộc vùng cao đặc sắc.'
    ],
    [
        'slug' => 'da-nang',
        'name' => 'Đà Nẵng',
        'image' => '/images/destinations/Da-Nang/DragonBridge.jpg',
        'description' => 'Thành phố biển năng động với những cây cầu biểu tượng, bãi biển quyến rũ và núi non hùng vĩ.'
    ],
    [
        'slug' => 'da-lat',
        'name' => 'Đà Lạt',
        'image' => '/images/destinations/Da-Lat/da-lat-city.jpg', // Placeholder, cần ảnh thật
        'description' => 'Thành phố ngàn hoa với khí hậu mát mẻ, hồ Xuân Hương thơ mộng và kiến trúc Pháp cổ kính.'
    ],
    [
        'slug' => 'hoi-an',
        'name' => 'Hội An',
        'image' => '/images/destinations/Hoi-An/pho-co-hoi-an.jpg',
        'description' => 'Phố cổ rêu phong, nơi thời gian như ngừng lại với những chiếc đèn lồng lung linh và kiến trúc độc đáo.'
    ],
    [
        'slug' => 'hue',
        'name' => 'Huế',
        'image' => '/images/destinations/Hue/kinh-thanh-hue.jpg', // Placeholder, cần ảnh thật
        'description' => 'Cố đô thơ mộng với dòng sông Hương, Đại Nội uy nghi và các lăng tẩm cổ kính.'
    ],
    [
        'slug' => 'nha-trang',
        'name' => 'Nha Trang',
        'image' => '/images/destinations/Nha-Trang/nha-trang-bay.jpg', // Placeholder, cần ảnh thật
        'description' => 'Thành phố biển nổi tiếng với vịnh biển đẹp, các hòn đảo và hoạt động lặn biển thú vị.'
    ],
    [
        'slug' => 'phong-nha',
        'name' => 'Phong Nha',
        'image' => '/images/destinations/Phong-Nha/phong-nha-cave.jpg', // Placeholder, cần ảnh thật
        'description' => 'Vườn quốc gia với hệ thống hang động kỳ vĩ, bao gồm hang Sơn Đoòng lớn nhất thế giới.'
    ],
    [
        'slug' => 'ho-chi-minh',
        'name' => 'TP. Hồ Chí Minh',
        'image' => '/images/destinations/Ho-Chi-Minh/landmark-81.jpg',
        'description' => 'Trung tâm kinh tế sôi động, thành phố không ngủ với nhiều di tích lịch sử và nhịp sống hiện đại.'
    ],
    [
        'slug' => 'con-dao',
        'name' => 'Côn Đảo',
        'image' => '/images/destinations/Con-Dao/con-dao-island.jpg', // Placeholder, cần ảnh thật
        'description' => 'Quần đảo hoang sơ với bãi biển đẹp, di tích lịch sử và hệ sinh thái biển phong phú.'
    ],
    [
        'slug' => 'binh-thuan',
        'name' => 'Bình Thuận',
        'image' => '/images/destinations/Binh-Thuan/mui-ne-binh-thuan.jpg', // Placeholder, cần ảnh thật
        'description' => 'Nổi tiếng với Mũi Né, đồi cát bay, bãi biển xanh và các resort nghỉ dưỡng.'
    ],
    [
        'slug' => 'can-tho',
        'name' => 'Cần Thơ',
        'image' => '/images/destinations/Can-Tho/cho-noi-cai-rang.jpg', // Placeholder, cần ảnh thật
        'description' => 'Thủ phủ miền Tây với chợ nổi Cái Răng, miệt vườn cây trái và văn hóa sông nước đặc trưng.'
    ],
    [
        'slug' => 'chau-doc',
        'name' => 'Châu Đốc',
        'image' => '/images/destinations/Chau-Doc/mieu-ba-chua-xu.jpg', // Placeholder, cần ảnh thật
        'description' => 'Điểm du lịch tâm linh với Miếu Bà Chúa Xứ Núi Sam và rừng tràm Trà Sư thơ mộng.'
    ],
    [
        'slug' => 'phu-quoc',
        'name' => 'Phú Quốc',
        'image' => '/images/destinations/Phu-Quoc/phu-quoc-beach.jpg', // Placeholder, cần ảnh thật
        'description' => 'Đảo ngọc với những bãi biển cát trắng, rừng nguyên sinh và các khu vui chơi giải trí hiện đại.'
    ]
];
?>

<section class="hero" style="background-image: url('https://cms.junglebosstours.com/assets/0a767e37-3aa6-45e5-9222-6caeb8983e45?format=webp');"> <!-- Thay thế bằng ảnh banner của bạn -->
    <div class="hero-text">
        <h1>Khám Phá Các Điểm Đến Tuyệt Vời</h1>
        <p>Việt Nam tươi đẹp đang chờ bạn khám phá, từ núi non hùng vĩ đến những bãi biển thơ mộng.</p>
    </div>
</section>

<main class="container page-container" style="padding-top: 2rem; padding-bottom: 2rem;">
    <section class="content-section destination-listing">
        <h2 style="text-align: center; margin-bottom: 2rem;">Tất Cả Điểm Đến</h2>
        <div class="cards"> <!-- Sử dụng class 'cards' tương tự như trong trang chi tiết điểm đến -->
            <?php foreach ($destinations as $destination): ?>
                <div class="card"> <!-- Sử dụng class 'card' -->
                    <img src="<?php echo htmlspecialchars($destination['image']); ?>" alt="Hình ảnh <?php echo htmlspecialchars($destination['name']); ?>" style="width:100%; height:auto; object-fit: cover; aspect-ratio: 16/9;">
                    <h3 style="margin-top: 1rem;"><?php echo htmlspecialchars($destination['name']); ?></h3>
                    <p><?php echo htmlspecialchars($destination['description']); ?></p>
                    <a href="/destinations/<?php echo htmlspecialchars($destination['slug']); ?>" class="btn-cta" style="display: inline-block; margin-top: 10px;">Xem chi tiết</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>