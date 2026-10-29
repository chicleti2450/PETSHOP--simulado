<div>
    <div class="container py-5 w-50 p-3 shadow-sm p-3 bg-body rounded-4">
        <div class="row">


            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form wire:submit="store">
                <div class="text-center fs-4xl"> <i class="bi bi-house-heart"></i>
                    Pet Shop </div>

                <div class="col-md-5">
                    <div class="mb-6">
                        <label class="form-label">E-mail</label>

                        <input type="email" class="form-control" wire:model="email">

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="form-label">Senha</label>

                        <input type="password" class="form-control" wire:model="password">

                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 mb-6" type="submit">
                        Entrar
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
