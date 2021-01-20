@component('mail::message')
#This message is from OSC website contact form
<br>
<strong>Name:</strong> {{$data['name']}} <br>
<strong>email:</strong> {{$data['email']}} <br>
<strong>Phone number:</strong> {{$data['number']}} <br> <br>
<strong>Message:</strong> <br>
{{$data['message']}}

@endcomponent
