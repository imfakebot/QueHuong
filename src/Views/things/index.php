<?php
$pageTitle = 'Things To Do in Vietnam';
$pageStyles = [
    '/css/destination.css' // Tái sử dụng destination.css cho hero styles tương tự
];
$pageScripts = [];

?>

<!-- Bạn có thể muốn tạo một ảnh hero riêng cho trang "Things to do" -->
<section class="hero" style="background-image: url('/images/mega_menu/adventure_and_outdoor.jpg');"> <!-- Ảnh placeholder -->
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
        <p>Khám phá vô số hoạt động thú vị và trải nghiệm khó quên trên khắp Việt Nam, từ những cuộc phiêu lưu mạo hiểm đến hòa mình vào văn hóa và những kỳ nghỉ thư giãn.</p>
        <a href="#activity-categories" class="btn-cta">Khám phá Hoạt động</a>
    </div>
</section>

<main class="container page-container" style="padding-top: 2rem; padding-bottom: 2rem;">
    <section id="activity-categories" class="content-section">
        <h2 style="text-align: center; margin-bottom: 2rem;">Danh mục Hoạt động</h2>
        <p style="text-align: center; margin-bottom: 2rem;">
            Việt Nam mang đến trải nghiệm cho mọi du khách. Hãy duyệt qua các danh mục được tuyển chọn của chúng tôi để tìm kiếm cuộc phiêu lưu tiếp theo của bạn.
        </p>
        <!-- Placeholder cho danh sách các danh mục hoạt động (ví dụ: card liên kết đến các mục Phiêu lưu, Văn hóa, Thư giãn) -->
        <p style="text-align: center;"><em>Nội dung cho các danh mục hoạt động sẽ được thêm vào đây. Bạn có thể liệt kê các danh mục chính như Phiêu lưu, Văn hóa, Thư giãn với các liên kết đến các phần hoặc trang riêng của chúng.</em></p>
        <p style="text-align: center; margin-top: 1rem;">Ví dụ: Bạn có thể tạo các card hiển thị các mục con như "Trekking ở Sapa", "Chèo thuyền Kayak ở Vịnh Hạ Long", v.v. và liên kết đến các trang chi tiết tương ứng.</p>
    </section>
</main>