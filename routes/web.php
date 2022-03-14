<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MyProfile;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Faq;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Ictart;
use App\Http\Controllers\BlogPostAcc;
use Illuminate\Support\Facades\Route;


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

Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {

    return view('/', [
        'articles' => App\Models\Article::all()
        ]);
});

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/myprofile', [MyProfile::class, 'show']);
Route::get('/blog', [Blog::class, 'show']);
Route::get('/faq', [Faq::class, 'show']); // faq view
Route::get('/ictart', [Ictart::class, 'show']);
Route::get('/dashboard', [Dashboard::class, 'show']);
Route::get('/blogpostacc', [BlogPostAcc::class, 'show']);
Route::get('/blogpostatos', [\App\Http\Controllers\BlogPostAtos::class, 'show']);
Route::get('/blogpostdxc', [\App\Http\Controllers\BlogPostDxc::class, 'show']);
Route::get('/blogpostexa', [\App\Http\Controllers\BlogPostExa::class, 'show']);
Route::get('/blogpostgoogle', [\App\Http\Controllers\BlogPostGoogle::class, 'show']);
Route::get('/blogpostoracle', [\App\Http\Controllers\BlogPostOracle::class, 'show']);

