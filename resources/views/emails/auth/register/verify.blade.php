@component('mail::message')
# Email Confirmation

    please, refer  to following link:

@component('mail::button', ['uri' =>route('register.verify', ['token'=>$user->verify_token])])

Verify email

@endcomponent

thanks, <br>
{{ config('app.name') }}
@endcomponent

