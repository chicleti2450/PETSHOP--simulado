<div>
    <div class="text-center fs-xl"> <i class="bi bi-house-heart"></i>
                    Pet Shop </div>
    <div class="container p-5">
        <input type="text" class="form-control" placeholder="Pesquisar produto..." wire:model.live="busca">

        <div>
            <div class="container p-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Marca</th>
                            <th>Categoria</th>
                            <th>Preço de custo</th>
                            <th>Preço de venda</th>
                            <th>Quantidade disponível</th>
                            <th>Estoque mínimo</th>
                            <th>Prazo de validade</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($produtos as $p)
                            <tr>
                                <td> {{ $p->id }} </td>
                                <td> {{ $p->nome }} </td>
                                <td> {{ $p->descricao }} </td>
                                <td> {{ $p->marca }} </td>
                                <td> {{ $p->categoria }} </td>
                                <td> {{ $p->Pcusto }} </td>
                                <td> {{ $p->Pvenda }} </td>
                                <td> {{ $p->quantidade }} </td>
                                <td> {{ $p->estoqueMin }} </td>
                                <td> {{ $p->prazo }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    {{ session('success') }}

                    <button type="button" class="btn-close" data-bsd-dismiss="alert"></button>
                </div>
            @endif
        </div>
    </div>
</div>
