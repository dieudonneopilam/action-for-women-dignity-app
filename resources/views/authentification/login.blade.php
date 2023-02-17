<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    @vite(['resources/css/app.css'])
    <style>
        body{
            background-color: white
        }
    </style>
</head>
<body>
    <div class="login-content">
        <div class="head-login">
            <p class="title">Women for women dignity</p>
            <img class="login-logo" src="{{ asset('img/cambg_1.jpg') }}" alt="" srcset="">
        </div>
        <form action="{{ route('auth') }}" method="POST">
            {{ csrf_field() }}
            <div class="group-form-login">
                <input type="email" name="email" id="" placeholder="votre mail">
            </div>
            <div class="group-form-login">
                <input type="password" name="password" id="" placeholder="password">
            </div>
            <div class="group-form-login">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="div-forget">
           <a href="">mot de passe oublié</a>
        </div>
        <div class="div-with">
            <span>login with</span>
        </div>
        <div class="div-social-media">
            <span class="fbk"><a href="">facebook</a></span>
            <span class="ggle"><a href="">google</a></span>
        </div>
    </div>
</body>
</html>