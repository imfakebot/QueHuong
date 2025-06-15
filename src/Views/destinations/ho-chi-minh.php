<?php
$pageTitle = 'Thành phố Hồ Chí Minh - Du lịch Việt Nam';

// Thêm các file CSS dành riêng cho trang
$pageStyles = [
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
  '/css/destination.css'
];

// Thêm các file JS dành riêng cho trang
$pageScripts = [
  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
  '/js/destination.js'
];
?>

<section class="hero" style="background-image: url('/images/destinations/HCM/hcm.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <h1>Khám phá Thành phố Hồ Chí Minh</h1>
    <p>Thành phố năng động nhất Việt Nam với nhịp sống hiện đại, đầy màu sắc và sôi động.</p>
    <a href="#highlights" class="btn-cta">Khám phá ngay</a>
  </div>
</section>

<main>
  <section class="content-section overview fade-in">
    <h2><i class="fas fa-city"></i> Tổng quan về Sài Gòn</h2>
    <p>Thành phố Hồ Chí Minh, hay còn gọi là Sài Gòn, là trung tâm kinh tế, văn hóa và giải trí lớn nhất của Việt Nam. Từ những tòa nhà chọc trời hiện đại đến các con phố cổ kính và chợ Bến Thành sầm uất, thành phố này thu hút mọi du khách.</p>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/HCM/NhaThoDucBA.jpg" alt="Nhà thờ Đức Bà">
      <div class="badge">Hot</div>
    </div>
    <div class="tour-details">
      <h2>Check-in Nhà thờ Đức Bà và Bưu điện Trung tâm</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(210 đánh giá)</span>
      </div>
      <p>Nhà thờ Đức Bà là biểu tượng kiến trúc Pháp tại Sài Gòn. Ngay bên cạnh là Bưu điện Trung tâm với mái vòm cổ kính. Đây là điểm đến lý tưởng cho những ai yêu thích sự hoài cổ và kiến trúc châu Âu.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 1,5 tiếng</li>
        <li><i class="fa-solid fa-building-columns"></i> Kiến trúc</li>
        <li><i class="fa-solid fa-camera"></i> Chụp ảnh</li>
        <li><a href="#">Tour kiến trúc</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Miễn phí</span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/HCM/ChoBenThanh.jpg" alt="Chợ Bến Thành">
      <div class="badge">Sôi động</div>
    </div>
    <div class="tour-details">
      <h2>Khám phá chợ Bến Thành</h2>
      <div class="rating">
        <span class="stars">★★★★☆</span>
        <span>(175 đánh giá)</span>
      </div>
      <p>Chợ Bến Thành là một trong những khu chợ lâu đời và nổi tiếng nhất của thành phố. Nơi đây bạn có thể mua sắm, thưởng thức ẩm thực và trải nghiệm văn hóa miền Nam đặc sắc.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 giờ</li>
        <li><i class="fa-solid fa-bag-shopping"></i> Mua sắm</li>
        <li><i class="fa-solid fa-bowl-food"></i> Ẩm thực</li>
        <li><a href="#">Tour văn hóa</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>30.000₫</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/HCM/BuiVien.jpg" alt="Phố Bùi Viện">
      <div class="badge">Về đêm</div>
    </div>
    <div class="tour-details">
      <h2>Trải nghiệm phố đi bộ Bùi Viện</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(300 đánh giá)</span>
      </div>
      <p>Phố Bùi Viện là nơi tụ họp sôi động của giới trẻ và khách quốc tế mỗi khi đêm về. Tại đây bạn sẽ được hòa mình vào không khí náo nhiệt, âm nhạc sống động và đồ uống hấp dẫn.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> Tối - đêm</li>
        <li><i class="fa-solid fa-beer-mug-empty"></i> Quán bar</li>
        <li><i class="fa-solid fa-music"></i> Âm nhạc</li>
        <li><a href="#">Tour nightlife</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Miễn phí vào cổng</span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="content-section highlights" id="highlights">
    <h2>Điểm nổi bật</h2>
    <div class="cards">
      <div class="card">
        <img src="/images/destinations/HCM/Bitexco.jpg" alt="Tòa nhà Bitexco">
        <h3>Tòa nhà Bitexco</h3>
        <p>Biểu tượng hiện đại của Sài Gòn với đài quan sát nhìn toàn cảnh thành phố.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/HCM/BuuDien.jpg" alt="Bưu điện Trung tâm">
        <h3>Bưu điện Trung tâm</h3>
        <p>Kiến trúc cổ điển Pháp được bảo tồn ngay giữa lòng thành phố. Một điểm tham quan độc đáo.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/HCM/BuiVien.jpg" alt="Phố Bùi Viện">
        <h3>Phố Bùi Viện</h3>
        <p>Khu phố sôi động với nhiều quán bar, nhà hàng và hoạt động giải trí về đêm.</p>
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
          ['DinhDocLap.jpg', 'Dinh Độc Lập'],
          ['NhaThoDucBA.jpg', 'Nhà thờ Đức Bà'],
          ['ChoBenThanh.jpg', 'Chợ Bến Thành'],
          ['Bitexco.jpg', 'Tòa nhà Bitexco'],
          ['BuuDien.jpg', 'Bưu điện Trung tâm'],
          ['BuiVien.jpg', 'Phố Bùi Viện']
        ];

        foreach ($galleryImages as [$image, $alt]) {
          echo "<div class='swiper-slide'>";
          echo "<img src='/images/destinations/HCM/{$image}' alt='{$alt}'>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </section>
</main>
