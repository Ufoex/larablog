<?php

use App\Http\Controllers\Dashboard\PostController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/test', function () {
    return 'test ';
})->name('test');

Route::get('home/{nombre?}/{apellido?}', function ($nombre = 'Uriel', $apellido = 'Ulloa'){
//    return view('home')
//        ->with('nombre', $nombre)
//        ->with('apellido', $apellido);
    return view('home',['nombre' => $nombre, 'apellido' => $apellido]);
});

//Route::get('post', [PostController::class, 'index']);

Route::resource('dashboard/post', PostController::class);

