<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', [ChirpController::class, 'index']);
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::post('/post',[PostController::class,'store'])->name('post.store') ;
Route::get('/post/{id}', [PostController::class,'update'])->name('post.update') ;
