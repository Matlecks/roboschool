<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    <title></title>
</head>

<body>
    {{-- Баннер и шапка --}}
    <div class="" style="background:#141024; min-height: 850px;">
        {{-- Шапка --}}
        <div class="col-11 mx-auto d-flex flex-wrap justify-content-between align-items-center" style="height: 80px;">
            <div class="fw-bold" style="color: #ffffff; font-size: 30px">ROBO.SCHOOL</div>
            <div class="col-4 d-lg-block d-none">
                <div class="d-flex justify-content-between">
                    <a href="#about" class="text-decoration-none col-4"
                        style="color: #ffffff; font-size: 18px; font-family: Montserrat;">О
                        школе</a>
                    <a href="#teachers" class="text-decoration-none col-4"
                        style="color: #ffffff; font-size: 18px; font-family: Montserrat;">Тренеры</a>
                    <a href="#services" class="text-decoration-none col-4"
                        style="color: #ffffff; font-size: 18px; font-family: Montserrat;">Стоимость</a>
                </div>
            </div>
            <div class="fw-bold">
                <a href="tel:+7 800 000 11 22" class="text-decoration-none"
                    style="color: #ffffff; font-size: 30px; font-family: Montserrat;">+7 800 000 11
                    22</a>
            </div>
            <div class="col-12 d-lg-none d-md-block mt-4">
                <div class="d-flex justify-content-between text-center">
                    <a href="#about" class="text-decoration-none col-4"
                        style="color: #ffffff; font-size: 18px; font-family: Montserrat;">О
                        школе</a>
                    <a href="#teachers" class="text-decoration-none col-4"
                        style="color: #ffffff; font-size: 18px; font-family: Montserrat;">Тренеры</a>
                    <a href="#services" class="text-decoration-none col-4"
                        style="color: #ffffff; font-size: 18px; font-family: Montserrat;">Стоимость</a>
                </div>
            </div>
        </div>
        {{-- Баннер --}}
        <div class="col-lg-8 col-11 mx-auto d-flex flex-wrap justify-content-between align-items-center {{ $visual_settings->syte_width_option }}"
            style="padding-top: 50px;">
            <div class="col-lg-6 col-12">
                <div class="fw-bold text-lg-start text-center" style="color: #ffffff; font-size: 60px;">ROBO SCHOOL
                </div>
                <div class="my-5 text-lg-start text-center {{ $visual_settings->font_option_content }}"
                    style="color: #ffffff; font-size: 18px; font-family: Montserrat;">Курсы
                    повышения квалификации по робототехнике<br>для педагогов
                    начальной школы</div>
                <div class="d-lg-block d-md-block d-none">
                    <div class="d-flex justify-content-lg-start justify-content-center ">
                        <a href="#mail_send" class="btn py-4 px-5 {{ $visual_settings->syte_color }}"
                            style="background: #D52027; color: #ffffff; font-family: Montserrat">Записаться
                            на курс</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-12 mx-auto mt-lg-0 mt-5">
                <img src="storage/ssss.png" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="d-flex justify-content-lg-start justify-content-center col-12 d-lg-none d-md-none d-block pb-4">
                <a href="" class="btn col-12 py-4 px-5"
                    style="background: #D52027; color: #ffffff; font-family: Montserrat">Записаться
                    на курс</a>
            </div>
        </div>
    </div>
    {{-- О нас --}}
    <div class="{{ $visual_settings->theme }}">
        <div class="col-lg-8 col-11 mx-auto d-flex flex-wrap align-items-center {{ $visual_settings->syte_width_option }}"
            id="about" style="min-height: 600px;">
            <div class="col-12">
                <div class="col-12 mt-5" style="font-family: Montserrat; font-size: 25px;"><span class="fw-bold ">Robo
                        School</span> - учреждение для формирования кадрового<br>
                    педагогического
                    резерва в сфере робототехники<br> и программирования</div>
                <div
                    class="d-flex flex-wrap justify-content-between mt-5 pb-lg-0 pb-5 text-lg-start text-md-start text-center">
                    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                        <span class="{{ $visual_settings->syte_color_text }}"
                            style="font-family: Roboto; font-weight:900; font-size: 70px; color:#D52027;">10</span><br>
                        <span class="col-12 {{ $visual_settings->font_option_content }}"
                            style="color: #5B5866; font-size: 18px; font-family: Montserrat;">УМК по
                            различным<br> направлениям по<br> робототехнике</span>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                        <span class="{{ $visual_settings->syte_color_text }}"
                            style="font-family: Roboto; font-weight:900; font-size: 70px; color:#D52027;">20</span><br>
                        <span class="col-md-12 {{ $visual_settings->font_option_content }}"
                            style="color: #5B5866; font-size: 18px; font-family: Montserrat;">Школ, в
                            которых запущена<br>робототехника</span>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                        <span class="{{ $visual_settings->syte_color_text }}"
                            style="font-family: Roboto; font-weight:900; font-size: 70px; color:#D52027;">100</span><br>
                        <span class="col-md-12 {{ $visual_settings->font_option_content }}"
                            style="color: #5B5866; font-size: 18px; font-family: Montserrat;">Педагогов
                            прошедших курсы<br>повышения квалификации</span>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                        <span class="{{ $visual_settings->syte_color_text }}"
                            style="font-family: Roboto; font-weight:900; font-size: 70px; color:#D52027;">10
                            000</span><br>
                        <span class="col-md-12 {{ $visual_settings->font_option_content }}"
                            style="color: #5B5866; font-size: 18px; font-family: Montserrat;">Обученных
                            детей на базе<br>собственных центров</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Что вы получите после курса --}}
    <div class="{{ $visual_settings->theme }}-2" style="background: #F9F9F9;">
        <div class="col-lg-8 col-11 mx-auto d-flex flex-wrap align-items-center {{ $visual_settings->syte_width_option }}"
            style="min-height: 500px;">
            <div class="col-12 p-lg-0 p-md-0 py-5">
                <span class="{{ $visual_settings->font_option_titles }}"
                    style="font-size: 40px; font-family: Roboto; font-weight: 900;">Что
                    вы получите после курса</span>
                <div class="d-flex flex-wrap justify-content-between align-items-center mt-5">
                    <div class="col-lg-4 col-md-6 col-12 text-lg-start text-md-start text-center">
                        <p style="font-family: Montserrat; font-weight:900; font-size: 22px; ">
                            Удостоверение
                        </p>
                        <p class="mt-3 {{ $visual_settings->font_option_content }}"
                            style="color: #5B5866; font-size: 16px; font-family: Montserrat; line-height: 30px;">
                            Дающее
                            право преподавать робототехнику<br>для детей 6-12 лет в
                            образовательных<br>учреждениях</p>
                    </div>
                    <div
                        class="col-lg-4 col-md-6 col-12 text-lg-start text-md-start text-center ps-lg-0 ps-md-4 ps-0 py-lg-0 py-md-0 py-4">
                        <p style="font-family: Montserrat; font-weight:900; font-size: 22px; ">
                            Знания
                        </p>
                        <p class="mt-3 {{ $visual_settings->font_option_content }}"
                            style="color: #5B5866; font-size: 16px; font-family: Montserrat; line-height: 30px;">
                            По основам
                            разработки учебно-<br>методических комплексов<br>по робототехнике и
                            программированию</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 text-lg-start text-md-start text-center">
                        <p style="font-family: Montserrat; font-weight:900; font-size: 22px; ">
                            Практику
                        </p>
                        <p class="mt-3 {{ $visual_settings->font_option_content }}"
                            style="color: #5B5866; font-size: 16px; font-family: Montserrat; line-height: 30px;">
                            Возможность пройти практику<br>по преподаванию робототехники на
                            базе<br>R:ED LAB (в оффлайн или онлайн формате)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Профессиональные тренеры --}}
    <div class="{{ $visual_settings->theme }}" style="background: #ffffff;" id="teachers">
        <div class="col-lg-8 col-11 mx-auto d-flex align-items-center {{ $visual_settings->syte_width_option }}"
            style="min-height: 1000px;">
            <div class="col-12">
                <span class="{{ $visual_settings->font_option_titles }}"
                    style="font-size: 40px; font-family: Roboto; font-weight: 900;">Профессиональные
                    тренеры</span>
                <div class="d-flex justify-content-between flex-wrap mt-5">
                    @foreach ($teachers as $teacher)
                        <div class="col-lg-4 col-md-6 col-12 px-3 pb-lg-0 pb-4">
                            <div class="col-12" style="height: 550px;">
                                <img src="{{ $teacher->img }}"
                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 25px;">
                            </div>
                            <p class="fw-bold mt-3"
                                style="font-size: 25px; font-family: Montserrat; font-weight: 900;">
                                {{ $teacher->name }} {{ $teacher->surname }}</p>
                            <p class="mt-3 {{ $visual_settings->font_option_content }}"
                                style="color: #5B5866; font-size: 18px; font-family: Montserrat;">
                                {{ $teacher->job }}</p>
                            <p class="mt-3 {{ $visual_settings->syte_color_text }} {{ $visual_settings->font_option_content }} more"
                                style="color: #D52027; font-size: 18px; font-family: Montserrat;"
                                data-bs-toggle="modal" data-bs-target="#teacher_more_modal_{{ $teacher->id }}">
                                Подробнее</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Выберите нужный пакет --}}
    <div class="{{ $visual_settings->theme }}-2" style="background: #ffffff;" id="services">
        <div class="col-lg-8 col-11 mx-auto d-flex flex-wrap {{ $visual_settings->syte_width_option }}"
            style="min-height: 750px;">
            <div class="col-12">
                <span class="{{ $visual_settings->font_option_titles }}"
                    style="font-size: 40px; font-family: Roboto; font-weight: 900;">Выберите
                    нужный пакет</span>
                <div class="d-flex justify-content-between flex-wrap mt-5">
                    {{-- @dd($services) --}}
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 col-12 px-3">
                            <div class="border text-center px-lg-5 px-0 py-lg-5 py-2 mb-lg-0 mb-4 courses_card"
                                style="border-radius: 25px;">
                                <p class="fw-bold mt-3"
                                    style="font-size: 35px; font-family: Roboto; font-weight: 900;">
                                    - {{ $service->title }} -</p>
                                <p class=""
                                    style="margin-top: 70px; font-size: 50px; font-family: Roboto; font-weight: 900;">
                                    {{ $service->cost }}</p>
                                <p class="mt-3 {{ $visual_settings->syte_color_text }} {{ $visual_settings->font_option_content }}"
                                    style="color: #D52027; font-size: 18px; font-family: Montserrat;">
                                    {!! $service->anounce_text !!}</p>
                                <a href="#mail_send"
                                    class="btn py-4 px-5 mt-4 mb-lg-0 mb-4 {{ $visual_settings->syte_color }} take_order_btn"
                                    style="background: #D52027; font-size: 16px; font-family: Montserrat; color:#ffffff;">Оставить
                                    заявку</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Запишитесь на курс со скидкой 10% --}}
    <div class="{{ $visual_settings->syte_color }}" style="background: #D52027;" id="mail_send">
        <div class="col-lg-8 col-11 mx-auto d-flex align-items-center {{ $visual_settings->syte_width_option }}"
            style="min-height: 500px;">
            <div class="col-12 d-flex flex-wrap justify-content-evenly py-5">
                <div class="col-lg-6 col-12">
                    <p class="text-lg-start text-center"
                        style="color: #ffffff; font-size: 30px; font-family: Montserrat; font-weight: 900;">
                        Запишитесь
                        на курс<br> со скидкой 10%</p>
                    <br>
                    <p class="mt-1 text-lg-start text-center {{ $visual_settings->font_option_content }}"
                        style="color: #ffffff; font-size: 20px; font-family: Montserrat; ">Акция
                        действительна до 10 марта 2024 года</p>
                </div>
                <div class="col-lg-5 col-12">
                    <form action="{{ route('send_mail') }}" method="post">
                        @csrf
                        <input type="text" class="form-control py-3"
                            style="border: none; color:#5B5866; font-family: Montserrat" placeholder="Имя"
                            name="name">
                        <input type="text" class="form-control py-3"
                            style="border: none; color:#5B5866; font-family: Montserrat" name="status"
                            value="incoming" hidden="true">
                        <input type="text" class="form-control py-3 mt-2"
                            style="border: none; color:#5B5866; font-family: Montserrat" placeholder="Телефон"
                            name="phone">
                        <input type="text" class="form-control py-3 mt-2"
                            style="border: none; color:#5B5866; font-family: Montserrat" placeholder="E-mail"
                            name="email">
                        <button type="submit" class="btn col-12 py-4 px-5 mt-2"
                            style="background: #141024; font-size: 16px; font-family: Montserrat; color:#ffffff;">Оформить
                            заявку</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12" style="height: 150px; background: url('storage/precent.png'); background-repeat: ">
        </div>
    </div>
    {{-- footer --}}
    <div class="" style="background:#141024;">
        <div class="col-10 mx-auto d-flex flex-wrap justify-content-between align-items-center"
            style="min-height: 170px;">
            <div class="">
                <p class="fw-bold" style="color: #ffffff; font-size: 30px">ROBO.SCHOOL</p>
                <p class="" style="color:#ffffff; font-size: 18px">© ROBO.SCHOOL</p>
            </div>
            <a href="tel:+7 800 000 11 22" class="text-decoration-none"
                style="color: #ffffff; font-size: 30px; font-family: Montserrat;">+7 800 000 11
                22</a>
        </div>
    </div>
    {{-- Кнопка администрирования --}}
    @if (Auth::check())
        <button type="button" class="admin_btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample" id="admin_btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                class="bi bi-gear" viewBox="0 0 16 16">
                <path
                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                <path
                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
            </svg>
        </button>
    @endif
    {{-- Меню сбоку --}}
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="left_part">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title fw-bold" style="color: #000000; font-size: 30px"
                    id="offcanvasExampleLabel">
                    ROBO.SCHOOL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-journal-richtext" viewBox="0 0 16 16">
                                        <path
                                            d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                        <path
                                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                        <path
                                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                    </svg>
                                </div>
                                <span>Контент</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <button class="second_menu_btn" id="personal">
                                    <span class="ms-5">Преподаватели</span>
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>
                                <button class="second_menu_btn" id="courses">
                                    <span class="ms-5">Курсы</span>
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <div class="me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                                        <path
                                            d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                                    </svg>
                                </div>
                                <span>Маркетинг</span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <button class="second_menu_btn" id="seorobots">
                                    <span class="ms-5">SEO</span>
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>
                                <button class="second_menu_btn" id="sitemap">
                                    <span class="ms-5">Sitemap</span>
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                        <path
                                            d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                    </svg>
                                </div>
                                <span>Почта</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <button class="second_menu_btn" id="messages">
                                    <span class="ms-5">Входящие</span>
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>
                                <button class="second_menu_btn" id="sentmess">
                                    <span class="ms-5">Написать</span>
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                                    </svg>
                                </div>
                                <span>Настройки</span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <button class="second_menu_btn" id="visual-settings">
                                    <span class="ms-5">Внешний вид</span>
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_part">
            <div id="" class="" tabindex="-1" aria-labelledby="">

                @include('includes.block_personal')
                @include('includes.block_courses')
                @include('includes.mail_letters_table')
                @include('includes.block_seo_robots')
                @include('includes.block_seo_sitemap')
                @include('includes.block_sentmess')
                @include('includes.block_messages')
                @include('includes.block_visual-settings')
            </div>
        </div>
    </div>
    @include('modals.modals')
    @include('includes.scripts_js')
    {{-- Модалки преподавателей --}}
    @foreach ($teachers as $teacher)
        <div class="modal teacher-modal fade" id="teacher_more_modal_{{ $teacher->id }}"
            aria-labelledby="teacher_more_modal_{{ $teacher->id }}Label">
            {{ $teacher->name }} {{ $teacher->surname }}
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius: 20px;">
                    <div class="modal-header p-4" style="border: none;">
                        <div class="d-flex col-12">
                            <div class="col-2" style="width: 160px; height: 222px; border-radius: 20px;">
                                <img src="{{ $teacher->img }}" class="rounded-2 w-100 h-100"
                                    style="object-fit: cover; border-radius: 20px !important;">
                            </div>
                            <div class="px-3 col-10">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-roboto" style="font-size: 24px;">{{ $teacher->name }}
                                        {{ $teacher->surname }}</span>
                                    <span class="" style="font-size: 18px; color: #141024B2; opacity: 0.7"
                                        data-bs-dismiss="modal" aria-label="Close">Закрыть</span>
                                </div>
                                <p class="mt-2" style="font-size: 18px; color: #141024B2; opacity: 0.7">
                                    {{ $teacher->job }}</p>
                                <div class="d-flex">
                                    <img src="storage/Facebook.svg">
                                    <img src="storage/Instagram.svg" class="ms-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 px-2"
                            style="font-size: 20px; border-bottom-width: 1px;
                        border-bottom-style: solid; border-bottom-color: #F2F2F3FF">
                            <div class="col-9 d-flex justify-content-between pb-3">
                                <span class="switch_modal_teacher_btn active" id="education_btn">Образование</span>
                                <span class="switch_modal_teacher_btn" id="experience_btn">Опыт работы</span>
                                <span class="switch_modal_teacher_btn" id="awards_btn">Награды</span>
                            </div>
                        </div>
                        <div class="px-2 pt-3 scroll_container"
                            style="font-size: 20px; height: 200px; overflow: auto; scrollbar-width: thin;">
                            <div class="" id="education_content">{!! $teacher->education !!}</div>
                            <div class="" id="experience_content" style="display: none;">
                                {!! $teacher->experience !!}</div>
                            <div class="" id="awards_content" style="display: none;">{!! $teacher->awards !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endforeach
</body>

</html>
