@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
    {{ config('app.name') }}
    <img alt="logo" src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="200px" class="">
@endcomponent 
@endslot

{{-- Body --}}
![{{ config('app.name') }}]({{asset('assets/img/logo/logo_og_footer.png')}})
<h2 style="margin-bottom:20px">Salut {{ $firstname }},</h2>

<p style="font-family:Arial;font-size:14px;color:#000000;margin-bottom:20px">
BIENVENUE !!!
</p>

@component('mail::button', ['url' => config('app.url')])
Se connecter à {{ config('app.name') }}
@endcomponent

<p style="font-family:Arial;font-size:14px;color:#000000;margin-bottom:20px">
L'équipe de {{ config('app.name') }}
</p>

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
    Mail automatique - Ne pas répondre.
@endcomponent
@endslot
@endcomponent