<?php

declare(strict_types=1);

// =========================================================================
// ==                           KHỞI TẠO & CẤU HÌNH                        ==
// =========================================================================

define('BASE_PATH', dirname(__DIR__));
define('VIEWS_PATH', BASE_PATH . '/src/Views');

/**
 * Hàm xử lý lỗi tập trung.
 * Dừng chương trình và hiển thị trang lỗi tương ứng.
 * @param int $code Mã lỗi HTTP (ví dụ: 404, 403, 500)
 */
function abort(int $code = 404): void
{
    http_response_code($code);
    $viewPath = VIEWS_PATH . "/errors/{$code}.php";
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        // Fallback text nếu file lỗi không tồn tại
        echo "Error {$code}: Page Not Found.";
    }
    die();
}

// Chuẩn hóa Request URI để xử lý nhất quán
$requestUri = strtok($_SERVER['REQUEST_URI'], '?');
if (strlen($requestUri) > 1) {
    $requestUri = rtrim($requestUri, '/');
}
if (empty($requestUri)) {
    $requestUri = '/';
}


// =========================================================================
// ==                         BẢNG ĐỊNH TUYẾN (ROUTING)                    ==
// =========================================================================

// ----- 1. CÁC ROUTE TĨNH (URL cố định) -----
$static_routes = [
    // Trang chính
    '/' => ['view' => '/home/index.php', 'title' => 'Trang Chủ'],
    '/home' => ['view' => '/home/index.php', 'title' => 'Trang Chủ'],
    '/contact' => ['view' => '/contact/index.php', 'title' => 'Liên Hệ'],

    // Các trang danh sách chính
    '/tours' => ['view' => '/tours/index.php', 'title' => 'Danh Sách Tours'],
    '/destinations' => ['view' => '/destination/index.php', 'title' => 'Các Điểm Đến'],
    '/things' => ['view' => '/things/index.php', 'title' => 'Trải Nghiệm Đáng Thử'],
    '/life' => ['view' => '/life/index.php', 'title' => 'Cuộc Sống & Văn Hóa'], // Trang này sẽ dùng file /life/index.php

    // Các trang danh sách con
    '/tours/cultural-heritage' => ['view' => '/tours/cultural-heritage-tours.php', 'title' => 'Tour Văn Hóa & Di Sản'],
    '/tours/adventure-outdoors' => ['view' => '/tours/adventure-outdoors-tours.php', 'title' => 'Tour Mạo Hiểm & Ngoài Trời'],
    '/tours/mountain-tours' => ['view' => '/tours/mountain-tours.php', 'title' => 'Các Tour Leo Núi & Trekking'],
    '/tours/water-tours' => ['view' => '/tours/water-tours.php', 'title' => 'Tour Biển Đảo & Sông Nước'],
    '/things/relaxation' => ['view' => '/things/relaxation.php', 'title' => 'Hoạt Động Thư Giãn'],
    '/things/adventure' => ['view' => '/things/adventure.php', 'title' => 'Hoạt Động Phiêu Lưu & Mạo Hiểm'],
    '/things/cultural-heritage-tours' => ['view' => '/things/cultural-heritage-tours.php', 'title' => 'Trải Nghiệm Văn Hóa & Di Sản'],
];


// ----- 2. BẢNG ÁNH XẠ CHO CÁC ROUTE ĐỘNG -----
// Ánh xạ từ slug trên URL sang tên tệp vật lý (không có .php)
$tour_slug_to_filename_map = [
    // Mountain Tours
    'sapa-terraces-adventure' => 'trekking-in-sapa',
    'motorbiking' => 'motorbiking',
    'exploring-phongnha-cave' => 'exploring-phongnha-cave',
    'da-lat-romantic-getaway' => 'da-lat-romantic-getaway-detail',
    'trekking-ta-xua-san-may' => 'trekking-ta-xua-detail',
    'chinh-phuc-dinh-fansipan' => 'fansipan-conquest-detail',
    'kham-pha-cao-nguyen-da-dong-van' => 'dong-van-plateau-detail',
    'trekking-cung-duong-ta-nang-phan-dung' => 'ta-nang-phan-dung-detail',
    'leo-nui-ba-den-tay-ninh' => 'ba-den-mountain-detail',
    'kham-pha-pu-luong-thanh-hoa' => 'pu-luong-discovery-detail',
    'leo-nui-langbiang-da-lat' => 'langbiang-mountain-detail',
    'trekking-bidoup-nui-ba' => 'bidoup-nuiba-trek-detail',
    'kham-pha-y-ty-lao-than' => 'y-ty-lao-than-detail',
    'kayaking-in-halong-bay' => 'kayaking-in-Halong'
];

$destination_slug_to_filename_map = [
    'binh-thuan'     => 'binh-thuan',
    'can-tho'         => 'can-tho',
    'chau-doc'        => 'chau-doc',
    'con-dao'         => 'con-dao',
    'da-lat'          => 'da-lat',
    'da-nang'         => 'da-nang',
    'ha-giang'        => 'ha-giang',
    'ha-long'         => 'ha-long',
    'ha-noi'          => 'hanoi', // Tên tệp là hanoi.php
    'ho-chi-minh'     => 'ho-chi-minh',
    'hoi-an'          => 'hoi-an',
    'hue'             => 'hue',
    'mai-chau'        => 'mai-chau',
    'nha-trang'       => 'nha-trang',
    'ninh-binh'       => 'ninh-binh',
    'phong-nha'       => 'phong-nha',
    'phu-quoc'        => 'phu-quoc',
    'sapa'            => 'sapa',
];

// ======================= PHẦN ĐƯỢC CẬP NHẬT =======================
// Bảng ánh xạ cho mục "Life in Vietnam"
$life_slug_to_filename_map = [
    // Culture & Traditions
    'culture'                       => 'culture',
    'ao-dai'                        => 'ao-dai',
    'arts-crafts'                   => 'arts-crafts',
    'beliefs'                       => 'beliefs',
    'etiquette'                     => 'etiquette',
    'festivals'                     => 'festivals', // trang danh sách các lễ hội
    // Các lễ hội cụ thể
    'cold-food-festival'            => 'cold-food-festival',
    'enjoy-danang-festival-2025'    => 'enjoy-danang-festival-2025',
    'lim-festival'                  => 'lim-festival',
    'perfume-pagoda-festival'       => 'perfume-pagoda-festival',
    'vietnamese-lunar-new-year'     => 'vietnamese-lunar-new-year',
    'hung-kings-commemoration-day'  => 'hung-kings-commemoration-day',
    'vesak-buddhas-birthday'        => 'vesak-buddhas-birthday',
    'reunification-day'             => 'reunification-day',
    'diff-2025'                     => 'diff-2025',
    'quang-nam-culture'             => 'quang-nam-culture',
    'hue-community-ao-dai-week-2025' => 'hue-community-ao-dai-week-2025',
    'sea-tourism-and-culture-festival'  => 'sea-tourism-and-culture-festival',
    'southern-fruit-festival'       => 'southern-fruit-festival',
    'double-seventh-festival'       => 'double-seventh-festival',
    'vu-lan'                        => 'vu-lan',
    'vietnam-national-day' => 'vietnam-national-day',
    'chongyang-festival' => 'chongyang-festival',
    'vietnamese-womens-day' => 'vietnamese-womens-day',
    'full-moon-lantern-festival-in-hoi-an' => 'full-moon-lantern-festival-in-hoi-an',
    'central-highlands-gong-festival' => 'central-highlands-gong-festival',
    'vietnam-national-day-parade' => 'vietnam-national-day-parade',

    // Food & Drink
    'food'                          => 'food',
    'coffee-culture'                => 'coffee-culture',
    'must-try'                      => 'must-try',
    'regional-cuisine'              => 'regional-cuisine',
    'street-food'                   => 'street-food',
    'markets'                       => 'markets',

    // Travel Essentials
    'travel-tips'                   => 'travel-tips',
    'language'                      => 'language',
    'money'                         => 'money',
    'safety'                        => 'safety',
    'transport'                     => 'transport',
    'visa'                          => 'visa',
];

// Bảng ánh xạ cho mục "Things to do"
$things_slug_to_filename_map = [
    'spa-massage' => 'spa-massage',
    'beach-relaxation' => 'beach-escapes',
    'yoga-meditation' => 'yoga-meditation',
];
// ===================== KẾT THÚC PHẦN CẬP NHẬT =====================


// =========================================================================
// ==                        LOGIC XỬ LÝ CỦA ROUTER                        ==
// =========================================================================

$contentView = null;
$pageTitle = 'Quê Hương Việt Nam'; // Tiêu đề mặc định

// Bước 1: Ưu tiên tìm trong các route tĩnh
if (array_key_exists($requestUri, $static_routes)) {
    $route = $static_routes[$requestUri];
    $contentView = VIEWS_PATH . $route['view'];
    $pageTitle = $route['title'] . ' - Du Lịch Quê Hương';
}
// Bước 2: Xử lý các route động cho chi tiết tour (/tours/{slug})
elseif (preg_match('#^/tours/([a-zA-Z0-9-]+)$#', $requestUri, $matches)) {
    $tourSlug = $matches[1];

    if (isset($tour_slug_to_filename_map[$tourSlug])) {
        $filename = $tour_slug_to_filename_map[$tourSlug];
        $contentView = VIEWS_PATH . "/tours/{$filename}.php";
    }
}
// Bước 3: Xử lý các route động cho chi tiết điểm đến (/destinations/{slug})
elseif (preg_match('#^/destinations/([a-zA-Z0-9-]+)$#', $requestUri, $matches)) {
    $destinationSlug = $matches[1];

    if (isset($destination_slug_to_filename_map[$destinationSlug])) {
        $filename = $destination_slug_to_filename_map[$destinationSlug];
        $contentView = VIEWS_PATH . "/destinations/{$filename}.php";
    }
}
// Bước 4: Xử lý các route động cho "Life in Vietnam" (/life/{slug})
elseif (preg_match('#^/life/([a-zA-Z0-9-]+)$#', $requestUri, $matches)) {
    $lifeSlug = $matches[1];

    if (isset($life_slug_to_filename_map[$lifeSlug])) {
        $filename = $life_slug_to_filename_map[$lifeSlug];
        // Tất cả các file view cho mục này đều nằm trong /src/Views/life/
        $contentView = VIEWS_PATH . "/life/{$filename}.php";
        // Tạo tiêu đề động
        $pageTitle = ucwords(str_replace('-', ' ', $lifeSlug)) . ' - Du Lịch Quê Hương';
    }
}
// Bước 5: Xử lý các route động cho "Things to do" (/things/{slug})
elseif (preg_match('#^/things/([a-zA-Z0-9-]+)$#', $requestUri, $matches)) {
    $thingsSlug = $matches[1];

    if (isset($things_slug_to_filename_map[$thingsSlug])) {
        $filename = $things_slug_to_filename_map[$thingsSlug];
        $contentView = VIEWS_PATH . "/things/{$filename}.php";
        $pageTitle = ucwords(str_replace('-', ' ', $thingsSlug)) . ' - Du Lịch Quê Hương';
    }
}


// Bước 6: Nếu không có route nào khớp, gọi hàm abort để báo lỗi 404
if (is_null($contentView)) {
    abort(404);
}

// Bước 7: Kiểm tra lại lần cuối xem tệp view có thực sự tồn tại trên máy chủ không
if (!file_exists($contentView)) {
    error_log("Router Error: View file not found at '{$contentView}' for URI '{$requestUri}'");
    abort(404);
}


// =========================================================================
// ==                       NẠP LAYOUT & HIỂN THỊ TRANG                    ==
// =========================================================================

ob_start();
require_once $contentView;
$pageContentHtml = ob_get_clean();

require_once VIEWS_PATH . '/layouts/header.php';
echo $pageContentHtml;
require_once VIEWS_PATH . '/layouts/footer.php';
