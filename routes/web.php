<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\Http\Controllers\UserController::class, 'dash'])->name('dash');
Route::get('/dash2',[App\Http\Controllers\UserController::class, 'dash2'])->name('dash2');
Route::get('/categories',[App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
Route::get('/create',[App\Http\Controllers\CategoriesController::class, 'create'])->name('addcategories');
Route::post('categories/create',[App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
Route::get('categories/edit/{id}',[App\Http\Controllers\CategoriesController::class, 'edit'])->name('edit');
Route::post('categories/edit/{id}',[App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
Route::get('categories/delete/{id}',[App\Http\Controllers\CategoriesController::class, 'delete'])->name('categories.delete');
Route::get('/brands',[App\Http\Controllers\BrandsController::class, 'index'])->name('brands');