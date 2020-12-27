<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel | Bootstrap blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css"/>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/owl.carousel2/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/owl.carousel2/assets/owl.theme.default.min.css"/>
    <!-- Google fonts-->
    <link rel="stylesheet" href="{{asset('assets')}}/https://fonts.googleapis.com/css?family=Nunito:300,400&amp;display=swap"/>
    <link rel="stylesheet" href="{{asset('assets')}}//https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap"/>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.default.css" id="theme-stylesheet"/>
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css"/>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.png"/>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
@include('home._header')
@include('home._category')
@include('home._menu')
<!-- Navbar 1 -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
    <div class="container text-center"><a class="navbar-brand mx-auto" href="index.html"><img class="mb-2" src="img/logo.svg" alt="" width="140">
            <p class="text-small text-uppercase text-gray mb-0">Your world</p></a></div>


</nav>

</header>
@include('home._footer')
</body>
</html>
