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
                    <li class="breadcrumbs__li col-auto breadcrumbs__li_active"><span>Размещение</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="general-info">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg col-12 offset-xl-1">
                <h2 class="title-h2">Размещение</h2>
            </div>
            <ul class="banner__socials col-auto">
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
                <li>
                    <a href="#">
                        <img src="image/email.svg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/fax.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="filers__all filers-cafe">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 offset-xl-1">
                <div class="filter__block">
                    <h5 class="title-h5 filter__block-title">Фильтр Размещений</h5>
                    <a href="#" class="filter__block-clear">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.99999 13C3.69141 13 0.999981 10.3086 0.999982 6.99999C0.999982 3.69138 3.69141 0.999981 6.99999 0.999981C9.96722 0.999982 12.4313 3.16685 12.9097 5.99998L11 5.99998L13.5 8.49998L16 5.99998L13.9202 5.99998C13.4324 2.61339 10.5195 -2.39561e-07 6.99999 -3.93403e-07C3.14014 -5.62122e-07 -1.3726e-07 3.14014 -3.05979e-07 6.99999C-4.74699e-07 10.8598 3.14014 14 6.99999 14L6.99999 13Z" fill="#D7182A"/>
                        </svg>
                        Сбросить фильтры
                    </a>
                    <div class="row">
                        <div class="filter__block-setting col-lg-12 col-6">
                            <h5 class="title-h5">Выберите из списка:</h5>
                            <div class="filter__block-settings select__block">
                                <div class="select">
                                    <div class="select__head">
                                        Испания
                                    </div>
                                    <div class="select__body">
                                        <ul>
                                            <li>Испания</li>
                                            <li>Испания</li>
                                            <li>Испания</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__block-setting col-lg-12 col-6">
                            <h5 class="title-h5">Город / Населенный пункт:</h5>
                            <div class="filter__block-settings select__block">
                                <!-- <h5 class="title-h5">Город / Населенный пункт:</h5> -->
                                <div class="select">
                                    <div class="select__head">
                                        Испания
                                    </div>
                                    <div class="select__body">
                                        <ul>
                                            <li>Испания</li>
                                            <li>Испания</li>
                                            <li>Испания</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__block-setting col-lg-12 col-6">
                            <h5 class="title-h5">Тип:</h5>
                            <div class="setting__buttons">
                                <div class="buttons__item">
                                    <input id="ch7" type="checkbox">
                                    <label for="ch7">Дом целиком</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch8" type="checkbox">
                                    <label for="ch8">Аппартаменты целиком</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch9" type="checkbox">
                                    <label for="ch9">Номер в отеле или гостиннице</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch10" type="checkbox">
                                    <label for="ch10">Общее жилье, хостел</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch11" type="checkbox">
                                    <label for="ch11">Хаусбот</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch12" type="checkbox">
                                    <label for="ch12">Каюта</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch13" type="checkbox">
                                    <label for="ch13">Кемпинг</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch14" type="checkbox">
                                    <label for="ch14">Глэмпинг</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch15" type="checkbox">
                                    <label for="ch15">Палатка</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch16" type="checkbox">
                                    <label for="ch16">Гостевой дом</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch17" type="checkbox">
                                    <label for="ch17">Турбаза</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch18" type="checkbox">
                                    <label for="ch18">Поезд</label>
                                </div>
                                <div class="buttons__item">
                                    <input id="ch19" type="checkbox">
                                    <label for="ch19">Автобус</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter__block-setting col-lg-12 col-6">
                            <h5 class="title-h5">Цена:</h5>
                            <p class="text-p text-p_one">1 ночь за 1 человека</p>
                            <div class="polzunok-container-5">
                                <input type="text" class="polzunok-input-5-left" />
                                <input type="text" class="polzunok-input-5-right "/>
                                <div class="polzunok-5"></div>
                            </div>
                        </div>
                        <a href="#" class="button-a">Поиск</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h4 class="title-h4 title-filter">Найдено: 4 отеля</h4>
                <div class="block__finder row">
                    <div class="col-md-6">
                        <div class="block__item">
                            <div class="photo">
                                <img src="image/photo26.jpg" alt="">
                            </div>
                            <div class="bottom__text">
                                <div class="bottom__block">
                                    <h5 class="title-h5">Имя:</h5>
                                    <p class="text-p">Fusion</p>
                                </div>
                                <div class="bottom__block">
                                    <h5 class="title-h5">Район:</h5>
                                    <p class="text-p">Пряжинский</p>
                                </div>
                                <div class="bottom__block">
                                    <h5 class="title-h5">Город:</h5>
                                    <p class="text-p">Пряжин</p>
                                </div>
                                <a href="#" data-popup="placing" class="button-a button-a_v2">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block__item">
                            <div class="photo">
                                <img src="image/photo26.jpg" alt="">
                            </div>
                            <div class="bottom__text">
                                <div class="bottom__block">
                                    <h5 class="title-h5">Имя:</h5>
                                    <p class="text-p">Fusion</p>
                                </div>
                                <div class="bottom__block">
                                    <h5 class="title-h5">Район:</h5>
                                    <p class="text-p">Пряжинский</p>
                                </div>
                                <div class="bottom__block">
                                    <h5 class="title-h5">Город:</h5>
                                    <p class="text-p">Пряжин</p>
                                </div>
                                <a href="#" class="button-a button-a_v2">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block__item">
                            <div class="photo">
                                <img src="image/photo26.jpg" alt="">
                            </div>
                            <div class="bottom__text">
                                <div class="bottom__block">
                                    <h5 class="title-h5">Имя:</h5>
                                    <p class="text-p">Fusion</p>
                                </div>
                                <div class="bottom__block">
                                    <h5 class="title-h5">Район:</h5>
                                    <p class="text-p">Пряжинский</p>
                                </div>
                                <div class="bottom__block">
                                    <h5 class="title-h5">Город:</h5>
                                    <p class="text-p">Пряжин</p>
                                </div>
                                <a href="#" class="button-a button-a_v2">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block__item">
                            <div class="photo">
                                <img src="image/photo26.jpg" alt="">
                            </div>
                            <div class="bottom__text">
                                <div class="bottom__block">
                                    <h5 class="title-h5">Имя:</h5>
                                    <p class="text-p">Fusion</p>
                                </div>
                                <div class="bottom__block">
                                    <h5 class="title-h5">Район:</h5>
                                    <p class="text-p">Пряжинский</p>
                                </div>
                                <div class="bottom__block">
                                    <h5 class="title-h5">Город:</h5>
                                    <p class="text-p">Пряжин</p>
                                </div>
                                <a href="#" class="button-a button-a_v2">Посмотреть</a>
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
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" rx="20" fill="#1977F3"/>
                                            <g clip-path="url(#clip0)">
                                                <path d="M24.0426 12.4075H26.1649V8.71107C25.7988 8.6607 24.5395 8.54736 23.073 8.54736C20.013 8.54736 17.9168 10.4721 17.9168 14.0096V17.2653H14.54V21.3976H17.9168V31.7952H22.0568V21.3986H25.297L25.8114 17.2663H22.0559V14.4194C22.0568 13.225 22.3784 12.4075 24.0426 12.4075Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="23.2479" height="23.2479" fill="white" transform="translate(8.54688 8.54736)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" rx="20" fill="#1DA1F2"/>
                                            <g clip-path="url(#clip0)">
                                                <path d="M30.4469 14.0052C29.6921 14.3363 28.8878 14.5558 28.0492 14.6624C28.9119 14.1473 29.5703 13.3379 29.8799 12.3623C29.0755 12.8418 28.1875 13.1806 27.241 13.3696C26.4773 12.5564 25.3888 12.0527 24.2013 12.0527C21.8975 12.0527 20.0427 13.9227 20.0427 16.2152C20.0427 16.545 20.0706 16.8622 20.1391 17.1642C16.6795 16.9954 13.6182 15.3373 11.5617 12.8114C11.2027 13.4343 10.9921 14.1473 10.9921 14.9148C10.9921 16.356 11.7343 17.6336 12.8405 18.3732C12.1719 18.3605 11.516 18.1664 10.9604 17.8606C10.9604 17.8733 10.9604 17.8898 10.9604 17.9063C10.9604 19.9286 12.4028 21.6083 14.2944 21.9952C13.9557 22.0878 13.5865 22.1322 13.2034 22.1322C12.9369 22.1322 12.668 22.117 12.4155 22.0612C12.9547 23.7092 14.4847 24.9207 16.304 24.96C14.8881 26.0676 13.0905 26.7349 11.1443 26.7349C10.8031 26.7349 10.4758 26.7197 10.1484 26.6778C11.9918 27.8665 14.1764 28.5453 16.5323 28.5453C24.1899 28.5453 28.3765 22.202 28.3765 16.7036C28.3765 16.5197 28.3702 16.3421 28.3613 16.1657C29.1872 15.5796 29.8811 14.8476 30.4469 14.0052Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="20.2985" height="20.2985" fill="white" transform="translate(10.1484 10.1499)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" rx="20" fill="url(#paint0_linear)"/>
                                            <g clip-path="url(#clip0)">
                                                <path d="M23.8511 9.729H16.1484C12.6039 9.729 9.72949 12.6034 9.72949 16.1479V23.8506C9.72949 27.3952 12.6039 30.2695 16.1484 30.2695H23.8511C27.3956 30.2695 30.27 27.3952 30.27 23.8506V16.1479C30.27 12.6034 27.3956 9.729 23.8511 9.729ZM28.3444 23.8506C28.3444 26.3283 26.3288 28.3439 23.8511 28.3439H16.1484C13.6707 28.3439 11.6552 26.3283 11.6552 23.8506V16.1479C11.6552 13.6702 13.6707 11.6547 16.1484 11.6547H23.8511C26.3288 11.6547 28.3444 13.6702 28.3444 16.1479V23.8506Z" fill="white"/>
                                                <path d="M19.9994 14.8643C17.1635 14.8643 14.8643 17.1635 14.8643 19.9994C14.8643 22.8353 17.1635 25.1345 19.9994 25.1345C22.8353 25.1345 25.1345 22.8353 25.1345 19.9994C25.1345 17.1635 22.8353 14.8643 19.9994 14.8643ZM19.9994 23.2089C18.2303 23.2089 16.7899 21.7684 16.7899 19.9994C16.7899 18.2291 18.2303 16.7899 19.9994 16.7899C21.7684 16.7899 23.2089 18.2291 23.2089 19.9994C23.2089 21.7684 21.7684 23.2089 19.9994 23.2089Z" fill="white"/>
                                                <path d="M25.5202 15.1634C25.8981 15.1634 26.2045 14.8571 26.2045 14.4792C26.2045 14.1013 25.8981 13.7949 25.5202 13.7949C25.1423 13.7949 24.8359 14.1013 24.8359 14.4792C24.8359 14.8571 25.1423 15.1634 25.5202 15.1634Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="-15.6757" y1="40" x2="54.8649" y2="-4.05405" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F58529"/>
                                                    <stop offset="0.478" stop-color="#DD2A7B"/>
                                                    <stop offset="0.78" stop-color="#8134AF"/>
                                                    <stop offset="1" stop-color="#515BD4"/>
                                                </linearGradient>
                                                <clipPath id="clip0">
                                                    <rect width="20.5405" height="20.5405" fill="white" transform="translate(9.72949 9.729)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.95431 31.0457 0 20 0C8.95431 0 0 8.95431 0 20C0 31.0457 8.95431 40 20 40Z" fill="#4D76A1"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2443 28.7716H20.814C20.814 28.7716 21.2882 28.7196 21.5303 28.4586C21.7531 28.219 21.746 27.7691 21.746 27.7691C21.746 27.7691 21.7153 25.6628 22.6929 25.3526C23.6565 25.0471 24.894 27.3883 26.2057 28.2885C27.1975 28.9699 27.9512 28.8205 27.9512 28.8205L31.4582 28.7716C31.4582 28.7716 33.2929 28.6586 32.423 27.2161C32.3517 27.0981 31.9164 26.1491 29.8154 24.1989C27.6164 22.1578 27.9109 22.488 30.5598 18.9574C32.1731 16.8072 32.818 15.4945 32.6166 14.9323C32.4244 14.3968 31.2379 14.5383 31.2379 14.5383L27.2891 14.5629C27.2891 14.5629 26.9964 14.523 26.7793 14.6528C26.5672 14.78 26.4306 15.0767 26.4306 15.0767C26.4306 15.0767 25.8056 16.7405 24.9721 18.1556C23.2137 21.1414 22.5107 21.299 22.2233 21.1136C21.5549 20.6815 21.7217 19.3777 21.7217 18.4515C21.7217 15.558 22.1606 14.3515 20.8671 14.0392C20.4379 13.9354 20.122 13.867 19.0243 13.8559C17.6153 13.8413 16.4228 13.8602 15.7475 14.1911C15.2983 14.411 14.9518 14.9013 15.1628 14.9294C15.4238 14.9644 16.0149 15.0888 16.3283 15.5155C16.7329 16.066 16.7187 17.3024 16.7187 17.3024C16.7187 17.3024 16.9511 20.7086 16.1757 21.1318C15.6434 21.422 14.9133 20.8295 13.3457 18.1206C12.5424 16.7331 11.936 15.1993 11.936 15.1993C11.936 15.1993 11.819 14.9127 11.6105 14.7594C11.3573 14.5736 11.0037 14.5144 11.0037 14.5144L7.25132 14.539C7.25132 14.539 6.68802 14.5547 6.48124 14.7996C6.29728 15.0175 6.46662 15.4681 6.46662 15.4681C6.46662 15.4681 9.40434 22.3411 12.7307 25.8047C15.7807 28.9802 19.2443 28.7716 19.2443 28.7716Z" fill="white"/>
                                        </svg>
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
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="20" fill="#1977F3"/>
                                <g clip-path="url(#clip0)">
                                    <path d="M24.0426 12.4075H26.1649V8.71107C25.7988 8.6607 24.5395 8.54736 23.073 8.54736C20.013 8.54736 17.9168 10.4721 17.9168 14.0096V17.2653H14.54V21.3976H17.9168V31.7952H22.0568V21.3986H25.297L25.8114 17.2663H22.0559V14.4194C22.0568 13.225 22.3784 12.4075 24.0426 12.4075Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="23.2479" height="23.2479" fill="white" transform="translate(8.54688 8.54736)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="20" fill="#1DA1F2"/>
                                <g clip-path="url(#clip0)">
                                    <path d="M30.4469 14.0052C29.6921 14.3363 28.8878 14.5558 28.0492 14.6624C28.9119 14.1473 29.5703 13.3379 29.8799 12.3623C29.0755 12.8418 28.1875 13.1806 27.241 13.3696C26.4773 12.5564 25.3888 12.0527 24.2013 12.0527C21.8975 12.0527 20.0427 13.9227 20.0427 16.2152C20.0427 16.545 20.0706 16.8622 20.1391 17.1642C16.6795 16.9954 13.6182 15.3373 11.5617 12.8114C11.2027 13.4343 10.9921 14.1473 10.9921 14.9148C10.9921 16.356 11.7343 17.6336 12.8405 18.3732C12.1719 18.3605 11.516 18.1664 10.9604 17.8606C10.9604 17.8733 10.9604 17.8898 10.9604 17.9063C10.9604 19.9286 12.4028 21.6083 14.2944 21.9952C13.9557 22.0878 13.5865 22.1322 13.2034 22.1322C12.9369 22.1322 12.668 22.117 12.4155 22.0612C12.9547 23.7092 14.4847 24.9207 16.304 24.96C14.8881 26.0676 13.0905 26.7349 11.1443 26.7349C10.8031 26.7349 10.4758 26.7197 10.1484 26.6778C11.9918 27.8665 14.1764 28.5453 16.5323 28.5453C24.1899 28.5453 28.3765 22.202 28.3765 16.7036C28.3765 16.5197 28.3702 16.3421 28.3613 16.1657C29.1872 15.5796 29.8811 14.8476 30.4469 14.0052Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="20.2985" height="20.2985" fill="white" transform="translate(10.1484 10.1499)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="20" fill="url(#paint0_linear)"/>
                                <g clip-path="url(#clip0)">
                                    <path d="M23.8511 9.729H16.1484C12.6039 9.729 9.72949 12.6034 9.72949 16.1479V23.8506C9.72949 27.3952 12.6039 30.2695 16.1484 30.2695H23.8511C27.3956 30.2695 30.27 27.3952 30.27 23.8506V16.1479C30.27 12.6034 27.3956 9.729 23.8511 9.729ZM28.3444 23.8506C28.3444 26.3283 26.3288 28.3439 23.8511 28.3439H16.1484C13.6707 28.3439 11.6552 26.3283 11.6552 23.8506V16.1479C11.6552 13.6702 13.6707 11.6547 16.1484 11.6547H23.8511C26.3288 11.6547 28.3444 13.6702 28.3444 16.1479V23.8506Z" fill="white"/>
                                    <path d="M19.9994 14.8643C17.1635 14.8643 14.8643 17.1635 14.8643 19.9994C14.8643 22.8353 17.1635 25.1345 19.9994 25.1345C22.8353 25.1345 25.1345 22.8353 25.1345 19.9994C25.1345 17.1635 22.8353 14.8643 19.9994 14.8643ZM19.9994 23.2089C18.2303 23.2089 16.7899 21.7684 16.7899 19.9994C16.7899 18.2291 18.2303 16.7899 19.9994 16.7899C21.7684 16.7899 23.2089 18.2291 23.2089 19.9994C23.2089 21.7684 21.7684 23.2089 19.9994 23.2089Z" fill="white"/>
                                    <path d="M25.5202 15.1634C25.8981 15.1634 26.2045 14.8571 26.2045 14.4792C26.2045 14.1013 25.8981 13.7949 25.5202 13.7949C25.1423 13.7949 24.8359 14.1013 24.8359 14.4792C24.8359 14.8571 25.1423 15.1634 25.5202 15.1634Z" fill="white"/>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear" x1="-15.6757" y1="40" x2="54.8649" y2="-4.05405" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F58529"/>
                                        <stop offset="0.478" stop-color="#DD2A7B"/>
                                        <stop offset="0.78" stop-color="#8134AF"/>
                                        <stop offset="1" stop-color="#515BD4"/>
                                    </linearGradient>
                                    <clipPath id="clip0">
                                        <rect width="20.5405" height="20.5405" fill="white" transform="translate(9.72949 9.729)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.95431 31.0457 0 20 0C8.95431 0 0 8.95431 0 20C0 31.0457 8.95431 40 20 40Z" fill="#4D76A1"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2443 28.7716H20.814C20.814 28.7716 21.2882 28.7196 21.5303 28.4586C21.7531 28.219 21.746 27.7691 21.746 27.7691C21.746 27.7691 21.7153 25.6628 22.6929 25.3526C23.6565 25.0471 24.894 27.3883 26.2057 28.2885C27.1975 28.9699 27.9512 28.8205 27.9512 28.8205L31.4582 28.7716C31.4582 28.7716 33.2929 28.6586 32.423 27.2161C32.3517 27.0981 31.9164 26.1491 29.8154 24.1989C27.6164 22.1578 27.9109 22.488 30.5598 18.9574C32.1731 16.8072 32.818 15.4945 32.6166 14.9323C32.4244 14.3968 31.2379 14.5383 31.2379 14.5383L27.2891 14.5629C27.2891 14.5629 26.9964 14.523 26.7793 14.6528C26.5672 14.78 26.4306 15.0767 26.4306 15.0767C26.4306 15.0767 25.8056 16.7405 24.9721 18.1556C23.2137 21.1414 22.5107 21.299 22.2233 21.1136C21.5549 20.6815 21.7217 19.3777 21.7217 18.4515C21.7217 15.558 22.1606 14.3515 20.8671 14.0392C20.4379 13.9354 20.122 13.867 19.0243 13.8559C17.6153 13.8413 16.4228 13.8602 15.7475 14.1911C15.2983 14.411 14.9518 14.9013 15.1628 14.9294C15.4238 14.9644 16.0149 15.0888 16.3283 15.5155C16.7329 16.066 16.7187 17.3024 16.7187 17.3024C16.7187 17.3024 16.9511 20.7086 16.1757 21.1318C15.6434 21.422 14.9133 20.8295 13.3457 18.1206C12.5424 16.7331 11.936 15.1993 11.936 15.1993C11.936 15.1993 11.819 14.9127 11.6105 14.7594C11.3573 14.5736 11.0037 14.5144 11.0037 14.5144L7.25132 14.539C7.25132 14.539 6.68802 14.5547 6.48124 14.7996C6.29728 15.0175 6.46662 15.4681 6.46662 15.4681C6.46662 15.4681 9.40434 22.3411 12.7307 25.8047C15.7807 28.9802 19.2443 28.7716 19.2443 28.7716Z" fill="white"/>
                            </svg>
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
    <div class="popup popup-cafe popup-placing">
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
                    </div>
                    <div class="slider__item">
                        <div class="photo">
                            <img src="image/photo30.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row title__popup justify-content-between align-items-center">
                    <div class="col-lg-auto col-12">
                        <h2 class="title-h2">Karelia</h2>
                    </div>
                    <ul class="banner__socials col-lg-auto col-12">
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
                        <li>
                            <a href="#">
                                <img src="image/email.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="image/fax.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="center__block">
                    <div class="row justify-content-between">
                        <div class="col-lg col-12 center__ul">
                            <ul class="row">
                                <li class="col-lg-5">Адрес: </li>
                                <li class="col-lg-7">185001, республика Карелия, Петрозаводский район, Город Петрозаводск, ул. Красноармейская, 33.</li>
                            </ul>
                            <ul class="row">
                                <li class="col-lg-5">Веб-сайт:</li>
                                <li class="col-lg-7"><a href="#">www.fusion.petrofood.ru</a></li>
                            </ul>
                            <ul class="row">
                                <li class="col-lg-5">Доп. информация:</li>
                                <li class="col-lg-7">(8142) 78-15-78</li>
                            </ul>
                            <ul class="row">
                                <li class="col-lg-5">Удобства:</li>
                                <li class="col-lg-7">Центр города, гибкое ценообразование</li>
                            </ul>
                            <ul class="row">
                                <li class="col-lg-5">Типы размещения:</li>
                                <li class="col-lg-7">
                                    <ul class="ul__points">
                                        <li>- Дом целиком</li>
                                        <li>- 8-местный общий номер (2 номера)</li>
                                        <li>- 10-местный общий номер</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="row">
                                <li class="col-lg-5">Цена:</li>
                                <li class="col-lg-7">
                                    <ul class="ul__price">
                                        <li>550 руб</li>
                                        <li>1 ночь за 1 человека</li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="block-owl">
                                <div class="row align-items-center block__top">
                                    <div class="col-auto">
                                        <img src="image/owl.svg" alt="">
                                    </div>
                                    <div class="col-auto top__name">
                                        <div class="owl__title">trip<span>advisor</span></div>
                                    </div>
                                </div>
                                <h6 class="title-h6">33 reviews of Karelia Hostel</h6>
                                <hr>
                                <h5 class="title-h5">TripAdvisor Traveler Rating:</h5>
                                <ul class="ul__circle">
                                    <li class="fill"></li>
                                    <li class="fill"></li>
                                    <li class="fill"></li>
                                    <li class="fill"></li>
                                    <li></li>
                                </ul>
                                <h6 class="title-h6 title-h6_green">Based on 33 traveler reviews</h6>
                                <hr>
                                <h5 class="title-h5">Most Recent Traveler Reviews:</h5>
                                <h6 class="title-h6">April 28, 2020: “Relaxed weekend gateway”</h6>
                                <h6 class="title-h6">April 28, 2020: “Wonderful staycation”</h6>
                                <ul class="ul__bottom">
                                    <li><a href="#">Read Reviews</a></li>
                                    <li><a href="#">Write a review</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-p">
                    Karelia hostel - это новый мини отель европейского уровня в центре Петрозаводска. Хостел находится в 100 метрах от онежской набережной и непосредственной близости от основных мест отдыха и достопримечательностей города. Мы предоставляем широчайший выбор размещения (от 2 местного люкса до 10 местного общего номера) по самой низкой цене в городе.
                </p>
                <p class="text-p">
                    Отель располагает круглосуточной стойкой регистрации, большой комнатой отдыха с удобными диванами, wi-fi, xbox, спутниковым телевидением и просторной кухней со всем необходимым оборудованием. Выбирая нас - вы выбираете лучшее!
                </p>
                <a href="#" class="button-a button-a_bottom">Обратно ко всем маршрутам</a>
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

<script>
    $(".polzunok-5").slider({
        min: 0,
        max: 5000,
        values: [0, 5000],
        range: true,
        animate: "fast",
        slide : function(event, ui) {
            $(".polzunok-input-5-left").val(ui.values[ 0 ] + ' руб');
            $(".polzunok-input-5-right").val(ui.values[ 1 ] + ' руб');
        }
    });
    $(".polzunok-input-5-left").val($(".polzunok-5").slider("values", 0).innerHTML = '0 руб');
    $(".polzunok-input-5-right").val($(".polzunok-5").slider("values", 1).innerHTML = '5000 руб');
    $(".polzunok-container-5 input").change(function() {
        var input_left = $(".polzunok-input-5-left").val().replace(/[^0-9]/g, ''),
            opt_left = $(".polzunok-5").slider("option", "min"),
            where_right = $(".polzunok-5").slider("values", 1),
            input_right = $(".polzunok-input-5-right").val().replace(/[^0-9]/g, ''),
            opt_right = $(".polzunok-5").slider("option", "max"),
            where_left = $(".polzunok-5").slider("values", 0);
        if (input_left > where_right) {
            input_left = where_right;
        }
        if (input_left < opt_left) {
            input_left = opt_left;
        }
        if (input_left == "") {
            input_left = 0;
        }
        if (input_right < where_left) {
            input_right = where_left;
        }
        if (input_right > opt_right) {
            input_right = opt_right;
        }
        if (input_right == "") {
            input_right = 0;
        }
        $(".polzunok-input-5-left").val(input_left);
        $(".polzunok-input-5-right").val(input_right);
        if (input_left != where_left) {
            $(".polzunok-5").slider("values", 0, input_left);
        }
        if (input_right != where_right) {
            $(".polzunok-5").slider("values", 1, input_right);
        }
    });
</script>
@yield('scripts')
</body>
</html>
