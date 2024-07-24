@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="header-page d-flex justify-content-between align-items-center mb-5 ">
        <h1>{{ $post->title }}</h1>
    </div>

    <p>
        {{ $post->content }}
    </p>
    <a class="btn btn-light" href="{{ route('post.index')}}">Torna alla lista dei post</a>
</div>
@endsection
