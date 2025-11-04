<?php

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
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">


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
                    <!-- === CUỘC SỐNG TẠI VIỆT NAM - MEGA MENU === -->
                    <li class="nav-item has-mega-menu">
                        <a href="/life" aria-haspopup="true" aria-expanded="false">Cuộc Sống Tại Việt Nam</a>
                        <div class="mega-menu-panel life-mega-menu" aria-hidden="true">
                            <div class="mega-menu-container">
                                <!-- Cột 1: Văn Hóa & Truyền Thống -->
                                <div class="mega-menu-column culture-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/life/culture"><img src="/images/mega_menu/cultural.webp" alt="Văn hóa Việt Nam"></a>
                                        <h4>VĂN HÓA</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">Truyền Thống & Phong Tục</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/festivals">Lễ Hội & Ngày Lễ</a></li>
                                        <li><a href="/life/etiquette">Phong Tục Xã Hội</a></li>
                                        <li><a href="/life/beliefs">Tín Ngưỡng & Tâm Linh</a></li>
                                        <li><a href="/life/arts-crafts">Nghệ Thuật & Thủ Công</a></li>
                                        <li><a href="/life/ao-dai">Áo Dài: Trang Phục Dân Tộc</a></li>
                                    </ul>
                                </div>

                                <!-- Cột 2: Ẩm Thực -->
                                <div class="mega-menu-column food-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/life/food"><img src="/images/mega_menu/food.jpg" alt="Ẩm thực Việt Nam"></a>
                                        <h4>ẨM THỰC</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">Hương Vị Việt Nam</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/street-food">Ẩm Thực Đường Phố</a></li>
                                        <li><a href="/life/must-try">Món Ăn Không Thể Bỏ Qua</a></li>
                                        <li><a href="/life/coffee-culture">Cà Phê Việt Nam</a></li>
                                        <li><a href="/life/regional-cuisine">Đặc Sản Vùng Miền</a></li>
                                        <li><a href="/life/markets">Chợ Địa Phương</a></li>
                                    </ul>
                                </div>

                                <!-- Cột 3: Thông Tin Du Lịch -->
                                <div class="mega-menu-column travel-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/life/travel-tips"><img src="/images//mega_menu/travel_experience.jpg" alt="Kinh nghiệm du lịch"></a>
                                        <h4>THÔNG TIN DU LỊCH</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">Lưu Ý Khi Du Lịch</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/life/visa">Thông Tin Visa</a></li>
                                        <li><a href="/life/transport">Phương Tiện Di Chuyển</a></li>
                                        <li><a href="/life/money">Tài Chính & Chi Phí</a></li>
                                        <li><a href="/life/safety">An Toàn & Sức Khỏe</a></li>
                                        <li><a href="/life/language">Những Câu Tiếng Việt Cơ Bản</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mega-menu-container -->
                        </div> <!-- /mega-menu-panel -->
                    </li> <!-- /has-mega-menu (Cuộc Sống Tại Việt Nam) -->

                    <!-- === ĐỊA ĐIỂM PHẢI ĐẾN - MEGA MENU === -->
                    <li class="nav-item has-mega-menu">
                        <a href="/destinations" aria-haspopup="true" aria-expanded="false">Địa Điểm Phải Đến</a>
                        <div class="mega-menu-panel places-mega-menu" aria-hidden="true">
                            <div class="mega-menu-container">
                                <!-- Cột 1: Northern -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/destinations/hanoi"><img src="/images/mega_menu/hanoi.png" alt="Thủ đô Hà Nội"></a>
                                        <h4>HA NOI</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">BẮC VIỆT NAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destinations/ha-giang">Hà Giang</a></li>
                                        <li><a href="/destinations/ha-long">Hạ Long</a></li>
                                        <li><a href="/destinations/mai-chau">Mai Châu</a></li>
                                        <li><a href="/destinations/ninh-binh">Ninh Bình</a></li>
                                        <li><a href="/destinations/sapa">Sa Pa</a></li>
                                    </ul>
                                </div>
                                <!-- Cột 2: Central -->
                                <div class="mega-menu-column region-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/destinations/da-nang"><img src="/images/mega_menu/DaNang.jpg" alt="Thành phố Đà Nẵng"></a>
                                        <h4>DA NANG</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">TRUNG VIỆT NAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destinations/da-lat">Đà Lạt</a></li>
                                        <li><a href="/destinations/hoi-an">Hội An</a></li>
                                        <li><a href="/destinations/hue">Huế</a></li>
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
                                    <h5 class="mega-menu-subheading region-title">NAM VIỆT NAM</h5>
                                    <ul class="mega-menu-links region-links">
                                        <li><a href="/destinations/con-dao">Côn Đảo</a></li>
                                        <li><a href="/destinations/binh-thuan">Bình Thuận</a></li>
                                        <li><a href="/destinations/can-tho">Cần Thơ</a></li>
                                        <li><a href="/destinations/chau-doc">Châu Đốc</a></li>
                                        <li><a href="/destinations/phu-quoc">Phú Quốc</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mega-menu-container -->
                        </div> <!-- /mega-menu-panel -->
                    </li> <!-- /has-mega-menu (Địa Điểm Phải Đến) -->

                    <!-- === HOẠT ĐỘNG DU LỊCH - MEGA MENU === -->
                    <li class="nav-item has-mega-menu">
                        <a href="/things" aria-haspopup="true" aria-expanded="false">Hoạt Động Du Lịch</a>
                        <div class="mega-menu-panel things-mega-menu" aria-hidden="true">
                            <div class="mega-menu-container">
                                <!-- Cột 1: Khám Phá & Ngoài Trời -->
                                <div class="mega-menu-column adventure-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/things/adventure"><img src="/images/mega_menu/adventure_and_outdoor.jpg" alt="Khám Phá & Ngoài Trời"></a>
                                        <h4>KHÁM PHÁ & NGOÀI TRỜI</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">Trải Nghiệm Thiên Nhiên</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/tours/sapa-terraces-adventure">Leo Núi Tại Sapa</a></li>
                                        <li><a href="/tours/kayaking-in-halong-bay">Chèo Thuyền Vịnh Hạ Long</a></li>
                                        <li><a href="/tours/exploring-phongnha-cave">Khám Phá Hang Động Phong Nha</a></li>
                                        <li><a href="/tours/motorbiking">Phượt Xe Máy</a></li>
                                        <li><a href="/tours/watersports">Thể Thao Biển & Bãi Biển</a></li>
                                        <li><a href="tours/canyoning-dalat">Vượt Thác Tại Đà Lạt</a></li>
                                    </ul>
                                </div>

                                <!-- Cột 2: Văn Hóa & Di Sản -->
                                <div class="mega-menu-column culture-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/things/cultural-heritage-tours"><img src="/images/mega_menu/cultural_and_heritage.jpg" alt="Văn Hóa & Di Sản"></a>
                                        <h4>VĂN HÓA & DI SẢN</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">Hòa Mình Vào Đời Sống Địa Phương</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/things/historical-sites">Thăm Di Tích Lịch Sử</a></li>
                                        <li><a href="/things/museums">Khám Phá Bảo Tàng</a></li>
                                        <li><a href="/things/workshops">Học Nấu Ăn & Thủ Công</a></li>
                                        <li><a href="/things/performances">Xem Biểu Diễn Truyền Thống</a></li>
                                        <li><a href="/things/ancient-towns">Dạo Phố Cổ</a></li>
                                        <li><a href="/things/local-markets">Khám Phá Chợ Địa Phương</a></li>
                                    </ul>
                                </div>

                                <!-- Cột 3: Nghỉ Dưỡng & Thư Giãn -->
                                <div class="mega-menu-column wellness-column">
                                    <div class="mega-menu-image-header">
                                        <a href="/things/relaxation"><img src="/images/mega_menu/relax.jpg" alt="Nghỉ Dưỡng & Thư Giãn"></a>
                                        <h4>NGHỈ DƯỠNG & THƯ GIÃN</h4>
                                    </div>
                                    <h5 class="mega-menu-subheading region-title">Thư Giãn & Phục Hồi</h5>
                                    <ul class="mega-menu-links">
                                        <li><a href="/things/spa-massage">Spa & Massage Trị Liệu</a></li>
                                        <li><a href="/things/beach-relaxation">Nghỉ Dưỡng Biển</a></li>
                                        <li><a href="/things/yoga-meditation">Yoga & Thiền</a></li>
                                        <li><a href="/things/cruises">Du Thuyền Sông & Vịnh</a></li>
                                        <li><a href="/things/scenic-cafes">Thưởng Thức Café View Đẹp</a></li>
                                        <li><a href="/things/hot-springs">Suối Nước Nóng</a></li>
                                    </ul>
                                </div>
                            </div> <!-- /mega-menu-container -->
                        </div> <!-- /mega-menu-panel -->
                    </li> <!-- /has-mega-menu (Hoạt Động Du Lịch) -->

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
                <!-- Nút đăng nhập  -->
                <div class="auth-actions">
                    <a href="/login" class="login-button" aria-label="Đăng nhập">Đăng nhập</a>
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

    <!-- Login Modal -->
<div id="login-modal" class="modal" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="modal-dialog" role="document">
    <button class="modal-close" aria-label="Đóng">&times;</button>
    <h2>Đăng nhập</h2>

    <form class="login-form">
      <label for="login-username" class="visually-hidden">Tài khoản</label>
      <input
        id="login-username"
        name="username"
        type="text"
        placeholder="Tài khoản"
        required
      />

      <label for="login-password" class="visually-hidden">Mật khẩu</label>
      <input
        id="login-password"
        name="password"
        type="password"
        placeholder="Mật khẩu"
        required
      />

      <p class="login-message"></p>

      <div class="login-actions">
        <button type="submit" class="btn-primary">Đăng nhập</button>
        <a href="/register" class="btn-link">Đăng ký</a>
      </div>
    </form>
  </div>
</div>
    
    