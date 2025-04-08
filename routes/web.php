<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/pages')->name('article.')->controller(ArticleController::class)->group(function() {
    Route::get('', "index")->name("list");
    Route::get('/create', "create")->name("create");
    Route::post('', "store")->name("store");
    Route::prefix("/{article}")->group(function() {
        Route::get('', 'show')->name("show");
        Route::delete('', 'destroy')->name("delete");
        Route::get('/edit', 'edit')->name("edit");
        Route::put('/edit', 'update')->name('update');
    })->where(['article' => '[0-9]+']);
    
});

Route::prefix('/user')->name('user.')->controller(UserController::class)->group(function()  {
    Route::get("list", "index")->name("list");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
