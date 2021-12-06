<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;



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

Route::get('/',HomeController::class);

Route::get('clientes', [ClienteController::class,'index']);
Route::get('clientes/create', [ClienteController::class,'create']);
Route::get('principal',[DashboardController::class,'index']);

/*oute::get('plantilla/{variable}',function($variable){
    return "BIENVENIDO A PLANTILLA + CLIENTES: $variable";
});*/