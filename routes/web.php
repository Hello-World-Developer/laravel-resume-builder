<?php

use App\Http\Controllers\client\AuthController;
use App\Http\Controllers\client\CvFormController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\DownloadController;
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

Route::name('client.')->group(function () {

    Route::middleware(['isLogin'])->group(function(){
        Route::get('/', HomeController::class)->name('index');
        Route::get('/cv-form/create', [CvFormController::class, 'create'])->name('cv-form.create');
        Route::post('/cv-form/create', [CvFormController::class, 'store'])->name('cv-form.store');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::get('/signIn', 'signIn')->name('auth.signIn');
        Route::get('/signUp', 'signUp')->name('auth.signUp');
        Route::post('/register', 'register')->name('auth.register');
        Route::post('/login', 'login')->name('auth.login');
        Route::post('/logout', 'logout')->name('auth.logout');
    });

  
});

Route::name('download')->prefix('download')->group(function () {
    Route::get('cv', [DownloadController::class, 'downloadCv'])->name('cv');
});

Route::get('/test', function () {
    return view('test');
});
