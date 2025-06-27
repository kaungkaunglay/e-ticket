<!DOCTYPE html>
<html lang='en' data-x='html' data-x-toggle='html-overflow-hidden'>

<head>

    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' type='image/png' href='{{ asset('assets/img/general/home.jpg') }}'>

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

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
            width: 100%;
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

<body style="max-width: 460px; margin: 0 auto;">

    <header class='position-fixed top-0 left-50 w-100' style="max-width: 460px;transform: translate-x: -50%;">
        @include('layouts.resturants.header')
    </header>

    {{-- <main class='' style='margin-top: 90px;'>
        @yield('contents')
    </main>

    <footer class="w-100">
        @include('layouts.resturants.footer')
    </footer> --}}

    <div class="d-flex flex-column min-vh-100">
        <!-- Modal Structure -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <small class="modal-title text-center fs-6">ネット予約</small>
                    </div>
                    <div class="modal-body border-0 d-flex flex-column">
                        <form action="{{ route('booking.detail', ['id']) }}" method="GET">
                            <div class="d-flex mb-2">
                                <div class="me-3" style="width: 65%;">
                                    <div class="rounded-0 border border-dark d-flex justify-content-between align-items-center px-2 mb-2">
                                        <input type="text" name="date" id="modal-datepicker" class="form-control form-control bg-transparent border-0 outline-0 shadow-none" placeholder="YYYY-MM-DD" required>
                                        <i class="fa-solid fa-calendar-days opacity-50"></i>
                                    </div>

                                    <div class="d-flex">
                                        <div class="w-50 me-2">
                                            <select name="hour" class="form-select form-select-sm rounded-0 border-dark shadow-none" required>
                                                @for($i = 0; $i < 24; $i++)
                                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}" {{ $i == 12 ? 'selected' : '' }}>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}時</option>
                                                @endfor
                                            </select>
                                        </div>
            
                                        <div class="w-50">
                                    <select name="minute" class="form-select form-select-sm rounded-0 border-dark shadow-none" required>
                                        @for($i = 0; $i < 60; $i++)
                                            <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}分</option>
                                        @endfor
                                    </select>
                                </div>
                                    </div>
                                </div>
                                
                                <div style="width: 35%;">
                                    <select name="people" class="form-select rounded-0 border-dark shadow-none" required>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}" {{ $i == 2 ? 'selected' : '' }}>○ {{ $i }}名</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center border-0">
                                <button type="submit" class="w-50 btn btn-danger px-5 t-10 rounded-0">予約</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <main class="flex-grow-1 " style='margin-top: 40px;'>
            @yield('contents')
        </main>
        
        <footer class="bg-black text-white text-center py-1 px-4 w-100 t-10">
            Copyright 2025 designed by Andfun Yangon Co., Ltd
        </footer>
    </div>
    

    
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
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Flatpickr Japanese Locale -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
   
    flatpickr("#modal-datepicker", {
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "Y年m月d日",
        allowInput: true,
        disableMobile: true,
        static: true,
        locale: 'ja',
        defaultDate: "today",
        minDate: "today"
    });

  
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', () => {
            dropdown.querySelector('.dropdown-content').style.display = 'block';
        });
        dropdown.addEventListener('mouseleave', () => {
            dropdown.querySelector('.dropdown-content').style.display = 'none';
        });
    });

    
    const menuToggle = document.querySelector('.js-menu-toggle');
    const rightSideMenu = document.querySelector('.js-right-side-menu');
    const menuOverlay = document.querySelector('.js-menu-overlay');
    const menuClose = document.querySelector('.js-menu-close');

    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            rightSideMenu.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });
    }

    if (menuOverlay) {
        menuOverlay.addEventListener('click', function() {
            rightSideMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    }

    if (menuClose) {
        menuClose.addEventListener('click', function() {
            rightSideMenu.classList.remove('active');
            menuOverlay.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    }

   
    const bookingForm = document.querySelector('#myModal form');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            const hourSelect = this.querySelector('[name="hour"]');
            const minuteSelect = this.querySelector('[name="minute"]');
            const dateInput = this.querySelector('[name="date"]');
            
            const selectedHour = parseInt(hourSelect.value);
            const selectedMinute = parseInt(minuteSelect.value);
            const selectedDate = dateInput.value;
            
            const now = new Date();
            const today = now.toISOString().split('T')[0];
            
            if (selectedDate === today) {
                const currentHour = now.getHours();
                const currentMinute = now.getMinutes();
                
                if (selectedHour < currentHour || 
                   (selectedHour === currentHour && selectedMinute < currentMinute)) {
                    e.preventDefault();
                    alert('過去の時間を選択することはできません。未来の時間を選択してください。');
                    return false;
                }
            }
            return true;
        });
    }

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

   
    window.addEventListener('resize', function() {
        const getBody = document.querySelector('body');
        const getFooter = document.querySelector('footer');

        if (getBody && getFooter) {
            if (getBody.clientHeight < window.innerHeight) {
                getFooter.classList.add('position-fixed', 'bottom-0', 'left-0');
            } else {
                getFooter.classList.remove('position-fixed', 'bottom-0', 'left-0');
            }
        }
    });
});
</script>

</body>


</html>