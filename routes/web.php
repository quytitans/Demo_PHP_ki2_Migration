<?php

use App\Http\Controllers\factoryController;
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

Route::get('/newcustomer', [factoryController::class, 'addUser']);
Route::get('/newproduct', [factoryController::class, 'addProduct']);
Route::get('/neworder', [factoryController::class, 'addOrder']);
Route::get('/neworderdetail', [factoryController::class, 'addOrderDetail']);
