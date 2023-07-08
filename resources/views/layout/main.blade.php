<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Kerusakan AC | {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('/assets/icon.png') }}"> 
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="preload" href="{{ asset('/assets/css/fonts/dm.css') }}" as="style" onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">
        @include('partials.header')

        <div>
            @yield('container')
        </div>
    </div>
    
    @include('partials.footer')
    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/assets/js/theme.js') }}"></script>
    @stack('footer')
</body>

</html>
