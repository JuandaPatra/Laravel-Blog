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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "name" => "Mourinho",
        "club" => "AS ROMA"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);


Route::get('/about', function () {
    return view('about',[
        "club" => "AS ROMA"
    ]);
});
Route::get('/add', [PostController::class, 'add']);
Route::get('/add/post/checkSlug', [PostController::class, 'checkSlug']);

// Edit
Route::get('/posts', [PostController::class, 'all']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/posts/edit/{post:slug}', [PostController::class, 'edit']);
Route::post('/edit/{post:slug}', [PostController::class, 'editPost']);

Route::get('/categories', function(){
    return view('categories',[
        "categories" =>  Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        "title"=> $category->name,
        "posts" => $category->posts,
        "category"=> $category->name
    ]);
});

Route::get('/author/{user:username}', function(User $user){
    return view('author',[
        "title"=> 'User Post',
        "posts" => $user->posts->load(['category','user']),
    ]);
});