@extends('layouts.site')

@section('content')

<section class="form-shared padding-top-35px padding-bottom-10px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="billing-form-item mb-0 shadow">
                    <div class="billing-title-wrap text-center">
                        <h3 class="widget-title font-size-28">
                            <a href="/">
                                <img src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="150px" alt="logo">
                            </a> 
                            | 
                            <span>{{ __('auth.password_forgot_text') }}</span>
                        </h3>
                        <p class="font-size-15">{{ __('auth.password_forgot_sub_text') }}</p>
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
                            <form method="post" action="{{ route('send_email') }}" autocomplete="off">
                                @csrf
                                <div class="input-box">
                                    <label class="label-text">{{ __('auth.email_text') }}</label>
                                    <div class="form-group">
                                        <span class="far fa-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="{{ __('auth.email_placeholder') }}" value="{{ old('email') }}" />
                                    </div>
                                </div>
                                <div class="btn-box margin-top-20px margin-bottom-20px">
                                    <button class="theme-btn btn-block border-0" type="submit">
                                        {{ __('auth.password_forgot_btn_text') }}
                                    </button>
                                </div>
                                <p class="text-center">
                                    <a href="{{ route('connexion') }}" class="color-text">{{ __('auth.login_sub_text') }}</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
