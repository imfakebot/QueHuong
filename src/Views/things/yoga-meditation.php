<?php
// Dữ liệu cho trang Yoga & Meditation Retreats
$page_details = [
    'title' => 'Yoga & Thiền Định',
    'subtitle' => 'Tìm về sự tĩnh tại, kết nối lại với bản thân và nạp đầy năng lượng giữa thiên nhiên trong lành của Việt Nam.',
    'hero_image' => 'https://www.sporter.vn/wp-content/uploads/2018/02/Thiendinh-trong-yoga-2.jpg',
];

$retreats = [
    [
        'title' => 'Khóa Tu Yên Tĩnh Tại Đà Lạt',
        'location' => 'Đà Lạt, Lâm Đồng',
        'image' => 'https://sacotravel.com/wp-content/uploads/2023/07/thien-vien-truc-lam-khoa-tu.jpg',
        'description' => 'Một khóa tu 3 ngày tập trung vào Hatha Yoga và thiền Vipassana, giúp bạn thanh lọc tâm trí và tìm thấy sự cân bằng trong cuộc sống.',
        'tags' => ['Hatha Yoga', 'Thiền Vipassana', '3 Ngày']
    ],
    [
        'title' => 'Hòa Mình Cùng Biển Xanh Ở Hội An',
        'location' => 'Hội An, Quảng Nam',
        'image' => 'https://www.arttravel.com.vn/upload/news/du-lich-bai-bien-an-bang-hoi-an-mytour-4-9953.1-8124.jpg',
        'description' => 'Trải nghiệm Vinyasa Yoga mỗi sáng bên bờ biển và các buổi thiền hoàng hôn. Khám phá sự kết hợp hoàn hảo giữa vận động và thư giãn.',
        'tags' => ['Vinyasa Yoga', 'Bên Biển', '5 Ngày']
    ],
    [
        'title' => 'Kết Nối Thiên Nhiên Ở Mai Châu',
        'location' => 'Mai Châu, Hòa Bình',
        'image' => 'https://mia.vn/media/uploads/blog-du-lich/kham-pha-mai-chau-hoa-binh-co-gi-cung-mia-vn-1681688466.jpg',
        'description' => 'Sống giữa những cánh đồng lúa xanh mướt, thực hành yoga và thiền định trong các nhà sàn truyền thống, kết nối sâu sắc với văn hóa địa phương.',
        'tags' => ['Yoga Cơ Bản', 'Văn Hóa', 'Thiên Nhiên']
    ]
];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_details['title']); ?></title>

    <!-- Nạp DUY NHẤT file CSS cho trang Yoga -->
    <link rel="stylesheet" href="/css/page-yoga-meditation.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <main class="yoga-page">
        <!-- HERO SECTION -->
        <header class="hero-section" style="background-image: url('<?php echo htmlspecialchars($page_details['hero_image']); ?>');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="hero-title"><?php echo htmlspecialchars($page_details['title']); ?></h1>
                <p class="hero-subtitle"><?php echo htmlspecialchars($page_details['subtitle']); ?></p>
            </div>
        </header>

        <!-- INTRO SECTION -->
        <section class="section">
            <div class="container">
                <div class="intro-grid">
                    <div class="intro-content">
                        <span class="highlight">HÀNH TRÌNH VỀ VỚI CHÍNH MÌNH</span>
                        <h2 class="section-title" style="text-align: left; margin-bottom: 2rem;">Bỏ lại sau lưng những bộn bề</h2>
                        <p>Các khóa tu yoga và thiền định của chúng tôi được thiết kế để trở thành một không gian an toàn, nơi bạn có thể tạm dừng, hít thở thật sâu và lắng nghe cơ thể cũng như tâm trí mình.</p>
                        <p>Dù bạn là người mới bắt đầu hay đã có kinh nghiệm, các giảng viên chuyên nghiệp sẽ hướng dẫn bạn qua từng động tác, từng hơi thở, giúp bạn tìm lại sự bình yên nội tại.</p>
                    </div>
                    <div class="intro-image-wrapper">
                        <img src="https://shanhealth.vn/wp-content/uploads/2023/06/thien-chuong-tay-tang-4.jpg" alt="Thiền chuông thư giãn">
                    </div>
                </div>
            </div>
        </section>

        <!-- RETREATS SECTION -->
        <section class="section bg-light">
            <div class="container">
                <h2 class="section-title">Các Khóa Tu Nổi Bật</h2>
                <p class="section-subtitle">Hãy chọn cho mình một hành trình phù hợp để bắt đầu con đường chăm sóc bản thân.</p>
                <div class="retreat-list">
                    <?php foreach ($retreats as $retreat): ?>
                        <div class="retreat-card">
                            <div class="retreat-image">
                                <img src="<?php echo htmlspecialchars($retreat['image']); ?>" alt="<?php echo htmlspecialchars($retreat['title']); ?>">
                            </div>
                            <div class="retreat-content">
                                <h3><?php echo htmlspecialchars($retreat['title']); ?></h3>
                                <p class="retreat-location">📍 <?php echo htmlspecialchars($retreat['location']); ?></p>
                                <div class="retreat-tags">
                                    <?php foreach ($retreat['tags'] as $tag): ?>
                                        <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <p><?php echo htmlspecialchars($retreat['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="section cta-section">
            <div class="container">
                <h2 class="section-title">Sẵn Sàng Cho Hành Trình Mới?</h2>
                <p class="section-subtitle">Liên hệ với chúng tôi để nhận tư vấn chi tiết về các khóa tu và tìm ra lựa chọn hoàn hảo nhất dành cho bạn.</p>
                <a href="/contact" class="btn-cta">Liên Hệ Ngay</a>
            </div>
        </section>
    </main>

</body>

</html>