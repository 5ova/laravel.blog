@php use Illuminate\Support\Str; @endphp

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
                    <p class="card-text">
                        {{ Str::limit($post->content, 120) }}
                    </p>
                </div>

                <div class="card-footer">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">
                        Читать
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
