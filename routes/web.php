<?php

use App\Http\Controllers\DatosController;
use App\Http\Controllers\TutoresController;
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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    //return view('welcome');
    return "Hola mundo";
});

Route::resource('tutores','App\Http\Controllers\TutoresController');

Route::get('/formulario', function () {
    return view('base');
});

Route::resource('/datos', DatosController::class);
