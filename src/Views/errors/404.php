<?php
?>
<!DOCTYPE html>
<html lang="vi"> <?php

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

        }

        .four_zero_four_bg h1 {
            font-size: 80px;

        }



        .contant_box_404 {
            margin-top: -50px;
        }

        .contant_box_404 .h2 {

            font-size: 30px;

            font-weight: bold;
        }

        .contant_box_404 p {
            font-size: 18px;

            margin-bottom: 20px;
        }

        .link_404 {
            color: #fff !important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;
            text-decoration: none;

            border-radius: 5px;

        }

        .link_404:hover {
            background: #2d8627;

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

                            $home_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

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