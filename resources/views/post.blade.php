@extends('layouts.app')

@section('content')
<h1>{{ $post->title }}</h1>

@if($post->thumbnail)
    <img src="{{ $post->getImage() }}" class="img-fluid mb-3">
@endif

<p class="text-muted">{{ $post->description }}</p>

<div>{!! nl2br(e($post->content)) !!}</div>
@endsection
