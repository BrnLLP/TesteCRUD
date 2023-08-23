<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\AcessibilidadeController;
use App\Models\Acessibilidade;

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
    $tipos=Acessibilidade::all();
    return view('index',compact('tipos'));
});

Route::post('novo-veiculo',[VeiculoController::class,'create']);
Route::get('ver-veiculo',[VeiculoController::class,'show']);
Route::get('deleta-veiculo',[VeiculoController::class,'delete']);
Route::post('atualiza-veiculo',[VeiculoController::class,'edit']);
Route::get('lista-veiculos',[VeiculoController::class,'list']);
Route::get('lista-tipos',[AcessibilidadeController::class,'list']);