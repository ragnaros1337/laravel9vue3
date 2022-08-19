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
        <nav class="kugoo-navbar">
            <div class="kugoo-navbar-container">
                <section class="kugoo-navbar-top row">
                    <div class="kugoo-navbar-top-left col-6">
                        <a href="" class="kugoo-navbar-top-link">Сервис</a>
                        <a href="" class="kugoo-navbar-top-link">Сотрудничество</a>
                        <a href="" class="kugoo-navbar-top-link">Заказать звонок</a>
                        <ul class="kugoo-navbar-top-socials">
                            <li class="kugoo-navbar-top-socials-viber">
                                <a href="viber://add?number=%2B78005055461" class="kugoo-navbar-top-socials-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="M424.908 70.792c-11.407-10.509-57.582-44.018-160.53-44.466 0 0-121.363-7.276-180.473 46.983-32.879 32.877-44.467 81.118-45.725 140.856-1.258 59.74-2.785 171.669 105.104 202.034h.089l-.089 46.353s-.718 18.775 11.678 22.548c14.913 4.672 23.716-9.611 37.999-24.973 7.816-8.444 18.595-20.841 26.77-30.275 73.842 6.2 130.528-7.994 136.995-10.059 14.913-4.851 99.265-15.632 112.919-127.563 14.193-115.525-6.827-188.469-44.737-221.438z" style="fill:#5d6c7b"/>
                                        <path d="M437.396 283.786c-11.589 93.423-79.952 99.353-92.528 103.396-5.39 1.706-55.247 14.104-117.86 10.062 0 0-46.713 56.324-61.266 70.968-4.761 4.76-9.971 4.311-9.881-5.122 0-6.196.359-76.985.359-76.985-.09 0-.09 0 0 0-91.45-25.334-86.06-120.646-85.072-170.503.988-49.856 10.421-90.73 38.269-118.218 50.037-45.366 153.075-38.628 153.075-38.628 87.047.359 128.73 26.589 138.432 35.393 32.069 27.489 48.42 93.247 36.472 189.637z" style="fill:#fff"/>
                                        <path d="M312.528 211.201c.359 7.725-11.229 8.265-11.588.538-.989-19.763-10.242-29.374-29.286-30.452-7.726-.45-7.007-12.038.628-11.588 25.065 1.347 38.989 15.72 40.246 41.502z" style="fill:#5d6c7b"/>
                                        <path d="M330.765 221.351c.897-38.089-22.907-67.913-68.094-71.236-7.636-.539-6.827-12.128.81-11.589 52.103 3.774 79.86 39.617 78.872 83.095-.09 7.725-11.769 7.367-11.588-.27z" style="fill:#5d6c7b"/>
                                        <path d="M372.986 233.389c.089 7.726-11.589 7.815-11.589.09-.539-73.213-49.317-113.099-108.518-113.548-7.636-.09-7.636-11.588 0-11.588 66.207.449 119.478 46.173 120.107 125.046zM362.834 321.514v.181c-9.702 17.068-27.848 35.934-46.533 29.915l-.18-.271c-18.955-5.299-63.6-28.296-91.808-50.755-14.553-11.499-27.849-25.063-38.09-38.089-9.252-11.589-18.594-25.334-27.667-41.862-19.134-34.586-23.356-50.037-23.356-50.037-6.019-18.685 12.756-36.832 29.913-46.533h.181c8.264-4.313 16.169-2.875 21.469 3.502 0 0 11.14 13.294 15.9 19.854 4.492 6.108 10.511 15.899 13.655 21.379 5.48 9.791 2.065 19.763-3.324 23.894l-10.78 8.625c-5.479 4.401-4.761 12.576-4.761 12.576s15.99 60.458 75.729 75.73c0 0 8.176.719 12.576-4.761l8.625-10.78c4.131-5.39 14.104-8.803 23.895-3.323 13.206 7.455 30.004 19.044 41.144 29.555 6.287 5.12 7.724 12.937 3.412 21.2z" style="fill:#5d6c7b"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="kugoo-navbar-top-socials-whatsup">
                                <a href="whatsapp://send?phone=78005055461" class="kugoo-navbar-top-socials-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" spreserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="M417.103 92.845C374.08 49.721 316.787 26.001 255.897 26.001c-125.678 0-227.946 102.269-227.946 227.945 0 40.146 10.474 79.37 30.394 113.973l-32.343 118.08 120.852-31.728c33.268 18.173 70.744 27.724 108.941 27.724h.103c125.576 0 230.101-102.269 230.101-227.945-.001-60.889-25.874-118.08-68.896-161.205z" style="fill:#5d6c7b"/>
                                        <path d="M255.897 443.593c-34.089 0-67.46-9.138-96.518-26.388l-6.879-4.107-71.67 18.789 19.099-69.924-4.518-7.187c-18.995-30.188-28.956-64.995-28.956-100.83 0-104.424 85.018-189.44 189.545-189.44 50.619 0 98.158 19.714 133.892 55.548 35.731 35.835 57.705 83.376 57.603 133.996 0 104.528-87.176 189.543-191.598 189.543z" style="fill:#fff"/>
                                        <path d="M359.807 301.691c-5.647-2.872-33.677-16.635-38.914-18.48-5.237-1.952-9.035-2.875-12.834 2.875s-14.683 18.48-18.073 22.384c-3.285 3.799-6.674 4.312-12.321 1.437-33.473-16.735-55.445-29.878-77.521-67.768-5.853-10.062 5.854-9.344 16.736-31.11 1.85-3.801.926-7.086-.514-9.961-1.436-2.875-12.834-30.906-17.557-42.304-4.62-11.089-9.343-9.549-12.835-9.754-3.285-.206-7.086-.206-10.883-.206-3.8 0-9.96 1.438-15.197 7.085-5.236 5.75-19.92 19.51-19.92 47.541s20.432 55.139 23.205 58.937c2.874 3.798 40.148 61.299 97.338 86.045 36.144 15.607 50.314 16.94 68.386 14.271 10.985-1.643 33.679-13.759 38.401-27.107 4.723-13.347 4.723-24.743 3.285-27.105-1.334-2.57-5.135-4.006-10.782-6.78z" style="fill:#5d6c7b"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="kugoo-navbar-top-socials-telegram">
                                <a href="tg://resolve?domain=corehound" class="kugoo-navbar-top-socials-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="m484.689 98.231-69.417 327.37c-5.237 23.105-18.895 28.854-38.304 17.972L271.2 365.631l-51.034 49.086c-5.646 5.647-10.371 10.372-21.256 10.372l7.598-107.722L402.539 140.23c8.523-7.598-1.848-11.809-13.247-4.21L146.95 288.614 42.619 255.96c-22.694-7.086-23.104-22.695 4.723-33.579L455.423 65.166c18.893-7.085 35.427 4.209 29.266 33.065z" style="fill:#5d6c7b"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="kugoo-navbar-top-right col-6">
                        <a href="tel:+78005055461" class="kugoo-navbar-top-tel">+7 (800) 5055461</a>
                    </div>
                </section>
                <section class="kugoo-navbar-middle">
                    <div class="kugoo-navbar-middle-brand">kugoo</div>
                    <svg>
                        <path xmlns="http://www.w3.org/2000/svg" d="M101.302 750.395V757.144H102.989V750.395H101.302ZM105.283 750.395L102.516 753.606L105.361 757.144H107.337L104.454 753.557L107.192 750.395H105.283ZM107.995 750.395V754.926C107.995 755.351 108.062 755.72 108.197 756.035C108.339 756.35 108.531 756.61 108.776 756.816C109.026 757.015 109.316 757.166 109.643 757.269C109.971 757.372 110.325 757.423 110.704 757.423C111.083 757.423 111.437 757.372 111.764 757.269C112.099 757.166 112.388 757.015 112.632 756.816C112.883 756.61 113.076 756.35 113.211 756.035C113.352 755.72 113.423 755.351 113.423 754.926V750.395H111.793V754.811C111.793 755.151 111.703 755.428 111.523 755.64C111.343 755.852 111.07 755.958 110.704 755.958C110.344 755.958 110.074 755.852 109.894 755.64C109.714 755.428 109.624 755.151 109.624 754.811V750.395H107.995ZM118.148 754.705H119.942C119.884 754.878 119.803 755.042 119.701 755.196C119.604 755.344 119.482 755.476 119.334 755.592C119.193 755.701 119.023 755.788 118.823 755.852C118.63 755.91 118.412 755.939 118.168 755.939C117.769 755.939 117.416 755.852 117.107 755.678C116.805 755.498 116.564 755.248 116.384 754.926C116.211 754.599 116.124 754.213 116.124 753.769C116.124 753.319 116.214 752.94 116.394 752.632C116.58 752.317 116.828 752.076 117.136 751.909C117.445 751.742 117.788 751.658 118.168 751.658C118.56 751.658 118.884 751.748 119.141 751.928C119.405 752.102 119.614 752.323 119.768 752.593L121.214 751.841C121.002 751.526 120.748 751.25 120.453 751.012C120.163 750.768 119.829 750.578 119.45 750.443C119.071 750.308 118.643 750.241 118.168 750.241C117.634 750.241 117.139 750.324 116.683 750.491C116.227 750.659 115.828 750.896 115.487 751.205C115.147 751.513 114.883 751.886 114.697 752.323C114.511 752.754 114.417 753.236 114.417 753.769C114.417 754.303 114.507 754.791 114.687 755.235C114.874 755.672 115.131 756.051 115.459 756.372C115.786 756.687 116.175 756.932 116.625 757.105C117.075 757.272 117.57 757.356 118.11 757.356C118.682 757.356 119.19 757.256 119.633 757.057C120.077 756.851 120.446 756.569 120.742 756.209C121.038 755.849 121.256 755.434 121.397 754.965C121.539 754.496 121.593 753.991 121.561 753.451H118.148V754.705ZM123.995 753.769C123.995 753.371 124.072 753.021 124.227 752.719C124.387 752.41 124.609 752.169 124.892 751.995C125.181 751.822 125.519 751.735 125.904 751.735C126.296 751.735 126.634 751.822 126.916 751.995C127.199 752.169 127.418 752.41 127.572 752.719C127.726 753.021 127.803 753.371 127.803 753.769C127.803 754.168 127.723 754.521 127.562 754.83C127.408 755.132 127.186 755.37 126.897 755.543C126.614 755.717 126.283 755.804 125.904 755.804C125.519 755.804 125.181 755.717 124.892 755.543C124.609 755.37 124.387 755.132 124.227 754.83C124.072 754.521 123.995 754.168 123.995 753.769ZM122.27 753.769C122.27 754.29 122.356 754.769 122.53 755.206C122.71 755.643 122.96 756.022 123.282 756.344C123.61 756.665 123.995 756.916 124.439 757.096C124.882 757.269 125.371 757.356 125.904 757.356C126.431 757.356 126.916 757.269 127.36 757.096C127.803 756.916 128.186 756.665 128.507 756.344C128.835 756.022 129.086 755.643 129.259 755.206C129.439 754.769 129.529 754.29 129.529 753.769C129.529 753.249 129.439 752.773 129.259 752.343C129.079 751.912 128.825 751.539 128.498 751.224C128.17 750.909 127.784 750.668 127.341 750.501C126.904 750.328 126.425 750.241 125.904 750.241C125.39 750.241 124.911 750.328 124.468 750.501C124.024 750.668 123.639 750.909 123.311 751.224C122.983 751.539 122.726 751.912 122.539 752.343C122.359 752.773 122.27 753.249 122.27 753.769ZM131.913 753.769C131.913 753.371 131.99 753.021 132.145 752.719C132.305 752.41 132.527 752.169 132.81 751.995C133.099 751.822 133.437 751.735 133.822 751.735C134.214 751.735 134.552 751.822 134.835 751.995C135.117 752.169 135.336 752.41 135.49 752.719C135.644 753.021 135.722 753.371 135.722 753.769C135.722 754.168 135.641 754.521 135.481 754.83C135.326 755.132 135.105 755.37 134.815 755.543C134.532 755.717 134.201 755.804 133.822 755.804C133.437 755.804 133.099 755.717 132.81 755.543C132.527 755.37 132.305 755.132 132.145 754.83C131.99 754.521 131.913 754.168 131.913 753.769ZM130.188 753.769C130.188 754.29 130.274 754.769 130.448 755.206C130.628 755.643 130.879 756.022 131.2 756.344C131.528 756.665 131.913 756.916 132.357 757.096C132.8 757.269 133.289 757.356 133.822 757.356C134.349 757.356 134.835 757.269 135.278 757.096C135.722 756.916 136.104 756.665 136.425 756.344C136.753 756.022 137.004 755.643 137.177 755.206C137.357 754.769 137.447 754.29 137.447 753.769C137.447 753.249 137.357 752.773 137.177 752.343C136.997 751.912 136.744 751.539 136.416 751.224C136.088 750.909 135.702 750.668 135.259 750.501C134.822 750.328 134.343 750.241 133.822 750.241C133.308 750.241 132.829 750.328 132.386 750.501C131.942 750.668 131.557 750.909 131.229 751.224C130.901 751.539 130.644 751.912 130.458 752.343C130.278 752.773 130.188 753.249 130.188 753.769Z" fill="#282739"/>
                    </svg>

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

                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <!-- Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="kugoo-navbar-backgrounds">
                <div class="kugoo-navbar-backgrounds-top"></div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <div class="body-content">
        @yield('content')
    </div>
    <footer class="footer container-fluid">
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
                <div class="footer-media-row row">
                    <div class="footer-media-left col-6">
                        <div class="footer-media-brand"></div>
                        <div class="footer-media-store">
                            <button type="button" class="footer-media-google-play"></button>
                            <button type="button" class="footer-media-app-store"></button>
                        </div>
                    </div>
                    <div class="footer-media-right col-6">
                        <div class="footer-media-socials">
                            <ul class="footer-media-socials-items">
                                <li class="footer-media-socials-item">
                                    <a class="footer-media-socials-item-link footer-media-socials-item-link-vkontakte" href="" role="button">Вконтакте</a>
                                </li>
                                <li class="footer-media-socials-item">
                                    <a class="footer-media-socials-item-link footer-media-socials-item-link-instagram" href="" role="button">Instagramm</a>
                                </li>
                                <li class="footer-media-socials-item">
                                    <a class="footer-media-socials-item-link footer-media-socials-item-link-youtube" href="" role="button">Youtube</a>
                                </li>
                                <li class="footer-media-socials-item">
                                    <a class="footer-media-socials-item-link footer-media-socials-item-link-telegram" href="" role="button">Telegram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="footer-payments">
                <div class="footer-payments-row row">
                    <div class="footer-payments-left col-6">
                        <a class="footer-payments-left-link" href="">Реквизиты</a>
                        <a class="footer-payments-left-link" href="">Политика конфиденциальности</a>
                    </div>
                    <div class="footer-payments-right col-6">
                        <ul class="footer-payments-right-banks">
                            <li class="footer-payments-right-bank footer-payments-right-bank-googlepay">gpay</li>
                            <li class="footer-payments-right-bank footer-payments-right-bank-ipay">ipay</li>
                            <li class="footer-payments-right-bank footer-payments-right-bank-visa">visa</li>
                            <li class="footer-payments-right-bank footer-payments-right-bank-mastercard">mcard</li>
                            <li class="footer-payments-right-bank footer-payments-right-bank-mir">?</li>
                            <li class="footer-payments-right-bank footer-payments-right-bank-webmoney">?</li>
                            <li class="footer-payments-right-bank footer-payments-right-bank-qiwi">qiwi</li>
                        </ul>
                        <ul class="footer-payments-right-chats">
                            Online чат:
                            <li class="footer-payments-right-chat footer-payments-right-chat-viber">Viber</li>
                            <li class="footer-payments-right-chat footer-payments-right-chat-whatsup">Whatsup</li>
                            <li class="footer-payments-right-chat footer-payments-right-chat-telegtram">Telegram</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </footer>
</div>
@vite('resources/js/app.js')
</body>
</html>
