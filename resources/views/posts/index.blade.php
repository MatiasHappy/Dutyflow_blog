@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog Posts</h1>
        @foreach($posts as $post)
            <div class="post">
                <h2><a href="{{ route('posts.show', $post) }}">{{ $post.title }}</a></h2>
                <p>by {{ $post->user->name }} on {{ $post->published_at }}</p>
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                @endif
                <p>{{ Str::limit($post->content, 150) }}</p>
            </div>
        @endforeach
    </div>
@endsection
