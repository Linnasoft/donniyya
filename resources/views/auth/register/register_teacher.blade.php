@extends('member.layouts.app')

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
                                <form method="post">
                                    <div class="input-box">
                                        <label class="label-text">{{ __('auth.firstname_text') }}</label>
                                        <div class="form-group">
                                            <i class="far fa-user form-icon"></i>
                                            <input class="form-control" type="text" name="text" placeholder="{{ __('auth.firstname_placeholder') }}">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">{{ __('auth.lastname_text') }}</label>
                                        <div class="form-group">
                                            <i class="far fa-user form-icon"></i>
                                            <input class="form-control" type="text" name="text" placeholder="{{ __('auth.lastname_placeholder') }}">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">{{ __('auth.email_text') }}</label>
                                        <div class="form-group">
                                            <i class="far fa-envelope form-icon"></i>
                                            <input class="form-control" type="email" name="text" placeholder="{{ __('auth.email_placeholder') }}">
                                        </div>
                                    </div>
                                    <div class="input-box mb-3">
                                        <label class="label-text">{{ __('auth.password_text') }}</label>
                                        <div class="form-group mb-0">
                                            <i class="fa fa-lock form-icon"></i>
                                            <input class="form-control password-field" type="password" name="password" placeholder="{{ __('auth.password_placeholder') }}">
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
                                            <input class="form-control password-field" type="password" name="password" placeholder="{{ __('auth.password_confirm_placeholder') }}">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <span class="">{!! __('auth.terms') !!}</span>
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
