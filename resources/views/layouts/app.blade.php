<!DOCTYPE html>
<html lang="en">
<head>

    @include('partials._header')

    <!-- Basic page information -->
    <title>CompuMás</title>
    <meta name="description" content="">
    <meta name="author" content="">

    @include('partials._css')
    @include('partials._pixel')

</head>

<body class="preloadable" data-preloadable-logo="<img src='images/preloader.gif'/>" data-scroll-speed="1000" style="background: linear-gradient(to right,#c9ebfc,whitesmoke);">

    @yield('modals')

    @yield('content')

    @include('partials._scripts')
    @include('partials._notifications')

</body>
</html>