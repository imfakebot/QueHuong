<?php
// File: src/View/layout/header.php (hoặc tên file tương tự)

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

    <!-- Link đến file CSS chính -->
    <link rel="stylesheet" href="/css/header.css">

    <!-- (Tùy chọn) Link đến Favicon -->
    <!-- <link rel="icon" href="/images/favicon.ico" type="image/x-icon"> -->

    <!-- (Tùy chọn) Link Font Awesome nếu dùng icon font thay vì SVG/IMG -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->
</head>

<body>

    <header class="site-header">
        <nav class="nav-menu">
            <ul class="nav-list">
                <!-- Logo -->
                <li class="logo-item">
                    <a href="/">
                        <img src="/images/Vietnam.png" alt="Logo Du Lịch Quê Hương" id="logoVietNam">
                    </a>
                </li>

                <!-- Mục 1: Life in VietNam -->
                <li class="nav-item">
                    <a href="/life">Life in VietNam</a>
                </li>

                <!-- Mục 2: Places must go (Mega Menu) -->
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
                </li> <!-- /has-mega-menu -->

                <!-- Mục 3: Things to do -->
                <li class="nav-item">
                    <a href="/thing">Things to do</a>
                </li>

                <!-- Mục 4: Your trip -->
                <li class="nav-item">
                    <a href="/trip">Your trip</a>
                </li>

                <!-- Nút Tìm kiếm -->
                <li class="nav-item search-toggle-item">
                    <button id="search-toggle-btn" aria-label="Toggle search input">
                        <img src="/svg/search.svg" alt="Tìm kiếm">
                        <!-- Hoặc dùng Font Awesome: <i class="fas fa-search" aria-hidden="true"></i> -->
                    </button>
                </li>
            </ul> <!-- /nav-list -->
        </nav> <!-- /nav-menu -->

        <!-- Form tìm kiếm ẩn -->
        <form id="search-form" class="search-form hidden" action="/search" method="GET">
            <input type="search" id="search-input" name="q" placeholder="Nhập từ khóa...">
            <button type="submit">Tìm</button>
        </form>

    </header> <!-- /site-header -->

    <!-- Nội dung chính của mỗi trang sẽ được chèn vào đây -->
    <main class="site-content">