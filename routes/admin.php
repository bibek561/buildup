<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserRegisterController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactsController;

Auth::routes(['register' => false]);

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('register', [UserRegisterController::class, 'index'])->name('register');
    Route::post('register', [UserRegisterController::class, 'store'])->name('store.register');

    Route::get('change-password', [AuthController::class, 'index'])->name('profile');
    Route::post('change-password', [AuthController::class, 'store'])->name('change.password');

    Route::resource('contacts', ContactsController::class);
}); 
