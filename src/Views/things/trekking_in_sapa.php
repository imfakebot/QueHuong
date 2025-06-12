<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trekking in Sapa - Chinh Phục Cung Đường Huyền Thoại</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        /* === BIẾN CSS VÀ CÀI ĐẶT CHUNG === */
        :root {
            --primary-color: #2c5e1a;
            /* Xanh lá đậm */
            --secondary-color: #ff7f50;
            /* Cam san hô */
            --text-color: #333;
            --light-gray-color: #f4f4f4;
            --white-color: #ffffff;
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            background-color: var(--white-color);
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        h1,
        h2,
        h3 {
            line-height: 1.3;
            color: var(--primary-color);
        }

        h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 40px;
        }

        p {
            margin-bottom: 1rem;
        }

        /* === HEADER & NAV (Ví dụ đơn giản) === */
        .main-header {
            background: var(--white-color);
            padding: 1rem 0;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .main-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
            text-decoration: none;
        }

        /* === HERO SECTION === */
        .hero {
            height: 85vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1534226888640-928e330f6d62?q=80&w=1770&auto=format&fit=crop') no-repeat center center/cover;
            color: var(--white-color);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: var(--white-color);
        }

        .hero-content h3 {
            font-size: 1.5rem;
            font-weight: 300;
            color: var(--white-color);
        }

        /* === SECTION CHUNG === */
        .info-section {
            background-color: var(--light-gray-color);
        }

        /* === TOUR CARDS === */
        .tours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .tour-card {
            background: var(--white-color);
            border-radius: 10px;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tour-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .tour-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .tour-card-content {
            padding: 25px;
        }

        .tour-card h3 {
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: var(--secondary-color);
            color: var(--white-color);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #e66a40;
            transform: scale(1.05);
        }

        /* === GALLERY === */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .gallery-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .gallery-grid img:hover {
            transform: scale(1.05);
            opacity: 0.8;
        }

        /* === MODAL (for Gallery) === */
        .image-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s;
        }

        .modal-content {
            max-width: 90%;
            max-height: 85%;
            animation: zoomIn 0.3s;
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
            }

            to {
                transform: scale(1);
            }
        }

        /* === TESTIMONIALS === */
        .testimonial {
            background: var(--light-gray-color);
            padding: 30px;
            border-left: 5px solid var(--secondary-color);
            border-radius: 8px;
            max-width: 700px;
            margin: 0 auto;
        }

        .testimonial blockquote {
            font-style: italic;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .testimonial cite {
            font-weight: 700;
            color: var(--primary-color);
        }

        /* === FINAL CTA === */
        .cta-section {
            background: var(--primary-color);
            color: var(--white-color);
            text-align: center;
        }

        .cta-section h2 {
            color: var(--white-color);
        }

        .cta-section .btn {
            background-color: var(--white-color);
            color: var(--secondary-color);
            margin: 10px;
        }

        /* === ANIMATION ON SCROLL === */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* === FOOTER === */
        .main-footer {
            background: var(--text-color);
            color: var(--white-color);
            text-align: center;
            padding: 20px 0;
        }

        /* === RESPONSIVE === */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 2rem;
            }

            section {
                padding: 60px 0;
            }

            .hero {
                height: 70vh;
            }
        }
    </style>
</head>

<body>

    <header class="main-header">
        <div class="container">
            <a href="#" class="logo">Vietnam Adventures</a>
            <nav>
                <!-- Menu links can go here -->
            </nav>
        </div>
    </header>

    <main>
        <!-- HERO SECTION -->
        <section class="hero">
            <div class="hero-content">
                <h1>TREKKING SAPA: CHINH PHỤC NHỮNG CUNG ĐƯỜNG HUYỀN THOẠI</h1>
                <h3>Bước chân vào thế giới của núi non hùng vĩ, ruộng bậc thang xanh mướt và những bản làng mộc mạc.</h3>
            </div>
        </section>

        <!-- WHY SAPA SECTION -->
        <section class="info-section">
            <div class="container">
                <h2 class="fade-in">Tại Sao Chọn Trekking ở Sapa?</h2>
                <p class="fade-in">Nằm ở phía Tây Bắc Việt Nam, Sapa là một điểm đến kỳ diệu, nơi thiên nhiên và con người hòa quyện thành một bản giao hưởng tuyệt vời. Đây là trải nghiệm độc nhất vô nhị bởi vì:</p>
                <ul>
                    <li class="fade-in"><strong>Cảnh quan ngoạn mục:</strong> Chiêm ngưỡng những thửa ruộng bậc thang được mệnh danh là một trong những nơi đẹp nhất thế giới.</li>
                    <li class="fade-in"><strong>Văn hóa đa dạng:</strong> Gặp gỡ và tìm hiểu cuộc sống của các dân tộc thiểu số như H'Mông, Dao Đỏ, Tày, Giáy.</li>
                    <li class="fade-in"><strong>Không khí trong lành:</strong> Thoát khỏi sự ồn ào của thành phố và hít thở không khí núi rừng tinh khiết.</li>
                    <li class="fade-in"><strong>Thử thách bản thân:</strong> Với nhiều cấp độ địa hình, Sapa mang đến những cung đường phù hợp cho tất cả mọi người.</li>
                </ul>
            </div>
        </section>

        <!-- TOURS SECTION -->
        <section>
            <div class="container">
                <h2 class="fade-in">Các Lộ Trình Trekking Phổ Biến</h2>
                <div class="tours-grid">
                    <?php foreach ($tours as $tour): ?>
                    <article class="tour-card fade-in">
                        <img src="<?php echo htmlspecialchars($tour['image']); ?>" alt="<?php echo htmlspecialchars($tour['title']); ?>">
                        <div class="tour-card-content">
                            <h3><?php echo htmlspecialchars($tour['title']); ?></h3>
                            <p><?php echo htmlspecialchars($tour['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($tour['link']); ?>" class="btn">Xem Chi Tiết</a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- GALLERY SECTION -->
        <section class="info-section">
            <div class="container">
                <h2 class="fade-in">Thư Viện Ảnh: Khoảnh Khắc Sapa</h2>
                <div class="gallery-grid">
                    <?php foreach ($galleryImages as $image): ?>
                    <img class="fade-in" src="<?php echo htmlspecialchars($image['url']); ?>" alt="<?php echo htmlspecialchars($image['alt']); ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL SECTION -->
        <section>
            <div class="container">
                <h2 class="fade-in">Khách Hàng Nói Gì?</h2>
                <div class="testimonial fade-in">
                    <blockquote>"Đây là chuyến đi tuyệt vời nhất của tôi ở Việt Nam! Hướng dẫn viên rất am hiểu và nhiệt tình. Khung cảnh thì không từ nào tả xiết. Chắc chắn sẽ giới thiệu!"</blockquote>
                    <cite>– Sarah K., Australia</cite>
                </div>
            </div>
        </section>

        <!-- FINAL CTA SECTION -->
        <section class="cta-section">
            <div class="container">
                <h2 class="fade-in">Sẵn Sàng Viết Nên Câu Chuyện Của Riêng Bạn?</h2>
                <p class="fade-in">Đừng chỉ nghe kể về Sapa, hãy tự mình trải nghiệm và tạo nên những kỷ niệm khó quên.</p>
                <div class="fade-in">
                    <a href="#" class="btn">Chọn Tour Trekking</a>
                    <a href="#" class="btn">Liên Hệ Tư Vấn</a>
                </div>
            </div>
        </section>
    </main>

    <!-- The Modal for Image Gallery -->
    <div id="image-modal" class="image-modal">
        <span class="close-modal">×</span>
        <img class="modal-content" id="modal-image">
    </div>

    <footer class="main-footer">
        <p>© <?php echo date("Y"); ?> Vietnam Adventures. All Rights Reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // SCRIPT CHO GALLERY MODAL
            const modal = document.getElementById('image-modal');
            const modalImg = document.getElementById('modal-image');
            const galleryImages = document.querySelectorAll('.gallery-grid img');
            const closeModal = document.querySelector('.close-modal');

            galleryImages.forEach(img => {
                img.addEventListener('click', function() {
                    modal.style.display = 'flex';
                    modalImg.src = this.src;
                });
            });

            const closeTheModal = () => {
                modal.style.display = 'none';
            }

            closeModal.addEventListener('click', closeTheModal);
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeTheModal();
                }
            });

            // SCRIPT CHO ANIMATION KHI CUỘN
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));

        });
    </script>

</body>

</html>