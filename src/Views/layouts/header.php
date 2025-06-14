<?php
// File: src/View/layout/header.php

declare(strict_types=1);
// Đặt tiêu đề mặc định hoặc lấy từ Controller (nếu có)
$pageTitle = $pageTitle ?? 'Du Lịch Quê Hương - Khám Phá Việt Nam';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="Khám phá vẻ đẹp du lịch Việt Nam qua các địa điểm hấp dẫn và đặt tour dễ dàng.">
    <!-- CSS Toàn cục (Global Styles) -->
    <link rel="stylesheet" href="/css/global.css"> <!-- File CSS cho các kiểu cơ bản, reset, typography -->
    <!-- CSS Thành phần (Component Styles) -->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css"> <!-- File CSS cho footer -->


    <?php
    // Nạp các tệp CSS riêng của trang (nếu có)
    if (!empty($pageStyles) && is_array($pageStyles)) {
        foreach ($pageStyles as $styleUrl) {
            echo '<link rel="stylesheet" href="' . htmlspecialchars($styleUrl) . '">' . PHP_EOL;
        }
    }
    ?>

</head>

<body>

    <header class="site-header">
        <div class="nav-menu"> <!-- Container chính cho thanh điều hướng -->
            <div class="logo-container">
                <a href="/">
                    <img src="/images/logo/Vietnam.png" alt="Logo Du Lịch Quê Hương" id="logoVietNam">
                    <!-- Có thể thêm slogan ở đây nếu muốn -->
                    <!-- <span class="site-slogan">Explore Your Vietnam</span> -->
                </a>
            </div>

            <nav class="main-navigation" id="main-navigation">
                <ul class="nav-list">
                    <!-- === LIFE IN VIETNAM - MEGA MENU === -->
                    <li class="nav-item has-mega-menu">
                        <a href="/life" aria-haspopup="true" aria-expanded="false">Life in VietNam</a>
                        <div class="mega-menu-panel life-mega-menu" aria-hidden="true">
                            <div class="mega-menu-container">
                                <!-- Cột 1: Culture & Traditions -->
                                <div class="mega-menu-column culture-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/life/culture"><img src="/images/mega_menu/cultural.webp" alt="Văn hóa Việt Nam"></a>
                                        <h4>CULTURE</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">Traditions & Customs</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/festivals">Festivals & Holidays</a></li>
                                        <li><a href="/life/etiquette">Social Etiquette</a></li>
                                        <li><a href="/life/beliefs">Beliefs & Spirituality</a></li>
                                        <li><a href="/life/arts-crafts">Arts & Handicrafts</a></li>
                                        <li><a href="/life/ao-dai">Ao Dai: National Dress</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 2: Food & Drink -->
                                <div class="mega-menu-column food-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/life/food"><img src="/images/mega_menu/food.jpg" alt="Ẩm thực Việt Nam"></a>
                                        <h4>FOOD & DRINK</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">A Taste of Vietnam</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/street-food">Street Food Guide</a></li>
                                        <li><a href="/life/must-try">Must-Try Dishes</a></li>
                                        <li><a href="/life/coffee-culture">Vietnamese Coffee</a></li>
                                        <li><a href="/life/regional-cuisine">Regional Specialties</a></li>
                                        <li><a href="/life/markets">Local Markets</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 3: Travel Essentials -->
                                <div class="mega-menu-column travel-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/life/travel-tips"><img src="/images//mega_menu/travel_experience.jpg" alt="Kinh nghiệm du lịch"></a>
                                        <h4>TRAVEL ESSENTIALS</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">Tips for Your Trip</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/visa">Visa Information</a></li>
                                        <li><a href="/life/transport">Getting Around</a></li>
                                        <li><a href="/life/money">Money & Budgeting</a></li>
                                        <li><a href="/life/safety">Safety & Health</a></li>
                                        <li><a href="/life/language">Basic Vietnamese Phrases</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mega-menu-container -->
                        </div> <!-- /mega-menu-panel -->
                    </li> <!-- /has-mega-menu (Life in Vietnam) -->

                    <!-- === PLACES MUST GO - MEGA MENU === -->
                    <li class="nav-item has-mega-menu">
                        <a href="/destinations" aria-haspopup="true" aria-expanded="false">Places must go</a>
                        <div class="mega-menu-panel places-mega-menu" aria-hidden="true">
                            <div class="mega-menu-container">
                                <!-- Cột 1: Northern -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/destinations/hanoi"><img src="/images/mega_menu/hanoi.png" alt="Thủ đô Hà Nội"></a>
                                        <h4>HA NOI</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">NORTHERN VIETNAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destinations/ha-giang">Ha Giang</a></li>
                                        <li><a href="/destinations/ha-long">Ha Long</a></li>
                                        <li><a href="/destinations/mai-chau">Mai Chau</a></li>
                                        <li><a href="/destinations/ninh-binh">Ninh Binh</a></li>
                                        <li><a href="/destinations/sapa">Sapa</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 2: Central -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/destinations/da-nang"><img src="/images/mega_menu/DaNang.jpg" alt="Thành phố Đà Nẵng"></a>
                                        <h4>DA NANG</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">CENTRAL VIETNAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destinations/da-lat">Da Lat</a></li>
                                        <li><a href="/destinations/hoi-an">Hoi An</a></li>
                                        <li><a href="/destinations/hue">Hue</a></li>
                                        <li><a href="/destinations/nha-trang">Nha Trang</a></li>
                                        <li><a href="/destinations/phong-nha">Phong Nha</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 3: Southern -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/destinations/ho-chi-minh"><img src="/images/mega_menu/TPHCM.jpg" alt="Thành phố Hồ Chí Minh"></a>
                                        <h4>HO CHI MINH CITY</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">SOUTHERN VIETNAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destinations/con-dao">Con Dao</a></li>
                                        <li><a href="/destinations/binh-thuan">Binh Thuan</a></li>
                                        <li><a href="/destinations/can-tho">Can Tho</a></li>
                                        <li><a href="/destinations/chau-doc">Chau Doc</a></li>
                                        <li><a href="/destinations/phu-quoc">Phu Quoc</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mega-menu-container -->
                        </div> <!-- /mega-menu-panel -->
                    </li> <!-- /has-mega-menu (Places must go) -->

                    <!-- === THINGS TO DO - MEGA MENU === -->
                    <li class="nav-item has-mega-menu">
                        <a href="/things" aria-haspopup="true" aria-expanded="false">Things to do</a>
                        <div class="mega-menu-panel things-mega-menu" aria-hidden="true">
                            <div class="mega-menu-container">
                                <!-- Cột 1: Adventure & Outdoors -->
                                <div class="mega-menu-column adventure-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/things/adventure"><img src="/images/mega_menu/adventure_and_outdoor.jpg" alt="Adventure & Outdoors"></a>
                                        <h4>ADVENTURE & OUTDOORS</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">Thrills & Nature's Best</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/things/trekking_in_sapa">Trekking in Sapa</a></li>
                                        <li><a href="/things/kayaking-halong">Kayaking in Ha Long Bay</a></li>
                                        <li><a href="/things/caving-phongnha">Exploring Phong Nha Caves</a></li>
                                        <li><a href="/things/motorbiking">Motorbiking Adventures</a></li>
                                        <li><a href="/things/watersports">Watersports & Beaches</a></li>
                                        <li><a href="/things/canyoning-dalat">Canyoning in Da Lat</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 2: Culture & Heritage -->
                                <div class="mega-menu-column culture-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/things/culture"><img src="/images/mega_menu/cultural_and_heritage.jpg" alt="Culture & Heritage"></a>
                                        <h4>CULTURE & HERITAGE</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">Immerse in Local Life</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/things/historical-sites">Visiting Historical Sites</a></li>
                                        <li><a href="/things/museums">Exploring Museums</a></li>
                                        <li><a href="/things/workshops">Hands-on Workshops (Cooking, Crafts)</a></li>
                                        <li><a href="/things/performances">Traditional Performances</a></li>
                                        <li><a href="/things/ancient-towns">Wandering Ancient Towns</a></li>
                                        <li><a href="/things/local-markets">Visiting Local Markets</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 3: Relaxation & Wellness -->
                                <div class="mega-menu-column wellness-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/things/relaxation"><img src="/images/mega_menu/relax.jpg" alt="Relaxation & Wellness"></a>
                                        <h4>RELAXATION & WELLNESS</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">Unwind & Rejuvenate</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/things/spa-massage">Spa & Massage Therapies</a></li>
                                        <li><a href="/things/beach-relaxation">Beach Escapes</a></li>
                                        <li><a href="/things/yoga-meditation">Yoga & Meditation Retreats</a></li>
                                        <li><a href="/things/cruises">Relaxing River & Bay Cruises</a></li>
                                        <li><a href="/things/scenic-cafes">Enjoying Scenic Cafes</a></li>
                                        <li><a href="/things/hot-springs">Natural Hot Springs</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mega-menu-container -->
                        </div> <!-- /mega-menu-panel -->
                    </li> <!-- /has-mega-menu (Things to do) -->

                    <!-- === MỤC MENU CUỐI CÙNG === -->
                    <li class="nav-item">
                        <a href="/trip">Your trip</a> <!-- Mục này không có mega menu -->
                    </li>

                </ul> <!-- /nav-list -->
            </nav> <!-- /main-navigation -->

            <!-- Các hành động bên phải (Tìm kiếm, Hamburger cho mobile) -->
            <div class="header-actions">
                <!-- Nút tìm kiếm -->
                <div class="search-container"> <!-- Bọc nút tìm kiếm -->
                    <button id="search-toggle-btn" aria-label="Toggle search input">
                        <img src="/svg/search.svg" alt="Tìm kiếm" class="search-icon">
                        <!-- Hoặc <i class="fas fa-search"></i> nếu dùng Font Awesome -->
                    </button>
                </div>
                <!-- Nút Hamburger (chỉ hiển thị trên màn hình nhỏ) -->
                <button class="hamburger-button" id="hamburger-button" aria-label="Toggle Menu" aria-expanded="false" aria-controls="main-navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div> <!-- /header-actions -->

        </div> <!-- /nav-menu container -->

        <!-- Form tìm kiếm ẩn (đặt bên ngoài .nav-menu container để định vị dễ hơn) -->
        <form id="search-form" class="search-form hidden" action="/search" method="GET">
            <input type="search" id="search-input" name="q" placeholder="Nhập từ khóa...">
            <button type="submit">Tìm</button>
        </form>

    </header> <!-- /site-header -->