<div class="mt-5  ">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    <div class="font-family-roboto col-md-5 card mx-auto  opacity-100 shadow-lg text-light"
    style="background-color: #4CA786">
        <h3 class="card-title mt-5 text-center"><strong>Crie Sua Conta!</strong></h3>

        <div class="card-body mx-4">
            <form wire:submit.prevent="store">
                <div class="mt-1 mb-3 ">
                    <label for="nome" class="form-label">Nome</label> {{-- placeholder: colocar um texto de exemplo
                    dentro de uma caixa de texto --}}
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Aluno"
                        wire:model.defer="nome">
                </div>
                <div class="mb-3 ml-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Ex.: aluno@portalsesisp.org.br" wire:model.defer="email">
                </div>

                <div class="mb-3">
                    <label for="rm">RM</label>
                    <input name="text" id="rm" class="form-control" rows="5" placeholder="Ex.: 1234"
                        wire:model.defer="rm"></input>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <div class="input-group ">
                        <input type="password" name="password" id="senhaPassword" class="form-control" rows="5"
                            wire:model.defer="senha"></input>
                        <button class="btn btn-light" type="button"><i class="bi bi-eye-fill"></i></button>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="confirmar_senha" class="form-label">Confirmar Senha</label>
                    <div class="input-group">
                    <input type="password" name="password" id="confirmar_senhaPassword" class="form-control" rows="5"
                        wire:model.defer="confirmar_senha"></input>
                        <button class="btn btn-light" type="button"><i class="bi bi-eye-fill"></i></button>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-11" style="background-color: #D9931C">
                        <strong>Cadastre-se</strong></button>

                <div class="text-center mb-2 mt-2">
                    <p><strong>Já possui uma conta? <a href="#" class="text-light">Login</a><strong> </br>
                    <a href="#" class="text-light "><strong>Esqueci minha senha<strong></a></p>
                   
                </div>
            </form>
        </div>
    </div>

</div>