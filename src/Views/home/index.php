<?php
require_once __DIR__ . '/../layouts/header.php'; // Connection to header.php  
?>

<div class="video">
    <video src="/video/trailer.mp4" autoplay muted></video>
</div>

<div class="why-vietnam">
    <h2 class="section-title">Why Choose Vietnam?</h2>
    <div class="features-grid">
        <div class="feature-item">
            <div class="image-container">
                <img src="/images/others/unique_culture.webp" alt="Unique Culture">
            </div>
            <h3>Unique Culture</h3>
            <p>Vietnam proudly boasts a diverse and rich culture...</p>
        </div>
        <div class="feature-item">
            <div class="image-container">
                <img src="/images/others/rick_cuisine.jpg" alt="Rich Cuisine">
            </div>
            <h3>Rich Cuisine</h3>
            <p>Discover exceptional cuisine with world-famous dishes like pho, banh mi, spring rolls, and Vietnamese coffee.</p>
        </div>
        <div class="feature-item">
            <div class="image-container">
                <img src="/images/others/beautiful_landscape.jpg" alt="Beautiful Landscapes">
            </div>
            <h3>Beautiful Landscapes</h3>
            <p>From the majestic Ha Long Bay to the lush Mekong Delta, Vietnam possesses countless stunning natural wonders.</p>
        </div>
        <div class="feature-item">
            <div class="image-container">
                <img src="/images/others/friendly_people.png" alt="Friendly People">
            </div>
            <h3>Friendly People</h3>
            <p>Vietnamese people are renowned for their hospitality, friendliness, and eagerness to help visitors from around the world.</p>
        </div>
    </div>
</div>

<!-- Featured Tours Section with SwiperJS -->
<section class="featured-tours">
    <div class="container">
        <h2 class="section-title">Featured Tours</h2>

        <!-- Swiper Container -->
        <div class="tour-swiper">
            <div class="swiper-wrapper">
                <!-- Your slides here -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="view-all-tours">
            <a href="/tours" class="btn btn-primary">View All Tours</a>
        </div>
    </div>
</section>

<!-- Featured Destinations Section -->
<section class="featured-destinations">
    <div class="container">
        <h2 class="section-title">Must-Visit Destinations</h2>
        <div class="destinations-grid">
            <!-- Destination Item 1 -->
            <div class="destination-item">
                <a href="/destinations/hanoi" class="destination-link">
                    <img src="/images/destinations/hanoi-hoan-kiem-lake.jpg" alt="Hanoi">
                    <div class="destination-name">Hanoi</div>
                </a>
            </div>
            <!-- Destination Item 2 -->
            <div class="destination-item">
                <a href="/destinations/da-nang" class="destination-link">
                    <img src="/images/destinations/da-nang-golden-bridge.jpg" alt="Da Nang">
                    <div class="destination-name">Da Nang</div>
                </a>
            </div>
            <!-- Destination Item 3 -->
            <div class="destination-item">
                <a href="/destinations/nha-trang" class="destination-link">
                    <img src="/images/destinations/nha-trang-beach.jpg" alt="Nha Trang">
                    <div class="destination-name">Nha Trang</div>
                </a>
            </div>
            <!-- Destination Item 4 -->
            <div class="destination-item">
                <a href="/destinations/phu-quoc" class="destination-link">
                    <img src="/images/destinations/phu-quoc-beach.jpg" alt="Phu Quoc">
                    <div class="destination-name">Phu Quoc</div>
                </a>
            </div>
        </div>
        <div class="view-all-destinations">
            <a href="/destinations" class="btn btn-secondary">Explore More Destinations</a>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../layouts/footer.php'; // Connection to footer.php
?>