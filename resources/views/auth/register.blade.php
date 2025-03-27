<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveX | Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Quicksand", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url('https://images5.alphacoders.com/104/1045092.jpg');
            background-position: center;
            background-size: cover;
            padding: 40px 20px;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            width: min(750px, 95%);
            height: 70vh;
            padding: 0px;
        }

        .left-side {
            height: 100%;
            width: 100%;
            background-image: url('https://i.pinimg.com/736x/42/b2/3d/42b23df7419ae9d69e4a511d74d0dd5a.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            pointer-events: none;
            border-radius: 20px 0 0 20px;
        }
        .right-side {
            width: 100%;
            max-width: 450px; 
            padding: 60px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
        }

        .google-btn-group {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 32px;
        }

        .google-btn {
            display: flex;
            align-items: center;
            column-gap: 8px;
            width: max-content;
            font-size: 0.8rem;
            font-weight: 500;
            padding: 8px 16px;
            border: 2px solid #6b7280;
            border-radius: 5px;
            background-color: #f6f6f6;
            cursor: pointer;
            transition: transform 0.1s ease, background-color 0.5s, color 0.5s;
        }

        .google-btn:hover {
            background-color: #000;
            color: #eee;
        }

        .google-btn img {
            width: 20px;
            height: 20px;
        }

        .or {
            position: relative;
            text-align: center;
            margin-bottom: 24px;
            font-size: 1rem;
            font-weight: 600;
        }

        .or::before,
        .or::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #000;
        }

        .or::before {
            left: 0;
        }

        .or::after {
            right: 0;
        }

        input {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #ccc;
            outline: 0;
            border-radius: 5px;
            background-color: transparent;
            margin: 4px 0 18px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.5s;
        }

        input:focus {
            border: 2px solid #000;
        }

        label {
            font-weight: 600;
            font-size: 0.9rem;
        }

        .login-btn {
            width: 100%;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 8px 24px;
            margin: 12px 0 24px;
            border: 2px solid #6b7280;
            border-radius: 5px;
            background-color: #f6f6f6;
            cursor: pointer;
            transition: all 0.5s;
        }

        .login-btn:hover {
            background-color: #000;
            color: #eee;
        }

        .links {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        a:link,
        a:visited,
        a:hover,
        a:active {
            text-decoration: none;
        }

        a {
            color: #000;
            font-size: 0.88rem;
            font-weight: 600;
            letter-spacing: -1px;
            transition: all 0.4s ease;
        }

        a:hover {
            color: rgb(13, 133, 185);
        }
    </style>
</head>
<body>
    <main>
        
        <div class="right-side">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="google-btn-group">
                    <a href="{{ url('login/google') }}" class="google-btn">                        
                        <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/d1c98974-c62d-4071-8bd2-ab859fc5f4e9" alt="Google Logo" />
                        <span>Sign in with Google</span>
                    </a>
                </div>
                
                <div class="or">OR</div>
                
                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Enter Name" required autofocus autocomplete="name" />
                
                <label for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Enter Email" required autocomplete="username" />
                
                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Enter Password" required autocomplete="new-password" />
                
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />
                
                <button type="submit" class="login-btn">Register</button>
                
                <div class="links">
                    <a href="{{ route('login') }}">Already registered?</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
