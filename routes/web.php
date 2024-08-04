<?php

use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/pages/privacy',[FrontController::class,'privacy'])
    ->name('pages.privacy');

Route::get('/pages/terms',[FrontController::class,'terms'])
    ->name('pages.terms');

Route::get('/pages/about-us',[FrontController::class,'about'])
    ->name('pages.about');

Route::get('/pages/faq',[FrontController::class,'faq'])
    ->name('pages.faq');


Route::get('/contact',[ContactController::class,'create'])
    ->name('contact.create');

Route::post('/contact',[ContactController::class,'store'])
    ->name('contact.store');

Route::get('/blogs/{slug}',[FrontController::class,'showBlog'])
    ->name('blog.show');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';
