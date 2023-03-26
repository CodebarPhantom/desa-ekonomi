<?php

use App\Http\Controllers\Administrator\MasyarakatCreativityController;
use App\Http\Controllers\Administrator\MasyarakatEventController;
use App\Http\Controllers\Administrator\MasyarakatProductController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Administrator\PariwisataController;
use App\Http\Controllers\Administrator\UmkmController;
use App\Http\Controllers\Administrator\UmkmProductController;
use App\Http\Controllers\User\HomePageController;
use App\Http\Controllers\User\PariwisataController as UserPariwisataController;
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

Route::prefix('/')->as('user.')->group(function() {

    Route::get('', [HomePageController::class,'index'])->name('index');
    Route::prefix('/pariwisata')->as('pariwisata.')->group(function() {
        Route::get('', [UserPariwisataController::class,'index'])->name('index');
        Route::get('{id}/detail', [UserPariwisataController::class,'detail'])->name('detail');
    });
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
            Route::post('json', [UmkmController::class,'umkmJson'])->name('json');
            Route::get('{id}', [UmkmController::class,'show'])->name('show');
            Route::get('{id}/edit', [UmkmController::class,'edit'])->name('edit');
            Route::put('{id}', [UmkmController::class,'update'])->name('update');
            Route::delete('{id}', [UmkmController::class,'destroy'])->name('destroy');
        });

        Route::prefix('/umkm-product')->as('umkm-product.')->group(function() {
            Route::get('', [UmkmProductController::class,'index'])->name('index');
            Route::get('create', [UmkmProductController::class,'create'])->name('create');
            Route::post('', [UmkmProductController::class,'store'])->name('store');
            Route::post('data', [UmkmProductController::class,'data'])->name('data');
            Route::get('{id}', [UmkmProductController::class,'show'])->name('show');
            Route::get('{id}/edit', [UmkmProductController::class,'edit'])->name('edit');
            Route::put('{id}', [UmkmProductController::class,'update'])->name('update');
            Route::delete('{id}', [UmkmProductController::class,'destroy'])->name('destroy');
        });

        Route::prefix('/masyarakat-product')->as('masyarakat-product.')->group(function() {
            Route::get('', [MasyarakatProductController::class,'index'])->name('index');
            Route::get('create', [MasyarakatProductController::class,'create'])->name('create');
            Route::post('', [MasyarakatProductController::class,'store'])->name('store');
            Route::post('data', [MasyarakatProductController::class,'data'])->name('data');
            Route::get('{id}', [MasyarakatProductController::class,'show'])->name('show');
            Route::get('{id}/edit', [MasyarakatProductController::class,'edit'])->name('edit');
            Route::put('{id}', [MasyarakatProductController::class,'update'])->name('update');
            Route::delete('{id}', [MasyarakatProductController::class,'destroy'])->name('destroy');
        });

        Route::prefix('/masyarakat-event')->as('masyarakat-event.')->group(function() {
            Route::get('', [MasyarakatEventController::class,'index'])->name('index');
            Route::get('create', [MasyarakatEventController::class,'create'])->name('create');
            Route::post('', [MasyarakatEventController::class,'store'])->name('store');
            Route::post('data', [MasyarakatEventController::class,'data'])->name('data');
            Route::get('{id}', [MasyarakatEventController::class,'show'])->name('show');
            Route::get('{id}/edit', [MasyarakatEventController::class,'edit'])->name('edit');
            Route::put('{id}', [MasyarakatEventController::class,'update'])->name('update');
            Route::delete('{id}', [MasyarakatEventController::class,'destroy'])->name('destroy');
        });

        Route::prefix('/masyarakat-creativity')->as('masyarakat-creativity.')->group(function() {
            Route::get('', [MasyarakatCreativityController::class,'index'])->name('index');
            Route::get('create', [MasyarakatCreativityController::class,'create'])->name('create');
            Route::post('', [MasyarakatCreativityController::class,'store'])->name('store');
            Route::post('data', [MasyarakatCreativityController::class,'data'])->name('data');
            Route::get('{id}', [MasyarakatCreativityController::class,'show'])->name('show');
            Route::get('{id}/edit', [MasyarakatCreativityController::class,'edit'])->name('edit');
            Route::put('{id}', [MasyarakatCreativityController::class,'update'])->name('update');
            Route::delete('{id}', [MasyarakatCreativityController::class,'destroy'])->name('destroy');
        });
    });
});

