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

        <!-- Navigation buttons moved outside -->
        <div class="swiper-button-prev tour-nav-prev"></div>
        <div class="swiper-button-next tour-nav-next"></div>

        <!-- Swiper Container -->
        <div class="swiper tour-swiper">
            <div class="swiper-wrapper">
                <!-- Swiper Slide 1 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/halong-bay-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/ha-long-bay.jpg" alt="Halong Bay Tour">
                                <span class="tour-duration">3 Days 2 Nights</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Discover Halong Bay</h3>
                                <p class="tour-excerpt">Luxury cruise, marvel at thousands of limestone islands...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $150 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 2 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/hoian-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/hoi-an-ancient-town.jpg" alt="Hoi An Ancient Town Tour">
                                <span class="tour-duration">2 Days 1 Night</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Hoi An Ancient Town</h3>
                                <p class="tour-excerpt">Walk through lantern-lit streets, explore ancient architecture...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $95 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 3 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/sapa-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/sapa-terraces.jpg" alt="Sapa Terraces Tour">
                                <span class="tour-duration">4 Days 3 Nights</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Sapa Terraces Adventure</h3>
                                <p class="tour-excerpt">Explore the breathtaking rice terraces and local culture...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $200 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 4 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/hue-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/hue-imperial-city.jpg" alt="Hue Imperial City Tour">
                                <span class="tour-duration">3 Days 2 Nights</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Hue Imperial City</h3>
                                <p class="tour-excerpt">Discover the ancient citadel and royal tombs...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $180 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 5 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/mekong-delta-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/mekong-delta.jpg" alt="Mekong Delta Tour">
                                <span class="tour-duration">2 Days 1 Night</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Mekong Delta Experience</h3>
                                <p class="tour-excerpt">Cruise the waterways and visit floating markets...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $120 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 6 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/dalat-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/dalat-city.jpg" alt="Da Lat Tour">
                                <span class="tour-duration">3 Days 2 Nights</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Da Lat Highland Adventure</h3>
                                <p class="tour-excerpt">Explore flower gardens, coffee plantations, and cool mountain climate...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $140 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 7 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/nha-trang-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/nha-trang-beach.jpg" alt="Nha Trang Tour">
                                <span class="tour-duration">4 Days 3 Nights</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Nha Trang Beach Paradise</h3>
                                <p class="tour-excerpt">Relax on pristine beaches, enjoy water sports, and island hopping...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $185 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 8 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/hanoi-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/hanoi-old-quarter.jpg" alt="Hanoi Tour">
                                <span class="tour-duration">2 Days 1 Night</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Hanoi Cultural Explorer</h3>
                                <p class="tour-excerpt">Discover the Old Quarter, temples, and authentic street food...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $90 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 9 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/phu-quoc-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/phu-quoc-island.jpg" alt="Phu Quoc Tour">
                                <span class="tour-duration">5 Days 4 Nights</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Phu Quoc Island Escape</h3>
                                <p class="tour-excerpt">White sand beaches, snorkeling, and sunset views...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $250 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 10 -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/ninh-binh-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/ninh-binh-tam-coc.jpg" alt="Ninh Binh Tour">
                                <span class="tour-duration">2 Days 1 Night</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Ninh Binh Scenic Tour</h3>
                                <p class="tour-excerpt">Boat through limestone caves, visit ancient temples...</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $110 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Continue with other slides similarly -->
                <!-- Each slide following the same pattern but with English content -->

            </div>

            <!-- Only pagination inside -->
            <div class="swiper-pagination"></div>
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
        <div class="swiper-button-prev"></div>
        <div class="destination-swiper">
            <div class="swiper-button-prev"></div>
            <div class="swiper-wrapper">
                <!-- Existing Destinations -->
                <div class="destination-item swiper-slide">
                    <a href="/destinations/hanoi" class="destination-link">
                        <img src="/images/destinations/hanoi.jpg" alt="Hanoi">
                        <div class="destination-name">Hanoi</div>
                    </a>
                </div>
                <div class="destination-item swiper-slide">
                    <a href="/destinations/da-nang" class="destination-link">
                        <img src="/images/destinations/danang.jpg" alt="Da Nang">
                        <div class="destination-name">Da Nang</div>
                    </a>
                </div>
                <div class="destination-item swiper-slide">
                    <a href="/destinations/nha-trang" class="destination-link">
                        <img src="/images/destinations/nhatrang.jpg" alt="Nha Trang">
                        <div class="destination-name">Nha Trang</div>
                    </a>
                </div>
                <div class="destination-item swiper-slide">
                    <a href="/destinations/phu-quoc" class="destination-link">
                        <img src="/images/destinations/phu-quoc-beach.jpg" alt="Phu Quoc">
                        <div class="destination-name">Phu Quoc</div>
                    </a>
                </div>

                <!-- New Destinations -->
                <div class="destination-item swiper-slide">
                    <a href="/destinations/sapa" class="destination-link">
                        <img src="/images/destinations/sapa-terraces.jpg" alt="Sapa">
                        <div class="destination-name">Sapa</div>
                    </a>
                </div>
                <div class="destination-item swiper-slide">
                    <a href="/destinations/halong" class="destination-link">
                        <img src="/images/destinations/halong-bay.jpg" alt="Ha Long Bay">
                        <div class="destination-name">Ha Long Bay</div>
                    </a>
                </div>
                <div class="destination-item swiper-slide">
                    <a href="/destinations/hue" class="destination-link">
                        <img src="/images/destinations/hue-imperial-city.jpg" alt="Hue">
                        <div class="destination-name">Hue</div>
                    </a>
                </div>
                <div class="destination-item swiper-slide">
                    <a href="/destinations/hoian" class="destination-link">
                        <img src="/images/destinations/hoian-ancient-town.jpg" alt="Hoi An">
                        <div class="destination-name">Hoi An</div>
                    </a>
                </div>
                <div class="destination-item swiper-slide">
                    <a href="/destinations/dalat" class="destination-link">
                        <img src="/images/destinations/dalat.jpg" alt="Da Lat">
                        <div class="destination-name">Da Lat</div>
                    </a>
                </div>
                <div class="destination-item swiper-slide">
                    <a href="/destinations/mekong-delta" class="destination-link">
                        <img src="/images/destinations/mekong-delta.jpg" alt="Mekong Delta">
                        <div class="destination-name">Mekong Delta</div>
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-next"></div>
        </div>
        <div class="view-all-destinations">
            <a href="/destinations" class="btn btn-secondary">Explore More Destinations</a>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../layouts/footer.php'; // Connection to footer.php
?>