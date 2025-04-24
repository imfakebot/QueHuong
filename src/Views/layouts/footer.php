<?php // src/View/layout/footer.php 
?>

</main> <!-- Đóng thẻ main đã mở trong header.php -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-top"> <!-- Phần các cột link -->

            <div class="footer-column">
                <h4 class="footer-heading">Khám Phá Việt Nam</h4>
                <ul class="footer-links">
                    <li><a href="/destination">Điểm Đến Nổi Bật</a></li> <!-- Link tới trang chính -->
                    <li><a href="/thing">Trải Nghiệm Đáng Thử</a></li> <!-- Link tới trang chính -->
                    <li><a href="/life/food">Ẩm Thực Đặc Sắc</a></li>
                    <li><a href="/life/culture/festivals">Lễ Hội & Sự Kiện</a></li>
                    <li><a href="/blog">Blog Du Lịch</a></li> <!-- Nếu có Blog -->
                    <li><a href="/tips">Mẹo Du Lịch Hữu Ích</a></li> <!-- Trang tổng hợp tips? -->
                </ul>
            </div>

            <div class="footer-column">
                <h4 class="footer-heading">Về Chúng Tôi</h4>
                <ul class="footer-links">
                    <li><a href="/about">Giới Thiệu</a></li> <!-- Trang giới thiệu công ty/website -->
                    <li><a href="/careers">Tuyển Dụng</a></li> <!-- Nếu có -->
                    <li><a href="/terms">Điều Khoản Sử Dụng</a></li>
                    <li><a href="/privacy">Chính Sách Bảo Mật</a></li>
                    <li><a href="/contact">Liên Hệ</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4 class="footer-heading">Hỗ Trợ Khách Hàng</h4>
                <ul class="footer-links">
                    <li><a href="/faq">Câu Hỏi Thường Gặp (FAQ)</a></li>
                    <li><a href="/booking-guide">Hướng Dẫn Đặt Tour</a></li> <!-- Nếu có chức năng đặt tour -->
                    <li><a href="/payment-info">Thông Tin Thanh Toán</a></li> <!-- Nếu có thanh toán -->
                    <li><a href="/contact#form">Gửi Yêu Cầu Hỗ Trợ</a></li>
                    <li><a href="/sitemap">Sơ Đồ Website</a></li> <!-- Tốt cho SEO -->
                </ul>
            </div>

            <div class="footer-column footer-contact-social"> <!-- Có thể gộp contact và social -->
                <h4 class="footer-heading">Kết Nối Với Chúng Tôi</h4>
                <p class="footer-contact-info">
                    <!-- Thay bằng thông tin thật hoặc bỏ trống -->
                    Địa chỉ: [Số nhà, Đường, Phường/Xã], [Quận/Huyện], [Tỉnh/Thành phố]<br>
                    Hotline: <a href="tel:+84123456789">0123 456 789</a><br>
                    Email: <a href="mailto:support@yourdomain.com">support@yourdomain.com</a>
                </p>
                <div class="social-icons">
                    <!-- !!! Thay thế # bằng link thật !!! -->
                    <a href="#" target="_blank" aria-label="Facebook"><img src="/svg/facebook.svg" alt="Facebook"></a>
                    <a href="#" target="_blank" aria-label="Instagram"><img src="/svg/instagram.svg" alt="Instagram"></a> <!-- Thêm Instagram -->
                    <a href="#" target="_blank" aria-label="YouTube"><img src="/svg/youtube.svg" alt="YouTube"></a>
                    <!-- <a href="#" target="_blank" aria-label="Twitter"><img src="/svg/twitter.svg" alt="Twitter"></a> -->
                    <!-- <a href="#" target="_blank" aria-label="Tiktok"><img src="/svg/tiktok.svg" alt="Tiktok"></a> -->
                </div>
            </div>

        </div> <!-- /footer-top -->

        <div class="footer-bottom"> <!-- Phần bản quyền và các yếu tố khác -->
            <div class="copyright-info">
                <!-- Thay VietnamTravel.com bằng tên website/thương hiệu của bạn -->
                <p>© <?php echo date('Y'); ?> YourWebsiteName.com. Bảo lưu mọi quyền.</p>
                <!-- Chỉ hiển thị DMCA nếu bạn thực sự đăng ký và có link hợp lệ -->
                <!-- <a href="#" target="_blank" class="dmca-badge">
                    <img src="/images/dmca_protected.png" alt="DMCA Protected">
                </a> -->
            </div>

            <div class="footer-secondary-links">
                <!-- Các link phụ hoặc thông tin khác nếu cần -->
                <div class="payment-methods">
                    <!-- Chỉ hiển thị nếu bạn chấp nhận thanh toán trực tiếp -->
                    <img src="/images/visa.png" alt="Visa">
                    <img src="/images/mastercard.png" alt="Mastercard">
                </div>
            </div>

            <div class="footer-back-to-top">
                <!-- Đảm bảo có ID "top" ở đâu đó gần đầu thẻ body hoặc header -->
                <a href="#top" class="back-to-top" aria-label="Back to top">
                    <img src="/svg/arrow-up.svg" alt="Lên đầu trang">
                </a>
            </div>
        </div> <!-- /footer-bottom -->
    </div> <!-- /container -->
</footer>

<!-- !!! Link đến file JavaScript xử lý các tương tác chung của trang -->
<!-- Đổi tên từ header.js thành main.js hoặc app.js sẽ hợp lý hơn -->
<script src="/js/header.js"></script>
</body>

</html>