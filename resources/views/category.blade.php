@extends('layouts.app')

@section('content')
<h2>Категория: {{ $category->title }}</h2>

@foreach($posts as $post)
    <div class="mb-3">
        <h4>
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post->title }}
            </a>
        </h4>
        <p>{{ $post->description }}</p>
    </div>
@endforeach
@endsection
