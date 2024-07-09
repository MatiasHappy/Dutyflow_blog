@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Blog Post</h1>
        <form method="POST" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
            </div>
            <div>
                <label for="content">Content</label>
                <textarea id="content" name="content" required>{{ old('content', $post->content) }}</textarea>
            </div>
            <div>
                <label for="published_at">Published Date</label>
                <input type="date" id="published_at" name="published_at" value="{{ old('published_at', $post->published_at) }}">
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" id="image" name="image">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                @endif
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
