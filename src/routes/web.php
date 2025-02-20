<?php

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

Route::namespace('Sample')->prefix('sample')->name('sample.')->group(function(){

});
/*
Route::namespace('Top')->prefix('top')->name('top.')->group(function() {
    Route::get('top',[App\Http\Controllers\Top\TopController::class,'index'])->name('top');
    //Route::get('top',[App\Http\Controllers\Top\TopController::class,'index'])->name('top')->middleware('auth');

    Route::get('information',[App\Http\Controllers\Top\TopController::class,'information'])->name('information');
});*/
