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
                                <img src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="150px" alt="logo"> 
                                | {{ __('auth.register_text') }}
                            </h3>
                            <p>
                                {{ __('auth.register_sub_text') }}
                                <br>
                                <strong class="color-text-2 font-weight-medium">
                                    {!! __('auth.already_account_text') !!}
                                </strong>
                            </p>
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
                                <form method="post" action="{{ route('register_basic_member') }}" autocomplete="off">
                                    @csrf
                                    <div class="input-box">
                                        <label class="label-text">{{ __('auth.firstname_text') }}</label>
                                        <div class="form-group">
                                            <i class="far fa-user form-icon"></i>
                                            <input class="form-control" type="text" id="firstname" name="firstname" placeholder="{{ __('auth.firstname_placeholder') }}" value="{{ old('firstname') }}" />
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">{{ __('auth.lastname_text') }}</label>
                                        <div class="form-group">
                                            <i class="far fa-user form-icon"></i>
                                            <input class="form-control" type="text" id="lastname" name="lastname" placeholder="{{ __('auth.lastname_placeholder') }}" value="{{ old('lastname') }}" />
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">{{ __('auth.email_text') }}</label>
                                        <div class="form-group">
                                            <i class="far fa-envelope form-icon"></i>
                                            <input class="form-control" type="email" name="email" id="email" placeholder="{{ __('auth.email_placeholder') }}" value="{{ old('email') }}" />
                                        </div>
                                    </div>
                                    <div class="input-box mb-3">
                                        <label class="label-text">{{ __('auth.password_text') }}</label>
                                        <div class="form-group mb-0">
                                            <i class="fa fa-lock form-icon"></i>
                                            <input class="form-control password-field" type="password" name="password" id="password" placeholder="{{ __('auth.password_placeholder') }}">
                                            <a href="javascript:void(0)" class="btn toggle-password">
                                                <i class="fa fa-eye eye-on"></i>
                                                <i class="fa fa-eye-slash eye-off"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">{{ __('auth.password_confirm_text') }}</label>
                                        <div class="form-group">
                                            <i class="fa fa-lock form-icon"></i>
                                            <input class="form-control password-field" type="password" name="password_confirm" id="password_confirm" placeholder="{{ __('auth.password_confirm_placeholder') }}">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <div class="form-group">
                                            <label class="new-control new-checkbox new-checkbox-text checkbox-custom-1">
                                                <input type="checkbox" class="new-control-input" name="" />
                                                <span class="new-control-indicator"></span>
                                                <span class="new-chk-content">
                                                    {!! __('auth.terms') !!}
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-box margin-top-30px">
                                        <button class="theme-btn btn-block border-0" type="submit">
                                            {{ __('auth.register_btn_text') }}
                                        </button>
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
