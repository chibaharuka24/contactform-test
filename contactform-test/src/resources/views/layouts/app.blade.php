<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactform-test</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <nav>
                @if (Auth::check())
                <form class="form" action="/logout" method="post">
                    @csrf
                    <button class="header-nav__button">logout</button>
                </form>
                @endif
            </nav>
        </div>
    </header>

    <main>
        @yield('title')
        @yield('content')
    </main>
</body>
</html>