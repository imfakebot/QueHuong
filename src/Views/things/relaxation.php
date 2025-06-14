<?php


if (!function_exists('create_slug')) {
    function create_slug($text)
    {
        if (function_exists('mb_strtolower')) {
            $text = mb_strtolower($text, 'UTF-8');
        } else {
            $text = strtolower($text);
        }
        if (function_exists('iconv')) {
            $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);
        }
        $text = preg_replace('/[^a-z0-9-]+/', '', $text);
        $text = preg_replace('/-+/', '-', $text);
        $text = trim($text, '-');
        return $text;
    }
}

$relaxation_activities_data = [
    [
        'id' => 401,
        'title' => 'Spa & Massage Therapies',
        'image' => '/images/activities/spa_massage.jpg',
        'summary' => 'Rejuvenate your body and mind with traditional Vietnamese massages and relaxing spa treatments.',
        'category_slug' => 'relaxation', // Để tiện cho việc lọc nếu cần sau này
        'detail_slug' => 'spa-massage' // Link chi tiết từ mega menu
    ],
    [
        'id' => 402,
        'title' => 'Beach Escapes',
        'image' => '/images/activities/beach_escapes.jpg',
        'summary' => 'Unwind on idyllic beaches, swim in turquoise waters, and soak up the sun in Vietnamese coastal paradises.',
        'category_slug' => 'relaxation',
        'detail_slug' => 'beach-escapes'
    ],
    [
        'id' => 403,
        'title' => 'Yoga & Meditation Retreats',
        'image' => '/images/activities/yoga_meditation.jpg',
        'summary' => 'Find inner peace and tranquility with rejuvenating yoga and meditation retreats in serene natural settings.',
        'category_slug' => 'relaxation',
        'detail_slug' => 'yoga-meditation'
    ],
    [
        'id' => 404,
        'title' => 'Relaxing River & Bay Cruises',
        'image' => '/images/activities/river_bay_cruises.jpg',
        'summary' => 'Enjoy scenic journeys along tranquil rivers or picturesque bays, taking in the stunning natural beauty and local life.',
        'category_slug' => 'relaxation',
        'detail_slug' => 'river-cruises' // Hoặc 'cruises' như trong mega menu
    ],
    [
        'id' => 405,
        'title' => 'Enjoying Scenic Cafes',
        'image' => '/images/activities/scenic_cafes.jpg',
        'summary' => 'Sip on delicious Vietnamese coffee while enjoying breathtaking views from charming local cafes.',
        'category_slug' => 'relaxation',
        'detail_slug' => 'scenic-cafes'
    ],
    [
        'id' => 406,
        'title' => 'Natural Hot Springs',
        'image' => '/images/activities/natural_hot_springs.webp',
        'summary' => 'Soothe your senses and relax your muscles in the therapeutic mineral waters of natural hot springs.',
        'category_slug' => 'relaxation',
        'detail_slug' => 'hot-springs'
    ],
    // Thêm các hoạt động thư giãn khác nếu muốn
];

$relaxation_activities = array_map(function ($activity) {
    // Sử dụng detail_slug đã có hoặc tạo mới nếu cần
    $activity['slug'] = $activity['detail_slug'] ?? create_slug($activity['title']);
    return $activity;
}, $relaxation_activities_data);

// Cấu hình trang
$pageTitle = 'Hoạt Động Thư Giãn & Chăm Sóc Sức Khỏe';
$pageStyles = ['/css/things-category.css', '/css/main.css']; // Tạo file CSS mới hoặc tái sử dụng
$pageScripts = []; // Thêm JS nếu cần filter hoặc tương tác khác

?>

<header class="things-category-header">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
    <p>Tìm lại sự cân bằng và thư thái với những trải nghiệm tuyệt vời tại Việt Nam.</p>
</header>

<!-- Có thể thêm Filter Bar ở đây nếu cần, ví dụ lọc theo loại hình thư giãn -->

<main>
    <div class="container">
        <div class="activity-grid"> <!-- Hoặc 'things-grid' tùy theo CSS bạn muốn dùng -->
            <?php foreach ($relaxation_activities as $activity): ?>
                <article class="activity-card"> <!-- Hoặc 'thing-card' -->
                    <a href="/things/<?php echo htmlspecialchars($activity['slug']); ?>" class="activity-link">
                        <div class="activity-image-container">
                            <img src="<?php echo htmlspecialchars($activity['image']); ?>" alt="<?php echo htmlspecialchars($activity['title']); ?>">
                        </div>
                        <div class="activity-content-details">
                            <h3 class="activity-card-title"><?php echo htmlspecialchars($activity['title']); ?></h3>
                            <p class="activity-card-excerpt"><?php echo htmlspecialchars($activity['summary']); ?></p>
                        </div>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>
