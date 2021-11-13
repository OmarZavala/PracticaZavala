<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cheetos;
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
Route::get('/login', [Cheetos::class,'inicio'])
->name('Warzone');
Route::post('/Cr56amax', [Cheetos::class, 'pola'])
->name('Cr56amax');