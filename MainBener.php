<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 배너</title>
    <link href="/css/MainBener.css" rel="stylesheet">
</head>

<body style="margin: 0">
    <div class="MainBenner">
        <div class="container">
            <div class="inner">
                <img src="img/Bener/main1.jpg" alt="#" />
            </div>
            <div class="inner">
                <img src="img/Bener/main2.jpg" alt="#" />
            </div>
            <div class="inner">
                <img src="img/Bener/main3.jpg" alt="#" />
            </div>
            <div class="inner">
                <img src="img/Bener/main4.jpg" alt="#" />
            </div>
        </div>

        <div class="Benner_Button">
            <div class="carousel_circle"></div>
            <div class="carousel_circle"></div>
            <div class="carousel_circle"></div>
            <div class="carousel_circle"></div>
        </div>
    </div>

    <script>
        const swiper = document.querySelector('.container');
        const bullets = document.querySelectorAll('.carousel_circle');

        let currentSlide = 0;

        function showSlide(slideIndex) {
            const width = swiper.parentElement.offsetWidth; // 실제 컨테이너 너비
            swiper.style.transform = `translateX(-${slideIndex * width}px)`;
            currentSlide = slideIndex;

            bullets.forEach((bullet, index) => {
                if (index === currentSlide) {
                    bullet.classList.add('active');
                } else {
                    bullet.classList.remove('active');
                }
            });
        }

        bullets.forEach((bullet, index) => {
            bullet.addEventListener('click', () => {
                showSlide(index);
            });
        });

        showSlide(0);
    </script>
</body>

</html>