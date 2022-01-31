<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="DevelopForMe Business Tech Solutions &  Services">
    <link href="{{asset('assets/images/favicon/favicon.png')}}" rel="icon">
    <title>@yield('tittle')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{asset('assets/css/libraries.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/css/hero.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/works.css')}}">

    <!--CSS Reset-->


    <!--Bootstrap CSS-->


    <!--jQuery-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!--Bootstrap JS-->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
</head>
<body>
<div class="wrapper">
    @include('layout.navbar')
    <section id="work" class=" slider d-flex align-items-center position-relative vh-100 cover hero">
        @yield('slide')
    </section>
    <section class="pricing">
        @yield('work')
    </section>

    @include('layout.sidebar')
    <a href="https://wa.me/message/DSBCJAXYMD26H1" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    @include('layout.footer')
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
{{--<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>--}}
<script src="{{asset('assets/js/portofolio.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>
