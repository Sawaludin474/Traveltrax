<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== BOXICONS ===============-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{ asset("/squadfree/assets/img/logo1.png") }}" rel="icon">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/libraries/swiper-bundle.min.css') }}" />
    @vite('resources/css/app.css')
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.css') }}" />

    <title>TravelTrax</title>
    
   
</head>

<body>
    <!--==================== HEADER ====================-->
    @include('header')

    <!--==================== MAIN ====================-->
    <div class="main">

        @yield('content')
    </div>

    <!--==================== FOOTER ====================-->
    @include('footer')
    <!--========== SCROLL UP ==========-->
    <a href="{{ url('#') }}" class="scrollup" id="scroll-up">
        <i class="bx bx-chevrons-up"></i>
    </a>

    @stack('script')

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('/frontend/assets/libraries/scrollreveal.min.js') }}"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('/frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('/frontend/assets/js/main.js') }}"></script>
    



    
</body>

</html>
