@component('mail::message')
    #Thank you for your email

    <strong>Name </strong> {{ $data['name'] }}
    <br>
    <strong>E-mail </strong> {{ $data['email'] }}
    <br>
    <strong>Message </strong>
    {{ $data['message'] }}
    <br>
@endcomponent
