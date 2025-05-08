<?php

use App\Http\Controllers\CarrosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertcarController;
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
    return view('home');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});



Route::get('/catalogo', [CarrosController::class, 'catalogo']);


Route::get('/insertcar/create', [InsertcarController::class, 'create']);
Route::post('/insertcar', [InsertcarController::class, 'store']);