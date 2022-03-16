<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::group([
//    'middleware' => [
//        'auth'
//    ],
//    'prefix' => 'heyaa',
//    'name' => 'users.',
//    'namespace' => '\App\Http\Controller',
// ], function(){

// });

Route::prefix('heyaa')
  ->name('posts.')
  ->namespace('\App\Http\Controllers')
  ->group(function(){
      Route::get('/posts', [PostController::class, 'index'])
            ->name('index')
            ->withoutMiddleware('auth');
             
      Route::get('/posts/{post}', [PostController::class, 'show'])->name('show')->whereNumber('user');
      Route::post('/posts',[PostController::class, 'store'])->name('store');
      Route::patch("/posts/{post}",[PostController::class, 'update'])->name('update');
      Route::delete('/posts/{post}',[PostController::class, 'destroy'])->name('destroy');
  });




?>