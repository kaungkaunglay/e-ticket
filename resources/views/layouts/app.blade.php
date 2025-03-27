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
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style')

    <title>r-buzz</title>
    <style>
        .bg-red{
            background-color: #b22222;
        }
        .t-red{
            color: #b22222
        }

        .t-small{
            font-size: 12px;
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
    {{-- <div class="preloader js-preloader">
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
    </div> --}}


    <main class="container">


        @include('layouts.resturants.header')

        @yield('contents')

        @include('layouts.resturants.footer')

    </main>



    <!-- JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <!-- <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script> -->

    {{-- <script src="{{ asset('assets/js/vendors.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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