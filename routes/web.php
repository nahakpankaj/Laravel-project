<?php

use App\Http\Controllers\HobbiesController;
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

Route::get('/',[HobbiesController::class,'index'])->name('home');
Route::Post('/create',[HobbiesController::class,'create'])->name('create');
Route::get('data',[HobbiesController::class,'list'])->name('list');
Route::get('detail/{hobby}',[HobbiesController::class,'show'])->name('detail');
Route::delete('destroy/{hobby}',[HobbiesController::class,'destroy'])->name('delete');
