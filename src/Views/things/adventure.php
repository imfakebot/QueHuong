<?php
$pageTitle = 'Adventure & Outdoors - Du Lịch Quê Hương';

$pageStyles = [
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
  '/css/adventure.css'
];

$pageScripts = [
  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
  '/js/destination.js'
];
?>

<section class="adventure-hero" style="background-image: url('/images/mega_menu/adventure_and_outdoor.jpg');">
    <div class="hero-overlay"></div>
    <div class="overlay">
        <h1>Phiêu Lưu & Hoạt Động Ngoài Trời</h1>
        <p>Khám phá Việt Nam theo cách mạo hiểm và hoang dã nhất!</p>
    </div>
</section>

<section class="adventure-content">
    <div class="container">
        <h2>Trải Nghiệm Nổi Bật</h2>
        <div class="grid">
    <div class="card">
        <img src="/assets/images/trekking.jpg" alt="Trekking Sapa">
        <h3>Trekking Sapa</h3>
        <p>Băng qua ruộng bậc thang và khám phá bản làng vùng cao Tây Bắc.</p>
    </div>
    <div class="card">
        <img src="/assets/images/kayak.jpg" alt="Kayaking Hạ Long">
        <h3>Kayak Vịnh Hạ Long</h3>
        <p>Khám phá kỳ quan thiên nhiên bằng chèo thuyền giữa núi đá vôi.</p>
    </div>
    <div class="card">
        <img src="/assets/images/phongnha.jpg" alt="Phong Nha Caves">
        <h3>Thám Hiểm Động Phong Nha</h3>
        <p>Đi sâu vào hang động kỳ vĩ, hệ thống đá vôi tuyệt đẹp và sông ngầm.</p>
    </div>
    <div class="card">
        <img src="/assets/images/motorbike.jpg" alt="Motorbike Adventure">
        <h3>Phiêu Lưu Xe Máy</h3>
        <p>Chạy xe xuyên qua đèo Hải Vân, đồi núi và cung đường ven biển hoang sơ.</p>
    </div>
    <div class="card">
        <img src="/assets/images/camping.jpg" alt="Camping Đà Lạt">
        <h3>Cắm trại Đà Lạt</h3>
        <p>Đêm se lạnh giữa rừng thông và ánh lửa trại ấm áp bên bạn bè.</p>
    </div>
    <div class="card">
        <img src="/assets/images/bike.jpg" alt="Đạp xe Mai Châu">
        <h3>Đạp Xe Mai Châu</h3>
        <p>Dạo qua làng quê yên bình, đồng lúa và nụ cười thân thiện của người Mường.</p>
    </div>
    <div class="card">
        <img src="/assets/images/watersports.jpg" alt="Water Sports">
        <h3>Thể Thao Nước & Biển</h3>
        <p>Lướt sóng, lặn biển, hoặc chơi mô tô nước tại các bãi biển tuyệt đẹp.</p>
    </div>
    <div class="card">
        <img src="/assets/images/canyoning.jpg" alt="Canyoning Đà Lạt">
        <h3>Canyoning Đà Lạt</h3>
        <p>Leo thác, đu dây và nhảy xuống suối trong cuộc phiêu lưu kịch tính.</p>
    </div>
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
          ['doi-cat.jpg', 'Mui Ne Sand Dunes'],
          ['lang-chai.jpg', 'Mui Ne Fishing Village'],
          ['thap-cham.jpg', 'Poshanu Cham Towers'],
          ['bien-mui-ne.jpg', 'Mui Ne Beach'],
          ['ke-ga.jpg', 'Ke Ga Lighthouse'],
          ['am-thuc.jpg', 'Binh Thuan Cuisine']
        ];

        foreach ($galleryImages as [$image, $alt]) {
          echo "<div class='swiper-slide'>";
          echo "<img src='/images/destinations/BinhThuan/{$image}' alt='{$alt}'>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </section>



