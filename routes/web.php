<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

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
Route::get('/category', [CompanyController::class,'index'])->name('category');

Route::get('/tambahcategory', [CompanyController::class,'tambahcategory'])->name('tambahcategory');
Route::post('/insertdata', [CompanyController::class,'insertdata'])->name('insertdata');

Route::get('/tambahhcategory/{id}', [CompanyController::class,'tambahhcategory'])->name('tambahhcategory');
Route::post('/updatecategory/{id}', [CompanyController::class,'updatecategory'])->name('updatecategory');

Route::get('/delete/{id}', [CompanyController::class,'delete'])->name('delete');


//Tampilan Article
Route::get('/detaildata/{id}', [CompanyController::class,'detaildata'])->name('detaildata');
//Tambah Article
Route::get('/tambaharticle/{id}', [CompanyController::class,'tambaharticle'])->name('tambaharticle');
Route::post('/insertarticle/{id}', [CompanyController::class,'insertarticle'])->name('insertarticle');
//Edit Article
Route::get('/tambahkanarticle/{id}', [CompanyController::class,'tambahkanarticle'])->name('tambahkanarticle');
Route::post('/updatearticle/{id}', [CompanyController::class,'updatearticle'])->name('updatearticle');
//Delete Article
Route::get('/deletearticle/{id}', [CompanyController::class,'deletearticle'])->name('deletearticle');
