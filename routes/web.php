<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/post/{id}',[HomeController::class,'post'])->name('posts');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::get('/test', 'MainController@test');

    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/posts', 'PostController');
});
