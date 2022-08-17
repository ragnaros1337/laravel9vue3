<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#292929"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
{{--    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">--}}
    <!--Manifest-->
{{--    <link rel="manifest" href="/manifest.json">--}}
    <!-- Styles -->
    @vite(['resources/sass/app.scss'])
@stack('styles')
</head>
<body>
<div class="wrapper" id="app">
    <header class="header container-fluid" style="flex-shrink: 0">
        <!-- Navbar -->
        <nav class="kugoo-navbar">
            <!-- Container wrapper -->
            <div class="kugoo-navbar-container">
                <section class="kugoo-navbar-top row">
                    <div class="kugoo-navbar-top-left col-6">
                        <a href="" class="kugoo-navbar-top-link">Сервис</a>
                        <a href="" class="kugoo-navbar-top-link">Сотрудничество</a>
                        <a href="" class="kugoo-navbar-top-link">Заказать звонок</a>
                        <ul class="kugoo-navbar-top-socials">
                            <li class="kugoo-navbar-top-socials-wiber"></li>
                            <li class="kugoo-navbar-top-socials-watsup"></li>
                            <li class="kugoo-navbar-top-socials-telegram"></li>
                        </ul>
                    </div>
                    <div class="kugoo-navbar-top-right col-6">
                        <a href="tel:+78005055461" class="kugoo-navbar-top-tel">+7 (800) 5055461</a>
                    </div>
                </section>
                <section class="kugoo-navbar-middle">
                    <div class="kugoo-navbar-middle-brand"></div>
                    <button type="button" class="kugoo-navbar-middle-catalog kugoo-btn-violet">Каталог</button>
                    <div class="kugoo-navbar-middle-search">
                        <button class="kugoo-navbar-middle-search-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Везде</button>
                        <ul class="dropdown-menu kugoo-navbar-middle-search-dropdown-menu">
                            <li><a class="dropdown-item kugoo-navbar-middle-search-dropdown-item" href="#">Action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="kugoo-navbar-middle-search-field" placeholder="Искать самокат KUGO">
                        <button class="kugoo-navbar-middle-search-btn" type="button">Поиск</button>
                    </div>
                    <button type="button" class="kugoo-navbar-middle-filter">Filter</button>
                    <button type="button" class="kugoo-navbar-middle-like">Like</button>
                    <button type="button" class="kugoo-navbar-middle-card">Card</button>
                </section>
                <section class="kugoo-navbar-bottom">
                    <a href="" class="kugoo-navbar-bottom-link">О магазине</a>
                    <a href="" class="kugoo-navbar-bottom-link">Доставка и оплата</a>
                    <a href="" class="kugoo-navbar-bottom-link">Тест драйв</a>
                    <a href="" class="kugoo-navbar-bottom-link">Блог</a>
                    <a href="" class="kugoo-navbar-bottom-link">Контакты</a>
                    <a href="" class="kugoo-navbar-bottom-link">Акции</a>
                </section>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <!-- Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                    </ul>

                </div>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <div class="body-content">
        @yield('content')
    </div>
<!-- Footer -->
    <footer class="footer container-fluid">
        <!-- Grid container -->
        <div class="footer-content">
            <section class="footer-subscribe">
                <div class="footer-subscribe-text">Оставьте свою почту и станьте первым,<br>
                    кто получит скидку на новые самокаты</div>
                <input class="footer-feedback-subscribe-email-input" type="text" placeholder="Введите Ваш email">
                <button class="footer-feedback-subscribe-btn" type="button">Подписаться</button>
            </section>

            <section class="footer-links">
                <div class="row">
                    <div class="col-4 footer-links-catalog">
                        <h5 class="footer-links-header">Каталог товаров</h5>
                        <ul class="footer-links-items">
                            <li class="footer-links-item">
                                <a href="" class="footer-links-catalog-link footer-links-item-link">Электросамокаты</a>
                            </li>
                            <li class="footer-links-item">
                                <a href="" class="footer-links-catalog-link footer-links-item-link">Электроскутеры</a>
                            </li>
                            <li class="footer-links-item">
                                <a href="" class="footer-links-catalog-link footer-links-item-link">Электровелосипеды</a>
                            </li>
                            <li class="footer-links-item">
                                <a href="" class="footer-links-catalog-link footer-links-item-link">Электровелосипеды</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4 footer-links-buyers">
                        <h5 class="footer-links-header">Покупателям</h5>
                        <div class="row">
                            <div class="col-6 left">
                                <ul class="footer-links-items row">
                                    <li class="footer-links-item">
                                        <a href="" class="footer-links-catalog-link footer-links-item-link">Сервисный центр</a>
                                    </li>
                                    <li class="footer-links-item">
                                        <a href="" class="footer-links-catalog-link footer-links-item-link">Доставка и оплата</a>
                                    </li>
                                    <li class="footer-links-item">
                                        <a href="" class="footer-links-catalog-link footer-links-item-link">Рассрочка</a>
                                    </li>
                                    <li class="footer-links-item">
                                        <a href="" class="footer-links-catalog-link footer-links-item-link">Тест-драйв</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 right">
                                <ul class="footer-links-items row">
                                    <li class="footer-links-item">
                                        <a href="" class="footer-links-catalog-link footer-links-item-link">Блог</a>
                                    </li>
                                    <li class="footer-links-item">
                                        <a href="" class="footer-links-catalog-link footer-links-item-link">Сотрудничество</a>
                                    </li>
                                    <li class="footer-links-item">
                                        <a href="" class="footer-links-catalog-link footer-links-item-link">Контакты</a>
                                    </li>
                                    <li class="footer-links-item">
                                        <a href="" class="footer-links-catalog-link footer-links-item-link">Акции</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 footer-links-contacts">
                        <div class="footer-links-contacts-top">
                            <h5 class="footer-links-contacts-header">Контакты</h5>
                            <a href="" role="button" class="footer-links-callback">Заказать звонок</a>
                        </div>
                        <div class="footer-links-contacts-body">
                            <ul class="footer-links-items">
                                <li class="footer-links-item">
                                    <div class="name">Call-центр</div>
                                    <a href="tel:+78005055461" class="footer-links-catalog-link footer-links-item-link">+7 (800) 505-54-61</a>
                                    <div class="works-day">
                                        Пн-Вс 10:00 - 20:00
                                    </div>
                                    <div class="address">
                                        <div class="place">Магазин в Москве ул. Ткацкая, 5 стрю 16</div>
                                        <div class="number">+7 (499) 406 15 87</div>
                                    </div>
                                </li>
                                <li class="footer-links-item">
                                    <div class="name">Сервисный центр</div>
                                    <a href="tel:+74993507692" class="footer-links-catalog-link footer-links-item-link">+7 (499) 350-76-92</a>
                                    <div class="works-day">
                                        Пн-Вс 10:00 - 20:00
                                    </div>
                                    <div class="address">
                                        <div class="place">Магазин в Санкт-Петербурге ул. Фрунзе, 2</div>
                                        <div class="number">+7 (499) 406 15 87</div>
                                    </div>
                                </li>
                                <li class="footer-links-item">
                                    <div class="name"></div>
                                    <a href="" class="footer-links-catalog-link footer-links-item-link"></a>
                                    <div class="works-day"></div>
                                    <div class="address">
                                        <div class="place">Магазин в Краснодаре, ул. Восточно-Кругликовская, 86</div>
                                        <div class="number">+7 (800) 505 54 61</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="footer-media">
                <div class="footer-media-brand"></div>
                <div class="footer-media-store">
                    <button type="button" class="footer-media-google-play"></button>
                    <button type="button" class="footer-media-app-store"></button>
                </div>
                <div class="footer-media-socials">
                    <a href="" role="button"></a>
                </div>
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>
@vite('resources/js/app.js')
</body>
</html>
