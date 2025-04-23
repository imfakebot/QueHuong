<?php // public/xem_menu.php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem Trước Menu</title>

    <link rel="stylesheet" href="/css/header.css">

</head>

<body>

    <header class="site-header">
        <nav class="nav-menu">
            <ul class="nav-list">
                <li class="logo-item">
                    <a href="/"> <img src="/images/Vietnam.png" alt="Logo Trang Chủ" style="max-height: 60px; /* Giới hạn chiều cao logo tạm thời */"></a>
                </li>
                <li class="nav-item"><a href="/life">Life in VietNam</a></li>
                <li class="nav-item"><a href="/destination">Places must go</a></li>
                <li class="nav-item"><a href="/thing">Things to do</a></li>
                <li class="nav-item"><a href="/trip">Your trip</a></li>
                <li class="nav-item search-toggle-item">
                    <button id="search-toggle-btn" aria-label="Toggle search input">
                        <img src="/svg/search.svg" alt="Tìm kiếm">
                    </button>
                </li>
            </ul>
        </nav>

        <form id="search-form" class="search-form hidden" action="/search" method="GET">
            <input type="search" id="search-input" name="q" placeholder="Nhập từ khóa...">
            <button type="submit">Tìm</button>
        </form>

    </header>
    <script src="/js/header.js"></script>
</body>

</html>