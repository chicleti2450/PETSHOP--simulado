<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutosIndex extends Component
{
    public $busca = '';

    public function render(){ 
        $produtos = Produto::where(
            'nome',
            'like',
            '%' . $this->busca . '%'
            )->get();

            $produtos = Produto::all();

        return view('livewire.produtos-index', compact('produtos'));
    }
}
