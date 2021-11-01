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

    <section class="form-shared padding-top-40px padding-bottom-10px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="user-action-form shadow">
                        <div class="billing-form-item mb-0">
                            <div class="billing-title-wrap border-bottom-0 text-center">
                                <h3 class="widget-title font-size-28 pb-2">
                                    <a href="/">
                                        <img src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="150px" alt="logo">
                                    </a> 
                                    | 
                                    <span>{{ __('auth.new_password_text') }}</span>
                                </h3>
                            </div>
                            <div class="billing-content">
                                <div class="contact-form-action">
                                    <div class="" id="status_notification">
                                        @if(session('status'))
                                        <div class="alert alert-danger mb-4" role="alert"> 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button> 
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                    </div>
                                    <form method="post" autocomplete="off" action="{{ route('password.update') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">
                                                        {{ __('auth.password_text') }}
                                                    </label>
                                                    <div class="form-group">
                                                        <i class="fa fa-lock form-icon"></i>
                                                        <input class="form-control password-field" type="password" name="password" placeholder="{{ __('auth.password_placeholder') }}" />
                                                        <a href="javascript:void(0)" class="btn toggle-password" title="Toggle show/hide password">
                                                            <i class="far fa-eye eye-on"></i>
                                                            <i class="far fa-eye-slash eye-off"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">{{ __('auth.password_confirm_text') }}</label>
                                                    <div class="form-group">
                                                        <i class="fa fa-lock form-icon"></i>
                                                        <input class="form-control password-field" type="password" name="confirm_password" id="confirm_password" placeholder="{{ __('auth.password_confirm_placeholder') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="btn-box margin-top-10px margin-bottom-20px">
                                                    <input type="hidden" name="email" value="{{ $email }}" />
                                                    <input type="hidden" name="token" id="token" value="{{ $token }}" />
                                                    <button class="theme-btn btn-block border-0" type="submit">
                                                        {{ __('auth.login_btn_text') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script> 
    <script>var _token = $('meta[name="csrf-token"]').attr('content');</script>
    <script src="{{ asset('assets/js/site/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/site/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/site/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/site/main.js') }}"></script>

</body>
</html>