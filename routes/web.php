<?php

use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Administrator\PariwisataController;
use App\Http\Controllers\Administrator\UmkmController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home',[HomeController::class,'index']);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
]);

Route::get('/', function () {
        return view('welcome');
    });

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::prefix('/administrator')->as('administrator.')->group(function() {

        Route::prefix('/user')->as('user.')->group(function() {
            Route::get('', [UserController::class,'index'])->name('index');
            Route::get('create', [UserController::class,'create'])->name('create');
            Route::post('', [UserController::class,'store'])->name('store');
            Route::post('data', [UserController::class,'data'])->name('data');
            Route::get('{id}', [UserController::class,'show'])->name('show');
            Route::get('{id}/edit', [UserController::class,'edit'])->name('edit');
            Route::put('{id}', [UserController::class,'update'])->name('update');
            Route::delete('{id}', [UserController::class,'destroy'])->name('destroy');
        });

        Route::prefix('/pariwisata')->as('pariwisata.')->group(function() {
            Route::get('', [PariwisataController::class,'index'])->name('index');
            Route::get('create', [PariwisataController::class,'create'])->name('create');
            Route::post('', [PariwisataController::class,'store'])->name('store');
            Route::post('data', [PariwisataController::class,'data'])->name('data');
            Route::get('{id}', [PariwisataController::class,'show'])->name('show');
            Route::get('{id}/edit', [PariwisataController::class,'edit'])->name('edit');
            Route::put('{id}', [PariwisataController::class,'update'])->name('update');
            Route::delete('{id}', [PariwisataController::class,'destroy'])->name('destroy');
        });

        Route::prefix('/umkm')->as('umkm.')->group(function() {
            Route::get('', [UmkmController::class,'index'])->name('index');
            Route::get('create', [UmkmController::class,'create'])->name('create');
            Route::post('', [UmkmController::class,'store'])->name('store');
            Route::post('data', [UmkmController::class,'data'])->name('data');
            Route::get('{id}', [UmkmController::class,'show'])->name('show');
            Route::get('{id}/edit', [UmkmController::class,'edit'])->name('edit');
            Route::put('{id}', [UmkmController::class,'update'])->name('update');
            Route::delete('{id}', [UmkmController::class,'destroy'])->name('destroy');
        });
    });
});

