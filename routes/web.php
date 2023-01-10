<?php

use App\Http\Controllers\Administrator\UserController;
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
        Route::as('user.')->group(function() {
            Route::post('user/data', [UserController::class,'data'])->name('data');
            Route::resource('user', UserController::class);
        });
    });
});

