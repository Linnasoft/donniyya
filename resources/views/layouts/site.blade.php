@include('includes_for_both.function')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title id="pageTitle">{{ setTitle($page_title) }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon2.ico') }}"/>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   
    @include('site.inc.styles')  
</head>
<body>
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

    @include('site.inc.navbar')
    
    <div class="main-container" id="container">
        <div id="content" class="main-content">
            @yield('content')
            @include('site.inc.footer')
        </div>
    </div>

    @include('site.inc.scripts')

</body>
</html>
