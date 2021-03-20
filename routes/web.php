<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SettingController;






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
//generates AdmonController
Route::get('/', [AdminController::class, 'start'])->name('home');
Route::get('contact', [AdminController::class, 'contact'])->name('contact');
Route::get('service', [AdminController::class, 'service']);
Route::get('single/product/{product_id}', [AdminController::class, 'singleProduct'])->name('single_product');
Route::get('shop', [AdminController::class, 'shop'])->name('shop');
Route::get('shop/single/category/{category_id}', [AdminController::class, 'singleShop'])->name('singleShop');





//generates CategoryController
Route::get('category', [CategoryController::class, 'category']);
Route::post('category/post', [CategoryController::class, 'categoryPost']);
Route::get('category/update/{category_id}', [CategoryController::class, 'categoryUpdate'])->name('category_update');
Route::get('category/delete/{category_id}', [CategoryController::class, 'categoryDelete'])->name('category_delete');
Route::post('category/post/update', [CategoryController::class, 'categoryUpdatePost']);
Route::post('category/checked_delete', [CategoryController::class, 'categoryCheckedDelete'])->name('checked_delete');
Route::get('category/restore/{category_id}', [CategoryController::class, 'categoryRestore'])->name('category_restore');
Route::get('category/forcedelete/{category_id}', [CategoryController::class, 'categoryForceDelete'])->name('category_force_delete');





//generates productController
Route::get('product', [ProductController::class, 'product'])->name('product_index');
Route::post('product/post', [ProductController::class, 'productPost'])->name('product_post');
Route::get('product/update/{product_id}', [ProductController::class, 'productUpdate'])->name('update_product_name');
Route::get('product/delete/{product_id}', [ProductController::class, 'productDelete'])->name('product_delete');
Route::post('product/checked_delete', [ProductController::class, 'productCheckedDelete'])->name('product_checked_delete');
Route::post('product/post/update', [ProductController::class, 'productUpdatePost'])->name('product_update_post');
Route::get('product/restore/{product_id}', [ProductController::class, 'productRestore'])->name('product_restore');
Route::get('product/force/delete/{product_id}', [ProductController::class, 'productForceDelete'])->name('product_force_delete');


//generates FAQController
Route::get('faq', [FaqController::class, 'faq'])->name('faq');
Route::post('faq/post', [FaqController::class, 'faqPost'])->name('faqpost');
Route::get('faq/delete{faq_id}', [FaqController::class, 'faqDelete'])->name('faqdelete');
Route::get('faq', [FaqController::class, 'faq'])->name('faq');


//generates TESTIMONIALController
Route::get('testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::post('testimonial/post', [TestimonialController::class, 'testimonialPost'])->name('testimonialpost');


//generates FormController
Route::post('form/post', [FormController::class, 'formPost'])->name('formPost');


// generates SettingController;er
Route::get('slider', [SliderController::class, 'slider'])->name('slider');
Route::post('slider/post', [SliderController::class, 'sliderPost'])->name('sliderpost');



// generates SettingController
Route::get('setting', [SettingController::class, 'setting'])->name('setting');
Route::post('setting/post', [SettingController::class, 'settingpost'])->name('settingpost');








Auth::routes();


//generates HomeController
Route::get('/home', [HomeController::class, 'index']);

