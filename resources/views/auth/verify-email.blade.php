<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveX | Verify Email</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

        
        @font-face {
    font-family: 'BOONE Regular';
    font-style: normal;
    font-weight: normal;
    src: local('BOONE Regular'), url('BOONE.woff') format('woff');
    }
  
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Quicksand", sans-serif;
        }

        body {
            background: url('https://images.alphacoders.com/104/1043424.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
            background-position: center;
            background-size: cover;
            height: 100vh;
            color: #fff;
            padding: 20px;
            position: relative;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        font-family: 'BOONE Regular';
            color: #3c5731;
        }

        .container p {
            font-size: 1.1rem;
            color: #2b2b2b;
            margin-bottom: 30px;
        }

        .verify-btn {
            background-color: #3c5731;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .verify-btn:hover {
            background-color: #27391f;
        }

        .or {
            display: flex;
            align-items: center;
            margin: 20px 0;
            text-align: center;
        }

        .or::before,
        .or::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: #ddd;
            margin: 0 10px;
        }

        .logout-icon {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 1.3rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
        padding: 10px;
    color: #3c5731; 
    cursor: pointer;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 10px;
}



    </style>
</head>
<body>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-icon">Logout
            <i class="fas fa-sign-out-alt"></i> 
        </button>
    </form>

    <div class="container">
        <h1>Email Verification</h1>
        <p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div>
                <x-primary-button class="verify-btn">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</body>
</html>
