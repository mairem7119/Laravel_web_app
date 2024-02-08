<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bất kỳ CSS hoặc script nào khác bạn muốn bao gồm -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

    <header>
        <!-- Header content -->
        <div class="header-inner responsive-wrapper">
            <div class="header-logo">
                <img src="https://rikkeisoft.com/wp-content/themes/main/assets/images/home/logo.svg" />
            </div>
            <nav class="header-navigation">
                <a href="/">Home</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="/contact">Contact Us</a>
            </nav>
            <div class="user-information">
                <div class="user-name">
                    @if (Auth::check())
                        <a>{{ Auth::user()->name }}</a>
                    @endif
                </div>
                <div class="log-icon">
                    <div id="loginButton">
                        @if (Auth::check())
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt" style="font-size: 25px;color: #34a6ea;"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"
                                    style="font-size: 25px;color: #34a6ea;"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>

    <!-- Bất kỳ script JavaScript nào bạn muốn bao gồm -->

</body>

</html>
