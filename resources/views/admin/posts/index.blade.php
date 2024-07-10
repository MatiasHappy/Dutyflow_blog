@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Admin Blog Posts</h1>
        <div class="mb-4">
            <a href="{{ route('admin.posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Post</a>
        </div>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">Title</th>
                    <th class="px-4 py-2 border-b">Author</th>
                    <th class="px-4 py-2 border-b">Published Date</th>
                    <th class="px-4 py-2 border-b">Category</th>
                    <th class="px-4 py-2 border-b">Image</th>
                    <th class="px-4 py-2 border-b">Content</th>
                    <th class="px-4 py-2 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="border px-4 py-2">{{ $post->title }}</td>
                        <td class="border px-4 py-2">{{ $post->user->name }}</td>
                        <td class="border px-4 py-2">{{ $post->published_at  }}</td>
                        <td class="border px-4 py-2">{{ $post->category->name ?? 'Uncategorized' }}</td>
                        <td class="border px-4 py-2">
                            @if($post->image)
                                <img src="{{ asset('storage/app/' . $post->image) }}" alt="{{ $post->title }}" class="h-16 w-16 object-cover">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="border px-4 py-2">{{ Str::limit($post->content, 50) }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                            <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
