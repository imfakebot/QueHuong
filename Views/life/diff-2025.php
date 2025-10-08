<?php
$eventTitle = "DIFF 2025 - Danang International Fireworks Festival";
$pageStyles = ['/css/festivals.css'];
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
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: #0c0c0c;
      color: #f0f0f0;
    }

    .hero-diff {
      background-image: url('https://cdn.quangnam.gov.vn/thumbs/1200x630/2025/01/15/le-hoi-phao-hoa-quoc-te-da-nang.-anh-kim-lien-5-.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
      padding: 120px 20px;
      text-align: center;
      color: white;
    }

    .hero-diff::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
    }

    .hero-diff .content {
      position: relative;
      z-index: 1;
    }

    .hero-diff h1 {
      font-size: 3.2rem;
      font-family: 'Playfair Display', serif;
      color: #ffcc33;
      text-shadow: 2px 2px 4px black;
    }

    .section {
      padding: 50px 20px;
      max-width: 1000px;
      margin: auto;
    }

    .section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #ffcc33;
      margin-bottom: 20px;
    }

    .section img {
      width: 100%;
      border-radius: 12px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.4);
    }

    .highlight-box {
      background: #1e1e1e;
      border-left: 6px solid #ffcc33;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
    }

    ul li::marker {
      color: #ffcc33;
    }

    .cta {
      text-align: center;
      margin: 50px 0;
    }

    .cta a {
      background: #ffcc33;
      color: black;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    .cta a:hover {
      background: #fdd835;
    }
  </style>
</head>
<body>

<!-- HERO -->
<header class="hero-diff">
  <div class="content">
    <h1><?php echo $eventTitle; ?></h1>
    <p>Rực rỡ pháo hoa – Bùng nổ cảm xúc bên sông Hàn!</p>
    <a href="/festivals.php" class="btn btn--light">← Quay lại lễ hội</a>
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="section">
  <h2>Giới Thiệu</h2>
  <p>
    DIFF 2025 là lễ hội pháo hoa quốc tế được tổ chức thường niên tại thành phố Đà Nẵng. Năm nay, sự kiện hứa hẹn quy tụ những đội pháo hoa hàng đầu thế giới, cùng với các chương trình biểu diễn nghệ thuật hoành tráng bên bờ sông Hàn.
  </p>

  <div class="highlight-box">
    Từ pháo hoa đến âm nhạc, từ ánh sáng đến cảm xúc – DIFF 2025 không chỉ là một sự kiện, mà là một kỳ quan văn hóa sống động giữa lòng thành phố Đà Nẵng.
  </div>

  <img src="https://img.vietnamplus.vn/t620/uploaded/umzff/2023_06_25/phaohoa2023_danang.jpg" alt="Màn pháo hoa rực rỡ bên sông Hàn">

  <h2>Lịch Diễn & Các Đội Tham Gia</h2>
  <ul>
    <li>🎇 Khai mạc: 12/5/2025 – Đội Việt Nam vs Đội Ý</li>
    <li>🎆 Vòng loại 2: 19/5 – Đội Nhật Bản vs Đội Pháp</li>
    <li>🎆 Vòng loại 3: 26/5 – Đội Trung Quốc vs Đội Ba Lan</li>
    <li>🎆 Vòng loại 4: 2/6 – Đội Đức vs Đội Ấn Độ</li>
    <li>🏆 Chung kết: 16/6 – Hai đội xuất sắc nhất tranh tài</li>
  </ul>

  <h2>Không Gian Biểu Diễn</h2>
  <p>
    Sân khấu chính sẽ được dựng tại quảng trường bờ Tây sông Hàn, đối diện cầu cảng – nơi khán giả có thể chiêm ngưỡng pháo hoa với tầm nhìn đẹp nhất. Ngoài ra còn có sân khấu phụ, không gian ẩm thực, lễ hội đường phố sôi động kéo dài suốt mùa hè.
  </p>
</main>

<!-- CTA -->
<div class="cta">
  <h2>Đặt vé ngay – Trải nghiệm DIFF 2025 theo cách đặc biệt nhất!</h2>
  <a href="/tours/diff-fireworks-packages.php">Xem gói vé & tour</a>
</div>

</body>
</html>
