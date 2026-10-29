<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutosEdit extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $Pcusto;
    public $Pvenda;
    public $quantidade;
    public $estoqueMin;
    public $prazo;
    public $produtoId;

    public function store()
    {
        Produto::update([
            $this->nome = produto->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria' => $this->categoria,
            'Pcusto' => $this->Pcusto,
            'Pvenda' => $this->Pvenda,
            'quantidade' => $this->quantidade,
            'estoqueMin' => $this->estoqueMin,
            'prazo' => $this->prazo,
        ]);

        session()->flash('success', 'Produto cadastrado com sucesso!');
        return redirect()->route('produtos.index');
    }


    public function render()
    {
        return view('livewire.produtos-edit');
    }
}
