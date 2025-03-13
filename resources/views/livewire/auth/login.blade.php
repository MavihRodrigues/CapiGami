<div class="d-flex align-items-center justify-content-center vh-100">

    <div class="font-family-roboto col-md-5 card mx-auto opacity-100 shadow-lg text-light"
    style="background-color: #4CA786">
        <h3 class="card-title mt-5 text-center"><strong>Faça seu login</strong></h3>

            <div class="card-body mx-4">
                @if (session()->has('error'))
                <div class="alert alert-warning\">{{ session('error') }}</div>
                @endif
            <form wire:submit.prevent="login">
                <div class="mb-3 ml-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Ex.: aluno@portalsesisp.org.br" wire:model.defer="email">
                        @error('email') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <div class="input-group ">
                        <input type="password" name="password" id="password" class="form-control"
                            wire:model.defer="password"></input>
                        <button class="btn btn-light" type="button"><i class="bi bi-eye-fill"></i></button>
                    </div>
                    @error('password') <span class="text-warning small">{{ $message }}</span>@enderror
                </div>


                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-11" style="background-color: #D9931C">
                        <strong>Login</strong></button>

                <div class="text-center mb-2 mt-2">
                    <p>
                    <a href="#" class="text-light "><strong>Esqueci minha senha<strong></a></p>
                   
                </div>
            </form>
        </div>
    </div>
</div>
