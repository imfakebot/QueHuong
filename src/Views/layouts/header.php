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
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <!-- Các link khác -->
</head>

<body>

    <header class="site-header">
        <div class="nav-menu">
            <div class="logo-container">
                <a href="/">
                    <img src="/images/Vietnam.png" alt="Logo Du Lịch Quê Hương" id="logoVietNam">
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
                                        <!-- Thay bằng ảnh phù hợp với văn hóa VN -->
                                        <a href="/life/culture"><img src="/images/culture-placeholder.jpg" alt="Văn hóa Việt Nam"></a>
                                        <h4>CULTURE</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">Traditions & Customs</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/culture/festivals">Festivals & Holidays</a></li>
                                        <li><a href="/life/culture/etiquette">Social Etiquette</a></li>
                                        <li><a href="/life/culture/beliefs">Beliefs & Spirituality</a></li>
                                        <li><a href="/life/culture/arts-crafts">Arts & Handicrafts</a></li>
                                        <li><a href="/life/culture/ao-dai">Ao Dai: National Dress</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 2: Food & Drink -->
                                <div class="mega-menu-column food-column">
                                    <div class="mega-menu-image-header">
                                        <!-- Thay bằng ảnh món ăn đặc trưng -->
                                        <a href="/life/food"><img src="/images/food-placeholder.jpg" alt="Ẩm thực Việt Nam"></a>
                                        <h4>FOOD & DRINK</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">A Taste of Vietnam</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/food/street-food">Street Food Guide</a></li>
                                        <li><a href="/life/food/must-try">Must-Try Dishes</a></li>
                                        <li><a href="/life/food/coffee-culture">Vietnamese Coffee</a></li>
                                        <li><a href="/life/food/regional-cuisine">Regional Specialties</a></li>
                                        <li><a href="/life/food/markets">Local Markets</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 3: Travel Essentials -->
                                <div class="mega-menu-column travel-column">
                                    <div class="mega-menu-image-header">
                                        <!-- Thay bằng ảnh liên quan đến du lịch/di chuyển -->
                                        <a href="/life/travel-tips"><img src="/images/travel-placeholder.jpg" alt="Kinh nghiệm du lịch"></a>
                                        <h4>TRAVEL ESSENTIALS</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading">Tips for Your Trip</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/travel-tips/visa">Visa Information</a></li>
                                        <li><a href="/life/travel-tips/transport">Getting Around</a></li>
                                        <li><a href="/life/travel-tips/money">Money & Budgeting</a></li>
                                        <li><a href="/life/travel-tips/safety">Safety & Health</a></li>
                                        <li><a href="/life/travel-tips/language">Basic Vietnamese Phrases</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mega-menu-container -->
                        </div> <!-- /mega-menu-panel -->
                    </li> <!-- /has-mega-menu (Life in Vietnam) -->

                    <!-- === PLACES MUST GO - MEGA MENU === -->
                    <li class="nav-item has-mega-menu">
                        <a href="/destination" aria-haspopup="true" aria-expanded="false">Places must go</a>
                        <div class="mega-menu-panel places-mega-menu" aria-hidden="true">
                            <div class="mega-menu-container">
                                <!-- Cột 1: Northern -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/destination/hanoi"><img src="/images/hanoi.png" alt="Thủ đô Hà Nội"></a>
                                        <h4>HA NOI</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">NORTHERN VIETNAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destination/ha-giang">Ha Giang</a></li>
                                        <li><a href="/destination/ha-long">Ha Long</a></li>
                                        <li><a href="/destination/mai-chau">Mai Chau</a></li>
                                        <li><a href="/destination/ninh-binh">Ninh Binh</a></li>
                                        <li><a href="/destination/sapa">Sapa</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 2: Central -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/destination/da-nang"><img src="/images/DaNang.jpg" alt="Thành phố Đà Nẵng"></a>
                                        <h4>DA NANG</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">CENTRAL VIETNAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destination/da-lat">Da Lat</a></li>
                                        <li><a href="/destination/hoi-an">Hoi An</a></li>
                                        <li><a href="/destination/hue">Hue</a></li>
                                        <li><a href="/destination/nha-trang">Nha Trang</a></li>
                                        <li><a href="/destination/phong-nha">Phong Nha</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 3: Southern -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/destination/ho-chi-minh"><img src="/images/TPHCM.jpg" alt="Thành phố Hồ Chí Minh"></a>
                                        <h4>HO CHI MINH CITY</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">SOUTHERN VIETNAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destination/con-dao">Con Dao</a></li>
                                        <li><a href="/destination/binh-thuan">Binh Thuan</a></li>
                                        <li><a href="/destination/can-tho">Can Tho</a></li>
                                        <li><a href="/destination/chau-doc">Chau Doc</a></li>
                                        <li><a href="/destination/phu-quoc">Phu Quoc</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mega-menu-container -->
                        </div> <!-- /mega-menu-panel -->
                    </li> <!-- /has-mega-menu (Places must go) -->

                    <!-- === CÁC MỤC MENU KHÁC === -->
                    <li class="nav-item">
                        <a href="/thing">Things to do</a>
                    </li>
                    <li class="nav-item">
                        <a href="/trip">Your trip</a>
                    </li>
                </ul> <!-- /nav-list -->
            </nav> <!-- /main-navigation -->

            <!-- Các hành động bên phải (Tìm kiếm, Hamburger) -->
            <div class="header-actions">
                <div class="search-container">
                    <button id="search-toggle-btn" aria-label="Toggle search input">
                        <img src="/svg/search.svg" alt="Tìm kiếm" class="search-icon">
                    </button>
                    <!-- Form tìm kiếm đã được chuyển ra ngoài -->
                </div>
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

    <main class="site-content">
        <!-- Nội dung chính sẽ được nạp ở đây -->