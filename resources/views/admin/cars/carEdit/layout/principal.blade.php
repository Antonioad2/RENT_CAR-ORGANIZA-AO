<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/theme.min.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MZP85RY5D8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MZP85RY5D8');
</script>
</head>
<body>
    @include('admin._parcial.header')
    @include('admin._parcial.menu')
    <main class="nxl-container">
        @yield('content-carEdit')
        @include('admin._parcial.footer')
    </main>
    @include('admin._parcial.thema')
    <script src="{{ url('assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/select2-active.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/datepicker.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/cleave.min.js') }}"></script>
    <script src="{{ url('assets/js/common-init.min.js') }}"></script>
    <script src="{{ url('assets/js/theme-customizer-init.min.js') }}"></script>

    @stack('scripts')

</body>
</html>