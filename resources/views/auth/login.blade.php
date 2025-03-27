<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveX | Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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


/* Left Side */

.left-side {
            height: 100%;
            width: 100%;
            background-image: url('https://w0.peakpx.com/wallpaper/720/449/HD-wallpaper-dodge-challanger-car-green-muscle-thumbnail.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            pointer-events: none;
            border-radius: 20px 0 0 20px;
        }

/* Right Side */

.right-side {
            width: 100%;
            max-width: 450px; 
            padding: 60px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
        }


.btn-group {
    display: flex;
    justify-content: center; 
    align-items: center;
    gap: 5px;
    margin-bottom: 32px;
}

.btn-group .btn {
    display: flex;
    align-items: center;
    column-gap: 4px;
    font-size: 0.8rem;
    font-weight: 500;
    padding: 8px 6px;
    border: 2px solid #6b7280;
    border-radius: 5px;
    background-color: #f6f6f6;
    transform: scale(1);
    cursor: pointer;
    transition: transform 0.1s ease, background-color 0.5s, color 0.5s;
}


.btn-group .btn:focus {
    transform: scale(0.97);
}

.btn-group .btn:hover {
    background-color: #000;
    color: #eee;
}

.btn img {
    width: 16px;
    height: 16px;
}

.logo {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f6f6f6;
    border-radius: 50%;
    padding: 2px;
}

/* OR */

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

/* Inputs and Labels */

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

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
    -webkit-background-clip: text;
    -webkit-text-fill-color: #000;
    transition: background-color 5000s ease-in-out 0s;
}

label {
    font-weight: 600;
    font-size: 0.9rem;
}

/* Login Button */

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

/* Links */

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


/* -- External Social Link CSS Styles -- */

#source-link {
    top: 120px;
}

#source-link>i {
    color: rgb(94, 106, 210);
}

#yt-link {
    top: 65px;
}

#yt-link>i {
    color: rgb(219, 31, 106);

}

#Fund-link {
    top: 10px;
}

#Fund-link>i {
    color: rgb(255, 251, 0);

}

.meta-link {
    align-items: center;
    backdrop-filter: blur(3px);
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 6px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    display: inline-flex;
    gap: 5px;
    left: 10px;
    padding: 10px 20px;
    position: fixed;
    text-decoration: none;
    transition: background-color 600ms, border-color 600ms;
    z-index: 10000;
}

.meta-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.meta-link>i,
.meta-link>span {
    height: 20px;
    line-height: 20px;
}

.meta-link>span {
    color: white;
    font-family: "Rubik", sans-serif;
    transition: color 600ms;
}
</style>
</head>

<body>

    <main>

        <div class="right-side">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Google Login Button -->
                <div class="btn-group">
                    <a href="{{ url('login/google') }}" class="btn">                        <img class="logo"
                            src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/d1c98974-c62d-4071-8bd2-ab859fc5f4e9"
                            alt="" />
                        <span>Sign in with Google</span>
                    </a>
                </div>

                <!-- Form Inputs for Email and Password -->
                <div class="or">OR</div>

                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="Enter Email" />

                @error('email')
                    <span>{{ $message }}</span>
                @enderror

                <label for="password">Password</label>
                <input type="password" name="password" required placeholder="Enter Password" />

                @error('password')
                    <span>{{ $message }}</span>
                @enderror

                <button type="submit" class="login-btn">Sign in</button>

                <div class="links">
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                    <a href="{{ route('register') }}">Do not have an account?</a>
                </div>
            </form>
        </div>

    </main>

</body>

</html>