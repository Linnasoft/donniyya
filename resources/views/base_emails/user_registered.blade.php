@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
    {{ config('app.name') }}
@endcomponent 
@endslot

{{-- Body --}}
    
        <h1>{{ __('auth.user_registered_mail_content_1', ['firstname' => $firstname]) }}</h1> <br>
        <h2>{{ __('auth.user_registered_mail_content_2', ['app' => config('app.name')]) }}</h2>
        <h2>{!! __('auth.user_registered_mail_content_3') !!}</h2>
        <h2>
            <ul>
                <li>{{ __('auth.user_registered_mail_content_4_1', ['email' => $email]) }}</li>
                <li>{!! __('auth.user_registered_mail_content_4_2') !!}</li>
            </ul>
        </h2>
        <h2>{!! __('auth.user_registered_mail_content_5', ['app' => config('app.name')]) !!}</h2> <br>
        <h2>{{ __('auth.user_registered_mail_content_6') }}</h2>
        <h2>{{ __('auth.user_registered_mail_content_7', ['app' => config('app.name')]) }}</h2> 
        <h2>
            <a href="{{ config('app.url') }}">
                {{ __('auth.user_registered_mail_content_8', ['app_link' => config('app.url')]) }}
            </a>
        </h2> 

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
    <h4>{{ __('auth.user_registered_mail_footer_1') }}</h4> <br>
    <h4>{!! __('auth.user_registered_mail_footer_2') !!}</h4>
@endcomponent
@endslot
@endcomponent