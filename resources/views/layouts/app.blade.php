<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Laravel Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Blog</a>

        <div class="ms-auto">
            @auth
                <span class="text-white me-2">{{ auth()->user()->name }}</span>
                <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">Выйти</a>
            @else
                <a href="{{ route('login.create') }}" class="btn btn-outline-light btn-sm">Вход</a>
                <a href="{{ route('register.create') }}" class="btn btn-outline-light btn-sm">Регистрация</a>
            @endauth
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
