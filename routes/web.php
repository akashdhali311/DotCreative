<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

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
Route::prefix('/backend')->group(function(){
    Route::get('/adminpanel',[AdminController::class,'adminpanel']);
});
Route::get('/home',[AdminController::class,'home' ])->name('home1');
Route::get('/about',[AdminController::class,'about' ])->name('about');
