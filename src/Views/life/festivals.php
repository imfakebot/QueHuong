<?php

$pageTitle = 'Festivals & Holidays - Lễ Hội Và Ngày Lễ Ở Việt Nam';
$pageStyles = ['/css/festivals.css'];
$pageScripts = ['/js/festivals.js'];

// Lễ hội truyền thống
$traditionalFestivals = [
    'Tết Nguyên Đán - Lễ hội quan trọng nhất năm',
    'Lễ hội Chùa Hương - Hành hương mùa xuân',
    'Hội Lim - Lễ hội Quan họ Bắc Ninh',
    'Lễ hội Đền Hùng - Giỗ Tổ Hùng Vương',
    'Lễ hội Đèn Quảng Chiếu ở Huế'
];

// Lễ hội văn hóa & hiện đại
$culturalFestivals = [
    'Festival Huế - Tôn vinh văn hóa cố đô',
    'Lễ hội pháo hoa quốc tế Đà Nẵng',
    'Lễ hội Cà phê Buôn Ma Thuột',
    'Lễ hội Áo dài TP. Hồ Chí Minh',
    'Tuần lễ thời trang Việt Nam'
];

// Ngày lễ & kỳ nghỉ đặc biệt
$holidays = [
    'Tết Dương Lịch (1/1)',
    'Giỗ Tổ Hùng Vương (10/3 âm lịch)',
    'Ngày Giải phóng Miền Nam (30/4)',
    'Ngày Quốc tế Lao động (1/5)',
    'Quốc khánh (2/9)'
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>
    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
    <?php endforeach; ?>
</head>
<body class="festivals-page-wrapper">
    <!-- HERO -->
    <header class="hero" style="background-image: url('https://vietnamdiscovery.com/wp-content/uploads/2020/06/Festivals-in-Vietnam.jpg');">
        <div class="hero__overlay"></div>
        <div class="hero__content animate-on-scroll">
            <h1 class="hero__title">Festivals & Holidays</h1>
            <p class="hero__subtitle">Khám phá nét văn hóa sống động và đầy màu sắc qua các lễ hội truyền thống và ngày lễ Việt Nam.</p>
            <a href="#section-traditional" class="btn btn--light">Khám Phá Ngay</a>
        </div>
    </header>

    <main>
        <!-- SECTION 1: TRUYỀN THỐNG -->
       <section id="section-traditional" class="timeline-section" style="background-image: url('https://img.lovepik.com/background/20211020/large/lovepik-background-of-red-festival-display-image_400051574.jpg'); background-size: cover; background-position: center;">
    <div class="timeline-overlay"></div>
    <div class="timeline-container">
        <h2 class="timeline-title">Các Lễ Hội Theo Tháng</h2>

        <!-- Navigation Months -->
        <div class="timeline-navigation">
            <?php
            $months = ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];
            foreach ($months as $index => $month) {
                $isActive = ($month === 'JUN') ? 'active' : '';
                echo "<button class='timeline-month $isActive' data-month='$index'>$month</button>";
            }
            ?>
        </div>

        <!-- Events Display -->
        <div class="timeline-events">
            <?php
            $eventsByMonth = [
                0 => [
                    ['title' => 'Enjoy Danang Festival 2025', 'date' => '19 Jan - 23 Jan 2025', 'img' => 'https://i.ytimg.com/vi/-_F9TSGH0r8/maxresdefault.jpg'],
                    ['title' => 'Vietnamese Lunar New Year', 'date' => '23 Jan - 29 Jan 2025', 'img' => 'https://static.idctravel.com/wp-content/uploads/v/45/Vietnam-Lunar-New-Year.jpg']
                ],
                1 => [
                    ['title' => 'Perfume Pagoda Festival', 'date' => 'Feb 2025', 'img' => 'https://backend.threeland.com/storage/images/bloggallery/files/Perfuma-Pagoda.jpg'],
                    ['title' => 'Lim Festival', 'date' => '13 – 15 Lunar Feb 2025', 'img' => 'https://www.vivutravel.com/images/blog17/lim-festival-in-bac-ninh.jpg']
                ],
                2 => [
                    ['title' => 'Cold Food Festival', 'date' => '3rd day of Lunar March', 'img' => 'https://izitour.com/media/blog/the-cold-food-festival.webp'],
                    ['title' => 'Hung Kings Commemoration Day', 'date' => '0th day of Lunar March', 'img' => 'https://www.theodmgroup.com/wp-content/uploads/2022/04/11-April-Hung-Kings-Festival-1.png']
                ],
                3 => [
                    ['title' => 'Vesak / Buddhas Birthday', 'date' => '15th day of Lunar April', 'img' => 'https://image.vietnam.travel/sites/default/files/2022-04/757-TP%20HCM-phatadida%20%281%29.jpg?v=1749185197'],
                    ['title' => 'Reunification Day', 'date' => '30 Apr 2025', 'img' => 'https://cdn-s3.vtconline.vn/ioe-resource-02/filePublish/NewsImages/news/2025/4/tcta280401.jpg']
                ],
                5 => [
                    ['title' => 'Quang Nam Culture, Sports and Tourism Days 2025', 'date' => '06 Jun - 29 Jun 2025', 'img' => 'https://image.vietnam.travel/sites/default/files/2025-06/292-Qu%E1%BA%A3ng%20Nam-tmluong50%40gmail.com-thuyen%20hoa%20%281%29.jpg?v=1749186169'],
                    ['title' => 'Hue Community Ao Dai Week 2025', 'date' => '06 Jun - 15 Jun 2025', 'img' => 'https://image.vovworld.vn/w500/Uploaded/vovworld/vjryqdxwp/2025_06_06/tsctfmngay06-6_anh1_BVUC.jpg'],
                    ['title' => '2025 Sea Tourism and Culture Festival', 'date' => '01 Jun - 30 Jun 2025', 'img' => 'https://image.vietnamnews.vn/uploadvnnews/Article/2024/11/14/387445_5008084991858881_image.png'],
                    ['title' => 'The 21st Southern Fruit Festival', 'date' => '01 Jun - 31 Aug 2025', 'img' => 'https://images.vietnamtourism.gov.vn/en/images/2025/jun/anh_1_%281%29.jpg']
                ],
                6 => [
                    ['title' => 'Double Seventh Festival', 'date' => '7th day of Lunar July', 'img' => 'https://www.chinatrainbooking.com/pic/festival/qixi/meet.jpg'],
                    ['title' => 'Vu Lan', 'date' => '15th day of Lunar July', 'img' => 'https://file.hstatic.net/200000427529/file/le_vu_lan_nam_2023_la_gi_may_819a9054830c4383b6d20b5d1422f6b9_grande.jpg']
                ],
                8 => [
                    ['title' => 'Vietnam National Day', 'date' => '2 Sep 2025', 'img' => 'https://nn.ntt.edu.vn/wp-content/uploads/2023/08/vietnam-national-day-a-poster-to-celebrate-and-welcome-vietnam-independence-with-big-vietnamese-figures-vector.jpeg'],
                    ['title' => 'Chongyang Festival / Double Ninth Festival', 'date' => '9th day of Lunar Sep', 'img' => 'https://nhakhoachampion.com/upload/double-ninth-festival-presentation-169-.png']
                ],
                9 => [
                    ['title' => 'Vietnamese Women’s Day', 'date' => '20 Oct 2025', 'img' => 'https://vnvis.com/wp-content/uploads/2021/10/HW2019-1-1-800x365.jpg'],
                    ['title' => 'Full Moon Lantern Festival in Hoi An', 'date' => 'monthly on full moon days', 'img' => 'https://jackytravel.com/wp-content/uploads/2023/12/Hoi-An-Lantern-Festival.jpg']
                ],
                
                4 => [['title' => 'DIFF 2025', 'date' => '12 MAY - 18 MAY 2025', 'img' => 'https://cdn.quangnam.gov.vn/thumbs/1200x630/2025/01/15/le-hoi-phao-hoa-quoc-te-da-nang.-anh-kim-lien-5-.jpg']],
                7 => [['title' => 'Central Highlands Gong Festival', 'date' => '12 Aug - 18 Aug 2025', 'img' => 'https://image.vovworld.vn/w500/Uploaded/vovworld/vjryqdxwp/2022_11_18/festiuva_PSHJ.jpg']],
                11 => [['title' => 'Vietnam National Day Parade', 'date' => '02 Dec 2025', 'img' => 'https://localvietnam.com/wp-content/uploads/2023/05/national-day-ba-dinh-square-flag-ceremony-1.jpg']]
            ];

            foreach ($eventsByMonth as $monthIndex => $events) {
                echo "<div class='month-events' data-month='$monthIndex' style='display: ".($monthIndex === 5 ? 'flex' : 'none')."'>";
                foreach ($events as $event) {
                    echo "
                        <div class='event-card'>
                            <img src='{$event['img']}' alt='{$event['title']}'>
                            <div class='event-info'>
                                <p class='event-date'>{$event['date']}</p>
                                <h3 class='event-title'>{$event['title']}</h3>
                            </div>
                        </div>";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</section>



        <!-- SECTION 2: HIỆN ĐẠI & VĂN HÓA -->
        <section id="section-cultural" class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
            <div class="container feature-section__container">
                <div class="feature-section__image-wrapper animate-on-scroll">
                    <img src="https://media-cdn-v2.laodong.vn/storage/newsportal/2024/12/27/1441529/Phaohoa.jpg" alt="Lễ hội pháo hoa tại Đà Nẵng">
                </div>
                <div class="feature-section__content animate-on-scroll">
                    <h2>Những Sự Kiện Văn Hóa Hiện Đại</h2>
                    <p>Không chỉ có truyền thống, Việt Nam ngày nay còn tổ chức nhiều lễ hội hiện đại đặc sắc, thu hút du khách trong và ngoài nước.</p>
                    <ul class="activity-list">
                        <?php foreach ($culturalFestivals as $activity): ?>
                            <li><?php echo htmlspecialchars($activity); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/tours/cultural-events" class="btn btn--primary">Lịch Sự Kiện</a>
                </div>
            </div>
        </section>

        <!-- SECTION 3: NGÀY LỄ & KỲ NGHỈ -->
        <section id="section-holidays" class="feature-section">
            <div class="container feature-section__container">
                <div class="feature-section__image-wrapper animate-on-scroll">
                    <img src="https://imgnvsk.vnanet.vn/MediaUpload/Content/2024/04/17/vna-potal-le-ruoc-kieu-ve-den-hung-732282117-9-58-40.jpg" alt="Không khí đón Tết tại Việt Nam">
                </div>
                <div class="feature-section__content animate-on-scroll">
                    <h2>Ngày Lễ Quan Trọng</h2>
                    <p>Đây là những dịp đặc biệt trong năm để nghỉ ngơi, sum họp gia đình và cùng nhau kỷ niệm những dấu ấn lịch sử dân tộc.</p>
                    <ul class="activity-list">
                        <?php foreach ($holidays as $activity): ?>
                            <li><?php echo htmlspecialchars($activity); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/tours/holiday-packages" class="btn btn--primary">Gói Nghỉ Lễ</a>
                </div>
            </div>
        </section>
    </main>

    <?php foreach ($pageScripts as $script): ?>
        <script src="<?php echo htmlspecialchars($script); ?>"></script>
    <?php endforeach; ?>
</body>
</html>
