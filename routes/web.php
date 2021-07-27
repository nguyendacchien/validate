<?php

use App\Http\Controllers\CusstomController;
use App\Http\Controllers\PostController;
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

//Route::prefix('/post')->group(function (){
//    Route::get('/create',[PostController::class,'create'])->name('post.create');
//    Route::post('/create',[PostController::class,'store'])->name('post.store');
//});
Route::prefix('custom')->group(function (){
    Route::get('/',[CusstomController::class,'checkValidate'])->name('custom.check');
    Route::post('/',[CusstomController::class,'checkValidate'])->name('custom.ccc');
});
