<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupportController;
use App\Models\Post;
use App\Models\Category;

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
    $categories = Category::all();
    return view('category', compact('categories'));
});
Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts.post', compact('posts'));
});
Route::get('/posts', function () {
    $posts = Post::all();
        return view('posts.post', compact('posts'));
});
Route::get('/sanpham', function () {
    $posts = Post::all();
    return view('posts.show', compact('posts'));
});
Route::get('/post/{id}', function ($id) {
    $post = Post::find($id); // Tìm bài viết theo $id
    if (!$post) {
        abort(404); // Nếu không tìm thấy bài viết, trả về trang 404
    }
    return view('show.show', ['post' => $post]); // Truyền dữ liệu bài viết sang view
});

Auth::routes();
// Route::get('/posts/create', 'PostController')->name('create');
Route::post('/', 'PostController@store')->name('posts.show');
// Route::get('/', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/sanpham', [PostController::class, 'store'])->name('posts.store');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');

// Route::get('/', [CategoryController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/{id}',[PostController::class, 'show'])->name('show.show');
Route::get('/support', [SupportController::class, 'index'])->name('support');
Route::post('/support', [SupportController::class, 'sendSupportRequest'])->name('support.send');
// routes/web.php
Route::resource('post', PostController::class);

Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('edit');
Route::get('/categories/{id}/destroy', [CategoryController::class, 'destroy'])->name('destroy');
// Route::get('/posts', 'PostController@index')->name('posts.index');

Route::resource('categories', CategoryController::class);
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');



Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');


