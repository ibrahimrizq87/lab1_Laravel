<?php

// class Posts{
//     private $posts;
//     function __constant(){
// $posts = 
//     }
// }

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\postsController;



Route::get('/home',[postsController::class,'show'])
->name('posts.show');

Route::post('/posts',[postsController::class,'store'])
->name('posts.store');


Route::get('/create/post',function(){
    return view('create_post');
})
->name('posts.create');

Route::get('/posts', [postsController::class,'details'])
->name('posts.details');

Route::get('/posts/{id}', [postsController::class,'getPost'])
->name('posts.get')
->where('id', '[0-9]+');

Route::get('/posts/delete/{id}', [postsController::class,'deletePost'])
->name('posts.delete')
->where('id', '[0-9]+');

Route::get('/posts/edit/{id}', [postsController::class,'editPost'])
->name('posts.edit')
->where('id', '[0-9]+');