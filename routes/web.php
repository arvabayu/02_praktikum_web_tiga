<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome1;
use App\Http\Controllers\ControllerProducts1;
use App\Http\Controllers\ControllerPrograms1;
use App\Http\Controllers\ControllerAboutUs1;

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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get("/", [ControllerHome1::class, 'index']);

Route::prefix("kategori")->group(function(){
    Route::get("/marbel-edu-games", [ControllerProducts1::class, 'kategori1']);
    Route::get("/marbel-and-friends-kind-games", [ControllerProducts1::class, 'kategori2']);
    Route::get("/riri-story-books", [ControllerProducts1::class, 'kategori3']);
    Route::get("/kolak-kids-songs", [ControllerProducts1::class, 'kategori4']);
});


Route::prefix("program")->group(function(){
    Route::get("/karir", [ControllerPrograms1::class, 'karir']);
    Route::get("/magang", [ControllerPrograms1::class, 'magang']);
    Route::get("/kunjungan-industri", [ControllerPrograms1::class, 'kunjunganIndustri']);
});

Route::get("/aboutus", [ControllerAboutUs1::class, 'index']);
*/
Route::get('/hello', function () {
    return view('hello', ['name' => 'Andi']);
    });

    Route::get('/home', function () {
        return view('home', ['name' => 'Arva']);
        });

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController1::class, 'home'])->name('home');
Route::prefix('/product', [App\Http\Controllers\ControllerProducts1::class, 'product'])->name('product');
Route::get('/aboutus', [App\Http\Controllers\ControllerAboutUs1::class, 'index'])->name('aboutuss');
Route::prefix("program")->group(function(){
    Route::get("/karir", [ControllerPrograms1::class, 'karir']);
    Route::get("/magang", [ControllerPrograms1::class, 'magang']);
    Route::get("/kunjungan-industri", [ControllerPrograms1::class, 'kunjunganIndustri']);
});
Route::get('news/{id?}', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
