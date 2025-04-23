<?php // src/View/layout/footer.php 
?>

</main> <!-- Đóng thẻ main đã mở trong header.php -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-column">
                <h4 class="footer-heading">For Travellers</h4>
                <ul class="footer-links">
                    <li><a href="#">Vietnam Travel Guides</a></li>
                    <li><a href="#">Trip Planning</a></li>
                    <li><a href="#">Food & Drinks</a></li>
                    <li><a href="#">Festivals & Events</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4 class="footer-heading">Our Company</h4>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Company Profile</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4 class="footer-heading">Things to Know</h4>
                <ul class="footer-links">
                    <li><a href="#">Best Things To Do</a></li>
                    <li><a href="#">Best Places To Visit</a></li>
                    <li><a href="#">Ideal Places For Honeymoon Trip</a></li>
                    <li><a href="#">Best Places For School Trips</a></li>
                    <li><a href="#">Best Vietnam Private Tours</a></li>
                    <li><a href="#">Best Time To Visit Vietnam</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4 class="footer-heading">Top Destinations</h4>
                <ul class="footer-links">
                    <li><a href="#">Hanoi</a></li>
                    <li><a href="#">Halong Bay</a></li>
                    <li><a href="#">Da Nang</a></li>
                    <li><a href="#">Hoi An</a></li>
                    <li><a href="#">Can Tho</a></li>
                    <li><a href="#">Ho Chi Minh City</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="social-icons">
                <!-- Thay thế bằng link mạng xã hội thật của bạn -->
                <a href="#" target="_blank" aria-label="Facebook"><img src="/svg/facebook.svg" alt="Facebook"></a>
                <a href="#" target="_blank" aria-label="Google Plus"><img src="/svg/google-plus.svg" alt="Google Plus"></a> <!-- Lưu ý: Google+ đã ngừng hoạt động -->
                <a href="#" target="_blank" aria-label="YouTube"><img src="/svg/youtube.svg" alt="YouTube"></a>
                <!-- Cân nhắc thêm Instagram, Twitter, ... -->
            </div>

            <div class="copyright-info">
                <p>Address : 5th Floor, HTK Building, 98 Nguyen Van Cu, Long Bien, Hanoi, Vietnam.</p>
                <p>All Rights Reserved. ©<?php echo date('Y'); ?> VietnamTravel.com
                    <!-- Thay bằng link và ảnh DMCA thật nếu có -->
                    <a href="#" target="_blank" class="dmca-badge">
                        <img src="/images/dmca_protected.png" alt="DMCA Protected">
                    </a>
                </p>
            </div>

            <div class="footer-right">
                <div class="payment-methods">
                    <img src="/images/visa.png" alt="Visa">
                    <img src="/images/mastercard.png" alt="Mastercard">
                </div>
                <a href="#top" class="back-to-top" aria-label="Back to top">
                    <img src="/svg/arrow-up.svg" alt="Lên đầu trang">
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Link đến file JavaScript chính (nếu có) -->
<script src="/js/header.js"></script>
</body>

</html>