<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view('home', [
        'title' => 'home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'active' => 'about',
        'name' => 'Suryaa',
        'email' => 'test@gmail.com',
        'image' => 'undraw_profile_1.svg'
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'user')
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => "Post by Author : $user->name",
        'posts' => $user->posts->load('category', 'user'),
    ]);
});
