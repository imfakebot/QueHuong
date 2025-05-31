<?php

declare(strict_types=1);

define('BASE_PATH', dirname(__DIR__));
define('VIEWS_PATH', BASE_PATH . '/src/Views');

$pageTitle = 'Quê Hương Việt Nam'; // Tiêu đề mặc định

$requestUri = strtok($_SERVER['REQUEST_URI'], '?');
if (strlen($requestUri) > 1 && substr($requestUri, -1) === '/') {
    $requestUri = rtrim($requestUri, '/');
}
if (empty($requestUri)) {
    $requestUri = '/';
}

$contentView = '';
$matches = []; // Để lưu kết quả từ preg_match

// ----- XỬ LÝ ROUTING -----

// 1. Các route tĩnh (ưu tiên khớp trước)
if ($requestUri === '/' || $requestUri === '/home') {
    $pageTitle = 'Trang Chủ - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/home/index.php';
} elseif ($requestUri === '/tours') { // Trang liệt kê tất cả tours
    $pageTitle = 'Danh Sách Tours - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/tours/index.php';
} elseif ($requestUri === '/destinations') { // Trang liệt kê tất cả destinations
    $pageTitle = 'Các Điểm Đến - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/destination/index.php';
}
// 2. Route động cho chi tiết ĐIỂM ĐẾN: /destinations/{slug}
elseif (preg_match('#^/destinations/([a-zA-Z0-9-]+)$#', $requestUri, $matches)) {
    $destinationSlug = $matches[1]; // Lấy slug từ URL (ví dụ: "da-nang")
    $potentialView = VIEWS_PATH . '/destination/' . $destinationSlug . '.php';

    if (file_exists($potentialView)) {
        // $pageTitle sẽ được đặt bên trong file view của destination đó
        $contentView = $potentialView;
    } else {
        // Slug hợp lệ nhưng không có file view tương ứng
        http_response_code(404);
        $pageTitle = '404 Not Found - Du Lịch Quê Hương';
        $contentView = VIEWS_PATH . '/errors/404.php';
    }
}
// 3. Route động cho chi tiết TOUR: /tours/{slug}
elseif (preg_match('#^/tours/([a-zA-Z0-9-]+)$#', $requestUri, $matches)) {
    $tourSlug = $matches[1]; // Lấy slug từ URL (ví dụ: "vinh-ha-long-tour")
    $potentialView = VIEWS_PATH . '/tours/' . $tourSlug . '.php';

    if (file_exists($potentialView)) {
        // $pageTitle sẽ được đặt bên trong file view của tour đó
        $contentView = $potentialView;
    } else {
        http_response_code(404);
        $pageTitle = '404 Not Found - Du Lịch Quê Hương';
        $contentView = VIEWS_PATH . '/errors/404.php';
    }
}
// ... (Thêm các route động khác nếu cần, ví dụ /blog/{slug}) ...

// 4. Mặc định / Xử lý 404 cho các trường hợp còn lại
else {
    // Kiểm tra file tĩnh (CSS, JS, images, video) trước khi báo 404
    $filePath = __DIR__ . $requestUri; // __DIR__ là thư mục public
    if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|mp4|webp)$/i', $requestUri) && file_exists($filePath)) {
        // Cho phép máy chủ PHP tích hợp tự phục vụ các file tĩnh này
        // Không làm gì cả ở đây sẽ khiến PHP cố gắng tìm một route.
        // Để server tự xử lý, ta return false.
        return false;
    }

    http_response_code(404);
    $pageTitle = '404 Not Found - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/errors/404.php';
}


// ----- NẠP LAYOUT -----

// Nạp Header
if (file_exists(VIEWS_PATH . '/layouts/header.php')) {
    require_once VIEWS_PATH . '/layouts/header.php';
} else {
    error_log("Lỗi: Không tìm thấy tệp header.php tại " . VIEWS_PATH . '/layouts/header.php');
    die('Lỗi hệ thống: Header không tồn tại.');
}

// Nạp Nội dung chính
if (!empty($contentView) && file_exists($contentView)) {
    require_once $contentView;
} else {
    // Trường hợp này chỉ nên xảy ra nếu logic routing ở trên có lỗi
    // và $contentView không được set đúng cách, hoặc file không tồn tại
    // mà chưa bị bắt bởi các điều kiện file_exists ở trên.
    if (http_response_code() !== 404) { // Nếu chưa set 404 ở trên
        http_response_code(404);
        $pageTitle = 'Lỗi Nội Dung - Du Lịch Quê Hương';
    }
    if (file_exists(VIEWS_PATH . '/errors/404.php')) {
        require_once VIEWS_PATH . '/errors/404.php';
    } else {
        echo "<div style='text-align:center; padding: 50px;'><h1>404 - Content Missing</h1><p>The specific content file for this page could not be found.</p></div>";
    }
}

// Nạp Footer
if (file_exists(VIEWS_PATH . '/layouts/footer.php')) {
    require_once VIEWS_PATH . '/layouts/footer.php';
} else {
    error_log("Lỗi: Không tìm thấy tệp footer.php tại " . VIEWS_PATH . '/layouts/footer.php');
    die('Lỗi hệ thống: Footer không tồn tại.');
}
