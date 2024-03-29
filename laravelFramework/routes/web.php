<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ExemploController;
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
});

//Route::get('/exemplo', function () {
//    return view('exemplo');
//});

Route::get('/exemplo','app\Http\Controllers\ExemploController@index');
Route::get('/alunos', [App\Http\Controllers\AlunoController::class, 'listar']);
Route::get('/alunos/{id}', [App\Http\Controllers\AlunoController::class, 'listarID']);
