<?php

declare(strict_types=1);
$pageTitle = $pageTitle ?? 'Du Lịch Quê Hương';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <!-- Link đến file CSS chính - Đảm bảo đường dẫn đúng -->
    <link rel="stylesheet" href="/css/header.css">
</head>

<body>

    <header class="site-header">
        <nav class="nav-menu">
            <ul class="nav-list">
                <li class="logo-item">
                    <a href="/">
                        <img src="/images/Vietnam.png" alt="Logo Trang Chủ" id="logoVietNam">
                    </a>
                </li>

                <!-- Mục 1: Life in VietNam (Link đơn giản) -->
                <li class="nav-item">
                    <a href="/life">Life in VietNam</a>
                </li>
                <!-- ===== Kết thúc Mục 1 ===== -->

                <!-- ===== Mục 2: Places must go (Mega Menu) ===== -->
                <li class="nav-item has-mega-menu">
                    <a href="/destination" aria-haspopup="true" aria-expanded="false">Places must go</a>
                    <div class="mega-menu-panel places-mega-menu" aria-hidden="true">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">

                                <!-- Cột 1: Northern -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <img src="/images/hanoi.png" alt="Hanoi">
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
                                        <img src="/images/DaNang.jpg" alt="Da Nang">
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
                                        <img src="/images/hcmc_thumb.jpg" alt="Ho Chi Minh City">
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

                                <!-- Cột 4: Map -->
                                <div class="mega-menu-column map-column">
                                    <img src="/images/vietnam_map_regions.png" alt="Vietnam Map Regions" class="mega-menu-map">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ===== Kết thúc Mục 2 ===== -->

                <!-- Mục 3: Things to do (Link đơn giản) -->
                <li class="nav-item">
                    <a href="/thing">Things to do</a>
                </li>
                <!-- ===== Kết thúc Mục 3 ===== -->

                <!-- Mục 4: Your trip (Link đơn giản) -->
                <li class="nav-item">
                    <a href="/trip">Your trip</a>
                </li>
                <!-- ===== Kết thúc Mục 4 ===== -->

                <!-- Mục tìm kiếm -->
                <li class="nav-item search-toggle-item">
                    <button id="search-toggle-btn" aria-label="Toggle search input">
                        <img src="/svg/search.svg" alt="Tìm kiếm">
                    </button>
                </li>
            </ul>
        </nav>

        <!-- Form tìm kiếm vẫn giữ nguyên -->
        <form id="search-form" class="search-form hidden" action="/search" method="GET">
            <input type="search" id="search-input" name="q" placeholder="Nhập từ khóa...">
            <button type="submit">Tìm</button>
        </form>

    </header>

    <main>
        <!-- Nội dung chính của trang sẽ bắt đầu ở đây -->