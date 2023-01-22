<?php

use App\Http\Controllers\laravelCrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LaravelCrudController::class,'index'])->name('home');
Route::post('/new-blog',[LaravelCrudController::class,'save'])->name('new.blog');
Route::get('/manage-blog',[LaravelCrudController::class,'manage'])->name('manage.blog');
Route::get('/edit/{id}',[LaravelCrudController::class,'edit'])->name('edit');
Route::post('/update-blog',[LaravelCrudController::class,'update'])->name('update.blog');
// Route::get('/delete/{id}',[LaravelCrudController::class,'delete'])->name('delete');
Route::post('/delete',[LaravelCrudController::class,'delete'])->name('delete');



// ********* Category **********
Route::get('/add-category',[CategoryController::class,'index'])->name('add.category');
Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');








