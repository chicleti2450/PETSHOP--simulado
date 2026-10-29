<?php

use App\Livewire\Login;

use App\Livewire\ProdutosCreate;
use App\Livewire\ProdutosEdit;
use App\Livewire\ProdutosIndex;

use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::get('/produto/create', ProdutosCreate::class)->name('produtos.create');
Route::get('/produto/edit/{}', ProdutosEdit::class)->name('produtos.edit');
Route::get('/produtos', ProdutosIndex::class)->name('produtos.index');


