@component('mail::message')

<h1>{{ __('messages.email_activate_header') }}</h1>

@component('mail::button', ['url' => $url])
{{ __('messages.email_activate_text_button') }}
@endcomponent


Regards,<br>
{{ config('app.name') }}

@endcomponent