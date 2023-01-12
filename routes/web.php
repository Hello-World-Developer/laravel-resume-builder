<?php

use App\Http\Controllers\client\AuthController;
use App\Http\Controllers\client\CvFormController;
use App\Http\Controllers\client\HomeController;
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
    Route::get('/', HomeController::class)->name('index');
    Route::get('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/cv-form/create', [CvFormController::class, 'create'])->name('cv-form.create');
    Route::post('/cv-form/create', [CvFormController::class, 'store'])->name('cv-form.store');
});
