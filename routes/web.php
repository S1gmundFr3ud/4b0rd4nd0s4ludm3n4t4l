<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\UserPacientesControllers;
use App\Http\Controllers\CardController;

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
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

    Route::get('/card', [App\Http\Controllers\CardController::class, 'index'])->name('card.index');
    Route::get('/card/show', [App\Http\Controllers\CardController::class, 'show'])->name('card.show');
    Route::get('/card/create', [App\Http\Controllers\CardController::class, 'create'])->name('card.create');
    Route::post('/card', [App\Http\Controllers\CardController::class, 'store'])->name('card.store');
    Route::get('/card/edit', [App\Http\Controllers\CardController::class, 'edit'])->name('card.edit');

    Route::get('/postulados', [App\Http\Controllers\User_postulados_relacionsController::class, 'index'])->name('postulados.index');
    Route::get('/postulados/{id}', [App\Http\Controllers\User_postulados_relacionsController::class, 'show'])->name('postulados.show');
    Route::get('/postulados/create', [App\Http\Controllers\User_postulados_relacionsController::class, 'create'])->name('postulados.create');
    Route::post('/postulados', [App\Http\Controllers\UserPacientesController::class, 'store'])->name('pacientes.store');

    Route::get('/pacientes', [App\Http\Controllers\UserPacientesController::class, 'index'])->name('pacientes.index');
    Route::get('/pacientes/create', [App\Http\Controllers\UserPacientesController::class, 'create'])->name('pacientes.create');
    Route::post('/pacientes', [App\Http\Controllers\UserPacientesController::class, 'store'])->name('pacientes.store');


    Route::get('/estado', [App\Http\Controllers\EstadoController::class, 'index'])->name('estado.index');

    Route::get('/zona', [App\Http\Controllers\ZonaController::class, 'index'])->name('zona.index');

    Route::get('/NewPassword',  [UserSettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
    Route::post('/change/password',  [UserSettingsController::class,'changePassword'])->name('changePassword');

    Route::get('/localidades', [App\Http\Controllers\LocalidadesController::class, 'index'])->name('localidades.index');

    Route::get('/provincia', [App\Http\Controllers\ProvinciaController::class, 'index'])->name('provincias.index');


    Route::get('/genero', [App\Http\Controllers\GeneroController::class, 'index'])->name('genero.index');
    Route::resource('genero', App\Http\Controllers\RoleController::class);
    

    Route::get('/pedido', [App\Http\Controllers\PedidoController::class, 'index'])->name('pedido.index');
    Route::get('/pedido/create', [App\Http\Controllers\PedidoController::class, 'create'])->name('pedido.create');
    

    Route::resource('posts', App\Http\Controllers\PostController::class);

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
});