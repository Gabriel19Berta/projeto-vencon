<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TipoProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\RecebimentoController;
use App\Http\Controllers\EstoqueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionarios/{id}', [FuncionarioController::class, 'show'])->name('funcionarios.show');
Route::get('/funcionarios/{id}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/marcas', [MarcaController::class, 'index'])->name('marcas.index');
Route::get('/marcas/create', [MarcaController::class, 'create'])->name('marcas.create');
Route::post('/marcas', [MarcaController::class, 'store'])->name('marcas.store');
Route::get('/marcas/{id}', [MarcaController::class, 'show'])->name('marcas.show');
Route::get('/marcas/{id}/edit', [MarcaController::class, 'edit'])->name('marcas.edit');
Route::put('/marcas/{id}', [MarcaController::class, 'update'])->name('marcas.update');
Route::delete('/marcas/{id}', [MarcaController::class, 'destroy'])->name('marcas.destroy');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');
Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');

Route::get('/tipos-produto', [TipoProdutoController::class, 'index'])->name('tipos-produto.index');
Route::get('/tipos-produto/create', [TipoProdutoController::class, 'create'])->name('tipos-produto.create');
Route::post('/tipos-produto', [TipoProdutoController::class, 'store'])->name('tipos-produto.store');
Route::get('/tipos-produto/{id}', [TipoProdutoController::class, 'show'])->name('tipos-produto.show');
Route::get('/tipos-produto/{id}/edit', [TipoProdutoController::class, 'edit'])->name('tipos-produto.edit');
Route::put('/tipos-produto/{id}', [TipoProdutoController::class, 'update'])->name('tipos-produto.update');
Route::delete('/tipos-produto/{id}', [TipoProdutoController::class, 'destroy'])->name('tipos-produto.destroy');

Route::get('/vendas', [VendaController::class, 'index'])->name('vendas.index');
Route::get('/vendas/create', [VendaController::class, 'create'])->name('vendas.create');
Route::post('/vendas', [VendaController::class, 'store'])->name('vendas.store');
Route::get('/vendas/{id}', [VendaController::class, 'show'])->name('vendas.show');
Route::get('/vendas/{id}/edit', [VendaController::class, 'edit'])->name('vendas.edit');
Route::put('/vendas/{id}', [VendaController::class, 'update'])->name('vendas.update');
Route::delete('/vendas/{id}', [VendaController::class, 'destroy'])->name('vendas.destroy');
Route::post('/vendas/{id}/finalizar', [VendaController::class, 'finalizarVenda'])->name('vendas.finalizar');
Route::post('/vendas/{id}/cancelar', [VendaController::class, 'cancelarVenda'])->name('vendas.cancelar');

Route::get('/recebimentos', [RecebimentoController::class, 'index'])->name('recebimentos.index');
Route::get('/recebimentos/create', [RecebimentoController::class, 'create'])->name('recebimentos.create');
Route::post('/recebimentos', [RecebimentoController::class, 'store'])->name('recebimentos.store');
Route::get('/recebimentos/{id}', [RecebimentoController::class, 'show'])->name('recebimentos.show');
Route::get('/recebimentos/{id}/edit', [RecebimentoController::class, 'edit'])->name('recebimentos.edit');
Route::put('/recebimentos/{id}', [RecebimentoController::class, 'update'])->name('recebimentos.update');
Route::delete('/recebimentos/{id}', [RecebimentoController::class, 'destroy'])->name('recebimentos.destroy');

Route::get('/estoques', [EstoqueController::class, 'index'])->name('estoques.index');
Route::get('/estoques/create', [EstoqueController::class, 'create'])->name('estoques.create');
Route::post('/estoques', [EstoqueController::class, 'store'])->name('estoques.store');
Route::get('/estoques/{id}', [EstoqueController::class, 'show'])->name('estoques.show');
Route::get('/estoques/{id}/edit', [EstoqueController::class, 'edit'])->name('estoques.edit');
Route::put('/estoques/{id}', [EstoqueController::class, 'update'])->name('estoques.update');
Route::delete('/estoques/{id}', [EstoqueController::class, 'destroy'])->name('estoques.destroy');
Route::post('/estoques/entrada', [EstoqueController::class, 'entrada'])->name('estoques.entrada');
Route::post('/estoques/saida', [EstoqueController::class, 'saida'])->name('estoques.saida');
Route::get('/estoques/verificar/{produtoId}', [EstoqueController::class, 'verificarDisponibilidade'])->name('estoques.verificar');
