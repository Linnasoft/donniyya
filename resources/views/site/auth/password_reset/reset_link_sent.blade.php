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

    <section class="booking-confirm-area padding-top-100px padding-bottom-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="confirm-page text-center">
                        <div class="confirm-icon mb-3">
                            <span class="fa fa-check icon-element"></span>
                        </div>
                        <div class="mb-3">
                            <img alt="logo" src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="200px" class=" mb-3">
                        </div>
                        <div class="toggler m-0">
                            <span class="badge">{{ __('auth.password_reset_text') }}</span>
                        </div>
                        <div class="section-heading pt-3">
                            <h2 class="sec__title pt-0 mb-2 before-none font-size-15 line-height-22 font-weight-regular">
                                {{ __('auth.password_reset_sub_text_1') }} : <br>
                                <b>{{ $email }}</b>
                            </h2>
                            <p class="sec__desc__">{{ __('auth.password_reset_sub_text_2') }}</p>
                        </div>
                        <div class="btn-box padding-top-30px">
                            <form method="post" action="/resent-password-link" autocomplete="off">
                                @csrf
                                <div class="btn-box margin-bottom-20px">
                                    <button class="theme-btn border-0" type="submit">
                                        {{ __('auth.password_reset_btn_text') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>