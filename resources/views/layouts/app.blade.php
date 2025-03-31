<!DOCTYPE html>
<html lang='en' data-x='html' data-x-toggle='html-overflow-hidden'>

<head>

    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' type='image/png' href='{{ asset('assets/img/general/home.png') }}'>

    <!-- Google fonts -->
    <link rel='preconnect' href='https://fonts.googleapis.com/'>
    <link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap' rel='stylesheet'>
    <!-- Stylesheets -->
    <link rel='stylesheet' href='{{ asset('assets/css/vendors.css') }}'>
    {{-- <link rel='stylesheet' href='{{ asset('assets/css/main.css') }}'> --}}
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css'
        integrity='sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    @yield('style')

    <title>r-buzz</title>
    <style>
        .bg-red {
            background-color: #b22222;
        }

        .t-red {
            color: #b22222
        }

        .t-small {
            font-size: 12px;
        }

        .t-10 {
            font-size: 10px;
        }

        .t-9 {
            font-size: 10px;
        }

        .t-8 {
            font-size: 8px;
        }

        .t-7 {
            font-size: 7px;
        }

        .t-6 {
            font-size: 6px;
        }

        .t-5 {
            font-size: 5px;
        }

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

        /* Right side menu - properly contained within 450px */
        .right-side-menu {
            position: fixed;
            top: 0;
            right: -300px;
            /* Start hidden */
            width: 300px;
            /* Takes most of the 450px width */
            height: 100%;
            background: white;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }

        .right-side-menu.active {
            right: 0;
            /* Slides in to right edge of 450px frame */
        }

        /* Menu toggle button */
        .menu-toggle {
            cursor: pointer;
            font-size: 24px;
            padding: 10px;
            position: absolute;
            right: 15px;
            /* Positioned within 450px frame */
            top: 15px;
            z-index: 1001;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 4px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Overlay - covers only the 450px frame */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 450px;
            /* Matches frame width */
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
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

        input[type='search']::-webkit-search-cancel-button {
            display: none;
        }
    </style>
</head>

<body>

    <header class='position-fixed w-100 top-0 left-0'>
        @include('layouts.resturants.header')
    </header>




    <div class='right-side-menu js-right-side-menu'>
        <div class='right-menu-content'>
            <ul class='menu__nav text-dark-1'>
                <li class='{{ request()->routeIs('home') ? 'active' : '' }}'>
                    <a href='{{ locale_route('home') }}'>ホーム</a>
                </li>
                <li
                    class='{{ request()->is('restaurant/search', 'search-price', 'search-checkbox', 'restaurant-lists') ? 'active' : '' }}'>
                    <a href='{{ locale_route('restaurant.search') }}'>レストラン</a>
                </li>
                <li class='{{ request()->routeIs('about') ? 'active' : '' }}'>
                    <a href='{{ locale_route('about') }}'>私たちについて</a>
                </li>
                <li class='{{ request()->routeIs('support.page') ? 'active' : '' }}'>
                    <a href='{{ locale_route('support.page') }}'>サポート</a>
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
                        <a href='{{ $dashboardRoute }}'>ダッシュボード</a>
                    </li>
                    <li>
                        <form action='{{ $logoutRoute }}' method='POST'>
                            @csrf
                            @method($role == 1 || $role == 2 ? 'POST' : 'GET')
                            <button type='submit'
                                style='background: none; border: none; color: #333; font-size: 16px; cursor: pointer; padding: 0; text-align: left; width: 100%;'>
                                ログアウト
                            </button>
                        </form>
                    </li>
                @else
                    <li class='{{ request()->routeIs('login') ? 'active' : '' }}'>
                        <a href='{{ locale_route('login') }}'>ログイン</a>
                    </li>
                    <li class='{{ request()->routeIs('signup') ? 'active' : '' }}'>
                        <a href='{{ locale_route('signup') }}'>登録</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>

    <!-- Menu Overlay - covers only the 450px frame -->
    <div class='menu-overlay js-menu-overlay'></div>

    <main class='' style='margin-top: 90px;'>


        <!-- Modal Structure -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <small class="modal-title text-center fs-6">ネット予約</small>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    </div>
                    <div class="modal-body border-0 ">
                        <div class="row">
                            <div class="col-8 mb-2">
                                <select class="form-select rounded-0 border-dark shadow-0">
                                    <option  selected>○ 3月24日(月)</option>
                                    <option >○ 3月25日(月)</option>
                                    <option >○ 3月26日(月)</option>
                                </select>
                            </div>

                            <div class="col-4 mb-2">
                                <select class="form-select  rounded-0 border-dark shadow-0">
                                    <option  selected>○ 2名</option>
                                    <option >○ 3名</option>
                                    <option >○ 4名</option>
                                </select>
                            </div>

                            <div class="col-4 mb-2">
                                <select class="form-select form-select-sm  rounded-0 border-dark shadow-0">
                                    <option  selected>01時</option>
                                    <option >02時</option>
                                    <option >03時</option>
                                </select>
                            </div>

                            <div class="col-4 mb-2">
                                <select class="form-select form-select-sm rounded-0 border-dark shadow-0">
                                    <option  selected>01分</option>
                                    <option >02分</option>
                                    <option >03分</option>
                                </select>
                            </div>

                            


                        </div>
                        
                    </div>
                    <div class="modal-footer d-flex justify-content-center border-0">
                        <button type="button" class="btn btn-danger px-5 t-7 rounded-0" data-bs-dismiss="modal">予約</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>

        @yield('contents')

    </main>

    <footer class="w-100">
        @include('layouts.resturants.footer')
    </footer>
    {{-- <div class='preloader js-preloader'>
        <div class='preloader__wrap'>
            <div class='preloader__icon'>
                <svg width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <g clip-path='url(#clip0_1_41)'>

                        <image href='{{ asset('assets/img/general/home.png') }}' x='0' y='0' width='100' height='100' />
                    </g>

                    <defs>
                        <clipPath id='clip0_1_41'>
                            <rect width='100' height='100' fill='white' />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

        <div class='preloader__title'>r-buzz</div>
    </div> --}}



    <!-- JavaScript -->
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM'></script>
    <!-- <script src='../../../unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js'></script> -->

    {{-- <script src='{{ asset('assets/js/vendors.js') }}'></script> --}}
    {{-- <script src='{{ asset('assets/js/main.js') }}'></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



    <!-- Mirrored from creativelayers.net/themes/r-buzz-html/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2025 09:17:58 GMT -->


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

        window.addEventListener('resize', function() {
            const getBody = document.querySelector('body');
            const getFooter = document.querySelector('footer');

            if (getBody.clientHeight < window.innerHeight) {
                getFooter.classList.add('position-fixed');
                getFooter.classList.add('bottom-0');
                getFooter.classList.add('left-0');
            } else {
                getFooter.classList.remove('position-fixed');
                getFooter.classList.remove('bottom-0');
                getFooter.classList.remove('left-0');
            }
        });
    </script>

</body>


</html>
