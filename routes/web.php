<?php

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

Route::resource(
    'article',
    \App\Http\Controllers\ResourceArticleController::class
)->only(['index', 'show']);

Auth::routes([
    'register' => false,
]);

Route::group(['prefix' => 'test', 'as' => 'test.', 'middleware' => 'ageFrom:12'], function(){
    Route::get('/', function(){
       echo "1The test page";
    })->name('index')->middleware(['auth']);
    Route::get('/develop', function(){
        echo "<h1>1Test1</h1>";
    })->name('d1');
    Route::get('/develop2', function(){
        echo "<h1>1Test2</h1>";
    })->name('d2');
});

