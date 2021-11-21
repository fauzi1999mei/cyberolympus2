<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\agentController;

use App\Http\Controllers\productController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\eproductController;
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
// route user
Route::get('/user',[userController::class,'index']);
Route::get('/agent',[agentController::class,'index']);
Route::get('/product',[productController::class,'index']);
Route::get('/order',[orderController::class,'index']);
Route::get('/laporan',[laporanController::class,'index']);
Route::get('/laporan2',[eproductController::class,'index']);
