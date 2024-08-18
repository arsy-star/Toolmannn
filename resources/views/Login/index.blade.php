<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/Login/Login.css')}}">
</head>
<body>
    <div class="container">
        <h2 class="title">Login</h2>
        <form action="{{route('login')}}" method="POST" class="form-container">
            @csrf
            <div class="input-box email">
                <input type="email"  id="email-input" required placeholder="Username" name="email">
                <img src="https://cdn-icons-png.flaticon.com/512/6325/6325109.png" alt="user-image" width="25px">
            </div>
            {{-- @error('email')
                <p>{{$massage}}</p>
            @enderror --}}
            <div class="input-box password">
                <input type="password"  id="password-input" required placeholder="Password" name="password">
                <img src="https://cdn-icons-png.flaticon.com/512/2489/2489659.png" alt="lock-image" width="22px">
            </div>
            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="forgot">
                    <a href="#">forgot Password ?</a>
                </div>
            </div>
            <div class="button">
                <button class="login">Login</button>
            </div>
            <div class="register">
                <p>Don't you have an account ?<a href="/registrasi">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>