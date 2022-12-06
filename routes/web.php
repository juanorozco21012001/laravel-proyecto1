<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

Route::get('/menu',[homeController::class,'create'])->name('menu');
Route::get('/login',[homeController::class,'index'])->name('login.index');

Route::get('cursos', function () {
    return ('holi mundo');
});


Route::get('cursos/{curso}', function ($curso) {
    return ("holi mundo 2: $curso");
});

