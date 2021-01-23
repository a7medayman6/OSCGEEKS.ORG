@component('mail::message')
#This is an automatic messeage sent by OSC
<br>
Hello {{$data['name']}}, we are sending you this mail to confirm your interview Date & Time.<br>
<strong>Your Date & Time:</strong> {{$data['interview_time']}} <br>
We are looking forward to see you at the interviews, have a good day.

@endcomponent
