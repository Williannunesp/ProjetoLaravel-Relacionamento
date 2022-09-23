<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\PessoaTelefoneController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\TelefoneController;
use App\Models\PessoaTelefone;
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

Route::get('/index', [IndexController::class, 'index'])->name("home");

Route::get('/nome', [PessoaController::class, 'show'])->name("tela_nome");
Route::get('/nome/novo', [PessoaController::class, 'create'])->name("telac_nome");
Route::post('/nome/novo', [PessoaController::class, 'store'])->name("cadastrar_nome");
Route::delete('/nome/{id}', [PessoaController::class, 'destroy'])->name("remover_nome");


Route::get('/sexo', [SexoController::class, 'show'])->name("tela_sexo");
Route::get('/sexo/novo', [SexoController::class, 'create'])->name("telac_sexo");
Route::post('/sexo/novo', [SexoController::class, 'store'])->name("cadastrar_sexo");
Route::delete('/sexo/{id}', [SexoController::class, 'destroy'])->name("remover_sexo");

Route::get('/email', [EmailController::class, 'show'])->name("tela_email");
Route::get('/email/novo', [EmailController::class, 'create'])->name("telac_email");
Route::post('/email/novo', [EmailController::class, 'store'])->name("cadastrar_email");
Route::delete('/email/{id}', [EmailController::class, 'destroy'])->name("remover_email");

Route::get('/telefone', [TelefoneController::class, 'show'])->name("tela_telefone");
Route::get('/telefone/novo', [TelefoneController::class, 'create'])->name("telac_telefone");
Route::post('/telefone/novo', [TelefoneController::class, 'store'])->name("cadastrar_telefone");
Route::delete('/telefone/{id}', [TelefoneController::class, 'destroy'])->name("remover_telefone");

Route::get('/petel', [PessoaTelefoneController::class, 'show'])->name("tela_petel");
Route::get('/petel/novo', [PessoaTelefoneController::class, 'create'])->name("telac_petel");
Route::post('/petel/novo', [PessoaTelefoneController::class, 'store'])->name("cadastrar_petel");
Route::delete('/petel/{id}', [PessoaTelefoneController::class, 'destroy'])->name("remover_petel");