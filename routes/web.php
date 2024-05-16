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
// Route::get('/posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
Route::post('/sanpham', [PostController::class, 'store'])->name('posts.store');
// Route::get('/', [CategoryController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/{id}',[PostController::class, 'show'])->name('show.show');
Route::get('/support', [SupportController::class, 'index'])->name('support');
Route::post('/support', [SupportController::class, 'sendSupportRequest'])->name('support.send');
Route::resource('post', PostController::class);
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/categories/{id}/destroy', [CategoryController::class, 'destroy'])->name('destroy');
// Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');




