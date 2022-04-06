<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceArticleController;

Route::resource(
    'article',
    ResourceArticleController::class
)
    ->except('show', 'index');

Route::get('/', function(){
   return '<a href="'.route('article.create') .'">Create</a';
});
