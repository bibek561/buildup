<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/notFound', [FrontendController::class, 'notFound'])->name('notFound');
Route::get('/faqs', [FrontendController::class, 'faqs'])->name('faqs');
Route::get('/project', [FrontendController::class, 'project'])->name('project');
