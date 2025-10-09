<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/user/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/plugins/fontawesome/css/all.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/select2/css/select2.min.css') }}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/aos/aos.css') }}">

    <!-- Fearther CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/feather.css') }}">

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/owl.carousel.min.css') }}">

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/flatpickr/flatpickr.min.css') }}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/fancybox/fancybox.css') }}">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/slick/slick.css') }}">

    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/plugins/boxicons/css/boxicons.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ url('assets/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/status.css') }}">

    <!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MZP85RY5D8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MZP85RY5D8');
</script>

</head>

<body>

    @include('site.layouts.header')

    {{-- pegando o conteúdo início --}}
    @yield('content')
    {{-- pegando o conteúdo fim --}}

    @include('site.layouts.footer')


    <!-- jQuery -->
    <script src="{{ url('assets/user/js/jquery-3.7.1.min.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ url('assets/user/js/bootstrap.bundle.min.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- counterup JS -->
    <script src="{{ url('assets/user/js/jquery.waypoints.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>
    <script src="{{ url('assets/user/js/jquery.counterup.min.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ url('assets/user/plugins/select2/js/select2.min.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Aos -->
    <script src="{{ url('assets/user/plugins/aos/aos.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Top JS -->
    <script src="{{ url('assets/user/js/backToTop.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Owl Carousel JS -->
    <script src="{{ url('assets/user/js/owl.carousel.min.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Slick JS -->
    <script src="{{ url('assets/user/plugins/slick/slick.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Flatpickr JS -->
    <script src="{{ url('assets/user/plugins/flatpickr/flatpickr.min.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>
    <script src="{{ url('assets/user/plugins/flatpickr/forms-pickers.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ url('assets/user/plugins/moment/moment.min.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>
    <script src="{{ url('assets/user/js/bootstrap-datetimepicker.min.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Fancybox JS -->
    <script src="{{ url('assets/user/plugins/fancybox/fancybox.umd.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <!-- Custom JS -->
    <script src="{{ url('assets/user/js/script.js')}}" type="705cb7e2d14f5288c24a7639-text/javascript"></script>

    <script src="{{ url('assets/user/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="705cb7e2d14f5288c24a7639-|49" defer></script>
    <script defer
        src="{{ url('assets/user/static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015') }}"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"97fffa7f8ad877d9","version":"2025.8.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>

</body>

</html>
