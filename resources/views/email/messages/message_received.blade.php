@component('mail::message')
# Message received from user

Name: {{ $name }}<br>
phone:@if ($phone == null) N/A<br> @else {{ $phone }}<br> @endif
email: {{ $email }}<br>

<div style="margin:10px 0 10px 0; padding:5px 10px 5px 10px; background-color:#eeeeee;">
    <p>{{ $body }}</p>
</div>
@endcomponent
