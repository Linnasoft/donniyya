@include('includes_for_both.function')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title id="pageTitle">{{ setTitle($page_title) }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon2.ico') }}"/>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   
    @include('dashboard.inc.styles')  
</head>
<body class="">

    <div class="loader-container">
        <div class="loader-circle">
            <div class="loader">
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
            </div>
        </div>
    </div>

    @include('dashboard.inc.navbar')  

    <section class="dashboard-area">
        
        @include('dashboard.inc.sidebar')  

        @yield('content')
    </section>

    @include('dashboard.inc.scripts')

</body>
</html>
