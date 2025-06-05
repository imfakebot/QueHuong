<?php
$pageTitle = 'Hà Nội - Du lịch Việt Nam';

// Add page-specific CSS files
$pageStyles = [
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
  'https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css',
  '/css/destination.css'
];

// Add page-specific scripts (already exists)
$pageScripts = [
  'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js',
  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
  'https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js',
  '/js/destination.js'
];
?>

<!-- Rest of the existing HTML content -->

<section class="hero" style="background-image: url('/images/destinations/Ha-Noi/Hanoi-review.jpg');">
  <div class="hero-text">
    <h1>Khám phá Hà Nội</h1>
    <p>Thủ đô ngàn năm văn hiến với vẻ đẹp cổ kính, trầm mặc và nền ẩm thực đặc sắc.</p>
    <a href="#highlights" class="btn-cta">Khám phá ngay</a>
  </div>
</section>

<main>
  <section class="content-section overview fade-in">
    <h2><i class="fas fa-city"></i> Tổng quan về Hà Nội</h2>
    <p>Hà Nội là trái tim của Việt Nam với hơn một nghìn năm lịch sử. Thành phố quyến rũ du khách bởi sự pha trộn hài hòa giữa nét cổ kính của phố cổ, những công trình kiến trúc Pháp và nhịp sống hiện đại. Không chỉ vậy, Hà Nội còn nổi tiếng với ẩm thực phong phú và nền văn hóa truyền thống sâu sắc.</p>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/HoHoanKiem.jpg" alt="Hồ Hoàn Kiếm">
      <div class="badge">Biểu tượng</div>
    </div>
    <div class="tour-details">
      <h2>Thăm Hồ Hoàn Kiếm và đền Ngọc Sơn</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(180 đánh giá)</span>
      </div>
      <p>Hồ Hoàn Kiếm là biểu tượng văn hóa, lịch sử của Hà Nội. Dạo quanh hồ, ghé thăm đền Ngọc Sơn và cây cầu Thê Húc đỏ rực, bạn sẽ cảm nhận rõ nhịp sống chậm rãi và yên bình giữa lòng thủ đô sôi động.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 tiếng</li>
        <li><i class="fa-solid fa-water"></i> Hồ nước</li>
        <li><i class="fa-solid fa-landmark"></i> Di tích</li>
        <li><a href="#">Tour lịch sử</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Miễn phí</span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/BunChaHaNoi.jpg" alt="Ẩm thực Hà Nội">
      <div class="badge">Must try</div>
    </div>
    <div class="tour-details">
      <h2>Thưởng thức ẩm thực phố cổ</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(200 đánh giá)</span>
      </div>
      <p>Phố cổ Hà Nội là thiên đường ẩm thực với những món ăn trứ danh như bún chả, phở bò, bánh cuốn, bún thang... Đừng quên ghé vào một quán nhỏ để cảm nhận trọn vẹn vị ngon truyền thống.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 3 tiếng</li>
        <li><i class="fa-solid fa-utensils"></i> Ăn uống</li>
        <li><i class="fa-solid fa-person-walking"></i> Đi bộ</li>
        <li><a href="#">Tour ẩm thực</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>59.000đ/người</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/LangBac.jpg" alt="Lăng Bác">
      <div class="badge">Trang nghiêm</div>
    </div>
    <div class="tour-details">
      <h2>Tham quan Lăng Chủ tịch Hồ Chí Minh</h2>
      <div class="rating">
        <span class="stars">★★★★☆</span>
        <span>(160 đánh giá)</span>
      </div>
      <p>Lăng Chủ tịch là nơi an nghỉ của Bác Hồ - vị lãnh tụ vĩ đại của dân tộc. Không gian xung quanh quảng trường Ba Đình và khu nhà sàn Bác Hồ mang đến cảm xúc linh thiêng và tự hào cho du khách.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 giờ</li>
        <li><i class="fa-solid fa-monument"></i> Lịch sử</li>
        <li><i class="fa-solid fa-flag"></i> Quốc gia</li>
        <li><a href="#">Tour văn hóa</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Miễn phí</span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="content-section highlights" id="highlights">
    <h2>Điểm nổi bật</h2>
    <div class="cards">
      <div class="card">
        <img src="/images/destinations/Ha-Noi/VanMieu.jpg" alt="Văn Miếu Quốc Tử Giám">
        <h3>Văn Miếu Quốc Tử Giám</h3>
        <p>Trường đại học đầu tiên của Việt Nam, nơi tôn vinh nền học thuật và truyền thống tôn sư trọng đạo.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Ha-Noi/Phoco.jpg" alt="Phố cổ Hà Nội">
        <h3>Phố cổ Hà Nội</h3>
        <p>Khu phố với những ngôi nhà cổ, ẩm thực đường phố và không khí đặc trưng của thủ đô xưa.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Ha-Noi/NhaTholon.jpg" alt="Nhà thờ Lớn Hà Nội">
        <h3>Nhà thờ Lớn Hà Nội</h3>
        <p>Công trình kiến trúc Pháp cổ kính nằm giữa lòng thủ đô, điểm check-in nổi bật của giới trẻ.</p>
      </div>
    </div>
  </section>

  <section class="gallery">
    <h2>GALLERY</h2>

    <!-- Navigation buttons -->
    <div class="swiper-button-prev gallery-nav-prev"></div>
    <div class="swiper-button-next gallery-nav-next"></div>

    <div class="swiper gallery-swiper">
      <div class="swiper-wrapper">
        <?php
        $galleryImages = [
          ['HoHoanKiem.jpg', 'Hồ Gươm'],
          ['VanMieu.jpg', 'Văn Miếu - Quốc Tử Giám'],
          ['LangBac.jpg', 'Lăng Bác'],
          ['HoTay.jpg', 'Hồ Tây'],
          ['NhaThoLon.jpg', 'Nhà hát lớn Hà Nội'],
          ['Phoco.jpg', 'Phố cổ Hà Nội']
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