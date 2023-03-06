<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'hello']);

Route::get('/hello',[HelloController::class, 'hello']);

Route::get('/aboutus',[AboutusController::class, 'aboutus'])->name('aboutus');

Route::prefix('products')->group(function() {
    Route::get('/tea', [ProductsController::class,'tea'])->name('tea');
    Route::get('/freshMilk', [ProductsController::class,'freshMilk'])->name('freshMilk');
    Route::get('/coffee', [ProductsController::class,'coffee'])->name('coffee');
    Route::get('/snack', [ProductsController::class,'snack'])->name('snack');
});

Route::prefix('program')->group(function() {
    Route::get('/paketMahasiswa', [ProgramController::class,'paket1'])->name('paket1');
    Route::get('/paketBocil', [ProgramController::class,'paket2'])->name('paket2');
    Route::get('/paketTuek', [ProgramController::class,'paket3'])->name('paket3');
});

Route::get('/news/{id}',[NewsController::class,'news']);

Route::resource('contact-us', ContactController::class)->only(['show']);
