<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Front\FHomeController;
use App\Http\Controllers\Front\FProductController;
use App\Http\Controllers\Front\FCategoryController;
use App\Http\Controllers\Front\FBlogController;
use App\Http\Controllers\Front\FAboutController;
use App\Http\Controllers\Front\FContactController;
use App\Http\Controllers\Front\FCatalogController;


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

Route::get('/yonetim/login', [AuthController::class, 'login'])->name('yonetim.login')->middleware('adminAuthLogout');
Route::get('/yonetim/logout', [AuthController::class, 'logout'])->name('yonetim.logout');
Route::post('/yonetim/login/check', [AuthController::class, 'check'])->name('yonetim.login.check');


Route::prefix('/yonetim')->middleware('adminAuth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('yonetim.dashboard');

    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('yonetim.product');
        Route::get('/create', [ProductController::class, 'create'])->name('yonetim.product.create');
        Route::post('/insert', [ProductController::class, 'insert'])->name('yonetim.product.insert');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('yonetim.product.delete');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('yonetim.product.edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('yonetim.product.update');
    });

    Route::prefix('/user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('yonetim.user');
        Route::get('/create', [UserController::class, 'create'])->name('yonetim.user.create');
        Route::post('/insert', [UserController::class, 'insert'])->name('yonetim.user.insert');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('yonetim.user.delete');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('yonetim.user.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('yonetim.user.update');
    });

    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('yonetim.category');
        Route::get('/create', [CategoryController::class, 'create'])->name('yonetim.category.create');
        Route::post('/insert', [CategoryController::class, 'insert'])->name('yonetim.category.insert');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('yonetim.category.delete');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('yonetim.category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('yonetim.category.update');
    });

    Route::prefix('/brand')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('yonetim.brand');
        Route::get('/create', [BrandController::class, 'create'])->name('yonetim.brand.create');
        Route::post('/insert', [BrandController::class, 'insert'])->name('yonetim.brand.insert');
        Route::get('/delete/{id}', [BrandController::class, 'delete'])->name('yonetim.brand.delete');
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('yonetim.brand.edit');
        Route::post('/update/{id}', [BrandController::class, 'update'])->name('yonetim.brand.update');
    });

    Route::prefix('/blog')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('yonetim.blog');
        Route::get('/create', [BlogController::class, 'create'])->name('yonetim.blog.create');
        Route::post('/insert', [BlogController::class, 'insert'])->name('yonetim.blog.insert');
        Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('yonetim.blog.delete');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('yonetim.blog.edit');
        Route::post('/update/{id}', [BlogController::class, 'update'])->name('yonetim.blog.update');
    });

    Route::prefix('/setting')->group(function () {
        Route::get('/edit', [SettingController::class, 'edit'])->name('yonetim.setting.edit');
        Route::post('/update', [SettingController::class, 'update'])->name('yonetim.setting.update');
    });

    Route::prefix('/catalog')->group(function () {
        Route::get('/', [CatalogController::class, 'index'])->name('yonetim.catalog');
        Route::get('/create', [CatalogController::class, 'create'])->name('yonetim.catalog.create');
        Route::post('/insert', [CatalogController::class, 'insert'])->name('yonetim.catalog.insert');
        Route::get('/delete/{id}', [CatalogController::class, 'delete'])->name('yonetim.catalog.delete');
        Route::get('/edit/{id}', [CatalogController::class, 'edit'])->name('yonetim.catalog.edit');
        Route::post('/update/{id}', [CatalogController::class, 'update'])->name('yonetim.catalog.update');
    });

    Route::prefix('/message')->group(function () {
        Route::get('/', [MessageController::class, 'index'])->name('yonetim.message');
        Route::get('/create', [MessageController::class, 'create'])->name('yonetim.message.create');
        Route::post('/insert', [MessageController::class, 'insert'])->name('yonetim.message.insert');
        Route::get('/delete/{id}', [MessageController::class, 'delete'])->name('yonetim.message.delete');
        Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('yonetim.message.edit');
        Route::post('/update/{id}', [MessageController::class, 'update'])->name('yonetim.message.update');
    });


});

Route::get('/', [FHomeController::class, 'index'])->name('front.home');
Route::get('/p/{url}', [FProductController::class, 'index'])->name('front.product');
Route::get('/c/{url}', [FCategoryController::class, 'index'])->name('front.category');
Route::get('/c', [FCategoryController::class, 'search'])->name('front.search');
//Route::get('/search', [FCategoryController::class, 'liste'])->name('front.search.list');
Route::get('/blog', [FBlogController::class, 'index'])->name('front.blog');
Route::get('/blog/{url}', [FBlogController::class, 'blogDetail'])->name('front.blog.detail');
Route::get('/about', [FAboutController::class, 'index'])->name('front.about');
Route::get('/contact', [FContactController::class, 'index'])->name('front.contact');
Route::get('/catalog', [FCatalogController::class, 'index'])->name('front.catalog');

Route::get('/deneme', function (){
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
});




