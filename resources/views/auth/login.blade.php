@extends('member.layouts.app')

@section('content')

<section class="form-shared padding-top-10px padding-bottom-10px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="user-action-form">
                    <div class="billing-form-item mb-0">
                                <div class="billing-title-wrap border-bottom-0 text-center">
                                    <h3 class="widget-title font-size-28 pb-2">
                                    <img src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="150px" alt="logo"> | {{ __('auth.login_text') }}
                                    </h3>
                                    <p>{{ __('auth.login_sub_text') }}</p>
                                </div>
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">
                                                            {{ __('auth.email_text') }}
                                                        </label>
                                                        <div class="form-group">
                                                            <i class="far fa-user form-icon"></i>
                                                            <input class="form-control" type="email" name="text" placeholder="{{ __('auth.email_placeholder') }}">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">
                                                            {{ __('auth.password_text') }}
                                                        </label>
                                                        <div class="form-group">
                                                            <i class="fa fa-lock form-icon"></i>
                                                            <input class="form-control password-field" type="password" name="password" placeholder="{{ __('auth.password_placeholder') }}">
                                                            <a href="javascript:void(0)" class="btn toggle-password" title="Toggle show/hide password">
                                                                <i class="far fa-eye eye-on"></i>
                                                                <i class="far fa-eye-slash eye-off"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="custom-checkbox mr-0 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <a href="/mot-de-passe-oublie" class="color-text">
                                                                    {{ __('auth.password_forgot_text') }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="btn-box margin-top-20px margin-bottom-20px">
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
