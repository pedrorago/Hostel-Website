<html lang="{{ config('app.locale') }}">
<head>


    <title>Hostel - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta author="Pedro Rago">

    <link rel="icon" href="img/favicon.ico">

    <base href="">

    <meta property="og:type" content="website">

    <meta charset="utf-8">
    <link href="//cdn.muicss.com/mui-0.9.39/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.9.39/js/mui.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gilda+Display|Playfair+Display|Playfair+Display+SC" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="/css/plugins/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/plugins/slick-theme.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="/css/plugins/jquery.fancybox.min.css" /> -->

    <link rel="stylesheet" href="/css/lightbox.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>  

    <div class="content">

        @include('templates.header')

        @yield('content')

        @include('templates.footer')

    </div>

    <script src="/js/jquery-3.2.1.min.js" ></script>
    <script src="/js/plugins/jquery.validate.js" ></script>
    <script src="/js/plugins/slick.min.js" ></script>
    <script src="/js/plugins/jquery.mask.js" ></script>
    <script src="/js/lightbox.js"></script>
    
    <!-- <script src="/js/plugins/jquery.fancybox.min.js"></script> -->
    <script src="/js/app.js"></script>

</body>
</html>