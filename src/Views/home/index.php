<?php
$pageTitle = 'Trang Chủ - Du Lịch Quê Hương'; // Hoặc tiêu đề bạn muốn cho trang chủ

// CSS cần thiết cho trang chủ
$pageStyles = [

    '/css/main.css' // CSS riêng cho trang chủ (thay thế cho style.css cũ)
];

// JavaScript cần thiết cho trang chủ
$pageScripts = [


    '/js/main.js' // File JS để khởi tạo các slider trên trang chủ (bạn cần tạo file này)
];
?>

<div class="video">
    <video src="/video/trailer.mp4" autoplay muted loop playsinline></video> <!-- Thêm loop và playsinline -->
</div>

<div class="why-vietnam">
    <div class="container"> <!-- Thêm container cho Why Vietnam để nhất quán -->
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
</div>

<!-- Featured Tours Section with Custom Slider -->
<section class="featured-tours">
    <div class="container"> <!-- Cha của nút và swiper, sẽ được style đặc biệt -->
        <h2 class="section-title">Featured Tours</h2>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev tour-nav-prev"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#1C274C" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M20 11.25C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H10.75L10.75 18C10.75 18.3034 10.5673 18.5768 10.287 18.6929C10.0068 18.809 9.68417 18.7449 9.46967 18.5304L3.46967 12.5304C3.32902 12.3897 3.25 12.1989 3.25 12C3.25 11.8011 3.32902 11.6103 3.46967 11.4697L9.46967 5.46969C9.68417 5.25519 10.0068 5.19103 10.287 5.30711C10.5673 5.4232 10.75 5.69668 10.75 6.00002L10.75 11.25H20Z" fill="#1C274C"></path>
                </g>
            </svg></div>
        <div class="swiper-button-next tour-nav-next"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#1C274C">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H13.25V18C13.25 18.3034 13.4327 18.5768 13.713 18.6929C13.9932 18.809 14.3158 18.7449 14.5303 18.5304L20.5303 12.5304C20.671 12.3897 20.75 12.1989 20.75 12C20.75 11.8011 20.671 11.6103 20.5303 11.4697L14.5303 5.46969C14.3158 5.25519 13.9932 5.19103 13.713 5.30711C13.4327 5.4232 13.25 5.69668 13.25 6.00002V11.25H4Z" fill="#1C274C"></path>
                </g>
            </svg></div>

        <!-- Custom Slider Container -->
        <div class="swiper tour-swiper"> <!-- Đây là container cho slider JS custom của bạn -->
            <div class="swiper-wrapper">
                <!-- Swiper Slide 1: Halong Bay Tour -->
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

                <!-- Swiper Slide 2: Hoi An Ancient Town Tour -->
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

                <!-- Swiper Slide 3: Sapa Terraces Tour -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/sapa-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/sapa.jpg" alt="Sapa Terraces Tour">
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

                <!-- Swiper Slide 4: Hue Imperial City Tour -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/hue-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/hue.jpg" alt="Hue Imperial City Tour">
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

                <!-- Swiper Slide 5: Mekong Delta Experience -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/mekong-delta-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/mekong-delta-tours.jpg" alt="Mekong Delta Tour">
                                <span class="tour-duration">2 Days 1 Night</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Mekong Delta Immersion</h3>
                                <p class="tour-excerpt">Explore the vibrant life of the Mekong Delta, floating markets, and lush orchards.</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $120 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 6: Da Lat Romantic Getaway -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/da-lat-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/dalat-city.jpg" alt="Da Lat Romantic Getaway">
                                <span class="tour-duration">3 Days 2 Nights</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Da Lat Romantic Getaway</h3>
                                <p class="tour-excerpt">Discover the 'City of Eternal Spring' with its beautiful waterfalls, lakes, and flower gardens.</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $160 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 7: Ninh Binh - Tam Coc & Bai Dinh Pagoda -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/ninh-binh-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/ninh-binh.jpg" alt="Ninh Binh Tour">
                                <span class="tour-duration">2 Days 1 Night</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Ninh Binh - Tam Coc & Bai Dinh</h3>
                                <p class="tour-excerpt">Explore the 'Halong Bay on land' with stunning karst landscapes and ancient temples.</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $110 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 8: Phong Nha Caves Adventure -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/phong-nha-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/phong-nha.webp" alt="Phong Nha Caves Adventure">
                                <span class="tour-duration">3 Days 2 Nights</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Phong Nha Caves Adventure</h3>
                                <p class="tour-excerpt">Discover magnificent cave systems in Phong Nha-Ke Bang National Park.</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $220 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slide 9: Ho Chi Minh City & Cu Chi Tunnels -->
                <div class="swiper-slide">
                    <div class="tour-item">
                        <a href="/tours/ho-chi-minh-city-tour" class="tour-link">
                            <div class="tour-image-container">
                                <img src="/images/tours/TP-HCM.jpg" alt="Ho Chi Minh City & Cu Chi Tunnels Tour">
                                <span class="tour-duration">2 Days 1 Night</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Ho Chi Minh City & Cu Chi Tunnels</h3>
                                <p class="tour-excerpt">Experience bustling city life and delve into history at the Cu Chi Tunnels.</p>
                                <div class="tour-price-wrapper">
                                    <span class="tour-price">From $130 USD</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="view-all-tours">
            <a href="/tours" class="btn btn-primary">View All Tours</a>
        </div>
    </div>
</section>

<!-- Featured Destinations Section with Custom Slider -->
<section class="featured-destinations">
    <div class="container"> <!-- Cha của nút và swiper, sẽ được style đặc biệt -->
        <h2 class="section-title">Must-Visit Destinations</h2>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev destination-nav-prev"><svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#1C274C" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)">
                <g id="SVGRepo_bgCarrier_dest" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier_dest" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier_dest">
                    <path d="M20 11.25C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H10.75L10.75 18C10.75 18.3034 10.5673 18.5768 10.287 18.6929C10.0068 18.809 9.68417 18.7449 9.46967 18.5304L3.46967 12.5304C3.32902 12.3897 3.25 12.1989 3.25 12C3.25 11.8011 3.32902 11.6103 3.46967 11.4697L9.46967 5.46969C9.68417 5.25519 10.0068 5.19103 10.287 5.30711C10.5673 5.4232 10.75 5.69668 10.75 6.00002L10.75 11.25H20Z" fill="#1C274C"></path>
                </g>
            </svg></div>
        <div class="swiper-button-next destination-nav-next"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H13.25V18C13.25 18.3034 13.4327 18.5768 13.713 18.6929C13.9932 18.809 14.3158 18.7449 14.5303 18.5304L20.5303 12.5304C20.671 12.3897 20.75 12.1989 20.75 12C20.75 11.8011 20.671 11.6103 20.5303 11.4697L14.5303 5.46969C14.3158 5.25519 13.9932 5.19103 13.713 5.30711C13.4327 5.4232 13.25 5.69668 13.25 6.00002V11.25H4Z" fill="#1C274C"></path>
                </g>
            </svg></div>

        <!-- Custom Slider Container -->
        <div class="swiper destination-swiper"> <!-- Container cho slider JS custom -->
            <div class="swiper-wrapper">
                <!-- Destination 1: Hanoi -->
                <div class="swiper-slide destination-item"> <!-- Thêm destination-item để style riêng nếu cần -->
                    <a href="/destinations/hanoi" class="destination-link">
                        <img src="/images/destinations/must-visit/hanoi.jpg" alt="Hanoi">
                        <div class="destination-name">Hanoi</div>
                    </a>
                </div>

                <!-- Destination 2: Da Nang -->
                <div class="swiper-slide destination-item">
                    <a href="/destinations/da-nang" class="destination-link">
                        <img src="/images/destinations/must-visit/danang.jpg" alt="Da Nang">
                        <div class="destination-name">Da Nang</div>
                    </a>
                </div>
                <!-- Destination 3: Nha Trang -->
                <div class="swiper-slide destination-item">
                    <a href="/destinations/nha-trang" class="destination-link">
                        <img src="/images/destinations/must-visit/nhatrang.jpg" alt="Nha Trang">
                        <div class="destination-name">Nha Trang</div>
                    </a>
                </div>
                <!-- Destination 4: Phu Quoc -->
                <div class="swiper-slide destination-item">
                    <a href="/destinations/phu-quoc" class="destination-link">
                        <img src="/images/destinations/must-visit/phu-quoc.jpg" alt="Phu Quoc">
                        <div class="destination-name">Phu Quoc</div>
                    </a>
                </div>
                <!-- Destination 5: Sapa -->
                <div class="swiper-slide destination-item">
                    <a href="/destinations/sapa" class="destination-link">
                        <img src="/images/destinations/must-visit/sapa.jpg" alt="Sapa">
                        <div class="destination-name">Sapa</div>
                    </a>
                </div>
                <!-- Destination 6: Hoi An -->
                <div class="swiper-slide destination-item">
                    <a href="/destinations/hoi-an" class="destination-link">
                        <img src="/images/destinations/must-visit/hoian.jpg" alt="Hoi An">
                        <div class="destination-name">Hoi An</div>
                    </a>
                </div>
                <!-- Bạn có thể thêm các destination khác tại đây theo mẫu trên -->

            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="view-all-destinations">
            <a href="/destinations" class="btn btn-secondary">Explore More Destinations</a>
        </div>
</section>