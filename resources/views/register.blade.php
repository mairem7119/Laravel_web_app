<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">
                <h2 class="card-heading">
                    Get started
                    <small>Let us create your account</small>
                </h2>
            </div>
            <form class="card-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input">
                    <input type="text" class="input-field" name="name" value="Harry Potter" required />
                    <label class="input-label">Full name</label>
                    @if ($errors->has('name'))
                        <span class="error" style="color: red;">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="email" value="harry@rikkeisoft.com" required />
                    <label class="input-label">Email</label>
                    @if ($errors->has('email'))
                        <span class="error" style="color: red; display: block;">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="input">
                    <input type="password" class="input-field" name="password" required />
                    <label class="input-label">Password</label>
                    @if ($errors->has('password'))
                        <span class="error" style="color: red;">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="action">
                    <button class="action-button" type="submit">Get started</button>
                </div>
                <div class="back-to-login">
                    <a href="{{ route('login') }}" class="back__login__a">
                        Already have an account
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
