<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Membership;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function postsIndex()
    {
        $posts = BlogPost::with('user')->get();
        return view('admin.posts.index', compact('posts'));
    }


    public function membershipsIndex()
    {
        $memberships = Membership::all();
        return view('admin.memberships.index', compact('memberships'));
    }
}