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
    if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|mp4|webp|svg|ico|woff|woff2|ttf|eot)$/i', $requestUri) && file_exists($filePath)) { // Thêm các định dạng file tĩnh phổ biến
        // Khi sử dụng máy chủ web tích hợp của PHP (php -S),
        // việc trả về `false` từ script router sẽ yêu cầu máy chủ phục vụ file tĩnh đó trực tiếp.
        // Nếu không, PHP sẽ cố gắng xử lý nó như một route.
        return false;
    }

    http_response_code(404);
    $pageTitle = '404 Not Found - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/errors/404.php';
}


// ----- NẠP LAYOUT -----

// Bắt đầu output buffering để nạp nội dung trang trước
ob_start();
if (!empty($contentView) && file_exists($contentView)) {
    require_once $contentView;
} else {
    // Trường hợp này chỉ nên xảy ra nếu logic routing ở trên có lỗi
    // và $contentView không được set đúng cách, hoặc file không tồn tại
    // mà chưa bị bắt bởi các điều kiện file_exists ở trên.
    $currentStatusCode = http_response_code();
    if ($currentStatusCode === 200 || $currentStatusCode === false) { // Nếu chưa set 404 hoặc lỗi khác
        http_response_code(404);
    }
    // Cập nhật pageTitle cho lỗi nếu chưa được đặt bởi routing
    $pageTitle = $pageTitle ?? 'Lỗi - Du Lịch Quê Hương';

    if (file_exists(VIEWS_PATH . '/errors/404.php')) {
        require_once VIEWS_PATH . '/errors/404.php';
    } else {
        echo "<div style='text-align:center; padding: 50px;'><h1>404 - Content Missing</h1><p>The specific content file for this page could not be found.</p></div>";
    }
}
$pageContentHtml = ob_get_clean(); // Lấy nội dung đã buffer và dừng buffering

// Bây giờ $pageTitle, $pageStyles, $pageScripts đã được định nghĩa bởi $contentView (nếu có)

// Nạp Header (sử dụng $pageTitle, $pageStyles)
if (file_exists(VIEWS_PATH . '/layouts/header.php')) {
    require_once VIEWS_PATH . '/layouts/header.php';
} else {
    error_log("Lỗi: Không tìm thấy tệp header.php tại " . VIEWS_PATH . '/layouts/header.php');
    die('Lỗi hệ thống: Header không tồn tại.');
}

// Xuất nội dung chính của trang
echo $pageContentHtml;

// Nạp Footer
if (file_exists(VIEWS_PATH . '/layouts/footer.php')) {
    require_once VIEWS_PATH . '/layouts/footer.php';
} else {
    error_log("Lỗi: Không tìm thấy tệp footer.php tại " . VIEWS_PATH . '/layouts/footer.php');
    die('Lỗi hệ thống: Footer không tồn tại.');
}
