<form class="row g-3">
    <div class="col-md-4">
      <label for="cnpj" class="form-label">CNPJ:</label>
        <div class="input-group flex-nowrap">
            <label for="cnpj" class="form-label"><span class="input-group-text"><i class="fas fa-building"></i></span></label>
            <input type="text" name="cnpj" class="form-control  @error('cnpj') is-invalid @enderror" id="cnpj" autofocus placeholder="00.000.000/0000-00" wire:model="cnpj">
        </div>
        @error('cnpj')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-8">
      <label for="razao_social" class="form-label">Razão social:</label>
        <div class="input-group flex-nowrap">
            <label for="razao_social" class="form-label"><span class="input-group-text"><i class="fas fa-building"></i></span></label>
            <input type="text" name="razao_social" class="form-control  @error('razao_social') is-invalid @enderror" id="razao_social" placeholder="Razão social" wire:model="razao_social">
        </div>
        @error('razao_social')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-8">
      <label for="nome" class="form-label">Nome fantasia:</label>
        <div class="input-group flex-nowrap">
            <label for="nome" class="form-label"><span class="input-group-text"><i class="fas fa-building"></i></span></label>
            <input type="text" name="nome" class="form-control  @error('nome') is-invalid @enderror" id="nome" placeholder="Nome fantasia" wire:model="nome">
        </div>
        @error('nome')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-4">
      <label for="telefone" class="form-label">Telefone:</label>
        <div class="input-group flex-nowrap">
            <label for="telefone" class="form-label"><span class="input-group-text"><i class="fas fa-phone-square"></i></span></label>
            <input type="text" name="telefone" class="form-control  @error('telefone') is-invalid @enderror" id="telefone" placeholder="41 3333-3333" wire:model="telefone">
        </div>
        @error('telefone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-3">
        <label for="celular" class="form-label">Celular:</label>
        <div class="input-group flex-nowrap">
            <label for="celular" class="form-label"><span class="input-group-text"><i class="fas fa-mobile-alt"></i></span></label>
            <input type="text" name="celular" class="form-control  @error('celular') is-invalid @enderror" id="celular" placeholder="41 99999-9999" wire:model="celular">
        </div>
        @error('celular')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-3">
        <label for="cep" class="form-label">CEP:</label>
        <div class="input-group flex-nowrap">
            <label for="cep" class="form-label"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span></label>
            <input type="text" wire:change.prevent="buscaCep" name="cep" class="form-control  @error('cep') is-invalid @enderror" id="cep" placeholder="00000-000" wire:model="cep">
        </div>
        @error('cep')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-3">
        <label for="estado" class="form-label">Estado:</label>
        <div class="input-group flex-nowrap">
            <label for="estado" class="form-label"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span></label>
            <input type="text" name="estado" class="form-control  @error('estado') is-invalid @enderror" id="estado" placeholder="estado" wire:model="estado">
        </div>
        @error('estado')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-3">
        <label for="cidade" class="form-label">Cidade:</label>
        <div class="input-group flex-nowrap">
            <label for="cidade" class="form-label"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span></label>
            <input type="text" name="cidade" class="form-control  @error('cidade') is-invalid @enderror" id="cidade" placeholder="cidade" wire:model="cidade">
        </div>
        @error('cidade')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-3">
        <label for="bairro" class="form-label">Bairo:</label>
        <div class="input-group flex-nowrap">
            <label for="bairro" class="form-label"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span></label>
            <input type="text" name="bairro" class="form-control  @error('bairro') is-invalid @enderror" id="bairro" placeholder="bairro" wire:model="bairro">
        </div>
        @error('bairro')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-9">
        <label for="endereco" class="form-label">Endereço:</label>
        <div class="input-group flex-nowrap">
            <label for="endereco" class="form-label"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span></label>
            <input type="text" name="endereco" class="form-control  @error('endereco') is-invalid @enderror" id="endereco" placeholder="endereco" wire:model="endereco" value="{{old("endereco")}}">
        </div>
        @error('endereco')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="numero" class="form-label">Numero:</label>
        <div class="input-group flex-nowrap">
            <label for="numero" class="form-label"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span></label>
            <input type="text" name="numero" class="form-control  @error('numero') is-invalid @enderror" id="numero" placeholder="numero" wire:model="numero">
        </div>
        @error('numero')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="complemento" class="form-label">Complemento:</label>
        <div class="input-group flex-nowrap">
            <label for="complemento" class="form-label"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span></label>
            <input type="text" name="complemento" class="form-control  @error('complemento') is-invalid @enderror" id="complemento" placeholder="complemento" wire:model="complemento">
        </div>
        @error('complemento')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="logo" class="form-label">Logo da empresa:</label>
        <div class="input-group flex-nowrap">
            <input type="file" name="logo" class="@error('logo') is-invalid @enderror" id="logo" placeholder="logo" wire:model="logo">
        </div>
        @error('logo')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">E-mail:</label>
        <div class="input-group flex-nowrap">
            <label for="email" class="form-label"><span class="input-group-text"><i class="fab fa-instagram"></i></span></label>
            <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="email" wire:model="email">
        </div>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="link_instagram" class="form-label">Link do instagram:</label>
        <div class="input-group flex-nowrap">
            <label for="link_instagram" class="form-label"><span class="input-group-text"><i class="fab fa-instagram"></i></span></label>
            <input type="text" name="link_instagram" class="form-control  @error('link_instagram') is-invalid @enderror" id="link_instagram" placeholder="link_instagram" wire:model="link_instagram">
        </div>
        @error('link_instagram')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="link_facebook" class="form-label">Link do fecebook:</label>
        <div class="input-group flex-nowrap">
            <label for="link_facebook" class="form-label"><span class="input-group-text"><i class="fab fa-facebook-square"></i></span></label>
            <input type="text" name="link_facebook" class="form-control  @error('link_facebook') is-invalid @enderror" id="link_facebook" placeholder="link_facebook" wire:model="link_facebook">
        </div>
        @error('link_facebook')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</form>
