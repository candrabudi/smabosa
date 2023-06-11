<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PostController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin-login');
Route::post('/admin/custom-login', [AuthController::class, 'customLogin'])->name('custom-login');

Auth::routes();


Route::prefix('admin')->middleware(['auth'])->group( function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    Route::prefix('post')->group(function() {
        Route::get('/', [PostController::class, 'listPosts'])->name('list-posts');
        Route::get('/list-categories', [PostController::class, 'listCategoryPosts'])->name('list-category-posts');
        Route::get('/datatable', [PostController::class, 'datatablePosts'])->name('datatable-posts');
        Route::get('/category/datatable', [PostController::class, 'datatablePostCategories'])->name('datatable-post-categories');
        Route::get('/create', [PostController::class, 'createPost'])->name('create-post');
        Route::post('/store/category', [PostController::class, 'storeCategoryPost'])->name('store-category-post');
    });
});