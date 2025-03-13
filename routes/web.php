<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\MainControlller;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\Menu;
use App\Http\Controllers\Admin\ProducttController;
use App\Http\Controllers\Admin\UploadController;




Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);

        });


        #Product
        Route::prefix('productts')->group(function (){
            Route::get('add', [ProducttController::class, 'create']);
            Route::post('add', [ProducttController::class, 'store']);
            Route::get('list', [ProducttController::class, 'index']);
            Route::get('edit/{product}', [ProducttController::class, 'show']);
            Route::post('edit/{product}', [ProducttController::class, 'update']);
            Route::DELETE('destroy', [ProducttController::class, 'destroy']);

        });

        #Upload
        Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store']);
    });
});

Route::get('/',[MainControlller::class, 'index']);




