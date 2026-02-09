<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('/blog/{slug}', [FrontendController::class, 'showBlog'])->name('frontend.blog.show');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact', [FrontendController::class, 'storeContact'])->name('contact.store');
Route::get('/services', [FrontendController::class, 'services'])->name('frontend.services');
Route::get('/services/{slug}', [FrontendController::class, 'showServices'])->name('frontend.services.show');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/notFound', [FrontendController::class, 'notFound'])->name('notFound');
Route::get('/faqs', [FrontendController::class, 'faqs'])->name('faqs');
Route::get('/project', [FrontendController::class, 'project'])->name('frontend.project');
Route::get('/project/{slug}', [FrontendController::class, 'showproject'])->name('frontend.project.show');
