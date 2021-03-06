<?php

use App\Http\Controllers\Web\ArticleController;
use App\Http\Controllers\Web\Article\CommentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'articles' => ArticleController::class,
    'articles.comments' => CommentController::class,
]);
