@extends('member.layouts.app')

@section('content')

<section class="form-shared padding-top-35px padding-bottom-10px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="billing-form-item mb-0">
                    <div class="billing-title-wrap text-center">
                        <h3 class="widget-title font-size-28">{{ __('auth.password_reset_text') }}</h3>
                        <p class="font-size-15">{{ __('auth.password_reset_sub_text') }}
                        </p>
                    </div>
                    <div class="billing-content">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <label class="label-text">{{ __('auth.email_text') }}</label>
                                    <div class="form-group">
                                        <span class="far fa-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="text" placeholder="{{ __('auth.email_placeholder') }}">
                                    </div>
                                </div>
                                <div class="btn-box margin-top-20px margin-bottom-20px">
                                    <button class="theme-btn btn-block border-0" type="submit">
                                        {{ __('auth.password_reset_btn_text') }}
                                    </button>
                                </div>
                                <p class="text-center">
                                    <a href="/connexion" class="color-text">{{ __('auth.login_sub_text') }}</a>
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
