<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ReservaController;




Route::get('/', function () {
    return view('home');
});
Route::get('/', function(){return redirect()->route('espacios.index');
});
Route::resource('espacios', EspacioController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('permisos', PermisoController::class)->middleware('can:vistaPermisos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/permisos', [App\Http\Controllers\PermisosController::class, 'index'])->name('permisos');
