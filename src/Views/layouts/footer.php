<?php // File: src/View/layout/footer.php 
?>

</main> <!-- Đóng thẻ main đã mở trong header.php -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-columns-wrapper"> <!-- Wrapper cho các cột -->

            <div class="footer-column">
                <h4 class="footer-heading">Về Chúng Tôi</h4>
                <ul class="footer-links">
                    <li><a href="/about">Giới Thiệu</a></li>
                    <li><a href="/careers">Tuyển Dụng</a></li>
                    <li><a href="/terms">Điều Khoản Sử Dụng</a></li>
                    <li><a href="/privacy">Chính Sách Bảo Mật</a></li>
                    <li><a href="/contact">Liên Hệ</a></li>
                    <li><a href="/sitemap">Sơ Đồ Website</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4 class="footer-heading">Hỗ Trợ Khách Hàng</h4>
                <ul class="footer-links">
                    <li><a href="/faq">Câu Hỏi Thường Gặp</a></li>
                    <li><a href="/booking-guide">Hướng Dẫn Đặt Tour</a></li>
                    <li><a href="/payment-info">Thông Tin Thanh Toán</a></li>
                    <li><a href="/contact#form">Gửi Yêu Cầu Hỗ Trợ</a></li>
                    <li><a href="/blog">Blog Du Lịch</a></li> <!-- Chuyển Blog sang đây nếu muốn -->
                    <li><a href="/tips">Mẹo Du Lịch</a></li> <!-- Chuyển Tips sang đây nếu muốn -->
                </ul>
            </div>

            <div class="footer-column footer-contact-social"> <!-- Cột cuối gộp Contact & Social -->
                <h4 class="footer-heading">Kết Nối Với Chúng Tôi</h4>
                <p class="footer-contact-info">
                    <!-- !!! Thay thông tin thật !!! -->
                    Địa chỉ: [Số nhà, Đường, Phường/Xã], [Quận/Huyện], [Tỉnh/Thành phố]<br>
                    Hotline: <a href="tel:+84123456789">0123 456 789</a><br>
                    Email: <a href="mailto:support@yourdomain.com">support@yourdomain.com</a>
                </p>
                <div class="social-icons">
                    <!-- !!! Thay thế # bằng link thật và đảm bảo có SVG/Ảnh !!! -->
                    <a href="#" target="_blank" aria-label="Facebook"><img src="/svg/facebook.svg" alt="Facebook"></a>
                    <a href="#" target="_blank" aria-label="Instagram"><img src="/svg/instagram.svg" alt="Instagram"></a>
                    <a href="#" target="_blank" aria-label="YouTube"><img src="/svg/youtube.svg" alt="YouTube"></a>
                </div>
            </div>

        </div> <!-- /footer-columns-wrapper -->

        <div class="footer-bottom">
            <div class="copyright-info">
                <!-- !!! Thay YourWebsiteName.com bằng tên thật !!! -->
                <p>© <?php echo date('Y'); ?> YourWebsiteName.com. Bảo lưu mọi quyền.</p>
                <!-- <a href="#" target="_blank" class="dmca-badge">
                        <img src="/images/dmca_protected.png" alt="DMCA Protected">
                    </a> -->
            </div>

            <div class="footer-secondary-links">
                <div class="payment-methods">
                    <!-- Chỉ hiển thị nếu thực sự cần và có ảnh -->
                    <!-- <img src="/images/visa.png" alt="Visa"> -->
                    <!-- <img src="/images/mastercard.png" alt="Mastercard"> -->
                </div>
            </div>

            <div class="footer-back-to-top">
                <!-- Nút Back to top - href trỏ về id="top" trên thẻ body -->
                <a href="#top" class="back-to-top" aria-label="Back to top">
                    <!-- !!! Đảm bảo có file SVG !!! -->
                    <img src="/svg/arrow-up.svg" alt="Lên đầu trang">
                </a>
            </div>
        </div> <!-- /footer-bottom -->
    </div> <!-- /container -->
</footer>

<!-- !!! Link đến file JavaScript chính !!! -->
<script src="/js/footer.js"></script>
<script src="/js/header.js"></script>
<script src="/js/main.js"></script>
</body>

</html>