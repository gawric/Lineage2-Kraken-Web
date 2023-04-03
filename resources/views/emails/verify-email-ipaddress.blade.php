@component('mail::message')

<h1>{{ __('messages.email_ipaddress_activate_header') }}</h1>
<br>
{{ __('messages.email_ipaddress_activate_text') }} {{ __($unknow_ip) }}
<br>
<h6>{{ __('messages.email_ipaddress_activate_unknow_ip') }} {{ __($unknow_ip) }}</h6>

@component('mail::button', ['url' => $url])
{{ __('messages.email_ipaddress_activate_text_button') }}
@endcomponent


<br>
{{ config('app.name') }}

@endcomponent