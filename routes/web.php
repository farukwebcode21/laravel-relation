<?php

use App\Http\Controllers\DemoController;
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

Route::controller(DemoController::class)->group(function () {
    Route::get('/1', 'DemoAction1');
    Route::get('/2', 'DemoAction2');
    Route::get('/3', 'DemoAction3');
    Route::get('/4', 'DemoAction4');
    Route::get('/5', 'DemoAction5');
    Route::get('/6', 'DemoAction6');
});
