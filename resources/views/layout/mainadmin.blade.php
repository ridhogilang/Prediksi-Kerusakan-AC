<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Kerusakan AC | {{ $title }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/icon.png') }}">
    <!-- Datatable -->
    <link href="{{ asset('') }}admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('') }}admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('') }}admin/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    
    <div id="main-wrapper">

        @include('partials.navadmin')

        @yield('container')

        @include('partials.fotadmin')

    </div>
   
    <script src="{{ asset('') }}admin/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('') }}admin/js/custom.min.js"></script>
    <script src="{{ asset('') }}admin/js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="{{ asset('') }}admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}admin/js/plugins-init/datatables.init.js"></script>

</body>

</html>