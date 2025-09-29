<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title', 'Dreams Rent | Template')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/user/img/favicon.png') }}">

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/plugins/fontawesome/css/all.min.css') }}">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/aos/aos.css') }}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/select2/css/select2.min.css') }}">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/feather.css') }}">

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/owl.carousel.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/style.css') }}">
    
</head>

<body>

    {{-- Header --}}
    @include('site.reservation.layouts.header')

    {{-- Conteúdo principal --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('site.reservation.layouts.footer')

    {{-- Scripts JS --}}

    <!-- jQuery -->
    <script src="{{ url('assets/user/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ url('assets/user/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Aos -->
    <script src="{{ url('assets/user/plugins/aos/aos.js') }}"></script>

    <!-- Select2 JS -->
    <script src="{{ url('assets/user/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Top JS -->
    <script src="{{ url('assets/user/js/backToTop.js') }}"></script>

    <!-- Rangeslider JS -->
    <script src="{{ url('assets/user/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ url('assets/user/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ url('assets/user/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ url('assets/user/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ url('assets/user/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('assets/user/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Owl Carousel JS -->
    <script src="{{ url('assets/user/js/owl.carousel.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ url('assets/user/js/script.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init();
            }

            document.querySelectorAll('.img-slider').forEach(function(el) {
                $(el).owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    nav: true,
                    dots: true,
                    navText: [
                        "<i class='feather-chevron-left'></i>",
                        "<i class='feather-chevron-right'></i>"
                    ]
                });
            });
        });
    </script>



</body>

</html>
