<?php
$eventTitle = "Sea Tourism and Culture Festival 2025";
$pageStyles = ['/css/sea.css'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <title><?php echo $eventTitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php foreach ($pageStyles as $style): ?>
    <link rel="stylesheet" href="<?php echo $style; ?>">
  <?php endforeach; ?>
  
</head>
<body>

<!-- HERO -->
<header class="hero-seafest">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Lễ hội biển 2025 – Rực rỡ sắc màu văn hóa và du lịch ven biển Việt Nam</p>
  
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    Lễ hội Du lịch và Văn hóa Biển 2025 là sự kiện đặc biệt được tổ chức tại các thành phố biển lớn như Đà Nẵng, Nha Trang, Phan Thiết… diễn ra xuyên suốt từ <strong>ngày 1 đến 30 tháng 6 năm 2025</strong>. Đây là dịp để tôn vinh vẻ đẹp biển đảo Việt Nam, quảng bá du lịch và giao lưu văn hóa biển.
  </p>

  <div class="highlight-box">
    Với các hoạt động trình diễn sôi động, thể thao biển, ẩm thực đặc sản ven biển và các tour trải nghiệm, lễ hội mang lại một mùa hè đầy màu sắc và cảm xúc.
  </div>

  <img src="https://baokhanhhoa.vn/file/e7837c02857c8ca30185a8c39b582c03/032025/img_4870_a_20250314090107.jpg" alt="Sự kiện Lễ hội biển tại Nha Trang">

  <h2>Hoạt Động Nổi Bật</h2>
  <ul>
    <li>🏄 Trình diễn thể thao biển: lướt ván, đua thuyền kayak, bóng chuyền bãi biển</li>
    <li>🎶 Đêm hội âm nhạc EDM ven biển với DJ quốc tế</li>
    <li>🎨 Triển lãm tranh, ảnh chủ đề biển – hải đảo quê hương</li>
    <li>🍤 Không gian ẩm thực vùng duyên hải: hải sản tươi, món ăn địa phương</li>
    <li>🚤 Các tour du thuyền, tour câu cá, lặn ngắm san hô trong ngày</li>
  </ul>

  <h2>Thời Gian & Địa Điểm</h2>
  <p>Thời gian: Từ 01/06 đến 30/06/2025</p>
  <p>Địa điểm chính: TP. Nha Trang, Đà Nẵng, Quy Nhơn, Phan Thiết và các vùng biển lân cận</p>
</main>

<!-- CTA -->
<div class="cta">

  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
