<?php
$pageTitle = 'Đà Lạt - Du lịch Đà Lạt';

// Thêm các tệp CSS riêng cho trang
$pageStyles = [
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
  '/css/destination.css'
];

// Thêm các tệp script riêng cho trang
$pageScripts = [
  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
  '/js/destination.js'
];
?>

<section class="hero" style="background-image: url('/images/destinations/Da-Lat/da-lat.jpg');">
  <div class="hero-overlay"></div>
  <div class="hero-text">
    <h1>Khám phá Đà Lạt</h1>
    <p>Thành phố ngàn hoa với khí hậu mát mẻ quanh năm và phong cảnh nên thơ.</p>
    <a href="#highlights" class="btn-cta">Khám phá ngay</a>
  </div>
</section>

<main>
  <section class="content-section overview fade-in">
    <h2><i class="fas fa-mountain-sun"></i> Tổng quan về Đà Lạt</h2>
    <p>Đà Lạt là thành phố du lịch nổi tiếng với khí hậu se lạnh, rừng thông bạt ngàn và kiến trúc cổ kính. Đây là điểm đến lý tưởng để nghỉ dưỡng, chụp ảnh và khám phá thiên nhiên.</p>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Da-Lat/HoXuanHuong.jpg" alt="Hồ Xuân Hương">
      <div class="badge">Lãng mạn</div>
    </div>
    <div class="tour-details">
      <h2>Tham quan Hồ Xuân Hương</h2>
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span>(110 đánh giá)</span>
      </div>
      <p>Trái tim của Đà Lạt – lý tưởng để đi dạo, đạp vịt và tận hưởng không khí trong lành.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 1,5 tiếng</li>
        <li><i class="fa-solid fa-water"></i> Hồ nước</li>
        <li><i class="fa-solid fa-person-walking"></i> Dạo bộ</li>
        <li><a href="#">Tour thư giãn</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>25.000đ/người</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-details">
      <h2>Khám phá Thung lũng Tình Yêu</h2>
      <div class="rating">
        <span class="stars">★★★★☆</span>
        <span>(95 đánh giá)</span>
      </div>
      <p>Một thung lũng nổi tiếng với phong cảnh lãng mạn, lý tưởng cho các cặp đôi và người yêu thiên nhiên.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 2 tiếng</li>
        <li><i class="fa-solid fa-heart"></i> Tình yêu</li>
        <li><i class="fa-solid fa-leaf"></i> Thiên nhiên</li>
        <li><a href="#">Tour lãng mạn</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>40.000đ/người</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
    <div class="tour-image">
      <img src="/images/destinations/Da-Lat/ThungLungTinhYeu.jpg" alt="Thung lũng Tình Yêu">
      <div class="badge">Thiên nhiên</div>
    </div>
  </section>

  <section class="tour-card fade-in">
    <div class="tour-image">
      <img src="/images/destinations/Da-Lat/NhaThoConGa.jpg" alt="Nhà thờ Con Gà">
      <div class="badge">Lịch sử</div>
    </div>
    <div class="tour-details">
      <h2>Tham quan Nhà thờ Con Gà</h2>
      <div class="rating">
        <span class="stars">★★★★☆</span>
        <span>(82 đánh giá)</span>
      </div>
      <p>Nhà thờ lớn nhất tại Đà Lạt mang kiến trúc Gothic, là nơi tuyệt vời để khám phá văn hóa và kiến trúc cổ.</p>
      <ul class="tour-info">
        <li><i class="fa-regular fa-clock"></i> 1 tiếng</li>
        <li><i class="fa-solid fa-church"></i> Tôn giáo</li>
        <li><i class="fa-solid fa-camera"></i> Chụp ảnh</li>
        <li><a href="#">Tour văn hóa</a></li>
      </ul>
      <div class="price-and-button">
        <span class="price">Từ <strong>20.000đ/người</strong></span>
        <a href="#" class="btn-cta">Xem chi tiết</a>
      </div>
    </div>
  </section>

  <section class="content-section highlights" id="highlights">
    <h2>Điểm nổi bật</h2>
    <div class="cards">
      <div class="card">
        <img src="/images/destinations/Da-Lat/LangBiang.jpg" alt="Núi Langbiang">
        <h3>Núi Langbiang</h3>
        <p>Ngọn núi nổi tiếng với khung cảnh hùng vĩ, lý tưởng cho các hoạt động trekking và chụp ảnh toàn cảnh thành phố.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Da-Lat/ChoDaLat.jpg" alt="Chợ Đà Lạt">
        <h3>Chợ Đà Lạt</h3>
        <p>Địa điểm lý tưởng để thưởng thức đặc sản địa phương và mua quà lưu niệm độc đáo.</p>
      </div>
      <div class="card">
        <img src="/images/destinations/Da-Lat/GaDaLat.jpg" alt="Ga Đà Lạt">
        <h3>Ga Đà Lạt</h3>
        <p>Nhà ga cổ nhất Đông Dương với kiến trúc độc đáo và tuyến tàu cổ phục vụ du lịch.</p>
      </div>
    </div>
  </section>

  <section class="gallery">
    <h2>BỘ SƯU TẬP ẢNH</h2>
    <div class="swiper-button-prev gallery-nav-prev"></div>
    <div class="swiper-button-next gallery-nav-next"></div>

    <div class="swiper gallery-swiper">
      <div class="swiper-wrapper">
        <?php
        $galleryImages = [
          ['HoXuanHuong.jpg', 'Hồ Xuân Hương'],
          ['ThungLungTinhYeu.jpg', 'Thung lũng Tình Yêu'],
          ['NhaThoConGa.jpg', 'Nhà thờ Con Gà'],
          ['LangBiang.jpg', 'Núi Langbiang'],
          ['ChoDaLat.jpg', 'Chợ Đà Lạt'],
          ['GaDaLat.jpg', 'Ga Đà Lạt']
        ];

        foreach ($galleryImages as [$image, $alt]) {
          echo "<div class='swiper-slide'>";
          echo "<img src='/images/destinations/Da-Lat/{$image}' alt='{$alt}'>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </section>
</main>
