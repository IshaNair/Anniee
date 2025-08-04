<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthenticateController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;

use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\MenuController;

use App\Http\Controllers\HomeController;


Route::prefix('admin/')->group(function () {
    Route::group(['middleware'=>'admin.guest'],function () {
      Route::get('login', [AuthenticateController::class, 'index'])->name('admin.login');
      Route::post('authenticate', [AuthenticateController::class, 'authentication'])->name('admin.authenticate');
    });

    Route::middleware('admin.auth')->group(function () {
      Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

      //category//

      Route::get('categories', [CategoryController::class, 'index'])->name('categories');
      Route::get('create-categories', [CategoryController::class, 'create'])->name('categories.create');
      Route::post('store-categories', [CategoryController::class, 'store'])->name('categories.store');
      Route::get('edit-categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
      Route::PUT('update-categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
      Route::DELETE('delete-categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

     //sub category//

      Route::get('subcategory', [SubcategoryController::class, 'index'])->name('subcategory');
      Route::get('create-subcategory', [SubcategoryController::class, 'create'])->name('subcategory.create');
      Route::post('store-subcategory', [SubcategoryController::class, 'store'])->name('subcategory.store');
      Route::get('edit-subcategory/{id}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
      Route::PUT('update-subcategory/{id}', [SubcategoryController::class, 'update'])->name('subcategory.update');
      Route::DELETE('delete-subcategory/{id}', [SubcategoryController::class, 'destroy'])->name('subcategory.destroy');

     //Brands//

      Route::get('brands', [BrandController::class, 'index'])->name('brands');
      Route::get('create-brand', [BrandController::class, 'create'])->name('brand.create');
      Route::post('store-brand', [BrandController::class, 'store'])->name('brand.store');
      Route::get('edit-brand/{id}', [BrandController::class, 'edit'])->name('brand.edit');
      Route::PUT('update-brand/{id}', [BrandController::class, 'update'])->name('brand.update');
      Route::get('delete-brand', [BrandController::class, 'destroy'])->name('brand.destroy');

      //Products//

      Route::get('products', [productController::class, 'index'])->name('products');
      Route::get('create-product', [productController::class, 'create'])->name('product.create');
      Route::post('store-product', [productController::class, 'store'])->name('product.store');
      Route::get('edit-product/{id}', [productController::class, 'edit'])->name('product.edit');
      Route::PUT('update-product/{id}', [productController::class, 'update'])->name('product.update');
      Route::DELETE('delete-product/{id}', [productController::class, 'destroy'])->name('product.destroy');

      //pages//

      Route::get('pages', [PageController::class, 'index'])->name('pages');
      Route::get('create-page', [PageController::class, 'create'])->name('page.create');
      Route::post('store-page', [PageController::class, 'store'])->name('page.store');
      Route::get('edit-page/{id}', [PageController::class, 'edit'])->name('page.edit');
      Route::PUT('update-page/{id}', [PageController::class, 'update'])->name('page.update');
      Route::DELETE('delete-page/{id}', [PageController::class, 'destroy'])->name('page.destroy');

      //Menu Route

      Route::get('menus', [MenuController::class, 'index'])->name('menus');
      Route::get('create-menu', [MenuController::class, 'create'])->name('menu.create');
      Route::post('store-menu', [MenuController::class, 'store'])->name('menu.store');
      Route::get('edit-menu/{id}', [MenuController::class, 'edit'])->name('menu.edit');
      Route::PUT('update-menu/{id}', [MenuController::class, 'update'])->name('menu.update');
      Route::DELETE('delete-menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');

      //poat Route//


      Route::get('posts', [PostController::class, 'index'])->name('posts');
      Route::get('create-post', [PostController::class, 'create'])->name('post.create');
      Route::post('store-post', [PostController::class, 'store'])->name('post.store');
      Route::get('edit-post/{id}', [PostController::class, 'edit'])->name('post.edit');
      Route::PUT('update-post/{id}', [PostController::class, 'update'])->name('post.update');
      Route::DELETE('delete-post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

     Route::post('/upload-temp-image', [\App\Http\Controllers\admin\TempImagesController::class,'create'])->name('temp-images.create');

     //Orders//
     Route::get('orders', [OrderController::class, 'index'])->name('orders');

     Route::get('logout', [AuthenticateController::class, 'logout'])->name('admin.logout');
    });

    Route::get('getslug', [\App\Http\Controllers\admin\GetsulugController::class, 'getslug'])->name('getslug');

});

//Front Route//

 Route::get('/', [HomeController::class, 'index'])->name('home');
 Route::get('/about/anniiee', [HomeController::class, 'about_anniiee'])->name('front.about-anniiee');
 Route::get('/services', [HomeController::class, 'services'])->name('front.services');
 Route::get('/client/success', [HomeController::class, 'client_success'])->name('front.client-success');
 Route::get('/insights', [HomeController::class, 'insights'])->name('front.insights');
 Route::get('/media', [HomeController::class, 'media'])->name('front.media');
 Route::get('/contact', [HomeController::class, 'contact'])->name('front.contact');



