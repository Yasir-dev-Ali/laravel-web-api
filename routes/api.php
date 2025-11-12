<?php
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Inspiring;


Route::get('/', function () {
    return Inspiring::quote();
});
// Route::get('/post',[PostController::class,'index'   ]->name('post.index') );
// Route::get('/post', [PostController::class, 'index'])->name('post.index');
