<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Blog</a>
        <div class="ms-auto">
            @guest
                <a href="/login" class="btn btn-outline-light btn-sm">Вход</a>
                <a href="/register" class="btn btn-warning btn-sm">Регистрация</a>
            @else
                <span class="text-light me-2">{{ auth()->user()->name }}</span>
                <form method="POST" action="/logout" class="d-inline">@csrf<button class="btn btn-danger btn-sm">Выход</button></form>
            @endguest
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <aside class="col-2 bg-light p-3">
            <h6>Категории</h6>
            <ul class="list-group mb-3">
                @foreach($categories as $category)
                    <li class="list-group-item"><a href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>

            <h6>Теги</h6>
            @foreach($tags as $tag)
                <a href="/tag/{{ $tag->id }}" class="badge bg-secondary">{{ $tag->name }}</a>
            @endforeach
        </aside>

        <main class="col-10 p-4">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>

<!-- resources/views/home.blade.php -->
@extends('layouts.app')
@section('title', 'Главная')
@section('content')
<h2 class="mb-4">Последние посты</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($posts as $post)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 120) }}</p>
                </div>
                <div class="card-footer">
                    <a href="/posts/{{ $post->id }}" class="btn btn-primary btn-sm">Читать</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')
@section('content')
<h2>Вход</h2>
<form method="POST" action="/login">@csrf
    <input class="form-control mb-2" name="email" placeholder="Email">
    <input class="form-control mb-2" type="password" name="password" placeholder="Пароль">
    <button class="btn btn-success">Войти</button>
</form>
@endsection

<!-- resources/views/auth/register.blade.php -->
@extends('layouts.app')
@section('content')
<h2>Регистрация</h2>
<form method="POST" action="/register">@csrf
    <input class="form-control mb-2" name="name" placeholder="Имя">
    <input class="form-control mb-2" name="email" placeholder="Email">
    <input class="form-control mb-2" type="password" name="password" placeholder="Пароль">
    <input class="form-control mb-2" type="password" name="password_confirmation" placeholder="Повтор пароля">
    <button class="btn btn-primary">Зарегистрироваться</button>
</form>
@endsection
