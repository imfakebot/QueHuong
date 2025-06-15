<?php

$pageTitle = 'Visa Information for Vietnam';
$pageStyles = ['/css/beliefs.css'];
$pageScripts = ['/js/beliefs.js'];

// Các loại visa phổ biến
$visaTypes = [
    'Visa du lịch – Dành cho du khách đến tham quan, khám phá Việt Nam',
    'Visa công tác – Dành cho người đến làm việc, dự hội nghị hoặc hợp tác',
    'Visa điện tử (e-visa) – Thuận tiện, đăng ký trực tuyến nhanh chóng',
    'Visa nhiều lần – Phù hợp với người thường xuyên ra vào Việt Nam',
    'Miễn thị thực – Áp dụng cho công dân một số quốc gia theo thỏa thuận song phương'
];

// Quy trình xin visa
$visaProcess = [
    'Xác định loại visa phù hợp với mục đích nhập cảnh',
    'Chuẩn bị hồ sơ gồm hộ chiếu, ảnh, đơn đăng ký và giấy tờ liên quan',
    'Nộp hồ sơ tại Đại sứ quán/Lãnh sự quán Việt Nam hoặc qua cổng e-visa',
    'Chờ xử lý hồ sơ (thường từ 3–7 ngày làm việc)',
    'Nhận kết quả visa và kiểm tra kỹ thông tin trước khi nhập cảnh'
];

// Lưu ý & mẹo hữu ích
$visaTips = [
    'Nên kiểm tra thời hạn visa và số lần nhập cảnh được phép',
    'Luôn mang theo bản sao giấy tờ quan trọng khi di chuyển',
    'Một số sân bay quốc tế hỗ trợ cấp visa on arrival (cần thư mời hợp lệ)',
    'Gia hạn visa cần được thực hiện trước khi hết hạn để tránh bị phạt',
    'Truy cập trang web chính thức của Cục Quản lý Xuất nhập cảnh để cập nhật thông tin mới nhất'
];

?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>
  <?php foreach ($pageStyles as $style): ?>
      <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
  <?php endforeach; ?>
</head>
<body class="festivals-page-wrapper">

  <!-- HERO -->
  <header class="hero" style="background-image: url('https://vietnamvisaembassy.com/wp-content/uploads/2024/12/Plan-a-Trip-to-Vietnam.jpg');">
    <div class="hero__overlay"></div>
    <div class="hero__content animate-on-scroll">
        <h1 class="hero__title">Visa Information</h1>
        <p class="hero__subtitle">Những điều bạn cần biết để chuẩn bị chuyến đi đến Việt Nam.</p>
        <a href="#section-dishes" class="btn btn--light">Tìm Hiểu Ngay</a>
    </div>
  </header>

  <main>
    <!-- SECTION 1: LOẠI VISA -->
    <section id="section-dishes" class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://vietuytin.vn/wp-content/uploads/2024/06/cac-loai-visa-viet-nam-thumbnail.jpg" alt="Các loại visa">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Các Loại Visa</h2>
          <p>Việt Nam cung cấp nhiều loại visa linh hoạt cho từng mục đích nhập cảnh.</p>
          <ul class="activity-list">
            <?php foreach ($visaTypes as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Tìm Hiểu Thêm</a>
        </div>
      </div>
    </section>

    <!-- SECTION 2: QUY TRÌNH XIN VISA -->
    <section class="feature-section feature-section--reverse" style="background-color: var(--festivals-accent-bg);">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSEBIVExUVGRgWGBcSGBUXFRgYFxcWGBUWGhUZHSggGholHRgYIjEhJSk3Li4uFx8zODMsNygtLi4BCgoKDg0OGxAQGy0mICYvLS0vLy0tLS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYDBAcBAgj/xABEEAACAQIEAgYHBgQEBAcAAAABAgMAEQQSITEFQQYTIlFxgQcyQmFykaEUI4KSorFSY8HhFjM08BVDg9IkU1Rio7LR/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAEEAgMFBgf/xAAzEQEAAgECBQIEBQQBBQAAAAAAAQIDBBEFEiExURNBIjJhkQZxgaGxFBVC0VIjM0PB4f/aAAwDAQACEQMRAD8Ar9edfXSgUCgUCgUCgUCgUCgUCgUCgUCgUCgUCg0ZmuTW6kb9FHLbrNpV+eTMxPefpyr2umx+nirV8o4hn9fUXv8AV94PByTNkhRpGsTlQEmw3NhW2960je0qtaTadoYpEKkqylWGhDAgg9xB1FTW0TG8ImNnzWSHlAoPQaiY3hMTMTvDah4jIuzXHc2v96pZuHYMveu35OvpeO63T9K33jxPVvQccHtp5rr9DXLzcEn/AMdvu9FpvxdE9M9PskIMfG/qsL9x0PyNcvNoM+L5qvRabjWj1HyXjfxLaqm6m5UJKBQKBQKBQKBQKBQKBQKBQKBQKBQKBQKD5c2FTCLdI3RWNkyox8vnpXR0GL1M9Yed4vqPR0t7een3Qgr2D5knuj+JhhgxLyls0gXDqsTKsoRiXlcZgRbsKL2520qnqqXyXrFe0dfosYbVpWZlauH4WOaRJJooy0sQRIp3RpVw8cT5Z2VtXld1GoGigmqN7Xp8MT0ie8dt/C1WtbdZhUsFwuD7GMTKZ2JZkYwdWVhIt1fWK3aOcnQggct6v2zZPV5I2/X3VvTry80sON4A8SrmkhMhEZ6kMetHW2yaEWY6i4Um1Z01NbTPSdvLC2GYhpY/h8sDZJ43jbkHBF/eDsR7xW6mSt/lndrtSa92tWbAoFAqExOyy8HkJiXNruLnmBtXjuKY601ExV9U/D2fJm0VZyfk3q5zuFAoFAoFAoFAoFAoFAoFAoFAoFAoFAoFBixJ08ayr3as0/Cg+Lyeqvmf2H9a9HwbD3yfo8J+KNR8mL9UbXeeOe0Gzg8fJFIssbkOosCe1YFStrNfSxIrXfHW1eWYZ1vMTukMLxxFjMQw6J1ipFLJEWDtEpUtZGJQSED1rb61otppm0W5u3ZtjNG223dNYDiuFzYbPK0v2YvKHnRY2CIhMOFBDNnPWWIOw5VVvgzbW2jbfp/9bq5adPo8wXEIZoZj1DMuGEmKyTv1meaVlXXKF+6W5Yrz3Pvi2K+O1evfp08Fb1vE9Oz5wPCVxqYaR41haSSZW+zqEDwxRhzII9RmDdi4GuYb1lfPOCbVid46d/KIxxkiJmNmhL0ZzNCIn6s4hWKR4wGOW6vkyHKCLtupNgQDtW6us+GZtHbx2YW0/XaJRHEeHSQNklUKSLizI4IuRcMhI3Bq1jy1yRvVovSaztLUrOZ2jeUVrNp2hbcJDkRV7gB58/rXhdVlnJlm0vsXD9PGn01MfiGaq66UCgUCgUCgUCgUCgUCgUCgUCgUCgUCgUGtiW1ArZWFXPbrsruNkzO3u0+Vey0GL08ER+r5ZxjUevqrW9o6fZr1dcsoFAoFBnwWMkhcSROUYXF17juDyIPcdKwvSt42syraazvDf/xFiD1hd87SRGEMdDGhZWYIFsFvax0rROkx9Ijzv+bbGeyRh4/GcY2MYFWSC0Ya7Fp1hWJSSOV8zXPcOdap01ox+nHvP7M4zRN+afCsKLVeiIjsrTO87trhkOaVR3do+X97VS4jm9LBM/o63A9L/UaykT2jr9loArxUvrL2iSgUCgUCgUCgUCgUCgUCgUCgUHhNEMuJgaM5XFiVVvJgCP3+lRW0WjeGvDmrlrzV/JjqW0vUjDPiUT13VfEit2PTZck/DWVPNr9Ph/7l4j9WtOspR5VhlMajWRkKoBsO01r622vXR0/DrzaItMPOa78QYNrenvKt16qI2jZ8+tbmneSpQ+o0LEKoLMdAFBJJ7gBqTWM2isbymKzPZMHozMovO8GFvsMTKqMfwLmb5iq/9XWfliZ/JvjT2952bv8AgmYosiz4Uq/qkyOmbuy9ZGoN++tP9wpvtMT9mX9LO2+8IfinBsRhjbEQtHfQE2KE9wdSVJ916tYtRjyfLLTfFaneGhW5rKBQKCZ6Pw+s/wCEfuf6V53jeb5ccfm9z+ENL0vnn8oTVeee4KBQKBQKBQKBQKBQKBQKBQKBQKDa4Vg+umji/iYX+Eat9Aa15snJSbKuszelhtZPdM4+vxATCRSTyxjJIIUJVNmQNKbIDYnQm+orLhOhz5MXPfpWesbvKaHjWPSRat95/wBsOB6AcQl1fqcMP5jGWT8kfZ/VXbpocFZ+KZn8mGf8T57dMVIj8+qw4D0XwDXE4iec81UiGM+Sdv8AXVivp0+Skfy4+biWrzfPkn9OiyYDo9g8IC2Hw0UZA9YKC5t3yNdj86WyWt7qW2/WXOvSzxHLh44AdZXzH4I7H/7FPlV3Q03tNvDRnnps5VXVUmxw/BPPIsUQzO5sBsO8knkALknuFa8mSKV5pZ0pzTsnF42uCZUwGVypBkxDqC0xBBKJf1IeWmp3v31fQnPHNl6eI8LHqxjnarcl4fDEjcTRTNE5BhikDEJKxYN1x2aNGBtr2rgeOiMlrTGn7THefMM5pER6vdH8BxDT4wYjEsZBCr4hy3dCuZQBsBnyDKNNas56RjxclPfo1Ypm1959m70T45MyYmAkSZ0fEKkgzI0i3eVCp9l1zeBAI1vWjU6elZraOns2YsszvEovimBjeL7VhQRGSFkiJzNA52Gb2o29lj4HWrOHLMW9O/f2ny05KRMc1UNVpoKBQWfhUYESW5i/mda8XxLJN9Rbd9Y4Dhri0NOX36tyqDslAoFAoFAoFAoFAoFAoFAoFAoFBafR/hQZJJm2RcoJ/ibU/ID9Vc3iV9qRSPdwOOZtq1x+eq1dC5guIx2HBFutXErbmuIQZ/8A5I3+den0GT1dHjt46fZ4TLXbJKzDEXtodQpI5jMQB7jzvY6W53qyxZqDS4tLaO3ebeW5/aiHA/SRxETY1gpusSrGLG4v6zn5tb8NdrR05cf5qOa29lWq20rTwDhspwcsmHUNNOxgUZkVxCoDTsgYgtclUNtd652fLWc0Vt2j+VvFSeTeO8obDcGmaePDNG8byMFtIpUi/rNYjYC58qs2z0ik2iWqMVptETDf4h0hdcSXwrZYkUQRroUaFNAGU6MG1Y3/AIq14tNW1Pj7z1Z3zTF/h7JODE4X7HJJJC2GOJcQE4UhgRHlldljkIyLfKCAar2pl9aK1nfl69W6LU9PeY23edE8JhBi4zHipHNpAEMBW4MT5rtnIGlz5VOqvmnFO9f3YYa05uktbgfE8HG4gjhlMeItDLJO4zZHIFxGnZBU2a5JIsbVOXDmtXntMbx12hNL0i3LEd1dxuGaKR4n9aNmQ+Kkgn6Vfx356xaPdUvXltMMNZsUt0U4b9pxmHgtcPIub4F7cn6VatWa/LSZZ443ssGPwfUYjEYcaCKZwo7kf7yP9LgeVeT4lT/qRfzD6X+Gs3PpZpP+Mviua9GUCgUCgUCgUCgUCgUCgUCgUCgE0F84JgeqwsV93u58Wtb9NvlXE1WTnyzHh4jieb1dRafaOj74fN1PEsO/szpJhm+IDror/kcfir0PAsnNivj8dXB1VdrRZd+zm0XUNYX2F1uSByuLjTn512GhmikDKGHMX/tQV7pZKFBdsmWJGdi4JsACTptsOffWdK81ohjM7PzriJi7s7buxY+LG5/evQVrtEQ51p3ndjrJimuMj/wmAHLJO34jiGv+wqphiJy5N/p/CxedqVSPRjjmIjixMjTM6Qw9lJDnXrJXSOPRuQu2grTqtPjtatYjbefb6NmDJaKzM+yO/wCI4SQff4TqjzfBvkGn8mS6fIit3pZafJbf8/8AbDnpbvH2TPH+DoRDhoMTEGgTWPEHqpC8x61jc3TNZkFs2lqrafNeJm969/ePo2ZccTEVrPZqcH4VPhHmmniaMRYeZlY2KFmXqkAcXUm78jyrZnz0yxWlZ7zDHFitWZmY9lWJsNKvW+WVaO6c6a/67Ee9lJ8TGhP1JrRpP+zDbqPnQlWWh0n0JcMzYibEkaRII1+OQ3JHvCqR+OqGuvtWKrWnj3b3pMwnV45JRtiIbH44WsTf4HT8tcXWV58G/iXrPw1n5NRbHP8AlH8K3XFe7KBQKBQKBQKBQKBQKBQKBQKBQZ+H4XrZY4h7bAeXtH5XrDLfkpNlfVZfSw2v9HVsZEOrIA9UaeX9q8xW2995eDt16qn0lYpB1y+th3jxA/6Lh2HmoYedd/gub09VET2noqamu+N0OQhgJEAcFQwJudB2ksu1zffTl5ert0nZRhnjvYXIPgLD5XrFLmvpY4oUwzKp1mcR+/KvabystvxVd0VObJv4ac1tquOV2FB5QWPBYF8Zg0jhAaXCyNpdVHUzgNmLMQNJEa+vtVRvkjBmm1u0x+8LVazkx7R3huYLhcMeExSyYyLtNhwzQK84SzSFQSAAST3HTLWq+e9s1eWvnv0bK44rSYmWvwTgWFlnjVMargMHdHgljvGnak7Ruvqg7ms8+oyUxzzU/dhjw0m3SWh0lwk4meedLCZ2dXUq8bBiSoWRSVNhYW3sK3abJTkisS15q25t27h8fLgsHH1UjRy4l+t09mFAVTsnTtuWO2oQVqnHTPmneOlf5bIvOOn1ll4LjVxcyRYnCwPc5nmQGB1RRmkkcx9lrAHca6DnUajFOKu9LT+Xcx3i8/FCB4vjuvnlm/8AMdmAPIEnKPIWHlVvDTkxxDRktzWmWnW1rd79FnDeo4dGSLNMTM3g2ifoVa4msvzZPydDDG1WH0q4TNhEmA1glRj8D3ify7an8NaK156Wp5he0Wb0dTTJ4lzyvPzG3R9Sid43e1CSgUCgUCgUCgUCgUH3AyhgXXMvMAlSR7iNjUTvt0astb2rtSdpXPhPAsDiVzRGTTdS9mXxH9a5WfVajDO1oh5zUa/W4Lct5/Zv/wCC8L/M/Oar/wByy+IV/wC76rz+x/gvC/zPz/2qf7ll+if7vqvP7PP8FYX+Z+f+1P7ll+h/eNV5j7NrhnRiCCQSR5swBAzNca6HTvrVl12TJXlloz8Qz56cl56JkiqcKUq9iYAc0bag3U+8HQ/Sr+HJyWrePaWq9d4mG/0HxJfh8SuAz4fNh2uL9qFjEGtf+Gx8DX0C8xba8e8RP3cmOnROvMVBuNO1aw0GWwUee9YMnD/Spj8+JSEHSFLn4pLE/pCfOuvoabU38qWotvOyl1eV3lBv8F4kcPJmKiRGBSSM7SRtoyH9weRArTnxRkr9Y7NuK/LKw4Xgp6rEph2M0OIjDwuB2usgfrOokX2Zcmcdx0I3tVK2fa9Zv0mO/wCvus1x9JiO0orgp6vDYrEc2VcNGe8zHNJb3iND+arGb48lK/q1Y/hpNv0Z+iMki9YzsBg1/wBQsgzRvcdmNUO8raWI1G+2h16qtZ2rX5vbZOGZjrPZ70iwz4mSPEYYNJHPaONFHaiaNQDhyBoMoFwdiLnkTTTXjFWaZOkx+/1MteeeavZ8Y51wkT4aNg88oy4h1N1RAb/Z1Ybkkds7aW1rOm+a8Xt0iO3+0W2xxyx390BVxWZ+H4Np5Y4U9aV1jHO2ZgL+AvfyrC9uWsyypG9tn6cijVFVEFlUBVHcFFgPlXnrTvO7pRG0NPjmAGJw80B/5sboPFlIU+RsfKssduW0Si3ZxLAylo1Y7kC9977EfO9cfV4+TNar6fwzN62lpf6Niqy+UCgUCgUCgUCgUCgUGTC4h4mDxsVYbEft7x7jWN6VvG1oas2GmavLeN4X3o90rSa0c1o5NgfYfw7j7jXF1WgmnxU6w8truF3wTNqda/ws1c1yigUCgiuKJZr94+o/2KsYp3hhZqdDZMmKxmHO0gjxSg88w6mbTuuifmr3XDss5NJX6dHLyxy5JhO8VxJEY5doZt7gXJYEb6C2vPfQVcrG87MJl+c+L44zzyzH/mOWHuW/ZHkth5V6DHTlrEOded5alZsCgUG/wni02GfPh5Ch0uN1YDkynQ/05WrTmwUyxtaGzHltTsnB0lwsqhMXgtOsaU/ZnMatIyqrOU77KPa5nvqn/SZaTvjv9Oqx/UUtG1ofPEuM4KXKDFierT1IFaGKFb7kZASSebG5N96nHp89PeN/PuWy459mjP0kcRmHCouFib1hEWMj8u3MxzHytW6ukrNue87y12zzttWNkLaravLyguPotwLPjOtVM/UIzAcs7gol+WxY691Utdflx7R7rWlpFrdXcVY2FxY8xvY916463L3NQcY43hepxmKi5dYZF+GYCT5Biw8qq8SpvNb+Yez/AAxn5sNsU+0/y1q5b1JQKBQKBQKBQKBQKBQKDwigsvR/pY8NknvJHtfd1/7h7t/2qhqdDXJ8VekuHreERk3vi6T49l+wuKSVQ8bBlOxH+964eTHbHba0PN3x2pPLaNpZawYFBqcTjul+43/oa2Y52lFlc63qcdg5tgzPhn8JlzJf/qRr+avW8By9L4v1c/V12mLM/pOx7R4WbtHUCNcp26ywa+lxpm591ek01ebJCllnasuGV3XPKgKBQKBQKBQKBQdm9EHDurwbTHedyR8Ed0UfmDnzrka2+99vC9grtVeiaot4oJ2F/Cg516TsAY8TBPawmRoj8UZzp9Gf5Vhqq8+nn6S7f4dz+nrOWf8AKFXrivoJUBQKBQKBQKBQKBQKBQKAaC1ejyJzLIwYhFXUeyWJ7OnfYGubxO1fTiPd5/jk0itY26/+l9rhvOFB8utwQeelInbqSp3SaBjh5Mnrx2lT44WEi/Vbedd7hGeMeprM9p6fdV1Fd6SsHEcGmMiWQBZI50VwrqWU5lDJewNhsb8iN69lzWpbo53eFR4h6MonuYxJB3WIdfykk2v7xVqmuvHfq02wVlUuJej/ABcdzHkmA/hOR/yvp8iat01uO3fo1WwT7K1jMHJEcssbxnudSvyvvVmt627S0zWYYKzYlAoFAoFB9RxsxCoLsxCqO9ibKPMkVEztG6axvOz9OcH4MsEEUANxEippzygAnxJ1868/kvzWmXSrG0N9YFHIeeta2TLQU/0rYLrMA0gF2w7pOPhBySfodj5Vsxxzb08w26fLOHNTJHtLl1eftXadn1WluasTD6rFkUCgUCgUCgUCgUCgUCgUHR+g+C6vDBjvKS58Nl+gB864HEMvNl28PHcUzepqJ8R0WCqDmlAoIfiUVnPc2v8AQ1bwX22nw12hh6CuTgzBftYaWSA6kHIr5k1Go+6ZQDX0OL+pWuTzEORttMwn4ARfs2vfUkXOpsNO4af/ALUJZXUHcA+NQlqYjhsTgqy3B5GxHyNxWUWmOyJiJVXino4wktyq9W3fEcn6dV+lWaazJX6tVsNZVHifowxCawOsg5Bhlb5i4P0q1TX1n5oabaefZVOJcBxOH/z4JEA9q10/OLgVbrmx27S1Wx2j2RtbWsoFBbfRbwz7RxKEEXWK87X/AJdsn62Sq2rvy45bsNd7O0Nxu8vUqwLglSI1JIIdVa7OdLZrnQ6XOu1cNfeYfEYtx93EEU2OacsWuRGQMpCkAfeA6X0W3OgmMIHCKJSC9u0V9UnvFB5j8Is0UkLi6yIyHwcFT+9ZVnaYljMPz7hbqoWQ2dLo3xISjfUGqWp00+rbZ7/h3E8c6WnNPXZtVzHfKBQKBQKBQKBQKBQKBQZMLhzJIka7uwX5nf8Ar5Vje3LWbeGnUZYxY7Xn2h2CGMKoVdAoAHgBYV5W9ua0zLwczMzMy+iban61ERMztCFP6QdMALx4U3Oxk3UfD3+O3jXW0vD/APLJ9nc0PCLX+PN0jwheCdJ5YGs5aVCbkMbsL7lWP7beFW9RoqZY6dJdDWcKx5Y3x9J/Zc3xseIjEsTBgND3i/Ijkdq5Ho3xW5bPLajBfDblvG0o/o5J1WPnj5YiJJx8cR6qT9Jjr2fCcvqaSI96zt+jj567ZJ+q23q81vtImOw+elBkXCHmaDKuFUe/xoMhsovsB3f2oPhGSQXADDbUH6XGo99TuhA8W6C4DE3MmHVWO7x9hr95K7+dbqanJTtLCcdZ7qJx/wBELCxwMpe5N1myjKLadsb6+6rdNf8A8oabafwq3EPR1xKJrfZjKOTQsrr+4YeYFWq6vFb3arYbQ6Z6K+h8mBSSXEgLNNlGQEHIi3NiRpmJOoB9lffVDV54yTEV7LOHHyx1XtVA2AG+3vJJ+pJ86pNxQL0Cg4f066E4x8fiHww+6dg4t3uqs/6i1dLFnpFI3jq1c146R/LRrx77CUCgUCgUCgUCgUCgUCgsnQPBZ8QZCNIluPia4H0zVQ4jk5cW3lxONZuXFGOPf+IXniPEI4EzysFHLvJ7gOZri4cF8s7Vecw4b5rctI3lzzj3SSTE3UfdxfwjdviPPw28a72m0dMPXvL1Oi4XTB8Vutv4QgFXHUe1CWXC4t4jmibKfofcRzFY3x1vG1oVtTpseanLeN01gOkMb4jBysMjpMInXkUxAMZIPcHyG2+nOrvCMM4r3x+0xv8AZ4Ti+gvgiLx2dcYKgJOVQNybAAe8naum48RM9mpj+MRRFVZiWdJJEVAWLLEudyCNNiLXOtxWM2iG2mG1la4v07VOo6pY0WeITiTFM6IATbq7Rq15N7i9hbnWNsnhbx6GZ5t+8TttDB0s6TTLiMOMDJ1gMRn6uNDIJwXVUS6qSgID2bYEa1ja0xMbNmm0tJpb1I99t99tls4XxBMXAssRYLIpGujqdmB7mB08q21neN3Py45x3mssA4kkSiPNcoFUmRwG5KCRqxJaw0GpNS1sLdJYyG6hGmddAqaZiQCCG/h1U5rbNcXoNjh+KxLyXkhWKKxtdvvL5jkNu4ra4NiCbdrcSJMmoCg8oPRQKBQL0HAa4L64UCgUCgUCgUCgUCgUCgs/B+Mx4PDaDPNKS2Xko2XMfAXtvrXPz6a2oydflh5/U6TJrNRPtWOm/wDpX8fjZJ3zysWb6AdwHIVdx4q468tYdjT6bHgry0hrgVmsPaBQKCNx8ZIYLobXUjkdwfnV3R5OTLWzi8VwergvT6P0BwvFJjMJHIyhkxESsynUHOvaUjxJFdPLXaZh89x2msxMK/0e6Mz4fGDO4kwsEckeHzG8gErIxRh3KAQD3W8BorWYn6Ojm1WO+Lp80z1/Ru8P6I5MMmG+0zhIzJbqG6vMjtcI25NhpcEbnvrKKdNmq2r3vN4rG6b4dwKKHL1USoVRYgd2Eam4TMdbXN/edayisR2V75r3+afq3pYrC+9Ts1IHHQYZHMkkSXY6tIUVddSO0bHUE2A3ud6JZOG8TWV2jjeP7v1lQMdDtZiACOWgI5UQlKJeUHt6DFiQ2Q5CQ1ri2W9xrbtaa7a99BEKJZCfuiRYlWmLDtC2XsWHrBiNBYWbU6Agbh8kpKyYptL9iIrfdgpayjUAobWtddiCRUibNQPKDgdcF9cKBQKBQKBQKBQKBQKBQLUCgUCgUCg18UNjWyk7SrZ67w6f6IsdnwTQnfDyun4HtKnl2yPw13rzzVrfzD5lqsXpZ708S6DCgsDasGhU+lHSKRZDDAcgXRmHrE9w7gPnU7CI4b0imicM7vIvtKxvce6+xoOh5g6Bl2YBh4EXH0pIhOLYeMlXlTPlDKO0FWzWuGuwBBsBY356a1ilH/8AH4o2yKY17LNkTVmsC2jHKl2sANTcsNakTeFnzoHAIB5Hfci/gbXB5gioHsuIRbBmAJ2B3PlQYnxgFiQVW4GZ7IoubbsR/epHzDxGNmCo1y1yNDY2AJsee/LutvUCPIlbOFiJKtZevYlWysATl7IsVa4Oux3sLh8YvBNoHxAiXKFKx9nMxzAsApBF7qRvbX3ESJTh8QVLKWILM13AU3ZixsAqi1zppQbNBwOuA+uFAoFAoFAoFAoFAoFAoFAoFAoFAoPiZbg1lHdhkjeqx+ibHdXjZYTtPDcfHC2g/JI5/DXa0082DbxP8vn/AB7DyaiLx7x/Ds+Fbes4cVz/AKW4bq8U9jo9n8L6H6g/OpENRLo3RHFGTDLcep934hQLH5ftRBxXBRyxtHNGJF0JVjYHKb7/AO9LjnUJRoxsUYBTqow2ZrxDrCcqq7MWUBRZDe5Otxa96D7xWOxCt1cWHaQi95JCqr61tha+hDDUXFxoaDZxGHlkWM9Z1TZTnCi/aZNLN3K+vvqB4OEx3kJzt1hJN2I0LBgt1scoINhf227zUjYw2Djj/wAuNEvvlUAnxI3qB8TRozWZ2NzbKGYLcDNy9wvqeY7xQaQx4VjkhLEiyiNO0TuQz7KB2Ab7FrcjQZsOMSSM5RFBufadtdByVeY56EcxQSIqRwOuA+uFAoFAoFAoFAoFAoFAoFAoFAoFAoPDUofPCMZ9mxmHn5RzLm+CS8b/AKXJ8q6nDr/FNPMPKfiLBvh5/wDjL9CwGzfSrXZ45D9L+C9apmS+dF2HtKDc+YuT79qkUOiXRuh7g4WMAg5SwNuRzsbHyI+dEN3GxgkhhcMLEHYg6EVAi8A8WZo1CBo9SAwZwTdMxO4JykXJuedQlv1I8qAvQKCLi4SrO0ky5iToGN1HqknKNPWuBzsBegkTIBzoPgz9wpuMbYwDQlR4n+9RuOHVwn1woFAoFAoFAoFAoFAoFAoFAoFAoFAoNLiMOZSP4gR9Ks6XJyZK2+rm8RwxlxWr5h3TojxT7Rg8PP7TRrm+NezIPzKwrs5a7WnZ80iNukpXjPGI8Ol2N2I7KDc+/wBw99YjmNEtjB4iVD9y7qTyjLa+IG9BbeBTYpiftObLbslwoa99rAX276gSUeFRWZ1RQ7eswAzHbc78h8qgZqDwuBuaDGZxypuMMuLtuQvjb/fOm41Wx4Pqhn+EG3I6k7aH6G1yLVA8LSHYKnxdo89dNP4T89qDC5S/blLG/qrtvpcLzuCB4bX1oMRSL/0mbQasik7bEtc6beVByWuE+uFAoFAoFAoFAoFAoFAoFAoFAoFAoFBixC3FZVnaWrLXeroXoex18PPhydYZcyj/ANkwzD9Yk+deg5ubHW/0/h8y1+L0tVev13+6wY7o51srSNKQGtpa5Gm1ydBWCq2cP0egXdS573N/oLCm4ko0VBZQqjuAA/ao3HhmHjTca8mOAIBKgnYE67gbeJA8xUbiN/4+jECPPLe2sa6AHNc+WX9Q5XtI2OtkOyBR3u3hyA05jyG99IEZJEray4hnHJYyQLl1t2gbHR0W4sO0DvrQZcFMpt1cDkWFnk0vsb3blrcEX1zW50G7aVuaqO4Ak8t9e/MNP4t9NQj+JY7CQf6rEoPdK4udCPUGp0J0tWyuO09oRzRvsgcV6RsKmmHhlmOuoURJfndns2vflNLVpT57RH7rOLR6jL8lJRD+kjFE3GFgA7mkkYjxIUA/KsPX00e8/ZejgOrmN+iArgvou5Q3KG5RO5QKBQKBQKBQKI3KG5Q3KG5Q3KJ3KI3KJ3KDwiphHdNejTG9TxDIfVnidD8UZEiH5Z/nXa0c82CY8S8H+IsXLmrfz0dbM/cKzcBG4njaK5jBZnVSxVRawAY7mw9hvlQa+F4jJLYxxgDY5jsdeY39nS3M6i2sD3iEVwOulK30AjzC+trb2uSV32t7yaCOws2GJBijaQlst3Ygkg7gHTU5m1t6g7lFSJGePEMLRMkI02AYj6W8vfvpq2GY4YWvI7MF13Nha1iAbm4IBvcm99dbU2RKrY3p5w+BjHGHmkGhCK17jveYjn7zW/8Ap7RXmt0hFJm9uWsdULjvSLim0ggihHfKzSt+VcoHzNV758FPMz9nYw8D1OTraYiPur2O4zi5/wDOxUrA+yh6pPDLHa/nWi3EJ/wrEfu6uH8P4In/AKkzLSgwIGqqBfnpf571VyavLf5pdnT8NwY/kpENkYfvqtNpdGuCsMnUjuqN5Z+nXw//2Q==" alt="Quy trình xin visa">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Quy Trình Xin Visa</h2>
          <p>Việc xin visa có thể đơn giản nếu bạn chuẩn bị đúng và đầy đủ.</p>
          <ul class="activity-list">
            <?php foreach ($visaProcess as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary">Hướng Dẫn Chi Tiết</a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: MẸO VÀ LƯU Ý -->
    <section class="feature-section">
      <div class="container feature-section__container">
        <div class="feature-section__image-wrapper animate-on-scroll">
          <img src="https://media.istockphoto.com/id/1167284166/vi/vec-to/vector-bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-b%C3%B3ng-%C4%91%C3%A8n-%C3%BD-t%C6%B0%E1%BB%9Fng-b%C3%B3ng-%C4%91%C3%A8n-bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-minh-h%E1%BB%8Da.jpg?s=612x612&w=0&k=20&c=krMgYrzS0KVRRQgpwJv8BUWrvT239EEk4k6CtXXeDk8=" alt="Mẹo xin visa">
        </div>
        <div class="feature-section__content animate-on-scroll">
          <h2>Lưu Ý & Mẹo Hữu Ích</h2>
          <p>Những lưu ý giúp bạn dễ dàng xin visa và có chuyến đi thuận lợi.</p>
          <ul class="activity-list">
            <?php foreach ($visaTips as $item): ?>
              <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <a  class="btn btn--primary" target="_blank">Xem Thông Tin Chính Thức</a>
        </div>
      </div>
    </section>
  </main>

  <?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
  <?php endforeach; ?>
</body>
</html>
