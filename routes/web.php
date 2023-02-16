<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsController;

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
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact',[Controller::class,'contactPage']);
Route::get('/productsList',[ProductsController::class,'productsList']);
Route::get('/productsList/{id}',[ProductsController::class,'getProduct']);
// Create a new page to add form
Route::get('/addProduct',[ProductsController::class,'addProduct']);

Route::post('/saveProduct',[ProductsController::class,'saveProduct']);

// generate view for editing product
Route::get('/editProduct/{id}',[ProductsController::class,'editProduct']);
// Process product edit
Route::post('/updateProduct/{id}',[ProductsController::class,'updateProduct']);


Route::get('/deleteProduct/{id}',[ProductsController::class,'deleteProduct']);