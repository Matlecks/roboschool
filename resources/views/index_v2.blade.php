<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">
    <title></title>
</head>

<body class="body">
    <style>
        .body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 1000px;
            font-family: Montserrat;
            background: #000000;
            opacity: 0.6;
        }

        .main_container {
            border: 1px solid #000000;
            border-radius: 5px;
            height: 500px;
            width: 1450px;
            display: flex;
            overflow: hidden;
            align-items: center;
            justify-content: center;
        }

        .slider {
            display: flex;
            overflow: hidden;
            width: 1450px;
        }

        .slide_group_container {
            border: 1px solid #000000;
            border-radius: 5px;
            height: 500px;
            width: 1450px;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .slide_group_container.active {
            border: 1px solid #000000;
            border-radius: 5px;
            height: 500px;
            width: 1450px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Slide_main */

        .slide_main {
            display: flex !important;
            width: 850px !important;
            flex-shrink: 0 !important;
            height: 100%;
            border-radius: 10px;
            padding: 35px;
            background: #ffffff;
            /* align-items: inherit; */
            box-sizing: border-box;
            opacity: 2;
        }

        .slide_main_img_container {
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;

            /* width: 162px;
            height: 102px; */
        }

        .slide_main_img {
            border-radius: 10px;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide_main_content {
            width: 50%;
            padding-left: 30px;
        }

        .slide_main_title {
            font-size: 23px;
            font-weight: 800;
        }

        .slide_main_text {
            margin-top: 30px;
            font-size: 16px;
            line-height: 26px;
        }

        .slide_main_button {
            background: #000000;
            border-radius: 5px;
            color: #ffffff;
            padding: 5px 24px 5px 24px;
            text-decoration: none;
        }

        /* Slide_around */
        .slide_around {
            width: 300px;
            border-radius: 10px;
            padding: 35px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
        }

        .slide_around_img_container {
            width: 162px;
            height: 102px;
            display: flex;
            align-items: center;
        }

        .slide_around_img {
            border-radius: 10px;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide_around_content {
            display: block;
            width: 50%;
            padding-top: 10px;
            text-align: center;
        }

        .slide_around_title {
            color: #ffffff;
            font-size: 15px;
            font-weight: 400;
        }

        .prev-button {
            background: none;
            border: none;
        }

        .next-button {
            background: none;
            border: none;
        }
    </style>

    <div class="main_container">
        <button type="button" class="prev-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffffff" class="bi bi-chevron-left"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                </path>
            </svg>
        </button>
        <div class="slider">
            @foreach ($services_slides as $services_slide)
                <div class="slide_group_container">
                    <div class="slide_around">
                        <div class="slide_around_img_container">
                            <img src="http://ppr-ek.rgtest.ru/upload/iblock/4c1/z6w28mac92f9sye04xvgs3kpe4zu2k7r.png"
                                class="slide_around_img">
                        </div>
                        <div class="slide_around_content">
                            <p class="slide_around_title">{{ $services_slide['previous_slide']->title }}</p>
                        </div>
                    </div>
                    <div class="slide_main">
                        <div class="slide_main_img_container">
                            <img src="http://ppr-ek.rgtest.ru/upload/iblock/753/76z3160b9o5e7olf4a588iowgwhfw5dr.png"
                                class="slide_main_img">
                        </div>
                        <div class="slide_main_content">
                            <span class="slide_main_title">{{ $services_slide['current_slide']->title }}</span>
                            <p class="slide_main_text">{!! $services_slide['current_slide']->anounce_text !!}
                            </p>
                            <a href="" class="slide_main_button">В корзину</a>
                        </div>
                    </div>
                    <div class="slide_around">
                        <div class="slide_around_img_container">
                            <img src="http://ppr-ek.rgtest.ru/upload/iblock/59c/qnf5pr3lww6eq82uc6ymitapab9b1hl7.png"
                                class="slide_around_img">
                        </div>
                        <div class="slide_around_content">
                            <p class="slide_around_title">{{ $services_slide['next_slide']->title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button type="button" class="next-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ffffff"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                </path>
            </svg>
        </button>
    </div>
    <script>
        var sliderItems = document.querySelectorAll('.slide_group_container');
        var prevButton = document.querySelector('.prev-button');
        var nextButton = document.querySelector('.next-button');
        var currentSlide = 0;

        function showSlide(index) {
            sliderItems.forEach(function(item) {
                item.classList.remove('active');
            });
            sliderItems[index].classList.add('active');
        }

        function prevSlide() {
            currentSlide--;
            if (currentSlide < 0) {
                currentSlide = sliderItems.length - 1;
            }
            showSlide(currentSlide);
        }

        function nextSlide() {
            currentSlide++;
            if (currentSlide >= sliderItems.length) {
                currentSlide = 0;
            }
            showSlide(currentSlide);
        }

        prevButton.addEventListener('click', prevSlide);
        nextButton.addEventListener('click', nextSlide);

        showSlide(currentSlide);
    </script>
</body>

</html>
