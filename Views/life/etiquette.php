<?php
$pageTitle = 'Social Etiquette - Văn Hóa Ứng Xử Việt Nam';
$pageStyles = ['/css/etiquette.css'];
$pageScripts = ['/js/etiquette.js'];
$socialEtiquette = [
    [
        'title' => 'Chào hỏi & Cách xưng hô',
        'description' => 'Việt Nam rất coi trọng cách chào hỏi. Người trẻ thường khoanh tay cúi đầu chào người lớn. Xưng hô theo vai vế là một phần văn hóa ứng xử.',
        'image' => 'https://travelmart.vn/uploads/2018/01/29/28_i5a6ed86a9f37f.jpg'
    ],
    [
        'title' => 'Ăn uống & Bàn ăn',
        'description' => 'Không cắm đũa vào bát cơm, không dùng đũa của mình gắp thức ăn cho người khác là những phép lịch sự phổ biến khi ăn uống.',
        'image' => 'https://s1.media.ngoisao.vn/news/2023/07/24/cam-dua-thang-dung-len-bac-com-ngoisaovn-w1200-h720.jpg'
    ],
    [
        'title' => 'Trang phục & Tôn trọng không gian',
        'description' => 'Khi đến chùa hay đền, nên mặc trang phục kín đáo, giữ trật tự và tháo giày trước khi vào khu vực linh thiêng.',
        'image' => 'https://m.yodycdn.com/blog/trang-phuc-viet-nam-qua-cac-thoi-ky-yody-vn1.jpg'
    ],
    [
        'title' => 'Tặng quà & Lễ nghĩa',
        'description' => 'Tặng quà là cách thể hiện sự quan tâm, nhưng cần tránh tặng khăn tay, đồng hồ hoặc những vật mang ý nghĩa tiêu cực trong văn hóa.',
        'image' => 'https://product.hstatic.net/200000017614/product/y-nghia-phong-tuc-tang-qua-tet-golden-gift-viet-nam-1_a82bccd544c14415b09eacd2ee385529.jpg'
    ],
    [
        'title' => 'Giao tiếp & Cử chỉ',
        'description' => 'Không nên chỉ tay vào người khác hoặc động chạm quá nhiều khi trò chuyện. Lời nói nhẹ nhàng, tôn trọng là điều quan trọng.',
        'image' => 'https://s7ap1.scene7.com/is/image/aia/Thumbnail-giao-tiep-phi-ngon-ngu?qlt=85&wid=1024&ts=1692587711244&dpr=off'
    ],
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?= htmlspecialchars($style) ?>">
    <?php endforeach; ?>
</head>
<body class="etiquette-page-wrapper">

<header class="hero" style="background-image: url('https://news.library.ualberta.ca/wp-content/uploads/2021/12/Vietnamese-Etiquette.png');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Social Etiquette in Vietnam</h1>
        <p class="hero__subtitle">Khám phá văn hóa ứng xử đặc trưng của người Việt – nhẹ nhàng, tinh tế và đầy tôn trọng.</p>
        <a href="#etiquette-section" class="btn btn--light">Tìm Hiểu Ngay</a>
    </div>
</header>

<main id="etiquette-section" class="etiquette-section container">
    <?php foreach ($socialEtiquette as $index => $item): ?>
        <div class="etiquette-card animate-on-scroll <?= $index % 2 === 1 ? 'reverse' : '' ?>">
            <div class="etiquette-card__image">
                <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?>">
            </div>
            <div class="etiquette-card__content">
                <h2><?= htmlspecialchars($item['title']) ?></h2>
                <p><?= htmlspecialchars($item['description']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</main>

<?php foreach ($pageScripts as $script): ?>
    <script src="<?= htmlspecialchars($script) ?>"></script>
<?php endforeach; ?>

</body>
</html>
