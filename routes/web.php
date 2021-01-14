<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;




// Route::get();
// CLass::method();





Route::get("/", [HomeController::class, 'index']);
Route::get("hello", [FrontendController::class, 'hello']);
Route::get("about", [FrontendController::class, 'about']);
Route::get("contact", [FrontendController::class, 'contact']);


Auth::routes();
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category/insert', [CategoryController::class, 'insert']);
Route::get('/category/delete/{category_id}', [CategoryController::class, 'delete']);
Route::get('/subcategory', [SubCategoryController::class, 'index']);
Route::post('/subcategory/insert', [SubCategoryController::class, 'insert']);
Route::get('/subcategory/delete/{subcategory_id}', [SubCategoryController::class, 'delete']);
Route::get('/subcategory/restore/{delete_subcategory_id}', [SubCategoryController::class, 'restore']);

