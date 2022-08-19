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
                <section class="kugoo-navbar-top row hidden">
                    <div class="kugoo-navbar-top-left col-6">
                        <a href="" class="kugoo-navbar-top-link">Сервис</a>
                        <a href="" class="kugoo-navbar-top-link">Сотрудничество</a>
                        <a href="" class="kugoo-navbar-top-link">Заказать звонок</a>
                        <ul class="kugoo-navbar-top-socials">
                            <li class="kugoo-navbar-top-socials-viber">
                                <a href="viber://add?number=%2B78005055461" class="kugoo-navbar-top-socials-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="M424.908 70.792c-11.407-10.509-57.582-44.018-160.53-44.466 0 0-121.363-7.276-180.473 46.983-32.879 32.877-44.467 81.118-45.725 140.856-1.258 59.74-2.785 171.669 105.104 202.034h.089l-.089 46.353s-.718 18.775 11.678 22.548c14.913 4.672 23.716-9.611 37.999-24.973 7.816-8.444 18.595-20.841 26.77-30.275 73.842 6.2 130.528-7.994 136.995-10.059 14.913-4.851 99.265-15.632 112.919-127.563 14.193-115.525-6.827-188.469-44.737-221.438z" style="fill:#ffffff"/>
                                        <path d="M437.396 283.786c-11.589 93.423-79.952 99.353-92.528 103.396-5.39 1.706-55.247 14.104-117.86 10.062 0 0-46.713 56.324-61.266 70.968-4.761 4.76-9.971 4.311-9.881-5.122 0-6.196.359-76.985.359-76.985-.09 0-.09 0 0 0-91.45-25.334-86.06-120.646-85.072-170.503.988-49.856 10.421-90.73 38.269-118.218 50.037-45.366 153.075-38.628 153.075-38.628 87.047.359 128.73 26.589 138.432 35.393 32.069 27.489 48.42 93.247 36.472 189.637z" style="fill:#5d6c7b"/>
                                        <path d="M312.528 211.201c.359 7.725-11.229 8.265-11.588.538-.989-19.763-10.242-29.374-29.286-30.452-7.726-.45-7.007-12.038.628-11.588 25.065 1.347 38.989 15.72 40.246 41.502z" style="fill:#ffffff"/>
                                        <path d="M330.765 221.351c.897-38.089-22.907-67.913-68.094-71.236-7.636-.539-6.827-12.128.81-11.589 52.103 3.774 79.86 39.617 78.872 83.095-.09 7.725-11.769 7.367-11.588-.27z" style="fill:#ffffff"/>
                                        <path d="M372.986 233.389c.089 7.726-11.589 7.815-11.589.09-.539-73.213-49.317-113.099-108.518-113.548-7.636-.09-7.636-11.588 0-11.588 66.207.449 119.478 46.173 120.107 125.046zM362.834 321.514v.181c-9.702 17.068-27.848 35.934-46.533 29.915l-.18-.271c-18.955-5.299-63.6-28.296-91.808-50.755-14.553-11.499-27.849-25.063-38.09-38.089-9.252-11.589-18.594-25.334-27.667-41.862-19.134-34.586-23.356-50.037-23.356-50.037-6.019-18.685 12.756-36.832 29.913-46.533h.181c8.264-4.313 16.169-2.875 21.469 3.502 0 0 11.14 13.294 15.9 19.854 4.492 6.108 10.511 15.899 13.655 21.379 5.48 9.791 2.065 19.763-3.324 23.894l-10.78 8.625c-5.479 4.401-4.761 12.576-4.761 12.576s15.99 60.458 75.729 75.73c0 0 8.176.719 12.576-4.761l8.625-10.78c4.131-5.39 14.104-8.803 23.895-3.323 13.206 7.455 30.004 19.044 41.144 29.555 6.287 5.12 7.724 12.937 3.412 21.2z" style="fill:#ffffff"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="kugoo-navbar-top-socials-whatsup">
                                <a href="whatsapp://send?phone=78005055461" class="kugoo-navbar-top-socials-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="M417.103 92.845C374.08 49.721 316.787 26.001 255.897 26.001c-125.678 0-227.946 102.269-227.946 227.945 0 40.146 10.474 79.37 30.394 113.973l-32.343 118.08 120.852-31.728c33.268 18.173 70.744 27.724 108.941 27.724h.103c125.576 0 230.101-102.269 230.101-227.945-.001-60.889-25.874-118.08-68.896-161.205z" style="fill:#ffffff"/>
                                        <path d="M255.897 443.593c-34.089 0-67.46-9.138-96.518-26.388l-6.879-4.107-71.67 18.789 19.099-69.924-4.518-7.187c-18.995-30.188-28.956-64.995-28.956-100.83 0-104.424 85.018-189.44 189.545-189.44 50.619 0 98.158 19.714 133.892 55.548 35.731 35.835 57.705 83.376 57.603 133.996 0 104.528-87.176 189.543-191.598 189.543z" style="fill:#5d6c7b"/>
                                        <path d="M359.807 301.691c-5.647-2.872-33.677-16.635-38.914-18.48-5.237-1.952-9.035-2.875-12.834 2.875s-14.683 18.48-18.073 22.384c-3.285 3.799-6.674 4.312-12.321 1.437-33.473-16.735-55.445-29.878-77.521-67.768-5.853-10.062 5.854-9.344 16.736-31.11 1.85-3.801.926-7.086-.514-9.961-1.436-2.875-12.834-30.906-17.557-42.304-4.62-11.089-9.343-9.549-12.835-9.754-3.285-.206-7.086-.206-10.883-.206-3.8 0-9.96 1.438-15.197 7.085-5.236 5.75-19.92 19.51-19.92 47.541s20.432 55.139 23.205 58.937c2.874 3.798 40.148 61.299 97.338 86.045 36.144 15.607 50.314 16.94 68.386 14.271 10.985-1.643 33.679-13.759 38.401-27.107 4.723-13.347 4.723-24.743 3.285-27.105-1.334-2.57-5.135-4.006-10.782-6.78z" style="fill:#ffffff"/>
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
                <section class="kugoo-navbar-top row">
                    <div class="kugoo-navbar-top-left col-6">
                    <div class="kugoo-navbar-top-left-application">
                        <div class="kugoo-navbar-top-left-application-text">Открыть в приложении</div>
                        <div class="kugoo-navbar-top-left-application-rating"></div>
                        <div class="kugoo-navbar-top-left-application-downloads">2K</div>
                    </div>
                </div>
                    <div class="kugoo-navbar-top-right col-6">
                        <button class="kugoo-navbar-top-right-application-btn">Открыть</button>
                    </div>
                </section>
                <section class="kugoo-navbar-middle hidden">
                    <div class="kugoo-navbar-middle-brand">kugoo</div>
                    <button type="button" class="kugoo-navbar-middle-catalog kugoo-btn-violet">
                        <i class="kugoo-navbar-middle-catalog-icon"></i>
                        <span class="kugoo-navbar-middle-catalog-text">Каталог</span>
                    </button>
                    <div class="kugoo-navbar-middle-search">
                        <button class="kugoo-navbar-middle-search-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Везде</button>
                        <ul class="dropdown-menu kugoo-navbar-middle-search-dropdown-menu">
                            <li class="kugoo-navbar-middle-search-dropdown-item"><a class="dropdown-item kugoo-navbar-middle-search-dropdown-item-link" href="">Action</a></li>
                            <li class="kugoo-navbar-middle-search-dropdown-item"><a class="dropdown-item kugoo-navbar-middle-search-dropdown-item-link" href="">Separated link</a></li>
                        </ul>
                        <input type="text" class="kugoo-navbar-middle-search-field" placeholder="Искать самокат KUGO">
                        <button class="kugoo-navbar-middle-search-btn" type="button">+</button>
                    </div>
                    <button type="button" class="kugoo-navbar-middle-filter">Filter</button>
                    <button type="button" class="kugoo-navbar-middle-like">Like</button>
                    <button type="button" class="kugoo-navbar-middle-card">Card</button>
                </section>
                <section class="kugoo-navbar-middle">
                    <div class="kugoo-navbar-middle-brand">kugoo</div>
                    <button class="kugoo-navbar-middle-call"></button>
                    <button class="kugoo-navbar-toggler" type="button">
                        <i class="kugoo-navbar-toggler-icon"></i>
                    </button>
                </section>
                <section class="kugoo-navbar-bottom hidden">
                    <a href="" class="kugoo-navbar-bottom-link">О магазине</a>
                    <a href="" class="kugoo-navbar-bottom-link kugoo-navbar-bottom-link-hint">Доставка и оплата</a>
                    <a href="" class="kugoo-navbar-bottom-link">Тест драйв</a>
                    <a href="" class="kugoo-navbar-bottom-link">Блог</a>
                    <a href="" class="kugoo-navbar-bottom-link">Контакты</a>
                    <a href="" class="kugoo-navbar-bottom-link">Акции</a>
                </section>
                <section class="kugoo-navbar-bottom">
                    <input type="text" class="kugoo-navbar-bottom-search-field" placeholder="Искать самокат KUGO">
                </section>
            </div>
            <div class="kugoo-navbar-backgrounds">
                <div class="kugoo-navbar-backgrounds-top"></div>
                <div class="kugoo-navbar-backgrounds-middle"></div>
                <div class="kugoo-navbar-backgrounds-bottom"></div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <div class="navbar-collapse kugoo-mobile-menu">
        <ul class="kugoo-mobile-menu-items kugoo-mobile-menu-threads">
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">О магазине</a>
            </li>
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">Доставка и оплата</a>
            </li>
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">Тест-драйв</a>
            </li>
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">Блог</a>
            </li>
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">Контакты</a>
            </li>
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">Акции</a>
            </li>
        </ul>
        <ul class="kugoo-mobile-menu-items kugoo-mobile-menu-additional">
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">Сервис</a>
            </li>
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">Сотрудничество</a>
            </li>
            <li class="kugoo-mobile-menu-item">
                <a class="kugoo-mobile-menu-item-link" href="#">Заказать звонок</a>
            </li>
        </ul>
        <ul class="kugoo-mobile-menu-items kugoo-mobile-menu-chats">
            Online чат:
            <li class="kugoo-mobile-menu-item kugoo-mobile-menu-item-viber">
                <a href="viber://add?number=%2B78005055461" class="kugoo-mobile-menu-item-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="M424.908 70.792c-11.407-10.509-57.582-44.018-160.53-44.466 0 0-121.363-7.276-180.473 46.983-32.879 32.877-44.467 81.118-45.725 140.856-1.258 59.74-2.785 171.669 105.104 202.034h.089l-.089 46.353s-.718 18.775 11.678 22.548c14.913 4.672 23.716-9.611 37.999-24.973 7.816-8.444 18.595-20.841 26.77-30.275 73.842 6.2 130.528-7.994 136.995-10.059 14.913-4.851 99.265-15.632 112.919-127.563 14.193-115.525-6.827-188.469-44.737-221.438z" style="fill:#ffffff"/>
                        <path d="M437.396 283.786c-11.589 93.423-79.952 99.353-92.528 103.396-5.39 1.706-55.247 14.104-117.86 10.062 0 0-46.713 56.324-61.266 70.968-4.761 4.76-9.971 4.311-9.881-5.122 0-6.196.359-76.985.359-76.985-.09 0-.09 0 0 0-91.45-25.334-86.06-120.646-85.072-170.503.988-49.856 10.421-90.73 38.269-118.218 50.037-45.366 153.075-38.628 153.075-38.628 87.047.359 128.73 26.589 138.432 35.393 32.069 27.489 48.42 93.247 36.472 189.637z" style="fill:#5d6c7b"/>
                        <path d="M312.528 211.201c.359 7.725-11.229 8.265-11.588.538-.989-19.763-10.242-29.374-29.286-30.452-7.726-.45-7.007-12.038.628-11.588 25.065 1.347 38.989 15.72 40.246 41.502z" style="fill:#ffffff"/>
                        <path d="M330.765 221.351c.897-38.089-22.907-67.913-68.094-71.236-7.636-.539-6.827-12.128.81-11.589 52.103 3.774 79.86 39.617 78.872 83.095-.09 7.725-11.769 7.367-11.588-.27z" style="fill:#ffffff"/>
                        <path d="M372.986 233.389c.089 7.726-11.589 7.815-11.589.09-.539-73.213-49.317-113.099-108.518-113.548-7.636-.09-7.636-11.588 0-11.588 66.207.449 119.478 46.173 120.107 125.046zM362.834 321.514v.181c-9.702 17.068-27.848 35.934-46.533 29.915l-.18-.271c-18.955-5.299-63.6-28.296-91.808-50.755-14.553-11.499-27.849-25.063-38.09-38.089-9.252-11.589-18.594-25.334-27.667-41.862-19.134-34.586-23.356-50.037-23.356-50.037-6.019-18.685 12.756-36.832 29.913-46.533h.181c8.264-4.313 16.169-2.875 21.469 3.502 0 0 11.14 13.294 15.9 19.854 4.492 6.108 10.511 15.899 13.655 21.379 5.48 9.791 2.065 19.763-3.324 23.894l-10.78 8.625c-5.479 4.401-4.761 12.576-4.761 12.576s15.99 60.458 75.729 75.73c0 0 8.176.719 12.576-4.761l8.625-10.78c4.131-5.39 14.104-8.803 23.895-3.323 13.206 7.455 30.004 19.044 41.144 29.555 6.287 5.12 7.724 12.937 3.412 21.2z" style="fill:#ffffff"/>
                                    </svg>
                </a>
            </li>
            <li class="kugoo-mobile-menu-item kugoo-mobile-menu-item-whatsup">
                <a href="whatsapp://send?phone=78005055461" class="kugoo-mobile-menu-item-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="M417.103 92.845C374.08 49.721 316.787 26.001 255.897 26.001c-125.678 0-227.946 102.269-227.946 227.945 0 40.146 10.474 79.37 30.394 113.973l-32.343 118.08 120.852-31.728c33.268 18.173 70.744 27.724 108.941 27.724h.103c125.576 0 230.101-102.269 230.101-227.945-.001-60.889-25.874-118.08-68.896-161.205z" style="fill:#ffffff"/>
                        <path d="M255.897 443.593c-34.089 0-67.46-9.138-96.518-26.388l-6.879-4.107-71.67 18.789 19.099-69.924-4.518-7.187c-18.995-30.188-28.956-64.995-28.956-100.83 0-104.424 85.018-189.44 189.545-189.44 50.619 0 98.158 19.714 133.892 55.548 35.731 35.835 57.705 83.376 57.603 133.996 0 104.528-87.176 189.543-191.598 189.543z" style="fill:#5d6c7b"/>
                        <path d="M359.807 301.691c-5.647-2.872-33.677-16.635-38.914-18.48-5.237-1.952-9.035-2.875-12.834 2.875s-14.683 18.48-18.073 22.384c-3.285 3.799-6.674 4.312-12.321 1.437-33.473-16.735-55.445-29.878-77.521-67.768-5.853-10.062 5.854-9.344 16.736-31.11 1.85-3.801.926-7.086-.514-9.961-1.436-2.875-12.834-30.906-17.557-42.304-4.62-11.089-9.343-9.549-12.835-9.754-3.285-.206-7.086-.206-10.883-.206-3.8 0-9.96 1.438-15.197 7.085-5.236 5.75-19.92 19.51-19.92 47.541s20.432 55.139 23.205 58.937c2.874 3.798 40.148 61.299 97.338 86.045 36.144 15.607 50.314 16.94 68.386 14.271 10.985-1.643 33.679-13.759 38.401-27.107 4.723-13.347 4.723-24.743 3.285-27.105-1.334-2.57-5.135-4.006-10.782-6.78z" style="fill:#ffffff"/>
                                    </svg>
                </a>
            </li>
            <li class="kugoo-mobile-menu-item kugoo-mobile-menu-item-telegram">
                <a href="tg://resolve?domain=corehound" class="kugoo-mobile-menu-item-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                    <path d="m484.689 98.231-69.417 327.37c-5.237 23.105-18.895 28.854-38.304 17.972L271.2 365.631l-51.034 49.086c-5.646 5.647-10.371 10.372-21.256 10.372l7.598-107.722L402.539 140.23c8.523-7.598-1.848-11.809-13.247-4.21L146.95 288.614 42.619 255.96c-22.694-7.086-23.104-22.695 4.723-33.579L455.423 65.166c18.893-7.085 35.427 4.209 29.266 33.065z" style="fill:#5d6c7b"/>
                                </svg>
                </a>
            </li>
        </ul>
    </div>
    <div class="body-content">
        @yield('content')
    </div>
    <footer class="footer container-fluid">
        <div class="footer-content">
            <section class="footer-subscribe">
                <div class="footer-subscribe-text">Оставьте свою почту и станьте первым,<br>
                    кто получит скидку на новые самокаты</div>
                <input class="footer-feedback-subscribe-email-input" type="text" placeholder="Введите Ваш email">
                <button class="footer-feedback-subscribe-btn" type="button"><span class="footer-feedback-subscribe-btn-text">Подписаться</span></button>
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
                                    <a href="tel:+78005055461" class="footer-links-contacts-link footer-links-item-link">+7 (800) 505-54-61</a>
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
                        <div class="footer-media-brand">kugoo</div>
                        <div class="footer-media-store">
                            <button type="button" class="footer-media-google-play footer-media-btn">
                                <div class="footer-media-store-text">
                                    <span class="footer-media-store-text-top">Доступно на</span>
                                    <span class="footer-media-store-text-bottom">Google Play</span>
                                </div>
                            </button>
                            <button type="button" class="footer-media-app-store footer-media-btn">
                                <div class="footer-media-store-text">
                                    <span class="footer-media-store-text-top">Загрузите в</span>
                                    <span class="footer-media-store-text-bottom">App Store</span>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="footer-media-right col-6">
                        <div class="footer-media-socials">
                            <ul class="footer-media-socials-items">
                                <li class="footer-media-socials-item">
                                    <a class="footer-media-socials-item-link footer-media-socials-item-link-vkontakte" href="" role="button">
                                        <div class="footer-media-socials-item-link-text">
                                            <span class="footer-media-socials-item-link-text-top">Вконтакте</span>
                                            <span class="footer-media-socials-item-link-text-bottom">3300</span>
                                        </div>
                                    </a>
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
                            <li class="footer-payments-right-chat footer-payments-right-chat-viber">
                                <a href="viber://add?number=%2B78005055461" class="footer-payments-right-chat-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="M424.908 70.792c-11.407-10.509-57.582-44.018-160.53-44.466 0 0-121.363-7.276-180.473 46.983-32.879 32.877-44.467 81.118-45.725 140.856-1.258 59.74-2.785 171.669 105.104 202.034h.089l-.089 46.353s-.718 18.775 11.678 22.548c14.913 4.672 23.716-9.611 37.999-24.973 7.816-8.444 18.595-20.841 26.77-30.275 73.842 6.2 130.528-7.994 136.995-10.059 14.913-4.851 99.265-15.632 112.919-127.563 14.193-115.525-6.827-188.469-44.737-221.438z" style="fill:#ffffff"/>
                                        <path d="M437.396 283.786c-11.589 93.423-79.952 99.353-92.528 103.396-5.39 1.706-55.247 14.104-117.86 10.062 0 0-46.713 56.324-61.266 70.968-4.761 4.76-9.971 4.311-9.881-5.122 0-6.196.359-76.985.359-76.985-.09 0-.09 0 0 0-91.45-25.334-86.06-120.646-85.072-170.503.988-49.856 10.421-90.73 38.269-118.218 50.037-45.366 153.075-38.628 153.075-38.628 87.047.359 128.73 26.589 138.432 35.393 32.069 27.489 48.42 93.247 36.472 189.637z" style="fill:#5d6c7b"/>
                                        <path d="M312.528 211.201c.359 7.725-11.229 8.265-11.588.538-.989-19.763-10.242-29.374-29.286-30.452-7.726-.45-7.007-12.038.628-11.588 25.065 1.347 38.989 15.72 40.246 41.502z" style="fill:#ffffff"/>
                                        <path d="M330.765 221.351c.897-38.089-22.907-67.913-68.094-71.236-7.636-.539-6.827-12.128.81-11.589 52.103 3.774 79.86 39.617 78.872 83.095-.09 7.725-11.769 7.367-11.588-.27z" style="fill:#ffffff"/>
                                        <path d="M372.986 233.389c.089 7.726-11.589 7.815-11.589.09-.539-73.213-49.317-113.099-108.518-113.548-7.636-.09-7.636-11.588 0-11.588 66.207.449 119.478 46.173 120.107 125.046zM362.834 321.514v.181c-9.702 17.068-27.848 35.934-46.533 29.915l-.18-.271c-18.955-5.299-63.6-28.296-91.808-50.755-14.553-11.499-27.849-25.063-38.09-38.089-9.252-11.589-18.594-25.334-27.667-41.862-19.134-34.586-23.356-50.037-23.356-50.037-6.019-18.685 12.756-36.832 29.913-46.533h.181c8.264-4.313 16.169-2.875 21.469 3.502 0 0 11.14 13.294 15.9 19.854 4.492 6.108 10.511 15.899 13.655 21.379 5.48 9.791 2.065 19.763-3.324 23.894l-10.78 8.625c-5.479 4.401-4.761 12.576-4.761 12.576s15.99 60.458 75.729 75.73c0 0 8.176.719 12.576-4.761l8.625-10.78c4.131-5.39 14.104-8.803 23.895-3.323 13.206 7.455 30.004 19.044 41.144 29.555 6.287 5.12 7.724 12.937 3.412 21.2z" style="fill:#ffffff"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer-payments-right-chat footer-payments-right-chat-whatsup">
                                <a href="whatsapp://send?phone=78005055461" class="footer-payments-right-chat-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="M417.103 92.845C374.08 49.721 316.787 26.001 255.897 26.001c-125.678 0-227.946 102.269-227.946 227.945 0 40.146 10.474 79.37 30.394 113.973l-32.343 118.08 120.852-31.728c33.268 18.173 70.744 27.724 108.941 27.724h.103c125.576 0 230.101-102.269 230.101-227.945-.001-60.889-25.874-118.08-68.896-161.205z" style="fill:#ffffff"/>
                                        <path d="M255.897 443.593c-34.089 0-67.46-9.138-96.518-26.388l-6.879-4.107-71.67 18.789 19.099-69.924-4.518-7.187c-18.995-30.188-28.956-64.995-28.956-100.83 0-104.424 85.018-189.44 189.545-189.44 50.619 0 98.158 19.714 133.892 55.548 35.731 35.835 57.705 83.376 57.603 133.996 0 104.528-87.176 189.543-191.598 189.543z" style="fill:#5d6c7b"/>
                                        <path d="M359.807 301.691c-5.647-2.872-33.677-16.635-38.914-18.48-5.237-1.952-9.035-2.875-12.834 2.875s-14.683 18.48-18.073 22.384c-3.285 3.799-6.674 4.312-12.321 1.437-33.473-16.735-55.445-29.878-77.521-67.768-5.853-10.062 5.854-9.344 16.736-31.11 1.85-3.801.926-7.086-.514-9.961-1.436-2.875-12.834-30.906-17.557-42.304-4.62-11.089-9.343-9.549-12.835-9.754-3.285-.206-7.086-.206-10.883-.206-3.8 0-9.96 1.438-15.197 7.085-5.236 5.75-19.92 19.51-19.92 47.541s20.432 55.139 23.205 58.937c2.874 3.798 40.148 61.299 97.338 86.045 36.144 15.607 50.314 16.94 68.386 14.271 10.985-1.643 33.679-13.759 38.401-27.107 4.723-13.347 4.723-24.743 3.285-27.105-1.334-2.57-5.135-4.006-10.782-6.78z" style="fill:#ffffff"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer-payments-right-chat footer-payments-right-chat-telegtram">
                                <a href="tg://resolve?domain=corehound" class="footer-payments-right-chat-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="12" preserveAspectRatio="none" viewbox="0 0 512 512" width="12" xml:space="preserve">
                                        <path d="m484.689 98.231-69.417 327.37c-5.237 23.105-18.895 28.854-38.304 17.972L271.2 365.631l-51.034 49.086c-5.646 5.647-10.371 10.372-21.256 10.372l7.598-107.722L402.539 140.23c8.523-7.598-1.848-11.809-13.247-4.21L146.95 288.614 42.619 255.96c-22.694-7.086-23.104-22.695 4.723-33.579L455.423 65.166c18.893-7.085 35.427 4.209 29.266 33.065z" style="fill:#5d6c7b"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="footer-backgrounds">
            <div class="footer-backgrounds-subscribe"></div>
            <div class="footer-backgrounds-links"></div>
            <div class="footer-backgrounds-media"></div>
            <div class="footer-backgrounds-payments"></div>
        </div>
    </footer>
</div>
@vite('resources/js/app.js')
</body>
</html>
