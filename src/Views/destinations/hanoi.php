<?php
$pageTitle = 'Hà Nội - Du lịch Việt Nam';

// Thêm các tệp CSS riêng cho trang
$pageStyles = [
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
  'https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css',
  '/css/destination.css'
];

// Thêm các script riêng cho trang
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
    <h1>Khám Phá Hà Nội</h1>
    <p>Thủ đô nghìn năm văn hiến với vẻ đẹp cổ kính và văn hóa ẩm thực độc đáo.</p>
    <a href="#highlights" class="btn-cta">Khám Phá Ngay</a>
  </div>
</section>

<main>
  <section class="content-section overview fade-in">
    <h2><i class="fas fa-city"></i> Tổng Quan Về Hà Nội</h2>
    <p>Hà Nội là trái tim của Việt Nam với hơn một nghìn năm lịch sử. Thành phố cuốn hút du khách bởi sự hòa quyện giữa nét cổ kính của phố cổ, kiến trúc Pháp cổ và nhịp sống hiện đại. Hà Nội cũng nổi tiếng với nền ẩm thực phong phú và các giá trị văn hóa truyền thống đặc sắc.</p>
  </section>

  <!-- START: Things to do Section -->
  <section class="content-section things-to-do fade-in">
    <h2><i class="fas fa-clipboard-check"></i> Những Trải Nghiệm Không Thể Bỏ Lỡ</h2>
    <div class="activity-grid">
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-masks-theater"></i>
        </div>
        <div class="activity-content">
          <h3>Xem Múa Rối Nước</h3>
          <p>Thưởng thức loại hình nghệ thuật truyền thống độc đáo đậm chất văn hóa Việt ngay tại thủ đô.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-landmark-dome"></i>
        </div>
        <div class="activity-content">
          <h3>Tham Quan Hoàng Thành Thăng Long</h3>
          <p>Dạo quanh di sản thế giới và khám phá lịch sử nghìn năm của kinh đô xưa.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-mug-hot"></i>
        </div>
        <div class="activity-content">
          <h3>Thưởng Thức Cà Phê Trứng</h3>
          <p>Thử ngay hương vị béo ngậy, thơm ngon của món đặc sản không thể bỏ qua tại Hà Nội.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-bicycle"></i>
        </div>
        <div class="activity-content">
          <h3>Đạp Xe Quanh Hồ Tây</h3>
          <p>Hít thở không khí trong lành, ngắm cảnh đẹp và cảm nhận nhịp sống bình yên ven hồ.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-street-view"></i>
        </div>
        <div class="activity-content">
          <h3>Lang Thang Phố Cổ</h3>
          <p>Khám phá 36 phố phường sầm uất với những ngôi nhà cổ, cửa hàng thủ công và món ăn đường phố hấp dẫn.</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">
          <i class="fas fa-camera-retro"></i>
        </div>
        <div class="activity-content">
          <h3>Check-in Cầu Long Biên</h3>
          <p>Ghi lại khoảnh khắc ấn tượng tại cây cầu lịch sử chứng kiến bao thăng trầm của thủ đô.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: Things to do Section -->

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/HoHoanKiem.jpg" alt="Hồ Hoàn Kiếm">
      <div class="badge">Biểu tượng</div>
    </div>
    <div class="tour-details">
      <h2>Tham Quan Hồ Hoàn Kiếm & Đền Ngọc Sơn</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(180 đánh giá)</span>
      </div>
      <p>Hồ Hoàn Kiếm là biểu tượng văn hóa - lịch sử của Hà Nội. Dạo quanh hồ, ghé thăm đền Ngọc Sơn và cầu Thê Húc đỏ rực để cảm nhận nhịp sống thanh bình giữa lòng thủ đô sôi động.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 giờ</li>
        <li><i class="fa-solid fa-water"></i> Hồ</li>
        <li><i class="fa-solid fa-landmark"></i> Danh lam</li>
        <li><a href="#">Tour lịch sử</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Miễn phí</span>
        <a href="#" class="btn-cta">Xem Chi Tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/BunChaHaNoi.jpg" alt="Ẩm thực Hà Nội">
      <div class="badge">Phải thử</div>
    </div>
    <div class="tour-details">
      <h2>Thưởng Thức Ẩm Thực Phố Cổ</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(200 đánh giá)</span>
      </div>
      <p>Phố cổ Hà Nội là thiên đường ẩm thực với những món ăn huyền thoại như bún chả, phở, bánh cuốn, bún thang. Đừng quên ghé một quán nhỏ để thưởng thức hương vị chuẩn Hà Nội.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 3 giờ</li>
        <li><i class="fa-solid fa-utensils"></i> Ẩm thực</li>
        <li><i class="fa-solid fa-person-walking"></i> Đi bộ</li>
        <li><a href="#">Tour ẩm thực</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>59.000đ/người</strong></span>
        <a href="#" class="btn-cta">Xem Chi Tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Ha-Noi/LangBac.jpg" alt="Lăng Chủ tịch Hồ Chí Minh">
      <div class="badge">Trang nghiêm</div>
    </div>
    <div class="tour-details">
      <h2>Thăm Lăng Chủ tịch Hồ Chí Minh</h2>
      <div class="rating">
        <span class="stars">★★★★☆</span>
        <span>(160 đánh giá)</span>
      </div>
      <p>Lăng Bác là nơi an nghỉ cuối cùng của Chủ tịch Hồ Chí Minh – vị lãnh tụ vĩ đại của dân tộc. Quảng trường Ba Đình và khu nhà sàn xung quanh tạo nên không gian thiêng liêng, tự hào.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 giờ</li>
        <li><i class="fa-solid fa-monument"></i> Lịch sử</li>
        <li><i class="fa-solid fa-flag"></i> Quốc gia</li>
        <li><a href="#">Tour văn hóa</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Miễn phí</span>
        <a href="#" class="btn-cta">Xem Chi Tiết</a>
      </div>
    </div>
  </section>

  <section class="content-section highlights" id="highlights">
    <h2>Điểm Nhấn</h2>
    <div class="cards">
      <div class="card">
        <img src="/images/destinations/Ha-Noi/VanMieu.jpg" alt="Văn Miếu Quốc Tử Giám">
        <h3>Văn Miếu Quốc Tử Giám</h3>
        <p>Trường đại học đầu tiên của Việt Nam, tôn vinh truyền thống hiếu học và trọng thầy.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Ha-Noi/Phoco.jpg" alt="Phố cổ Hà Nội">
        <h3>Phố cổ Hà Nội</h3>
        <p>Khu vực với những ngôi nhà cổ, món ăn đường phố và không khí hoài cổ đặc trưng của thủ đô.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Ha-Noi/NhaThoLon.jpg" alt="Nhà thờ lớn Hà Nội">
        <h3>Nhà thờ lớn Hà Nội</h3>
        <p>Kiệt tác kiến trúc Pháp giữa lòng thành phố – địa điểm check-in yêu thích của giới trẻ.</p>
      </div>
    </div>
  </section>

  <section class="gallery">
    <h2>BỘ SƯU TẬP</h2>
    <div class="swiper-button-prev gallery-nav-prev"></div>
    <div class="swiper-button-next gallery-nav-next"></div>
    <div class="swiper gallery-swiper">
      <div class="swiper-wrapper">
        <?php
        $galleryImages = [
          ['HoHoanKiem.jpg', 'Hồ Hoàn Kiếm'],
          ['VanMieu.jpg', 'Văn Miếu Quốc Tử Giám'],
          ['LangBac.jpg', 'Lăng Bác'],
          ['HoTay.jpg', 'Hồ Tây'],
          ['NhaThoLon.jpg', 'Nhà thờ lớn'],
          ['Phoco.jpg', 'Phố cổ']
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
