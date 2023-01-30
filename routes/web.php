<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPribadiController;

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


Route::get('/',[DataPribadiController::class,'index'])->name('home');

Route::get('/tambah',[DataPribadiController::class,'tambah']);

Route::Post('/insertdata', [DataPribadiController::class,'insertdata']);

Route::get('/tampilkandata/{id}', [DataPribadiController::class,'tampilkandata'])->name('tampilkandata');

Route::Post('/updatedata/{id}', [DataPribadiController::class,'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [DataPribadiController::class,'deletedata'])->name('deletedata');

Route::get('/detail/{id}', [DataPribadiController::class,'detail'])->name('detail');
