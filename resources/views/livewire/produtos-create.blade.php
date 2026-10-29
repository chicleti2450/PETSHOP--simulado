<div>
    <div class="container py-5 w-50 p-3 shadow-sm p-3 bg-body rounded-4">


        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form wire:submit="store">
            <div class="text-center fs-4xl"> <i class="bi bi-house-heart"></i>
                Pet Shop </div>

            <div class="row md-5">
                <div class="col-6">
                    <label class="form-label">Nome</label>
                    <input type="nome" class="form-control" wire:model="nome">
                </div>

                <div class="col-6">
                    <label class="form-label">Quantidade disponível</label>
                    <input type="quantidade" class="form-control" wire:model="quantidade">
                </div>
            </div>

            <div class="row md-5">
                <div class="col-6">
                    <label class="form-label">Marca</label>
                    <input type="marca" class="form-control" wire:model="marca">
                </div>

                <div class="col-6">
                    <label class="form-label">Categoria</label>
                    <input type="categoria" class="form-control" wire:model="categoria">
                </div>
            </div>

            <div class="row md-5">
                <div class="col-6">
                    <label class="form-label">Preço de custo</label>
                    <input type="Pcusto" class="form-control" wire:model="Pcusto">
                </div>

                <div class="col-6">
                    <label class="form-label">Preço de venda</label>
                    <input type="Pvenda" class="form-control" wire:model="Pvenda">
                </div>
            </div>

            <div class="row md-5">
                <div class="col-6">
                    <label class="form-label">Estoque mínimo</label>
                    <input type="estoqueMin" class="form-control" wire:model="estoqueMin">
                </div>

                <div class="col-6">
                    <label class="form-label">Prazo de validade</label>
                    <input type="prazo" class="form-control" wire:model="prazo">
                </div>
            </div>

            <div class="mb-6">
                <label class="form-label">Descrição</label>
                <input type="descricao" class="form-control" wire:model="descricao">
            </div>


            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    {{ session('success') }}

                    <button type="button" class="btn-close" data-bsd-dismiss="alert">Salvar</button>
                    <span wire:loading wire:target="salvar">
                        Salvando...
                    </span>
                </div>
            @endif
    </div>
    </form>
</div>
</div>
