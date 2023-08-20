<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KachaMorich | @yield('title')</title>

    @include('Front.includes.css')
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

@include('Front.includes.header')

<!-- Hero Section Begin -->
@include('Front.includes.menu')

@yield('body')
<!-- Footer Section Begin -->
@include('Front.includes.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('/')}}assets/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.nice-select.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery-ui.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.slicknav.js"></script>
<script src="{{asset('/')}}assets/js/mixitup.min.js"></script>
<script src="{{asset('/')}}assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}assets/js/main.js"></script>



</body>

</html>
