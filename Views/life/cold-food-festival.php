<?php
$eventTitle = "Cold Food Festival 2025 (Tết Hàn Thực)";
$pageStyles = ['/css/cold-food-festival.css'];
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
<header class="hero-coldfood">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Lễ hội ẩm thực truyền thống – tưởng nhớ tổ tiên qua món bánh trôi bánh chay</p>
    
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    Tết Hàn Thực được tổ chức vào ngày mùng 3 tháng 3 âm lịch hằng năm. Đây là dịp để người Việt tưởng nhớ tổ tiên, ông bà bằng cách dâng cúng các món ăn truyền thống nguội – đặc trưng là bánh trôi, bánh chay.
  </p>

  <div class="highlight-box">
    Trong ngày lễ, nhiều gia đình tự tay nặn bánh trôi, bánh chay – những viên tròn trắng tinh, ngọt ngào như tấm lòng hiếu kính và mong ước an lành cho cả nhà.
  </div>

  <img src="https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2023/4/22/banh-troi-banh-chay-16182817513151284786862-1682130862376-16821308626471902128415.jpg" alt="Bánh trôi bánh chay ngày Tết Hàn Thực">

  <h2>Phong Tục Truyền Thống</h2>
  <ul>
    <li>🍡 Làm bánh trôi bánh chay dâng cúng tổ tiên</li>
    <li>📿 Thắp hương ban thờ gia tiên – cầu nguyện bình an</li>
    <li>👧 Cùng trẻ nhỏ học làm bánh để giữ gìn truyền thống</li>
    <li>📷 Chụp ảnh, chia sẻ mâm bánh đẹp ý nghĩa đầu tháng 3</li>
  </ul>

  <h2>Ý Nghĩa Văn Hóa</h2>
  <p>
    Dù không phải là ngày lễ lớn, nhưng Tết Hàn Thực là dịp thể hiện sự gắn kết gia đình, gìn giữ nét đẹp cổ truyền và thể hiện lòng biết ơn nguồn cội. Lễ hội này còn được ví như "ngày của sự thanh tịnh và ngọt lành".
  </p>
</main>

<!-- CTA -->
<div class="cta">
 
  <a href="/life/festivals">Quay lại</a>
</div>

</body>
</html>
