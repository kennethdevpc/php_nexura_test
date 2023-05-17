<?php

use App\Http\Controllers\EmpleadoController;
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
    return view('auth.login');
});


Route::resource('/empleado', EmpleadoController::class)->middleware('auth'); //para acceder a todos lo metodos

Auth::routes(['reset'=>false]);

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'],function (){
    Route::get('/', [EmpleadoController::class, 'index'])->name('');

});