<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\AdminController;
use App\Models\Membership;
use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $memberships = Membership::all();
    $blogPosts = BlogPost::orderBy('published_at', 'desc')->take(3)->get();
    return view('landing', compact('memberships', 'blogPosts'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/blog', [BlogPostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post}', [BlogPostController::class, 'show'])->name('posts.show');
    Route::get('/memberships', [MembershipController::class, 'index'])->name('memberships.index');
    Route::post('memberships/{membership}/purchase', [MembershipController::class, 'purchase'])->name('memberships.purchase');
    Route::post('/memberships/subscribe', [MembershipController::class, 'subscribe'])->name('memberships.subscribe');


});

Route::middleware(['auth', 'admin'])->group(function () {
    // Admin routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');


    Route::get('/admin/posts', [AdminController::class, 'postsIndex'])->name('admin.posts.index');
    Route::get('/admin/posts/create', [BlogPostController::class, 'create'])->name('admin.posts.create');
    Route::post('/admin/posts', [BlogPostController::class, 'store'])->name('admin.posts.store');
    Route::get('/admin/posts/{post}/edit', [BlogPostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/admin/posts/{post}', [BlogPostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/admin/posts/{post}', [BlogPostController::class, 'destroy'])->name('admin.posts.destroy');

    Route::get('/admin/memberships', [AdminController::class, 'membershipsIndex'])->name('admin.memberships.index');
    Route::get('/admin/memberships/create', [MembershipController::class, 'create'])->name('admin.memberships.create');
    Route::post('/admin/memberships', [MembershipController::class, 'storeMembership'])->name('admin.memberships.store');
    Route::get('/admin/memberships/{membership}/edit', [MembershipController::class, 'edit'])->name('admin.memberships.edit');
    Route::put('/admin/memberships/{membership}', [MembershipController::class, 'update'])->name('admin.memberships.update');
    Route::delete('/admin/memberships/{membership}', [MembershipController::class, 'destroy'])->name('admin.memberships.destroy');
});



require __DIR__.'/auth.php';
