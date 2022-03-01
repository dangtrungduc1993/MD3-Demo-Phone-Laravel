<?php

use App\Http\Controllers\PhoneController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('home');
});

Route::prefix('phones')->group(function (){
    Route::get('/', [PhoneController::class,'index'])->name('phone.index');
    Route::get('/{id}/show',[PhoneController::class,'show'])->name('phone.show');
    Route::get('/create',[PhoneController::class,'create'])->name('phone.create');
    Route::post('/create',[PhoneController::class,'store'])->name('phone.store');
    Route::post('{id}/delete',[PhoneController::class,'destroy'])->name('phone.destroy');
    Route::get('/update',[PhoneController::class,'edit'])->name('phone.edit');
    Route::post('/update',[PhoneController::class,'update'])->name('phone.update');
});



