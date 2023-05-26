<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database;
use App\Http\Controllers\indexController;


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

Route::get('/', indexController::class);


/*
Some sql fun 
*/


