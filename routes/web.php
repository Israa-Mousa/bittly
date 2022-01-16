<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UrlController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/short',[UrlController::class,'index'])->name('create');

Route::post('/short',[UrlController::class,'create']);
Route::get('/short/{link}/',[UrlController::class,'shortlink']);
Route::get('/delete/{id}/',[UrlController::class,'delete'])->name('delete');
Route::get('/edit/{id}/',[UrlController::class,'edit'])->name('edit');
Route::post('/update/{id}/',[UrlController::class,'update'])->name('update');

// Route::delete('delete/{id}', [CategoriesController::class, 'delete'])
// ->name('delete');
