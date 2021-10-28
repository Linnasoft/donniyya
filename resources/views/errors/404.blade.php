<!DOCTYPE html>
<html lang="">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title id="pageTitle">{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon2.ico') }}"/>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/site/style.css') }}" />

    <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/css/regular.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/web/css/regular.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/web/css/brands.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/web/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/web/css/all.css')}}">
</head>
<body>

    <section class="error-area padding-top-100px padding-bottom-50px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-content">
                        <div class="section-heading">
                            <h2 class="sec__title mb-3">{{ __('errors.404_title') }}</h2>
                            <p class="sec__desc__">
                                {{ __('errors.404_description') }}
                            </p>
                        </div>
                        <div class="btn-box mt-4">
                            <a href="/" class="theme-btn"><i class="fa fa-reply"></i> 
                                {{ __('errors.404_btn') }}
                            </a>
                        </div>
                        <div class="error-img mt-4">
                            <img src="{{ asset('assets/img/logo/404.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
