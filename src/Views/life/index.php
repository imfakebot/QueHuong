<?php
// Hiển thị lỗi nếu có
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Tiêu đề trang
$pageTitle = 'Lễ hội & Ngày lễ Việt Nam';

// Đường dẫn đến header
require_once __DIR__ . '/../layout/header.php';

// Dữ liệu mẫu về lễ hội
$festivals = [
    [
        'name' => 'Tết Nguyên Đán',
        'date' => 'Mùng 1 tháng Giêng âm lịch',
        'description' => 'Tết Nguyên Đán là lễ hội lớn nhất trong năm của người Việt, đánh dấu sự khởi đầu của một năm mới âm lịch.',
        'image' => '/public/images/festivals/tet.jpg',
    ],
    [
        'name' => 'Lễ hội Trung Thu',
        'date' => 'Rằm tháng 8 âm lịch',
        'description' => 'Lễ hội Trung Thu là dịp để trẻ em vui chơi, rước đèn, phá cỗ và ngắm trăng.',
        'image' => '/public/images/festivals/mid_autumn.jpg',
    ],
    [
        'name' => 'Lễ hội Đền Hùng',
        'date' => '10 tháng 3 âm lịch',
        'description' => 'Lễ hội tưởng nhớ các vua Hùng – những người đã có công dựng nước.',
        'image' => '/public/images/festivals/hung_temple.jpg',
    ],
];
?>

<div class="container">
    <h1 class="text-center">Lễ hội & Ngày lễ Việt Nam</h1>

    <div class="festival-list">
        <?php foreach ($festivals as $festival): ?>
            <div class="festival-card">
                <img src="<?php echo $festival['image']; ?>" alt="<?php echo htmlspecialchars($festival['name']); ?>" class="festival-image" />
                <div class="festival-content">
                    <h2><?php echo htmlspecialchars($festival['name']); ?></h2>
                    <p><strong>Thời gian:</strong> <?php echo htmlspecialchars($festival['date']); ?></p>
                    <p><?php echo htmlspecialchars($festival['description']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Đường dẫn đến footer
require_once __DIR__ . '/../layout/footer.php';
?>
