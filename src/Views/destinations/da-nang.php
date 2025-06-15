<?php
$pageTitle = 'Đà Nẵng - Du Lịch Việt Nam';

// Thêm các tệp CSS riêng cho trang
$pageStyles = [
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
  '/css/destination.css'
];

// Thêm các tệp JavaScript riêng cho trang
$pageScripts = [
  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
  '/js/destination.js'
];
?>

<!-- Nội dung HTML tiếp theo -->

<section class="hero" style="background-image: url('/images/destinations/Da-Nang/DaNangReview.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <h1>Khám Phá Đà Nẵng</h1>
    <p>Thành phố biển năng động với những bãi biển tuyệt đẹp và nền văn hóa phong phú.</p>
    <a href="#highlights" class="btn-cta">Khám phá ngay</a>
  </div>
</section>

<main>
  <section class="content-section overview fade-in">
    <h2><i class="fas fa-city"></i> Tổng Quan Về Đà Nẵng</h2>
    <p>Với những bãi biển rộng, ẩm thực đường phố tuyệt vời, đèo Hải Vân huyền thoại và hàng loạt quán cà phê, nhà hàng, quán bar đang phát triển, không có gì ngạc nhiên khi người dân Đà Nẵng luôn tươi cười rạng rỡ. Bãi biển Mỹ Khê trải dài từ bán đảo Sơn Trà. Đà Nẵng là nơi tọa lạc của nhiều khu nghỉ dưỡng cao cấp, nhưng phần lớn bãi biển vẫn thuộc về người dân địa phương với các hoạt động thể thao, giải trí và sinh kế hàng ngày.</p>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Da-Nang/BaNaHills.jpg" alt="Thưởng thức bãi biển">
      <div class="badge">Bán chạy</div>
    </div>
    <div class="tour-details">
      <h2>Thưởng Thức Bãi Biển</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(95 đánh giá)</span>
      </div>
      <p>Hãy thử dậy sớm ít nhất một lần trong kỳ nghỉ của bạn. Ven biển, ngư dân bán cá tươi, các trò chơi bóng chuyền và bóng đá diễn ra, và người dân tập thể dục, đi dạo hoặc đơn giản là thư giãn trên cát.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 3 giờ</li>
        <li><i class="fa-solid fa-umbrella-beach"></i> Bãi biển</li>
        <li><i class="fa-solid fa-heart"></i> Thư giãn</li>
        <li><a href="#">Chuyến đi nghỉ dưỡng</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>49.000 VND/người</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-details">
      <h2>Khám Phá Bán Đảo Sơn Trà</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(120 đánh giá)</span>
      </div>
      <p>Bán đảo Sơn Trà vươn ra biển, với những cánh rừng là nơi sinh sống của loài voọc chà vá chân nâu quý hiếm — một trong những loài linh trưởng nổi bật nhất thế giới.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 6 giờ</li>
        <li><i class="fa-regular fa-star"></i> Riêng tư</li>
        <li><i class="fa-solid fa-person-hiking"></i> Tự do</li>
        <li><a href="#">Tour thiên nhiên</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>89.000 VND/người</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
    <div class="tour-image">
      <img src="/images/destinations/Da-Nang/nui-son-tra.jpg" alt="Bán đảo Sơn Trà">
      <div class="badge">Bán chạy</div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Da-Nang/bao-tang-cham.jpg" alt="Bảo tàng Chăm">
      <div class="badge">Nổi bật</div>
    </div>
    <div class="tour-details">
      <h2>Tìm Hiểu Văn Hóa Chăm</h2>
      <div class="rating">
        <span class="stars">★★★★☆</span>
        <span>(80 đánh giá)</span>
      </div>
      <p>Người Chăm từng cai trị phần lớn miền Trung Việt Nam, và các di tích đền tháp của họ được tìm thấy quanh Đà Nẵng. Bảo tàng Điêu khắc Chăm trưng bày bộ sưu tập tượng Chăm lớn nhất thế giới.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 giờ</li>
        <li><i class="fa-solid fa-landmark"></i> Văn hóa</li>
        <li><i class="fa-solid fa-book-open"></i> Kiến thức</li>
        <li><a href="#">Tour lịch sử</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>39.000 VND/người</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-details">
      <h2>Thưởng Thức Ẩm Thực Đường Phố</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(150 đánh giá)</span>
      </div>
      <p>Đà Nẵng là thiên đường dành cho người yêu ẩm thực, với nhiều quán ăn ven biển và các hàng quán đường phố sôi động.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 4 giờ</li>
        <li><i class="fa-solid fa-bowl-rice"></i> Ẩm thực</li>
        <li><i class="fa-solid fa-walkie-talkie"></i> Có hướng dẫn</li>
        <li><a href="#">Tour ẩm thực</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>59.000 VND/người</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
    <div class="tour-image">
      <img src="/images/destinations/Da-Nang/am-thuc-da-nang.jpg" alt="Ẩm thực Đà Nẵng">
      <div class="badge">Ngon</div>
    </div>
  </section>

  <section class="content-section highlights" id="highlights">
    <h2>Điểm Nổi Bật</h2>
    <div class="cards">
      <div class="card">
        <img src="/images/destinations/Da-Nang/BaNaHills.jpg" alt="Bà Nà Hills">
        <h3>Bà Nà Hills</h3>
        <p>Khu nghỉ dưỡng trên núi nổi tiếng với cáp treo dài nhất thế giới và Cầu Vàng ấn tượng.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Da-Nang/NHS.jpg" alt="Ngũ Hành Sơn">
        <h3>Ngũ Hành Sơn</h3>
        <p>Quần thể núi đá vôi với các hang động và chùa chiền linh thiêng.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Da-Nang/caurong.jpg" alt="Cầu Rồng">
        <h3>Cầu Rồng</h3>
        <p>Cây cầu biểu tượng của Đà Nẵng, có thể phun lửa và nước vào cuối tuần.</p>
      </div>
    </div>
  </section>

  <section class="gallery">
    <h2>THƯ VIỆN ẢNH</h2>
    <div class="swiper-button-prev gallery-nav-prev"></div>
    <div class="swiper-button-next gallery-nav-next"></div>

    <div class="swiper gallery-swiper">
      <div class="swiper-wrapper">
        <?php
        $galleryImages = [
          ['BaNaHills.jpg', 'Bà Nà Hills'],
          ['bien-my-khe.jpg', 'Biển Mỹ Khê'],
          ['chailuoibien.jpg', 'Chài lưới biển'],
          ['nui-son-tra.jpg', 'Núi Sơn Trà'],
          ['BunChaCa.jpg', 'Bún chả cá'],
          ['caurong.jpg', 'Cầu Rồng về đêm']
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
