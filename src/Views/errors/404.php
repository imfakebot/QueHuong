<?php
?>
<!DOCTYPE html>
<html lang="vi"> <?php // Hoặc "en" nếu bạn muốn tiếng Anh 
                    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Trang không tìm thấy</title>

    <!-- Link tới Bootstrap CSS (cần thiết cho các class như container, row, col-sm-*) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Link tới Google Font Arvo (được sử dụng trong CSS) -->
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

    <style>
        /*======================
            404 page
        =======================*/

        .page_404 {
            padding: 40px 0;
            background: #fff;
            font-family: 'Arvo', serif;
        }

        .page_404 img {
            width: 100%;
        }

        .four_zero_four_bg {
            background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
            height: 400px;
            background-position: center;
            background-repeat: no-repeat;
            /* Thêm để ảnh nền không lặp lại */
        }

        .four_zero_four_bg h1 {
            font-size: 80px;
            /* text-center đã có trong HTML, không cần ở đây nếu chỉ áp dụng cho h1 này */
        }

        /* CSS này có vẻ bị trùng với h1 hoặc cho một element khác, kiểm tra lại nếu cần
           .four_zero_four_bg h3{
        	    font-size:80px;
           }
        */

        .contant_box_404 {
            margin-top: -50px;
        }

        .contant_box_404 .h2 {
            /* Target class h2 cụ thể hơn */
            font-size: 30px;
            /* Điều chỉnh kích thước font cho phù hợp */
            font-weight: bold;
        }

        .contant_box_404 p {
            font-size: 18px;
            /* Điều chỉnh kích thước font cho phù hợp */
            margin-bottom: 20px;
        }

        .link_404 {
            color: #fff !important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;
            text-decoration: none;
            /* Bỏ gạch chân link */
            border-radius: 5px;
            /* Thêm bo góc cho đẹp */
        }

        .link_404:hover {
            background: #2d8627;
            /* Màu nền khi hover */
        }
    </style>
</head>

<body>

    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 col-sm-offset-1 text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center">404</h1>
                        </div>

                        <div class="contant_box_404">
                            <h3 class="h2">
                                Có vẻ như bạn đã bị lạc
                            </h3>

                            <p>Trang bạn đang tìm kiếm không tồn tại!</p>

                            <?php
                            // Xác định URL trang chủ một cách linh động
                            $home_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
                            // Hoặc đơn giản hơn nếu trang web của bạn luôn ở thư mục gốc:
                            // $home_url = "/";
                            ?>
                            <a href="<?php echo htmlspecialchars($home_url); ?>" class="link_404">Về Trang Chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>