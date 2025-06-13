<?php
$pageTitle = 'Hanoi - Travel Vietnam';

// Add page-specific CSS files
$pageStyles = [
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
  'https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css',
  '/css/destination.css'
];

// Add page-specific scripts
$pageScripts = [
  'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js',
  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
  'https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js',
  '/js/destination.js'
];
?>

<section class="hero" style="background-image: url('/images/destinations/Ha-Noi/Hanoi-review.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <h1>Explore Hanoi</h1>
    <p>The thousand-year-old capital with ancient charm and unique culinary culture.</p>
    <a href="#highlights" class="btn-cta">Discover Now</a>
  </div>
</section>

<main>
  <section class="content-section overview fade-in">
    <h2><i class="fas fa-city"></i> Overview of Hanoi</h2>
    <p>Hanoi is the heart of Vietnam with more than a thousand years of history. The city captivates visitors with its harmonious blend of ancient Old Quarter charm, French colonial architecture, and vibrant modern life. Hanoi is also famous for its diverse cuisine and rich cultural traditions.</p>
  </section>

  <!-- START: Things to do Section -->
  <section class="content-section things-to-do fade-in">
    <h2><i class="fas fa-clipboard-check"></i> Must-try Experiences</h2>
    <div class="activity-grid">
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-masks-theater"></i>
        </div>
        <div class="activity-content">
          <h3>Watch Water Puppetry</h3>
          <p>Experience this unique traditional stage art, a distinctive cultural feature of Vietnam right in the capital.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-landmark-dome"></i>
        </div>
        <div class="activity-content">
          <h3>Visit the Imperial Citadel of Thang Long</h3>
          <p>Walk through the world heritage site and learn about the thousand-year-old history of the former royal city.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-mug-hot"></i>
        </div>
        <div class="activity-content">
          <h3>Try Egg Coffee</h3>
          <p>Enjoy the rich, creamy flavor of this iconic drink – a specialty not to be missed in Hanoi.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-bicycle"></i>
        </div>
        <div class="activity-content">
          <h3>Cycle around West Lake</h3>
          <p>Soak in the fresh air, admire the scenic views, and discover the peaceful lifestyle around the lake.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-street-view"></i>
        </div>
        <div class="activity-content">
          <h3>Wander through the Old Quarter</h3>
          <p>Explore the 36 bustling streets filled with ancient houses, handicraft shops, and tempting street food.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-camera-retro"></i>
        </div>
        <div class="activity-content">
          <h3>Check-in at Long Bien Bridge</h3>
          <p>Capture impressive moments at this historic bridge that has witnessed many ups and downs of the city.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: Things to do Section -->

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/HoHoanKiem.jpg" alt="Hoan Kiem Lake">
      <div class="badge">Iconic</div>
    </div>
    <div class="tour-details">
      <h2>Visit Hoan Kiem Lake & Ngoc Son Temple</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(180 reviews)</span>
      </div>
      <p>Hoan Kiem Lake is a cultural and historical symbol of Hanoi. Walk around the lake, visit Ngoc Son Temple and the iconic red The Huc Bridge to feel the peaceful rhythm of life in the vibrant capital.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 hours</li>
        <li><i class="fa-solid fa-water"></i> Lake</li>
        <li><i class="fa-solid fa-landmark"></i> Landmark</li>
        <li><a href="#">History tour</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Free</span>
        <a href="#" class="btn-cta">View Details</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/BunChaHaNoi.jpg" alt="Hanoi Cuisine">
      <div class="badge">Must try</div>
    </div>
    <div class="tour-details">
      <h2>Enjoy Old Quarter Street Food</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(200 reviews)</span>
      </div>
      <p>Hanoi’s Old Quarter is a food paradise, offering legendary dishes like bun cha, pho, banh cuon, and bun thang. Don’t forget to drop by a small eatery to savor the authentic flavors.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 3 hours</li>
        <li><i class="fa-solid fa-utensils"></i> Cuisine</li>
        <li><i class="fa-solid fa-person-walking"></i> Walking</li>
        <li><a href="#">Food tour</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">From <strong>59,000đ/person</strong></span>
        <a href="#" class="btn-cta">View Details</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/LangBac.jpg" alt="Ho Chi Minh Mausoleum">
      <div class="badge">Solemn</div>
    </div>
    <div class="tour-details">
      <h2>Visit Ho Chi Minh Mausoleum</h2>
      <div class="rating">
        <span class="stars">★★★★☆</span>
        <span>(160 reviews)</span>
      </div>
      <p>The Mausoleum is the final resting place of President Ho Chi Minh – the great leader of the Vietnamese people. The surrounding Ba Dinh Square and stilt house area offer a sacred and proud atmosphere.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 hours</li>
        <li><i class="fa-solid fa-monument"></i> History</li>
        <li><i class="fa-solid fa-flag"></i> National</li>
        <li><a href="#">Cultural tour</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Free</span>
        <a href="#" class="btn-cta">View Details</a>
      </div>
    </div>
  </section>

  <section class="content-section highlights" id="highlights">
    <h2>Highlights</h2>
    <div class="cards">
      <div class="card">
        <img src="/images/destinations/Ha-Noi/VanMieu.jpg" alt="Temple of Literature">
        <h3>Temple of Literature</h3>
        <p>The first university in Vietnam, honoring the tradition of education and respect for teachers.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Ha-Noi/Phoco.jpg" alt="Hanoi Old Quarter">
        <h3>Hanoi Old Quarter</h3>
        <p>An area of ancient houses, street food, and the unique nostalgic atmosphere of the capital.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Ha-Noi/NhaThoLon.jpg" alt="St. Joseph’s Cathedral">
        <h3>St. Joseph’s Cathedral</h3>
        <p>A French colonial architectural gem in the heart of the city – a popular check-in spot for the youth.</p>
      </div>
    </div>
  </section>

  <section class="gallery">
    <h2>GALLERY</h2>
    <div class="swiper-button-prev gallery-nav-prev"></div>
    <div class="swiper-button-next gallery-nav-next"></div>
    <div class="swiper gallery-swiper">
      <div class="swiper-wrapper">
        <?php
        $galleryImages = [
          ['HoHoanKiem.jpg', 'Hoan Kiem Lake'],
          ['VanMieu.jpg', 'Temple of Literature'],
          ['LangBac.jpg', 'Ho Chi Minh Mausoleum'],
          ['HoTay.jpg', 'West Lake'],
          ['NhaThoLon.jpg', 'St. Joseph’s Cathedral'],
          ['Phoco.jpg', 'Hanoi Old Quarter']
        ];

        foreach ($galleryImages as [$image, $alt]) {
          echo "<div class='swiper-slide'>";
          echo "<a href='/images/destinations/Ha-Noi/{$image}' 
                         data-lightbox='hanoi-gallery' 
                         data-title='{$alt}' 
                         class='gallery-link'>";
          echo "<img src='/images/destinations/Ha-Noi/{$image}' alt='{$alt}'>";
          echo "</a>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </section>
</main>