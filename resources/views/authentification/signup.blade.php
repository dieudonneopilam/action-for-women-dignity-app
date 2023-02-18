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
            
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            <p style="color: blue" class="title">create your account</p>
        </div>
        <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="group-form-login">
                <input type="email" name="email" id="" placeholder="votre mail">
            </div>
            <div class="group-form-login">
                <input type="text" name="name" id="" placeholder="votre noms">
            </div>
            <div class="group-form-login">
                <input type="password" name="password" id="" placeholder="password">
            </div>
            <div class="group-form-login">
                <input type="password" name="password_confirmation" id="" placeholder="confirm ton password">
            </div>
            <div class="group-form-login" style="text-align: left">
                <label for="">Votre photo de profile</label>
                <input type="file" name="file" id="" placeholder="confirm ton password">
            </div>
            <div style="color: red; text-align: left">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            <div class="group-form-login">
                <button type="submit">Sign up</button>
            </div>
            <div class="div-forget">
                <a href="{{ route('login') }}">already account</a>
             </div>
        </form>
    </div>
</body>
</html>