<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\MuroController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\MuseoController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehiculosController;

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
})->name('welcome');

// Route::get('/principal', function () {
//     return view('principal');
// })->name('principal');

//Login
Route::get('/login', [LoginControler::class,'index']
)->name('LoginIndex');//Nombre de la ruta

Route::post('/login', [LoginControler::class,'store']
)->name('LoginStore');//Nombre de la ruta

Route::get('/muro', [MuroController::class,'index']
)->name('MuroIndex');//Nombre de la ruta

//Logout
Route::post('/logout', [LogoutController::class,'store']
)->name('LogoutStore');//Nombre de la ruta

//ChatBot
Route::post('/muro', [ChatBotController::class,'index']
)->name('MuroChat');//Nombre de la ruta

//Museo
Route::get('/Museo', [MuseoController::class,'index']
)->name('MuseoIndex');//Nombre de la ruta


//Store
Route::get('/Store', [StoreController::class,'index']
)->name('StoreIndex');//Nombre de la ruta


//Registro

Route::get('/registro', [RegistroController::class,'index']
)->name('RegistroIndex');//Nombre de la ruta

Route::post('/registro', [RegistroController::class,'store']
)->name('RegistroStore');//Nombre de la ruta

//Admin
Route::get('/admin', [AdminController::class,'index']
)->name('AdminIndex');//Nombre de la ruta

//Vehiculos
Route::get('/vehiculos/{vehiculos}/edit', [VehiculosController::class,'edit']
)->name('VehiculosEdit');//Nombre de la ruta

Route::patch('/productos/{vehiculos}', [VehiculosController::class,'update']
)->name('VehiculosUpdate');//Nombre de la ruta

