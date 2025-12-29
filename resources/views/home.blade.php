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
                     @foreach($post->tags as $tag)
                        <a href="{{route('posts.tags',$tag->slug)}}"class="card-title">{{ $tag->title }}</a>
                     @endforeach
                    <p class="card-text">
                        {{ Str::limit($post->description, 120) }}
                        <a href="{{route('posts.categories',$post->category->slug)}}"class="card-title">{{$post->category->title }}</a>

                    </p>
                    @if($post->thumbnail)
                    <div class = "post_image"><img src="{{asset ('uploads/' . $post->thumbnail)}}"></div>
                    @endif
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
