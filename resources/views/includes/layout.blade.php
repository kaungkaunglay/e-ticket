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

        .menu__nav li.active a {
            color: #ff0000;
            font-weight: bold;
        }

        input[type="search"]::-webkit-search-cancel-button {
            display: none;
        }
        
        /* Header with framed background image */
        .header-container {
            position: relative;
            width: 100%;
            height: 593px;
            overflow: hidden;
            margin-bottom: -3px;
        }
        
        .header-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        
        /* Right side menu styles */
        .right-side-menu {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100%;
            background: white;
            box-shadow: -2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }
        
        .right-side-menu.active {
            right: 0;
        }
        
        /* Menu toggle on left side */
        .menu-toggle {
            cursor: pointer;
            font-size: 24px;
            padding: 15px;
            position: absolute;
            right: 15px;
            top: 15px;
            z-index: 1001;
            color: white;
            background: rgba(0,0,0,0.3);
            border-radius: 4px;
        }
        
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .right-menu-content {
            padding: 60px 20px 20px;
        }
        
        .right-menu-content .menu__nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .right-menu-content .menu__nav li {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }
        
        .right-menu-content .menu__nav li a {
            color: #333;
            text-decoration: none;
            font-size: 16px;
            display: block;
        }
        
        .no-scroll {
            overflow: hidden;
        }
        
        /* Content protection */
        .main-content {
            position: relative;
            z-index: 1;
            background: white;
            padding-top: 20px;
        }
        
        /* Hide all other header elements */
        .header-logo, .header-actions {
            display: none !important;
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
      
    @if(request()->routeIs('home'))
    <div class="header-container">
        <img src="{{ asset('assets/img/masthead/4/216409.jpg') }}" 
             alt="Header image" 
             class="header-image">
    </div>
@endif

        <div class="menu-toggle js-menu-toggle">☰</div>
        <!-- Right Side Menu -->
        <div class="right-side-menu js-right-side-menu">
            <div class="right-menu-content">
                <ul class="menu__nav text-dark-1">
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
                    <li>
                        <a href="{{ $dashboardRoute }}">ダッシュボード</a>
                    </li>
                    <li>
                        <form action="{{ $logoutRoute }}" method="POST">
                            @csrf
                            @method($role == 1 || $role == 2 ? 'POST' : 'GET')
                            <button type="submit" style="background: none; border: none; color: #333; font-size: 16px; cursor: pointer; padding: 0; text-align: left; width: 100%;">
                                ログアウト
                            </button>
                        </form>
                    </li>
                    @else
                    <!-- Login/Signup links in slider menu -->
                    <li class="{{ request()->routeIs('login') ? 'active' : '' }}">
                        <a href="{{ locale_route('login') }}">ログイン</a>
                    </li>
                    <li class="{{ request()->routeIs('signup') ? 'active' : '' }}">
                        <a href="{{ locale_route('signup') }}">登録</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
        
        <!-- Menu Overlay -->
        <div class="menu-overlay js-menu-overlay"></div>

        <div class="main-content">
            @yield('contents')
        </div>

        <footer class="footer -type-1">
            <div class="container">
                <div class="pt-60 pb-60">
                    <div class="row y-gap-40 justify-between xl:justify-start">
                        <div class="col-xl-2 col-lg-4 col-sm-6 d-flex flex-column">
                            <a href="index.html" class="header-logo mr-20">
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
                                <div class="text-14 mt-30">ライブサポートが必要ですか？」</div>
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
                                <a href="{{locale_route('restaurant.search')}}">レストラン</a>
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
                                    <a href="{{locale_route('terms')}}">利用規約</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="{{ asset('assets/js/vendors.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Right side menu toggle functionality
            const menuToggle = document.querySelector('.js-menu-toggle');
            const rightSideMenu = document.querySelector('.js-right-side-menu');
            const menuOverlay = document.querySelector('.js-menu-overlay');
            
            menuToggle.addEventListener('click', function() {
                rightSideMenu.classList.toggle('active');
                menuOverlay.classList.toggle('active');
                document.body.classList.toggle('no-scroll');
            });
            
            menuOverlay.addEventListener('click', function() {
                rightSideMenu.classList.remove('active');
                menuOverlay.classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
            
            // Close menu when clicking on a link
            const menuLinks = document.querySelectorAll('.right-side-menu a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    rightSideMenu.classList.remove('active');
                    menuOverlay.classList.remove('active');
                    document.body.classList.remove('no-scroll');
                });
            });
        });
    </script>
</body>
</html>