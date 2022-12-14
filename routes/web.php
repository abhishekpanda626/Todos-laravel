<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;
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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/',[itemController::class,'showItem']);
Route::get('/add',[itemController::class,'addItem']);
Route::get('/delete/{slno}',[itemController::class,'deleteItem']);
Route::get('/edit/{slno}',[itemController::class,'editItem']);
Route::get('/update',[ItemController::class,'updateItem']);