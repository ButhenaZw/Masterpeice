@component('mail::message')
# Hello, {{ $notifiable->name }}

Thank you for signing up! To complete your registration, please verify your email address by clicking the button below.

<img src="https://images3.alphacoders.com/120/1208063.jpg" alt="Your Custom Icon" style="width: 50px; height: 50px;"/>

@component('mail::button', ['url' => $verificationUrl])
Verify Email Address
@endcomponent

If you did not register for an account, no further action is required.

Regards,  
Your Company Name
@endcomponent
