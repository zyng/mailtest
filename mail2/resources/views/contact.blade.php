@component('mail::message') {{ $subject }} {{ $message }} Imię i nazwisko<br> {{ $name }} <br> Numer telefonu<br> {{ $phone
}}<br> Email
<br> {{ $email }} @endcomponent