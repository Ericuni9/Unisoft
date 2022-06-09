<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UsuarioController;
use App\Models\Produto;
use App\Models\Servico;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/perfil', [HomeController::class, 'perfil'])->name('perfil');

Route::get('/politica', [HomeController::class, 'politica']);

Route::get('/termos', [HomeController::class, 'termos']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//User

Route::post('/create-user', [RegisterController::class, 'create'])->name('cadastro');

//Route::get('/users', [UsuarioController::class, 'allUsers']);

Route::get('/edit-user', [UsuarioController::class, 'editUser'])->name('edit-perfil');

Route::post('/update-user', [UsuarioController::class, 'updateUser'])->name('update-user');

//Produtos

Route::get('/produtos', [ProdutoController::class, 'getAllProducts']);

Route::get('/clean-paths', [ProdutoController::class, 'cleanPaths']);

//Servicos

//Route::get('/add-servico', [ServicoController::class, 'create']);

Route::get('/servicos', [ServicoController::class, 'getAllServices']);

Route::get('/json-backup', [TesteController::class, 'jsonBackup']);



