<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('user', 'category')->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $path = $request->file('image') ? $request->file('image')->store('images') : null;

        BlogPost::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'published_at' => $request->published_at,
            'image' => $path,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.posts.index');
    }

    public function edit(BlogPost $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, BlogPost $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $post->image = $path;
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'published_at' => $request->published_at,
            'image' => $post->image,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.posts.index');
    }

    public function destroy(BlogPost $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }





    public function show($id)
    {
        $post = BlogPost::with('user')->findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
