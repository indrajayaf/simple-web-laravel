<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home',[
        'active' => "Home",
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'active' => "About",
        'name' => "Fahmy Indrajaya",
        'email' => "indrajaya.f@gmail.com",
        'image' => "img/image.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/api', [PostController::class, 'api']);

// Halaman single post
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(Category $category){
    return view('categories',[
        'title' => 'Posts Category',
        'active' => "Categories",
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('blog',[
//         'title' => "Post By Category : $category->name",
//         'active' => "Blog",
//         'posts' => $category->posts->load('author','category')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('blog',[
//         'title' => "Post By User : $author->name",
//         'active' => "Blog",
//         'posts' => $author->posts->load('author','category')
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');