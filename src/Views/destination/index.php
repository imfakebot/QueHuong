<?php
$pageTitle = 'Top Destinations - Explore Vietnam';

// Load necessary CSS files. Assume /css/destination.css contains styles for .card and .btn-cta
$pageStyles = [
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', // If you need icons
    '/css/destination.css'
];

$pageScripts = [
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    '/js/destination.js'
]; // Add scripts if needed

// Sample data for destinations. In a real application, you'd fetch this from a database.
$destinations = [
    [
        'slug' => 'hanoi',
        'name' => 'Hanoi',
        'image' => '/images/destinations/Ha-Noi/Hanoi-review.jpg',
        'description' => 'The thousand-year-old capital known for its ancient charm and distinctive cuisine.'
    ],
    [
        'slug' => 'ha-giang',
        'name' => 'Ha Giang',
        'image' => '/images/destinations/HaGiang/review.jpg',
        'description' => 'Northernmost land of Vietnam with majestic rocky plateaus and scenic mountain passes.'
    ],
    [
        'slug' => 'ha-long',
        'name' => 'Ha Long Bay',
        'image' => '/images/destinations/HaLong/review.jpg',
        'description' => 'A UNESCO World Heritage site famous for its limestone islands and emerald waters.'
    ],
    [
        'slug' => 'mai-chau',
        'name' => 'Mai Chau',
        'image' => '/images/destinations/MaiChau/review.jpg',
        'description' => 'A peaceful valley with stilt houses, green rice fields, and rich Thai culture.'
    ],
    [
        'slug' => 'ninh-binh',
        'name' => 'Ninh Binh',
        'image' => '/images/destinations/NinhBinh/review.jpg',
        'description' => 'Known as "Halong Bay on land" with Trang An, Tam Coc, and the historic Hoa Lu.'
    ],
    [
        'slug' => 'sapa',
        'name' => 'Sa Pa',
        'image' => '/images/destinations/Sapa/review.jpg',
        'description' => 'A misty mountain town with terraced rice fields and unique ethnic culture.'
    ],
    [
        'slug' => 'da-nang',
        'name' => 'Da Nang',
        'image' => '/images/destinations/Da-Nang/BaNaHills.jpg',
        'description' => 'A dynamic coastal city with iconic bridges, beautiful beaches, and stunning mountains.'
    ],
    [
        'slug' => 'da-lat',
        'name' => 'Da Lat',
        'image' => '/images/destinations/Da-Lat/DaLat-review.jpg',
        'description' => 'The City of Flowers with cool weather, romantic lakes, and French colonial architecture.'
    ],
    [
        'slug' => 'hoi-an',
        'name' => 'Hoi An',
        'image' => '/images/destinations/Hoi-An/review.jpg',
        'description' => 'An ancient town where time stands still with glowing lanterns and traditional buildings.'
    ],
    [
        'slug' => 'hue',
        'name' => 'Hue',
        'image' => '/images/destinations/Hue/review.jpg',
        'description' => 'The poetic former capital with the Perfume River, Imperial City, and royal tombs.'
    ],
    [
        'slug' => 'nha-trang',
        'name' => 'Nha Trang',
        'image' => '/images/destinations/NhaTrang/review.jpg',
        'description' => 'A beach city known for its bays, islands, and vibrant diving experiences.'
    ],
    [
        'slug' => 'phong-nha',
        'name' => 'Phong Nha',
        'image' => '/images/destinations/PhongNha/review1.jpg',
        'description' => 'A national park with stunning caves, including the world’s largest cave, Son Doong.'
    ],
    [
        'slug' => 'ho-chi-minh',
        'name' => 'Ho Chi Minh City',
        'image' => '/images/destinations/HCM/hcm.jpg',
        'description' => 'Vietnam’s economic hub with historic landmarks and a bustling modern lifestyle.'
    ],
    [
        'slug' => 'con-dao',
        'name' => 'Con Dao',
        'image' => '/images/destinations/ConDao/review.jpg',
        'description' => 'A pristine archipelago with beautiful beaches, historical sites, and rich marine life.'
    ],
    [
        'slug' => 'binh-thuan',
        'name' => 'Binh Thuan',
        'image' => '/images/destinations/BinhThuan/review.jpg',
        'description' => 'Famous for Mui Ne, red sand dunes, blue beaches, and luxury resorts.'
    ],
    [
        'slug' => 'can-tho',
        'name' => 'Can Tho',
        'image' => '/images/destinations/CanTho/review.jpg',
        'description' => 'Heart of the Mekong Delta with floating markets, fruit orchards, and river culture.'
    ],
    [
        'slug' => 'chau-doc',
        'name' => 'Chau Doc',
        'image' => '/images/destinations/ChauDoc/review.jpg',
        'description' => 'A spiritual destination with Ba Chua Xu Temple and the scenic Tra Su cajuput forest.'
    ],
    [
        'slug' => 'phu-quoc',
        'name' => 'Phu Quoc',
        'image' => '/images/destinations/PhuQuoc/review.jpg',
        'description' => 'The Pearl Island with white sandy beaches, rainforests, and modern attractions.'
    ]
];
?>

<section class="hero" style="background-image: url('https://cms.junglebosstours.com/assets/0a767e37-3aa6-45e5-9222-6caeb8983e45?format=webp');">
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <h1>Discover Amazing Destinations</h1>
        <p>Vietnam’s breathtaking beauty awaits — from majestic mountains to dreamy beaches.</p>
    </div>
</section>

<main class="container page-container" style="padding-top: 2rem; padding-bottom: 2rem;">
    <section class="content-section destination-listing">
        <h2 style="text-align: center; margin-bottom: 2rem;">All Destinations</h2>
        <div class="cards">
            <?php foreach ($destinations as $destination): ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($destination['image']); ?>" alt="Image of <?php echo htmlspecialchars($destination['name']); ?>" style="width:100%; height:auto; object-fit: cover; aspect-ratio: 16/9;">
                    <h3 style="margin-top: 1rem;color:red"><?php echo htmlspecialchars($destination['name']); ?></h3>
                    <p><?php echo htmlspecialchars($destination['description']); ?></p>
                    <a href="/destinations/<?php echo htmlspecialchars($destination['slug']); ?>" class="btn-cta" style="display: inline-block; margin-top: 10px;text-align: center">View Details</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>