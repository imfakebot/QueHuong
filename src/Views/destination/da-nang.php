<?php
$pageTitle = 'Da Nang - Travel Vietnam';

// Add page-specific CSS files
$pageStyles = [
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
  '/css/destination.css'
];

// Add page-specific scripts
$pageScripts = [
  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
  '/js/destination.js'
];
?>

<!-- Rest of the existing HTML content -->

<section class="hero" style="background-image: url('/images/destinations/Da-Nang/DaNangReview.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <h1>Discover Da Nang</h1>
    <p>A dynamic coastal city with beautiful beaches and rich culture.</p>
    <a href="#highlights" class="btn-cta">Explore now</a>
  </div>
</section>

<main>
  <section class="content-section overview fade-in">
    <h2><i class="fas fa-city"></i> Overview of Da Nang</h2>
    <p>With wide beaches, amazing street food, the legendary Hai Van Pass, and an ever-growing collection of cafes, restaurants, and bars, it’s no surprise Da Nang residents wear some of the brightest smiles in the country. The warm sands of My Khe Beach sweep south from the mountainous Son Tra Peninsula. Da Nang is home to some of Vietnam’s top luxury resorts, but much of the beach still belongs to locals who turn it into a playground, gym, and livelihood.</p>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Da-Nang/BaNaHills.jpg" alt="Enjoy the beach">
      <div class="badge">Best seller</div>
    </div>
    <div class="tour-details">
      <h2>Enjoy the Beach</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(95 reviews)</span>
      </div>
      <p>Be sure to set your alarm early at least once during your stay. Along the coast, fishermen sell their daily catch, beach football and volleyball games pop up, and people jog, stroll, or simply relax on the sand.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 3 hours</li>
        <li><i class="fa-solid fa-umbrella-beach"></i> Beach</li>
        <li><i class="fa-solid fa-heart"></i> Relaxation</li>
        <li><a href="#">Leisure trip</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">From <strong>49,000 VND/person</strong></span>
        <a href="#" class="btn-cta">View details</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-details">
      <h2>Explore Son Tra Peninsula</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(120 reviews)</span>
      </div>
      <p>The Son Tra Peninsula juts out into the ocean, and its forested hills are home to the endangered red-shanked douc langur — one of the most striking primates in the world.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 6 hours</li>
        <li><i class="fa-regular fa-star"></i> Private</li>
        <li><i class="fa-solid fa-person-hiking"></i> Independent</li>
        <li><a href="#">Nature tour</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">From <strong>89,000 VND/person</strong></span>
        <a href="#" class="btn-cta">View details</a>
      </div>
    </div>
    <div class="tour-image">
      <img src="/images/destinations/Da-Nang/nui-son-tra.jpg" alt="Son Tra Peninsula">
      <div class="badge">Best seller</div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Da-Nang/bao-tang-cham.jpg" alt="Cham Museum">
      <div class="badge">Hot</div>
    </div>
    <div class="tour-details">
      <h2>Learn About Cham Culture</h2>
      <div class="rating">
        <span class="stars">★★★★☆</span>
        <span>(80 reviews)</span>
      </div>
      <p>The Cham people once ruled much of Central Vietnam, and the ruins of their temples have been excavated around Da Nang. The excellent Cham Sculpture Museum showcases the world's largest collection of Cham sculptures.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 hours</li>
        <li><i class="fa-solid fa-landmark"></i> Culture</li>
        <li><i class="fa-solid fa-book-open"></i> Knowledge</li>
        <li><a href="#">Historical tour</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">From <strong>39,000 VND/person</strong></span>
        <a href="#" class="btn-cta">View details</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-details">
      <h2>Enjoy Street Food</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(150 reviews)</span>
      </div>
      <p>Da Nang is a paradise for food lovers, with many seaside eateries and bustling street food stalls.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 4 hours</li>
        <li><i class="fa-solid fa-bowl-rice"></i> Food</li>
        <li><i class="fa-solid fa-walkie-talkie"></i> Guided tour</li>
        <li><a href="#">Food tour</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">From <strong>59,000 VND/person</strong></span>
        <a href="#" class="btn-cta">View details</a>
      </div>
    </div>
    <div class="tour-image">
      <img src="/images/destinations/Da-Nang/am-thuc-da-nang.jpg" alt="Da Nang Cuisine">
      <div class="badge">Yummy</div>
    </div>
  </section>

  <section class="content-section highlights" id="highlights">
    <h2>Highlights</h2>
    <div class="cards">
      <div class="card">
        <img src="/images/destinations/Da-Nang/BaNaHills.jpg" alt="Ba Na Hills">
        <h3>Ba Na Hills</h3>
        <p>A mountain resort featuring the world’s longest cable car and the iconic Golden Bridge.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Da-Nang/NHS.jpg" alt="Marble Mountains">
        <h3>Marble Mountains</h3>
        <p>A cluster of limestone hills with caves and sacred pagodas.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Da-Nang/caurong.jpg" alt="Dragon Bridge">
        <h3>Dragon Bridge</h3>
        <p>Da Nang’s iconic bridge, designed like a dragon that breathes fire and water on weekends.</p>
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
          ['BaNaHills.jpg', 'Ba Na Hills'],
          ['bien-my-khe.jpg', 'My Khe Beach'],
          ['chailuoibien.jpg', 'Sea Netting'],
          ['nui-son-tra.jpg', 'Son Tra Mountain'],
          ['BunChaCa.jpg', 'Fish Cake Noodles'],
          ['caurong.jpg', 'Dragon Bridge at night']
        ];

        foreach ($galleryImages as [$image, $alt]) {
          echo "<div class='swiper-slide'>";
          echo "<img src='/images/destinations/Da-Nang/{$image}' alt='{$alt}'>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </section>
</main>
