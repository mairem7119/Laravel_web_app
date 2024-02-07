<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bất kỳ CSS hoặc script nào khác bạn muốn bao gồm -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                <a href="#">Contact Us</a>
                <a href="/login">Login</a>
                <button>Menu</button>
            </nav>
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
