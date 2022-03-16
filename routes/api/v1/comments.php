<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

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
  ->name('comments.')
  ->namespace('\App\Http\Controllers')
  ->group(function(){
      Route::get('/comments', [CommentController::class, 'index'])
            ->name('index')
            ->withoutMiddleware('auth');
             
      Route::get('/comments/{comment}', [CommentController::class, 'show'])->name('show')->whereNumber('user');
      Route::post('/comments',[CommentController::class, 'store'])->name('store');
      Route::patch("/comments/{comment}",[CommentController::class, 'update'])->name('update');
      Route::delete('/comments/{comment}',[CommentController::class, 'destroy'])->name('destroy');
  });




?>