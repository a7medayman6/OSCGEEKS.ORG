@component('mail::message')
#This is an automatic messeage sent by OSC
<br>
Dear {{$data['name']}},<br><br>
We wish this mail finds you well and safe. We're glad to inform you that your interview appointment has been scheduled successfully. Due to the current circumstances, your interview will be online as well as our workshops sessions. <br><br>
<u>Interview details:</u> <br>
<strong>Date & Time:</strong> <div class="red">{{$data['interview_time']}}</div> <br>
<strong>Platform:</strong> <div class="red">Microsoft Teams</div> <br>
<strong>Meeting Link:</strong> <div class="red">will be sent to your email before your appointment by just one hour, so please keep track of your inbox.</div>
<br><br>
<u>Kindly note that:</u>
<ol>
    <li>The camera will be opened during the interview so please make sure that you are setting in a quite place with a stable internet connection.</li> <br>
    <li>The interview will <strong>NOT</strong> be recorded.</li> <br>
    <li>You should reply to this mail with a confirmation on the scheduled appointment and the interview rules. If you didn't reply to this mail by <strong>maximum 1 day</strong>, your scheduled interview will be <strong>canceled.</strong></li><br>
</ol>
<br><br>
Thank you and hope to see you soon.<br> <br>
Best Regards <br>
<strong>OSC HR Team<strong>

@endcomponent