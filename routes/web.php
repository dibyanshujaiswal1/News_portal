<?php

use App\Http\Controllers\AdminController\ArticleController;
use App\Http\Controllers\AdminController\DashboardController;
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
Route::get('admin/dashboard',[DashboardController::class,'Dashboard']);
//Article
Route::get('create-article',[ArticleController::class,'CreateArticle']);