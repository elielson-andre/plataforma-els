<?php

use App\Http\Controllers\AdminControoller;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();


Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dicas', [App\Http\Controllers\HomeController::class, 'dicas'])->name('dicas');
    Route::get('/aulas',[HomeController::class,'todasAsAulas'])->name('aulas');
    Route::get('/aulas/{slug}',[AulaController::class,'getInfo']);
    Route::get('/meu-perfil',[UserController::class,'index'])->name('meu-perfil');
    Route::get('/plano-premium',[UserController::class,'premium'])->name('plano-premium');
});


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/

Route::get('/admin-area/login', [AdminControoller::class,'login']);

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [AulaController::class, 'index'])->name('admin.home');
    Route::get('/admin/publicar-aula', [AulaController::class, 'publicarGet'])->name('publicar-aula');
    Route::get('/admin/editar/{slug}', [AulaController::class, 'editarGet']);
    Route::get('/admin/excluir/{slug}', [AulaController::class, 'excluirGet']);

    Route::post('/admin/publicar-aula', [AulaController::class, 'publicarPost']);
    Route::post('/admin/editar', [AulaController::class, 'editarPost']);
});
