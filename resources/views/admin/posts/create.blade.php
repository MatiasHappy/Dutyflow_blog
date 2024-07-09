@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Blog Post</h1>
        <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div>
                <label for="content">Content</label>
                <textarea id="content" name="content" required>{{ old('content') }}</textarea>
            </div>
            <div>
                <label for="published_at">Published Date</label>
                <input type="date" id="published_at" name="published_at" value="{{ old('published_at') }}">
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" id="image" name="image">
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
