<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/general/home.jpg') }}">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('style')

    <title>r-buzz</title>
    <style>


        /* Right side menu - properly contained within 450px */
        .right-side-menu {
            position: fixed;
            top: 0;
            right: -300px; /* Start hidden */
            width: 300px; /* Takes most of the 450px width */
            height: 100%;
            background: white;
            box-shadow: -2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }
        
        .right-side-menu.active {
            right: 0; /* Slides in to right edge of 450px frame */
        }

        /* Menu toggle button */
        .menu-toggle {
            cursor: pointer;
            font-size: 24px;
            padding: 10px;
            position: fixed;
            right: 15px; 
            top: 15px;
            z-index: 1001;
            color: white;
            background: rgba(0,0,0,0.5);
            border-radius: 4px;
            /* width: 40px; */
            height: 40px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            /* align-items: center; */
            justify-content: center;
        }

        /* .menu-toggle {
    width: 40px;
    height: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
    cursor: pointer;
    position: relative;
} */

        .menu-toggle span {
    display: block;
    background-color: white;
    height: 4px;
    width: 30px;
    margin: 3px 0;
    transition: all 0.3s ease;
}

.menu-toggle span:last-child {
    width: 15px; /* Smaller bottom line */
}

        /* Overlay - covers only the 450px frame */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%; /* Matches frame width */
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

        /* Menu content styling */
        .right-menu-content {
            padding: 60px 20px 20px;
            max-width: 480px;
            margin: auto;
        }
        
        .menu__nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .menu__nav li {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }
        
        .menu__nav li a {
            color: #333;
            text-decoration: none;
            font-size: 16px;
            display: block;
        }
        
        .menu__nav li.active a {
            color: #ff0000;
            font-weight: bold;
        }

        /* Header */
        .header-container {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
            margin-bottom: -3px;
        }
        
        .header-image {
            width: 100%;
            height: 100%;
            /* object-fit: cover; */
            object-position: center;
        }

        /* Main content */
        .main-content {
            position: relative;
            z-index: 1;
            background: white;
            /* padding-top: 20px; */
            width: 100%;
            padding: 20px 30px 0px 30px;
            box-sizing: border-box;
        }

        /* Footer */
        footer {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            background: white;
        }

        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            /* width: 450px; */
            height: 100%;
            background: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.3s ease;
        }

        /* Body styling */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            min-height: 100vh;
            background: #f5f5f5;
        }

        /* Hide unnecessary elements */
        .header-logo, .header-actions {
            display: none !important;
        }
        .footer {
    background-color: #000; /* Black background */
    color: #fff; /* White text color */
    text-align: center; /* Center-align text */
    padding: 10px; /* Padding for spacing */
}

.footer .container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer .text-14 {
    font-size: 13px;
}
.content {
    display: flex;
    padding: 0px 60px;
    justify-content: space-between; /* Push elements to the edges */
}

.left {
    text-align: left;
}

.right {
    text-align: right;
}

@media (max-width: 410px) {
    .main-content{
        padding: 20px 10px 0px 10px;
    }
    .content{
        padding: 10px 30px !important;
    }
}
    </style>
</head>

<body >
    <div class="mobile-frame" >
        <div class="preloader js-preloader">
            <div class="preloader__wrap">
                <div class="preloader__icon">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_41)">
                            <image href="{{ asset('assets/img/general/home.jpg') }}" x="25" y="25" width="40" height="40" />
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
                    
                     class="header-image">
            </div>
            @endif

            <div class="menu-toggle js-menu-toggle">
                <span></span>
                <span></span>
            </div>
            
            <!-- Right Side Menu - properly contained in 450px frame -->
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
                        $dashboardRoute = '/home';

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
            
          
            <div class=""></div>

            <div class="main-content">
                @yield('contents')
            </div>
            <div class="container content pb-2" style="font-size: 13px;background-color:white">
    <span class="left">運営会社：A company</span>
    <span class="right">プライバシーポリシー</span>
</div>
            <footer class="footer -type-1">
              
    <div class="container">
        <div class="">
            <div class="row ">
                <div class="col-12">
                    <div class="text-14">
                        著作権 2025 年 by Andfun Yangon Co.,LTD
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

        </main>
    </div>

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

            // Hide preloader when page loads
            window.addEventListener('load', function() {
                const preloader = document.querySelector('.js-preloader');
                if (preloader) {
                    setTimeout(function() {
                        preloader.style.opacity = '0';
                        setTimeout(function() {
                            preloader.style.display = 'none';
                        }, 300);
                    }, 500);
                }
            });
        });
    </script>
</body>
</html>