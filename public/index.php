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
} elseif ($requestUri === '/things') { // Trang liệt kê tất cả "Things to do"
    $pageTitle = 'Things To Do in Vietnam - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/things/index.php';
} elseif ($requestUri === '/life') { // Trang liệt kê tất cả "Things to do"
    $pageTitle = 'Life in Vietnam - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/life/index.php';
} elseif ($requestUri === '/tours/cultural-heritage' || $requestUri === '/tours/culture') { // Trang liệt kê tour Văn Hóa & Di Sản
    $pageTitle = 'Tour Văn Hóa & Di Sản - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/tours/cultural-heritage-tours.php';
    // Đảm bảo file cultural-heritage-tours.php tồn tại trong VIEWS_PATH . '/tours/'
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
// Route cho trang chi tiết tour (sử dụng query parameter)
elseif ($requestUri === '/tours/detail' && isset($_GET['slug'])) {
    // $pageTitle sẽ được đặt bên trong file view của tour-detail.php
    $contentView = VIEWS_PATH . '/tours/tour-detail.php';
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
// Route cho trang danh mục "Relaxation & Wellness"
elseif ($requestUri === '/things/relaxation') {
    $pageTitle = 'Hoạt Động Thư Giãn & Chăm Sóc Sức Khỏe - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/things/relaxation.php';
} // Route cho trang danh mục "Hoạt động Văn hóa & Di sản" (Things to do)
elseif ($requestUri === '/things/cultural-experiences') { // Bạn có thể chọn slug URL khác nếu muốn
    $pageTitle = 'Trải Nghiệm Văn Hóa & Di Sản - Du Lịch Quê Hương';
    $contentView = VIEWS_PATH . '/things/cultural-heritage-tours.php'; // Trỏ đến file bạn đã chỉ định
} // Route động cho chi tiết "THINGS TO DO": /things/{slug}
elseif (preg_match('#^/things/([a-zA-Z0-9-]+)$#', $requestUri, $matches)) {
    $thingSlug = $matches[1]; // Lấy slug từ URL (ví dụ: "trekking-sapa")
    $potentialView = VIEWS_PATH . '/things/' . $thingSlug . '.php';

    if (file_exists($potentialView)) {
        // $pageTitle sẽ được đặt bên trong file view của "thing" đó
        $contentView = $potentialView;
    } else {
        http_response_code(404);
        $pageTitle = '404 Not Found - Du Lịch Quê Hương';
        $contentView = VIEWS_PATH . '/errors/404.php';
    }
}

//5. Route động cho chi tiết LIFE CULTURE: /life/culture/{slug}
elseif (preg_match('#^/life/culture/([a-zA-Z0-9-]+)$#', $requestUri, $matches)) {
    $cultureSlug = $matches[1]; // ví dụ: festivals
    $potentialView = VIEWS_PATH . '/life/culture/' . $cultureSlug . '.php';

    if (file_exists($potentialView)) {
        $contentView = $potentialView;
    } else {
        http_response_code(404);
        $pageTitle = '404 Not Found - Du Lịch Quê Hương';
        $contentView = VIEWS_PATH . '/errors/404.php';
    }
}

// ... (Thêm các route động khác nếu cần, ví dụ /blog/{slug}) ...

// 5. Mặc định / Xử lý 404 cho các trường hợp còn lại
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
if (http_response_code() === 404) {
    // Nếu là trang 404, chỉ hiển thị nội dung 404 mà không có header/footer
    if (file_exists(VIEWS_PATH . '/errors/404.php')) {
        require_once VIEWS_PATH . '/errors/404.php';
    } else {
    }
} else {
    // Các trang bình thường sẽ nạp đầy đủ layout
    ob_start();
    if (!empty($contentView) && file_exists($contentView)) {
        require_once $contentView;
    }
    $pageContentHtml = ob_get_clean();

    // Nạp Header
    if (file_exists(VIEWS_PATH . '/layouts/header.php')) {
        require_once VIEWS_PATH . '/layouts/header.php';
    } else {
        error_log("Lỗi: Không tìm thấy tệp header.php tại " . VIEWS_PATH . '/layouts/header.php');
        die('Lỗi hệ thống: Header không tồn tại.');
    }

    // Xuất nội dung chính
    echo $pageContentHtml;

    // Nạp Footer
    if (file_exists(VIEWS_PATH . '/layouts/footer.php')) {
        require_once VIEWS_PATH . '/layouts/footer.php';
    } else {
        error_log("Lỗi: Không tìm thấy tệp footer.php tại " . VIEWS_PATH . '/layouts/footer.php');
        die('Lỗi hệ thống: Footer không tồn tại.');
    }
}
