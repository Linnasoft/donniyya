@extends('layouts.site')

@section('content')

<section class="form-shared padding-top-10px padding-bottom-10px">
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
                                <span class="">{{ __('auth.login_text') }}</span>
                            </h3>
                            <p>{{ __('auth.login_sub_text') }}</p>
                        </div>
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <div id="success_notification" data-status="{{ (session('success')? session('success'): '') }}"></div>
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
                                <form method="post" autocomplete="off" action="{{ route('user_login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">
                                                    {{ __('auth.email_text') }}
                                                </label>
                                                <div class="form-group">
                                                    <i class="far fa-user form-icon"></i>
                                                    <input class="form-control" type="email" name="email" placeholder="{{ __('auth.email_placeholder') }}" value="{{ old('email') }}" />
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-custom-1">
                                                    <input type="checkbox" class="new-control-input" name="remember_me" />
                                                    <span class="new-control-indicator"></span>
                                                    <span class="new-chk-content">
                                                        {{ __('auth.remember_me_text') }}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                    <div class=" text-lg-right text-left">
                                                        <a href="{{ route('forgot') }}" class="color-text">
                                                            {{ __('auth.password_forgot_text') }}
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn-box margin-top-10px margin-bottom-20px">
                                                <button class="theme-btn btn-block border-0" type="submit">
                                                    {{ __('auth.login_btn_text') }}
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <p>
                                                {!! __('auth.no_account_text') !!}
                                            </p>
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

@endsection
