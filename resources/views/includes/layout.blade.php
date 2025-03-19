<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/general/home.png') }}">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @yield('style')

    <title>r-buzz</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        @media screen and (min-width: 768px) {
            .mobile-only {
                display: none !important;

            }
        }

        @media screen and (max-width: 767px) {
            .mobile-only {
                display: block !important;

            }
        }

        .menu__nav li.active a {
            color: #ff0000;
            font-weight: bold;
            /* text-decoration: underline;  */
        }

        @media (max-width: 767px) {
            .header .header-logo img {
                max-width: 120px;
                margin-left: 42px !important;
            }
        }
        input[type="search"]::-webkit-search-cancel-button {
    display: none;
}

    </style>
</head>

<body>
    <div class="preloader js-preloader">
        <div class="preloader__wrap">
            <div class="preloader__icon">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_41)">

                        <image href="{{ asset('assets/img/general/home.png') }}" x="0" y="0" width="100" height="100" />
                    </g>

                    <defs>
                        <clipPath id="clip0_1_41">
                            <rect width="100" height="100" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="preloader__title">r-buzz</div>
    </div>


    <main>


        <div class="header-margin"></div>
        <header data-add-bg="" class="header bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
            <div data-anim="fade" class="header__container px-30 sm:px-20">
                <div class="row justify-between items-center">

                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                                <div class="mobile-overlay"></div>

                                <div class="header-menu__content">
                                    <div class="mobile-bg js-mobile-bg"></div>
                                    <div class="menu js-navList">
                                    <ul class="menu__nav text-dark-1 -is-active">
                                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                            <a href="{{ locale_route('home') }}">ホーム</a>
                                        </li>
                                        <li class="{{ request()->is('restaurant/search', 'search-price', 'search-checkbox', 'restaurant-lists') ? 'active' : '' }}">
                                            <a href="{{ locale_route('restaurant.search') }}">レストラン</a>
                                        </li>
                                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                            <a href="{{ locale_route('about') }}">私たちについて</a>
                                        </li>
                                        <li class="{{ request()->routeIs('support.page') ? 'active' : '' }}">
                                            <a href="{{ locale_route('support.page') }}">サポート</a>
                                        </li>
                                        <li class="mobile-only {{ request()->routeIs('login') ? 'active' : '' }}">
                                            <a href="{{ locale_route('login') }}">ログイン</a>
                                        </li>
                                        <li class="mobile-only {{ request()->routeIs('signup') ? 'active' : '' }}">
                                            <a href="{{ locale_route('signup') }}">登録</a>
                                        </li>
                                    </ul>
                                </div>

                                    <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="{{locale_route('home')}}" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                            <img src="{{asset('assets/img/general/logo-dark.svg')}}" alt="logo icon" style="width: 246px;">
                            <img src="{{asset('assets/img/general/logo-dark.svg')}}" alt="logo icon">
                        </a>
                    </div>


                    <div class="col-auto">
                        <div class="d-flex items-center">

                            <!-- <div class="row x-gap-20 items-center xxl:d-none">
                                <div class="col-auto">
                                    <button class="d-flex items-center text-14 text-dark-1" data-x-click="lang">
                                        <img src="{{asset('assets/img/general/lang.png')}}" alt="image" class="rounded-full mr-10">
                                        <span class="js-language-mainTitle">United Kingdom</span>
                                        <i class="icon-chevron-sm-down text-7 ml-15"></i>
                                    </button>
                                </div>
                            </div> -->


                            <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                                @auth
                                @php
                                $user = auth()->user();
                                $role = $user->roles()->first()->id ?? null;
                                $dashboardRoute = '/home'; // Default route

                                if ($role == 1) {
                                $dashboardRoute = route('admin.dashboard');
                                $logoutRoute = route('admin.logout');
                                } elseif ($role == 2) {
                                $dashboardRoute = route('vendor.dashboard');
                                $logoutRoute = route('vendor.logout');
                                } elseif ($role == 3) {
                                $dashboardRoute = route('user.dashboard');
                                $logoutRoute = route('logout');
                                }
                                @endphp

                                <div class="dropdown" style="position: relative; display: inline-block;">
                                    <a href="#" class="button -outline-red px-30 fw-400 text-14 h-50 text-red ml-20" style="display: flex; align-items: center;">
                                        {{ auth()->user()->first_name }}
                                        <i class="icon-chevron-down ml-10" style="font-size: 12px;"></i>
                                    </a>
                                    <div class="dropdown-content" style="display: none; position: absolute; right: 0; background-color: #fff; min-width: 160px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1); border-radius: 8px; z-index: 1000; padding: 8px 0;">
                                        <a href="{{ $dashboardRoute }}" style="display: block; padding: 8px 16px; color: #333; text-decoration: none; font-size: 14px; transition: background-color 0.2s;">
                                            {{ translate('Dashboard') }}
                                        </a>
                                        <form action="{{ $logoutRoute }}" method="POST" style="margin: 0;">
                                            @csrf
                                            @method($role == 1 || $role == 2 ? 'POST' : 'GET')
                                            <button type="submit" style="display: block; width: 100%; text-align: left; padding: 8px 16px; background: none; border: none; color: #333; font-size: 14px; cursor: pointer; transition: background-color 0.2s;">
                                                {{ translate('Logout') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                @else
                                <a href="{{ locale_route('login') }}" class="button -outline-red px-30 fw-400 text-14 h-50 text-red ml-20">
                            {{ translate('ログイン') }} 
                    </a>
                    <div class="dropdown" style="position: relative; display: inline-block;">
                        <a href="{{ locale_route('signup') }}" class="button -outline-red px-30 fw-400 text-14 h-50 text-red ml-20" style="display: flex; align-items: center;">
                            {{ translate('登録') }} <!-- Register -->
                            <i class="icon-chevron-down ml-10" style="font-size: 12px;"></i>
                        </a>
                    </div>
                                    <!-- <div class="dropdown-content" style="display: none; position: absolute; right: 0; background-color: #fff; min-width: 160px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1); border-radius: 8px; z-index: 1000; padding: 8px 0;">
                <a href="{{ locale_route('signup') }}" style="display: block; padding: 8px 16px; color: #333; text-decoration: none; font-size: 14px; transition: background-color 0.2s;">
                    {{ translate('User Register') }}
                </a>
                <a href="{{ locale_route('vendor.register') }}" style="display: block; padding: 8px 16px; color: #333; text-decoration: none; font-size: 14px; transition: background-color 0.2s;">
                    {{ translate('Shop Register') }}
                </a>
            </div> -->
                                </div>
                                @endauth
                            </div>


                            <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons" data-x-toggle="text-white">
                                <div><button class="d-flex items-center icon-menu text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        @yield('contents')

        <footer class="footer -type-1">
    <div class="container">
        <div class="pt-60 pb-60">
            <div class="row y-gap-40 justify-between xl:justify-start">
                <div class="col-xl-2 col-lg-4 col-sm-6 d-flex flex-column">
                    <a href="index.html" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                        <img src="{{asset('assets/img/general/logo-dark.svg')}}" alt="logo icon">
                    </a>
                    <p class="text-14 mt-30 fw-500 text-dark-1">テーブルを予約する</p>
                </div>
                
                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <h5 class="text-20 fw-500 mb-30">お問い合わせ</h5>
                    <div class="mt-30">
                        <div class="text-14 mt-30">フリーダイヤルカスタマーケア</div>
                        <a href="#" class="text-14 fw-500 text-blue-1 mt-5">電話 : 098888888</a>
                    </div>
                    <div class="mt-35">
                        <div class="text-14 mt-30">ライブサポートが必要ですか？</div>
                        <a href="#" class="text-14 fw-500 text-blue-1 mt-5">メール : {{config('email')}}</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <h5 class="text-20 fw-500 mb-30">会社情報</h5>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{locale_route('about')}}">私たちについて</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <h5 class="text-20 fw-500 mb-30">サポート</h5>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{locale_route('support.page')}}">よくある質問</a>
                        <a href="{{locale_route('terms')}}">利用規約</a>
                        <a href="{{locale_route('support.page')}}">お問い合わせ</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <h5 class="text-20 fw-500 mb-30">その他</h5>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{locale_route('home')}}">ホーム</a>
                        <a href="{{locale_route('login')}}">ログイン</a>
                        <a href="{{locale_route('signup')}}">登録</a>
                        <a href="{{locale_route('restaurant-list')}}">レストラン</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-20 border-top-light">
            <div class="row justify-between items-center y-gap-10">
                <div class="col-auto">
                    <div class="row x-gap-30 y-gap-10">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                著作権 2025 年 by Andfun Yangon Co.,LTD
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row y-gap-10 items-center">
                        <div class="col-auto">
<<<<<<< HEAD
                            <a href="{{locale_route('terms')}}">利用規約</a>
=======
                            <div class="row y-gap-10 items-center">
                                <div class="col-auto">
                                    <a href="{{locale_route('terms')}}">利用規約</a>
                                </div>
                            </div>
>>>>>>> 6979794471321799384edb8050e0413a6112de25
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    </main>

    <div class="langMenu is-hidden js-langMenu" data-x="lang" data-x-toggle="is-hidden">
        <div class="langMenu__bg" data-x-click="lang"></div>

        <div class="langMenu__content bg-white rounded-4">
            <div class="d-flex items-center justify-between px-30 py-20 sm:px-15 border-bottom-light">
                <div class="text-20 fw-500 lh-15">Select your language</div>
                <button class="pointer" data-x-click="lang">
                    <i class="icon-close"></i>
                </button>
            </div>

            <div class="modalGrid px-30 py-30 sm:px-15 sm:py-15">

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5 d-flex">
                        <div>
                            <img src="{{asset('assets/img/general/lang.png')}}" alt="image" class="rounded-full mr-10">
                            <div class="h-50"></div>
                        </div>
                        <div>
                            <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                            <div class="text-14 lh-15 mt-5 js-title">United States</div>
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5 d-flex">
                        <div>
                            <img src="{{asset('assets/img/general/lang.png')}}" alt="image" class="rounded-full mr-10">
                            <div class="h-50"></div>
                        </div>
                        <div>
                            <div class="text-15 lh-15 fw-500 text-dark-1">日本</div>
                            <div class="text-14 lh-15 mt-5 js-title">Japan</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="currencyMenu is-hidden js-currencyMenu" data-x="currency" data-x-toggle="is-hidden">
        <div class="currencyMenu__bg" data-x-click="currency"></div>

        <div class="currencyMenu__content bg-white rounded-4">
            <div class="d-flex items-center justify-between px-30 py-20 sm:px-15 border-bottom-light">
                <div class="text-20 fw-500 lh-15">Select your currency</div>
                <button class="pointer" data-x-click="currency">
                    <i class="icon-close"></i>
                </button>
            </div>

            <div class="modalGrid px-30 py-30 sm:px-15 sm:py-15">

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - лв.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - лв.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - лв.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - лв.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="mapFilter" data-x="mapFilter" data-x-toggle="-is-active">
        <div class="mapFilter__overlay"></div>

        <div class="mapFilter__close">
            <button class="button -blue-1 size-40 bg-white shadow-2" data-x-click="mapFilter">
                <i class="icon-close text-15"></i>
            </button>
        </div>

        <div class="mapFilter__grid" data-x="mapFilter__grid" data-x-toggle="-filters-hidden">
            <div class="mapFilter-filter scroll-bar-1">
                <div class="px-20 py-20 md:px-15 md:py-15">
                    <div class="d-flex items-center justify-between">
                        <div class="text-18 fw-500">Filters</div>

                        <button class="size-40 flex-center rounded-full bg-blue-1" data-x-click="mapFilter__grid">
                            <i class="icon-chevron-left text-12 text-white"></i>
                        </button>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Breakfast Included</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Romantic</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Airport Transfer</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">WiFi Included </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">5 Star</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Nightly Price</h5>
                        <div class="row x-gap-10 y-gap-30">
                            <div class="col-12">
                                <div class="js-price-rangeSlider">
                                    <div class="text-14 fw-500"></div>

                                    <div class="d-flex justify-between mb-20">
                                        <div class="text-15 text-dark-1">
                                            <span class="js-lower"></span>
                                            -
                                            <span class="js-upper"></span>
                                        </div>
                                    </div>

                                    <div class="px-5">
                                        <div class="js-slider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Amenities</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Breakfast Included</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">WiFi Included </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Pool</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Restaurant </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Air conditioning </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
                        <div class="row x-gap-10 y-gap-10 pt-10">

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Any</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Wonderful 4.5+</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Very good 4+</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Good 3.5+ </div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Style</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Budget</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Mid-range </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Luxury</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Family-friendly </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Business </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Central London</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Guests&#39; favourite area </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Westminster Borough</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Kensington and Chelsea </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Oxford Street </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mapFilter-results scroll-bar-1">
                <div class="px-20 py-20 md:px-15 md:py-15">
                    <div class="row y-gap-10 justify-between">
                        <div class="col-auto">
                            <div class="text-14 text-light-1">
                                <span class="text-dark-1 text-15 fw-500">3,269 properties</span>
                                in Europe
                            </div>
                        </div>

                        <div class="col-auto">
                            <button class="button -blue-1 h-40 px-20 md:px-5 text-blue-1 bg-blue-1-05 rounded-100">
                                <i class="icon-up-down mr-10"></i>
                                Top picks for your search
                            </button>
                        </div>
                    </div>


                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mapFilter-map">
                <div class="map js-map"></div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <!-- <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script> -->

    <script src="{{ asset('assets/js/vendors.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/r-buzz-html/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2025 09:17:58 GMT -->

</html>


<script>
    // Add hover functionality to show/hide dropdown
    document.addEventListener('DOMContentLoaded', function() {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('mouseenter', () => {
                dropdown.querySelector('.dropdown-content').style.display = 'block';
            });
            dropdown.addEventListener('mouseleave', () => {
                dropdown.querySelector('.dropdown-content').style.display = 'none';
            });
        });
    });
</script>