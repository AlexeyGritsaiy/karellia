<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карелия</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

@yield('meta')


<!-- links	 -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/slick.css">
    <link rel="stylesheet" href="/build/css/slick-theme.css">
    <link rel="stylesheet" href="/build/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/build/css/style.css">
    <link rel="stylesheet" href="/build/css/media.css">
    <!-- links	 -->
</head>
<body>
<header class="header header_v2">
    <div class="container">
        <div class="row justify-content-lg-start justify-content-between align-items-lg-start align-items-center">
            <a href="/" class="col-xl-1 col-5 header__logo">
                <img src="image/logo.jpg" alt="">
            </a>
            <div class="col-auto d-lg-none d-block">
                <div class="row">
                    <div class="col">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.9984 20.9999L16.6484 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="col burger">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.8281 13.8281H1.17188C0.524648 13.8281 0 14.3528 0 15C0 15.6472 0.524648 16.1719 1.17188 16.1719H28.8281C29.4754 16.1719 30 15.6472 30 15C30 14.3528 29.4754 13.8281 28.8281 13.8281Z" fill="white"/>
                            <path d="M28.8281 4.45312H1.17188C0.524648 4.45312 0 4.97777 0 5.625C0 6.27223 0.524648 6.79688 1.17188 6.79688H28.8281C29.4754 6.79688 30 6.27223 30 5.625C30 4.97777 29.4754 4.45312 28.8281 4.45312Z" fill="white"/>
                            <path d="M28.8281 23.2031H1.17188C0.524648 23.2031 0 23.7278 0 24.375C0 25.0222 0.524648 25.5469 1.17188 25.5469H28.8281C29.4754 25.5469 30 25.0222 30 24.375C30 23.7278 29.4754 23.2031 28.8281 23.2031Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-xl-11 col ml-auto d-none d-lg-block header__main">
                <div class="header__top row align-items-center justify-content-between">
                    <div class="block__input align-center col-auto">
                        <div class="row align-items-center">
                            <svg class="col-auto" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <input class="col-auto" placeholder="Искать на сайте" type="text">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row align-items-center">
                            <div class="block__phone col-auto">
                                <div class="row align-items-center">
                                    <svg class="col-auto" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M7.86777 11.1315C6.05426 9.31794 5.64477 7.50442 5.55239 6.77784C5.52658 6.57693 5.59572 6.37546 5.73945 6.23273L7.20703 4.7658C7.42292 4.55005 7.46123 4.21381 7.29941 3.95503L4.96274 0.326681C4.78372 0.040125 4.41614 -0.063296 4.11396 0.0878711L0.362774 1.85454C0.118414 1.97487 -0.0253157 2.2345 0.0024287 2.50546C0.19898 4.3727 1.01303 8.96284 5.52389 13.474C10.0348 17.9852 14.6242 18.7989 16.4925 18.9955C16.7634 19.0232 17.0231 18.8795 17.1434 18.6351L18.9101 14.884C19.0607 14.5824 18.9579 14.2158 18.6726 14.0365L15.0442 11.7005C14.7856 11.5385 14.4493 11.5765 14.2334 11.7922L12.7665 13.2598C12.6238 13.4035 12.4223 13.4726 12.2214 13.4468C11.4948 13.3545 9.68129 12.945 7.86777 11.1315Z" fill="white"/>
                                            <path d="M15.0689 10.1542C14.707 10.1542 14.4137 9.86088 14.4137 9.49904C14.4106 6.7865 12.2124 4.58832 9.4999 4.58525C9.13806 4.58525 8.84473 4.29192 8.84473 3.93007C8.84473 3.56823 9.13806 3.2749 9.4999 3.2749C12.9358 3.27869 15.7202 6.06312 15.724 9.49904C15.724 9.86088 15.4307 10.1542 15.0689 10.1542Z" fill="white"/>
                                            <path d="M18.3447 10.1542C17.9829 10.1542 17.6896 9.86086 17.6896 9.49902C17.6845 4.9781 14.0208 1.31442 9.4999 1.30937C9.13806 1.30937 8.84473 1.01604 8.84473 0.654196C8.84473 0.292354 9.13806 -0.000976562 9.4999 -0.000976562C14.7442 0.00480071 18.9941 4.25471 18.9999 9.49902C18.9999 9.67279 18.9309 9.83943 18.808 9.9623C18.6851 10.0852 18.5185 10.1542 18.3447 10.1542Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="19" height="19" fill="white" transform="translate(0 -0.000976562)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <a class="col-auto" href="tel: +78142764835">+7 (8142) 76-48-35</a>
                                </div>
                            </div>
                            <div class="block__languages col-auto">
                                <span>Русский</span>
                                <a href="#">English</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bottom">
                      <nav class="header__nav">
                    {{ menu('main' , 'layouts.menu') }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col offset-xl-1">
                <ul class="breadcrumbs__ul row">
                    <li class="breadcrumbs__li col-auto"><a href="#">Главная</a></li>
                    <li class="breadcrumbs__li col-auto breadcrumbs__li_active"><span>Маршруты</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="general-info">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg col-12 offset-xl-1">
                <h2 class="title-h2">Маршруты</h2>
            </div>
            <ul class="banner__socials">
                <li>
                    <a href="#">
                        <img src="image/facebook.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/tweeter.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/instagram.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/vk.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="filers__all filers-roads">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 offset-xl-1">
                <div class="filter__block">
                    <h5 class="title-h5 filter__block-title">ФИльтр маршрутов</h5>
                    <a href="#" class="filter__block-clear">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.99999 13C3.69141 13 0.999981 10.3086 0.999982 6.99999C0.999982 3.69138 3.69141 0.999981 6.99999 0.999981C9.96722 0.999982 12.4313 3.16685 12.9097 5.99998L11 5.99998L13.5 8.49998L16 5.99998L13.9202 5.99998C13.4324 2.61339 10.5195 -2.39561e-07 6.99999 -3.93403e-07C3.14014 -5.62122e-07 -1.3726e-07 3.14014 -3.05979e-07 6.99999C-4.74699e-07 10.8598 3.14014 14 6.99999 14L6.99999 13Z" fill="#D7182A"/>
                        </svg>
                        Сбросить фильтры
                    </a>
                    <div class="row">
                        <div class="filter__block-setting col-lg-12 col-6">
                            <h5 class="title-h5">Продолжительность:</h5>
                            <div class="setting__buttons">
                                <div class="buttons__item">
                                    <input id="ch1" type="checkbox">
                                    <label for="ch1">1 день</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch2" type="checkbox">
                                    <label for="ch2">2 день</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch3" type="checkbox">
                                    <label for="ch3">7 день</label>
                                </div>
                                <div class="buttons__item buttons__item_more">
                                    <!-- <input id="ch1" type="checkbox"> -->
                                    <label for="">Еще</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter__block-setting col-lg-12 col-6">
                            <h5 class="title-h5">Тип маршрута:</h5>
                            <div class="setting__buttons">
                                <div class="buttons__item">
                                    <input id="ch4" type="checkbox">
                                    <label for="ch4">На машине</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch5" type="checkbox">
                                    <label for="ch5">Пешком</label>
                                </div>
                                <div class="buttons__item buttons__item_more">
                                    <!-- <input id="ch1" type="checkbox"> -->
                                    <label for="">Еще</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter__block-setting col-lg-12 col-6">
                            <h5 class="title-h5">Вид маршрута:</h5>
                            <div class="setting__buttons">
                                <div class="buttons__item">
                                    <input id="ch6" type="checkbox">
                                    <label for="ch6">Активный</label>
                                </div>
                                <div class="buttons__item buttons__item_more">
                                    <!-- <input id="ch1" type="checkbox"> -->
                                    <label for="">Еще</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter__block-setting col-lg-12 col-6">
                            <h5 class="title-h5">Сезон:</h5>
                            <div class="setting__buttons">
                                <div class="buttons__item">
                                    <input id="ch7" type="checkbox">
                                    <label for="ch7">Весна</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch8" type="checkbox">
                                    <label for="ch8">Лето</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch9" type="checkbox">
                                    <label for="ch9">Осень</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch10" type="checkbox">
                                    <label for="ch10">Зима</label>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="button-a">Поиск</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h4 class="title-h4 title-filter">Найдено: 3 маршрута</h4>
                <div class="block__finder">
                    <div class="block__item">
                        <div class="photo">
                            <img src="image/photo24.jpg" alt="">
                        </div>
                        <div class="bottom__text">
                            <h3 class="title-h3">Рускеала - Валаам - Петрозаводск </h3>
                            <p class="text-p">
                                Producing creative, fresh projects is the key to standing out. Unique side projects are the best place to innovate, but balancing commercially and creatively lu...
                            </p>
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="first-ul">
                                        <li>Продолжительность:</li>
                                        <li>Тип:</li>
                                        <li>Вид:</li>
                                        <li>Сезон:</li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <ul>
                                        <li>2 дня</li>
                                        <li>На машине</li>
                                        <li>Активный</li>
                                        <li>Лето</li>
                                    </ul>
                                </div>
                                <div class="col-lg-auto align-self-end ml-auto">
                                    <a href="#" data-popup='road' class="button-a d-block button-a_v2">Посмотреть</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block__item">
                        <div class="photo">
                            <img src="image/photo24.jpg" alt="">
                        </div>
                        <div class="bottom__text">
                            <h3 class="title-h3">Рускеала - Валаам - Петрозаводск</h3>
                            <p class="text-p">
                                Producing creative, fresh projects is the key to standing out. Unique side projects are the best place to innovate, but balancing commercially and creatively lu...
                            </p>
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="first-ul">
                                        <li>Продолжительность:</li>
                                        <li>Тип:</li>
                                        <li>Вид:</li>
                                        <li>Сезон:</li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <ul>
                                        <li>2 дня</li>
                                        <li>На машине</li>
                                        <li>Активный</li>
                                        <li>Лето</li>
                                    </ul>
                                </div>
                                <div class="col-lg-auto align-self-end ml-auto">
                                    <a href="#" class="button-a d-block button-a_v2">Посмотреть</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="pagination col-auto">
                        <ul>
                            <li class="pagination__arr pagination__arr-prev"><a href="#"></a></li>
                            <li class="pagination__page pagination__page_active"><a href="#">1</a></li>
                            <li class="pagination__page"><a href="#">2</a></li>
                            <li class="pagination__page"><a href="#">3</a></li>
                            <li class="pagination__arr pagination__arr-next"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-3 d-md-block d-none">
                <div class="footer__logo">
                    <img src="image/logo-footer.png" alt="">
                </div>
                <div class="footer__languages">
                    <span class="active">Русский</span>
                    <a href="#">English</a>
                </div>
                <div class="footer__copyright">
                    Карелия 2020. <br>© Все права защищены.
                </div>
            </div>
            <div class="col-9 d-md-block d-none">
                <div class="footer__top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="row">
                                <svg class="col-auto" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <input class="col-auto" placeholder="Искать на сайте" type="text">
                            </div>
                        </div>
                        <div class="col-auto">
                            <ul class="banner__socials">
                                <li>
                                    <a href="#">
                                        <img src="image/facebook.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="image/tweeter.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="image/instagram.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="image/vk.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="row justify-content-between">
                        <nav class="footer__nav col">
                            <ul class="nav__ul row">
                                <li class="nav__li col-4">
                                    <a href="#" class="nav__link">Главная</a>
                                </li>
                                <li class="nav__li col-4">
                                    <a href="#" class="nav__link">О Карелии</a>
                                </li>
                                <li class="nav__li col-4">
                                    <a href="#" class="nav__link">События</a>
                                </li>
                                <li class="nav__li col-4">
                                    <a href="#" class="nav__link">Новости</a>
                                </li>
                                <li class="nav__li col-6">
                                    <a href="#" class="nav__link">Туристам</a>
                                </li>
                                <li class="nav__li col-4">
                                    <a href="#" class="nav__link">Впечатления</a>
                                </li>
                                <li class="nav__li col-6">
                                    <a href="#" class="nav__link">Маршруты</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="footer__info col-4">
                            <a href="tel: +78142764835">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.86777 11.1315C6.05426 9.31794 5.64477 7.50442 5.55239 6.77784C5.52658 6.57693 5.59572 6.37546 5.73945 6.23273L7.20703 4.7658C7.42292 4.55005 7.46123 4.21381 7.29941 3.95503L4.96274 0.326681C4.78372 0.040125 4.41614 -0.063296 4.11396 0.0878711L0.362774 1.85454C0.118414 1.97487 -0.0253157 2.2345 0.0024287 2.50546C0.19898 4.3727 1.01303 8.96284 5.52389 13.474C10.0348 17.9852 14.6242 18.7989 16.4925 18.9955C16.7634 19.0232 17.0231 18.8795 17.1434 18.6351L18.9101 14.884C19.0607 14.5824 18.9579 14.2158 18.6726 14.0365L15.0442 11.7005C14.7856 11.5385 14.4493 11.5765 14.2334 11.7922L12.7665 13.2598C12.6238 13.4035 12.4223 13.4726 12.2214 13.4468C11.4948 13.3545 9.68129 12.945 7.86777 11.1315Z" fill="white"/>
                                    <path d="M15.0689 10.1543C14.707 10.1543 14.4137 9.861 14.4137 9.49916C14.4106 6.78662 12.2124 4.58844 9.4999 4.58537C9.13806 4.58537 8.84473 4.29204 8.84473 3.9302C8.84473 3.56836 9.13806 3.27502 9.4999 3.27502C12.9358 3.27882 15.7202 6.06324 15.724 9.49916C15.724 9.861 15.4307 10.1543 15.0689 10.1543Z" fill="white"/>
                                    <path d="M18.3447 10.1543C17.9829 10.1543 17.6896 9.86099 17.6896 9.49915C17.6845 4.97822 14.0208 1.31455 9.4999 1.30949C9.13806 1.30949 8.84473 1.01616 8.84473 0.654318C8.84473 0.292476 9.13806 -0.000854492 9.4999 -0.000854492C14.7442 0.00492278 18.9941 4.25484 18.9999 9.49915C18.9999 9.67291 18.9309 9.83955 18.808 9.96242C18.6851 10.0853 18.5185 10.1543 18.3447 10.1543Z" fill="white"/>
                                </svg>
                                +7 (8142) 76-48-35
                            </a>
                            <a href="#">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M9.50025 0.000244141C5.59341 0.000244141 2.41504 3.1799 2.41504 7.08827C2.41504 12.9115 8.79501 18.5974 9.0667 18.8366C9.19056 18.9457 9.34537 19.0003 9.50025 19.0003C9.65513 19.0003 9.80994 18.9458 9.93386 18.8366C10.2054 18.5974 16.5855 12.9116 16.5855 7.08827C16.5855 3.1799 13.4071 0.000244141 9.50025 0.000244141ZM9.50025 5.09845C10.5855 5.09845 11.4684 5.99107 11.4684 7.08827C11.4684 8.18548 10.5855 9.07809 9.50025 9.07809C8.41501 9.07809 7.53212 8.18548 7.53212 7.08827C7.53212 5.99107 8.41501 5.09845 9.50025 5.09845Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="19" height="19" fill="white" transform="translate(0 0.000244141)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                пр. К.Маркса, 14
                            </a>
                        </div>
                        <div class="footer__eye col-auto">
                            <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9997 5.72742C13.8052 5.72742 15.2725 7.19467 15.2725 9.00014C15.2725 10.8056 13.8052 12.2729 11.9997 12.2729C10.1943 12.2729 8.72701 10.8056 8.72701 9.00014C8.72701 7.19467 10.1943 5.72742 11.9997 5.72742Z" fill="white"/>
                                <path d="M12 0.818237C17.4545 0.818237 22.1127 4.21093 24 9.00006C22.1127 13.7891 17.4545 17.1819 12 17.1819C6.53999 17.1819 1.88724 13.7891 -5.14984e-05 9.00006C1.88724 4.21093 6.53999 0.818237 12 0.818237ZM12 14.4546C15.0109 14.4546 17.4545 12.0109 17.4545 9.00001C17.4545 5.9891 15.0109 3.54549 12 3.54549C8.98906 3.54549 6.54541 5.98915 6.54541 9.00006C6.54541 12.011 8.98906 14.4546 12 14.4546Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-md-none d-block">
                <div class="footer__logo">
                    <img src="image/logo-footer.png" alt="">
                </div>
                <div class="row footer__input">
                    <svg class="col-auto" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <input class="col-auto" placeholder="Искать на сайте" type="text">
                    <div class="eye col-auto ml-auto">
                        <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0007 4.90912C13.8062 4.90912 15.2734 6.37637 15.2734 8.18184C15.2734 9.98731 13.8062 11.4546 12.0007 11.4546C10.1952 11.4546 8.72799 9.98731 8.72799 8.18184C8.72799 6.37637 10.1953 4.90912 12.0007 4.90912Z" fill="white"/>
                            <path d="M12 0C17.4545 0 22.1127 3.3927 24 8.18182C22.1127 12.9709 17.4545 16.3636 12 16.3636C6.53999 16.3636 1.88724 12.9709 -5.14984e-05 8.18182C1.88724 3.3927 6.53999 0 12 0ZM12 13.6363C15.0109 13.6363 17.4545 11.1927 17.4545 8.18177C17.4545 5.17086 15.0109 2.72726 12 2.72726C8.98906 2.72726 6.54541 5.17091 6.54541 8.18182C6.54541 11.1927 8.98906 13.6363 12 13.6363Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <nav class="footer__nav">
                    {{ menu('footer_menu' , 'layouts.footer_menu') }}
                </nav>
                <div class="footer__info row justify-content-between">
                    <a class="col-auto" href="#">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.86875 11.1314C6.05523 9.31791 5.64575 7.50439 5.55337 6.77781C5.52756 6.5769 5.59669 6.37543 5.74042 6.2327L7.20801 4.76577C7.42389 4.55002 7.4622 4.21378 7.30039 3.955L4.96372 0.326651C4.7847 0.0400945 4.41712 -0.0633266 4.11494 0.0878406L0.36375 1.85451C0.11939 1.97484 -0.0243391 2.23447 0.00340526 2.50543C0.199957 4.37267 1.01401 8.96281 5.52487 13.474C10.0357 17.9852 14.6252 18.7989 16.4934 18.9955C16.7644 19.0232 17.024 18.8795 17.1444 18.6351L18.911 14.8839C19.0616 14.5824 18.9589 14.2158 18.6735 14.0365L15.0452 11.7004C14.7865 11.5385 14.4503 11.5765 14.2344 11.7922L12.7675 13.2598C12.6248 13.4035 12.4233 13.4726 12.2224 13.4468C11.4958 13.3544 9.68227 12.9449 7.86875 11.1314Z" fill="white"/>
                            <path d="M15.0718 10.1543C14.71 10.1543 14.4166 9.86094 14.4166 9.4991C14.4136 6.78656 12.2154 4.58838 9.50283 4.58531C9.14099 4.58531 8.84766 4.29198 8.84766 3.93014C8.84766 3.56829 9.14099 3.27496 9.50283 3.27496C12.9388 3.27875 15.7232 6.06318 15.727 9.4991C15.727 9.86094 15.4336 10.1543 15.0718 10.1543Z" fill="white"/>
                            <path d="M18.3477 10.1543C17.9858 10.1543 17.6925 9.86093 17.6925 9.49908C17.6874 4.97816 14.0238 1.31448 9.50283 1.30943C9.14099 1.30943 8.84766 1.0161 8.84766 0.654257C8.84766 0.292415 9.14099 -0.000915527 9.50283 -0.000915527C14.7471 0.00486174 18.9971 4.25477 19.0028 9.49908C19.0028 9.67285 18.9338 9.83949 18.8109 9.96236C18.6881 10.0852 18.5214 10.1543 18.3477 10.1543Z" fill="white"/>
                        </svg>
                        +7 (8142) 76-48-35
                    </a>
                    <a class="col-auto" href="#">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M9.49927 0.000213623C5.59244 0.000213623 2.41406 3.17987 2.41406 7.08824C2.41406 12.9115 8.79403 18.5973 9.06573 18.8366C9.18958 18.9457 9.34439 19.0003 9.49927 19.0003C9.65415 19.0003 9.80897 18.9457 9.93288 18.8366C10.2044 18.5974 16.5845 12.9115 16.5845 7.08824C16.5845 3.17987 13.4061 0.000213623 9.49927 0.000213623ZM9.49927 5.09842C10.5845 5.09842 11.4674 5.99104 11.4674 7.08824C11.4674 8.18545 10.5845 9.07806 9.49927 9.07806C8.41403 9.07806 7.53114 8.18545 7.53114 7.08824C7.53114 5.99104 8.41403 5.09842 9.49927 5.09842Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="19" height="19" fill="white" transform="translate(0 0.000213623)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        пр. К.Маркса, 14
                    </a>
                </div>
                <ul class="banner__socials">
                    <li>
                        <a href="#">
                            <img src="image/facebook.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="image/tweeter.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="image/instagram.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="image/vk.svg" alt="">
                        </a>
                    </li>
                </ul>
                <div class="footer__languages">
                    <span class="active">Русский</span>
                    <a href="#">English</a>
                </div>
                <div class="footer__copyright">
                    Карелия 2020. © Все права защищены.
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bgd__popup row align-items-center justify-content-center">
    <div class="popup popup-road">
        <svg class="close-popup" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24.9998 45.8332C36.5058 45.8332 45.8332 36.5058 45.8332 24.9998C45.8332 13.4939 36.5058 4.1665 24.9998 4.1665C13.4939 4.1665 4.1665 13.4939 4.1665 24.9998C4.1665 36.5058 13.4939 45.8332 24.9998 45.8332Z" fill="white"/>
            <path d="M31.25 18.75L18.75 31.25" stroke="#252222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M18.75 18.75L31.25 31.25" stroke="#252222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <div class="container">
            <div class="popup__inner">
                <div class="slider__popup">
                    <div class="slider__item">
                        <div class="photo">
                            <img src="image/photo30.jpg" alt="">
                        </div>
                        <div class="text w-100">
                            <div class="row">
                                <div class="col-lg-2 div-first">Продолжительность</div>
                                <div class="col">2 дня</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 div-first">Тип:</div>
                                <div class="col">На машине</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 div-first">Вид:</div>
                                <div class="col">Активный</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 div-first">Сезон:</div>
                                <div class="col">Лето</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="photo">
                            <img src="image/photo30.jpg" alt="">
                        </div>
                        <div class="text w-100">
                            <div class="row">
                                <div class="col-lg-2 div-first">Продолжительность</div>
                                <div class="col">2 дня</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 div-first">Тип:</div>
                                <div class="col">На машине</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 div-first">Вид:</div>
                                <div class="col">Активный</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 div-first">Сезон:</div>
                                <div class="col">Лето</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row title__popup justify-content-between align-items-center">
                    <div class="col-lg-auto col-12">
                        <h2 class="title-h2">Рускеала - Валаам - Петрозаводск </h2>
                    </div>
                    <ul class="banner__socials">
                        <li>
                            <a href="#">
                                <img src="image/facebook.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="image/tweeter.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="image/instagram.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="image/vk.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <h4 class="title-h4 title-top">Программа маршрута:</h4>
                <div class="row justify-content-between block__rphoto">
                    <div class="col">
                        <h4 class="title-h4">1 день </h4>
                        <p class="text-p">1. Встреча гостей на ж/д вокзале г. Петрозаводска у 10-го вагона. Гид с табличкой КАРЕЛИЯ:</p>
                        <p class="text-p">2. В 06:50 - поезд № 012 «Санкт-Петербург- Петрозаводск». Для этого поезда: автобусная ознакомительная экскурсия по столице Карелии.</p>
                        <p class="text-p">3. В 08:55 - поезд № 018 «Москва - Петрозаводск».</p>
                        <div class="row double-ul">
                            <ul class="col-auto mr-4">
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                            </ul>
                            <ul class="col-auto">
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="photo">
                            <img src="image/photo31.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="photo photo-center">
                    <img src="image/photo32.jpg" alt="">
                </div>
                <div class="row justify-content-between block__rphoto">
                    <div class="col-auto">
                        <div class="photo">
                            <img src="image/photo33.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-p">4. Пункт списка кондопожскую, Лижемскую и Уницкую. Это прекрасные места для занятий яхтингом, шлюпочных походов, летней и зимней рыбалки.</p>
                        <p class="text-p">5. Занимает центральную часть южной Карелии, примыкая к северно-западной оконечности Онежского озера. Береговая черта его в этой части сильно изрезана, а само озеро образует здесь три больших живописных губы-залива: Кондопожскую, Лижемскую и Уницкую. Это прекрасные места для занятий яхтингом, шлюпочных походов, летней и зимней рыбалки.</p>
                        <p class="text-p">6. Пункт списка кондопожскую, Лижемскую и Уницкую. Это прекрасные места для занятий яхтингом, шлюпочных походов, летней и зимней рыбалки.</p>
                        <p class="text-p">7. Береговая черта его в этой части сильно изрезана, а само озеро образует здесь три больших живописных губы-залива: Кондопожскую, Лижемскую и Уницкую. </p>
                    </div>
                </div>
                <div class="row justify-content-between block__rphoto">
                    <div class="col">
                        <h4 class="title-h4">2 день </h4>
                        <p class="text-p">1. Встреча гостей на ж/д вокзале г. Петрозаводска у 10-го вагона. Гид с табличкой КАРЕЛИЯ:</p>
                        <p class="text-p">2. В 06:50 - поезд № 012 «Санкт-Петербург- Петрозаводск». Для этого поезда: автобусная ознакомительная экскурсия по столице Карелии.</p>
                        <p class="text-p">3. В 08:55 - поезд № 018 «Москва - Петрозаводск».</p>
                        <div class="row double-ul">
                            <ul class="col-auto mr-4">
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                            </ul>
                            <ul class="col-auto">
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="photo">
                            <img src="image/photo34.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="photo photo-center">
                    <img src="image/photo35.jpg" alt="">
                </div>
                <div class="row justify-content-between block__rphoto">
                    <div class="col-auto">
                        <div class="photo">
                            <img src="image/photo36.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h4 class="title-h4">3 день </h4>
                        <p class="text-p">1. Встреча гостей на ж/д вокзале г. Петрозаводска у 10-го вагона. Гид с табличкой КАРЕЛИЯ:</p>
                        <p class="text-p">2. В 06:50 - поезд № 012 «Санкт-Петербург- Петрозаводск». Для этого поезда: автобусная ознакомительная экскурсия по столице Карелии.</p>
                        <p class="text-p">3. В 08:55 - поезд № 018 «Москва - Петрозаводск».</p>
                        <div class="row double-ul">
                            <ul class="col-auto mr-4">
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                                <li>- пункт списка1</li>
                            </ul>
                            <ul class="col-auto">
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                                <li>- пункт списка2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h2 class="title-h2 title-h2-2">Фотографии маршрута</h2>
                <div class="slider__popup slider__popup_button">
                    <div class="photo">
                        <img src="image/photo37.jpg" alt="">
                    </div>
                    <div class="photo">
                        <img src="image/photo37.jpg" alt="">
                    </div>
                    <div class="photo">
                        <img src="image/photo37.jpg" alt="">
                    </div>
                </div>
                <a href="#" class="button-a">Обратно ко всем маршрутам</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/build/js/app.min.js"></script>
<script type="text/javascript" src="/build/js/sliderUI.js"></script>
<script type="text/javascript" src="/build/js/sliderUI_PUSH.js"></script>
<script type="text/javascript" src="/build/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/build/js/slick.min.js"></script>
<script type="text/javascript" src="/build/js/parallax.min.js"></script>
@yield('scripts')
</body>
</html>
