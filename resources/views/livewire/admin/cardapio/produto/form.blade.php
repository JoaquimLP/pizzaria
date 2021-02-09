<form class="row g-3">
    <div class="col-md-12">
      <label for="nome" class="form-label">Nome:</label>
      <div class="input-group flex-nowrap">
        <label for="nome" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
        <input type="text" name="nome" class="form-control  @error('nome') is-invalid @enderror" id="nome" placeholder="nome da categoria" wire:model="nome">
        @error('nome')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
    </div>
    <div class="col-md-6  my-3">
      <label for="categoria_id" class="form-label">Categoria:</label>
      <div class="input-group flex-nowrap">
        <label for="nome" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
        <select class="form-control" wire:click.preven="openPizza()" name="categoria_id" id="categoria_id" wire:model="categoria_id">
            <option selected>-----</option>
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
        @endforeach
      </select>
      </div>
    </div>
    <div class="col-md-6 my-3">
        <label for="detalhes" class="form-label">Detalhes:</label>
        <div class="input-group flex-nowrap">
            <label for="detalhes" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="detalhes" class="form-control  @error('detalhes') is-invalid @enderror" id="detalhes" placeholder="informações exibida no site" wire:model="detalhes">
            @error('detalhes')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3 my-3 @if ($addClass == true) d-none @endif">
        <label for="preco_pequena" class="form-label">Valor pizza tamanho pequeno:</label>
        <div class="input-group flex-nowrap">
            <label for="preco_pequena" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="preco_pequena" class="form-control  @error('preco_pequena') is-invalid @enderror" id="preco_pequena" placeholder="R$ 00,00" wire:model="preco_pequena" onkeyup="k(this);">
            @error('preco_pequena')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3 my-3 @if ($addClass == true) d-none @endif">
        <label for="preco_media" class="form-label">Valor pizza tamanho media:</label>
        <div class="input-group flex-nowrap">
            <label for="preco_media" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="preco_media" class="form-control  @error('preco_media') is-invalid @enderror" id="preco_media" placeholder="R$ 00,00" wire:model="preco_media" onkeyup="k(this);">
            @error('preco_media')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3 my-3 @if ($addClass == true) d-none @endif">
        <label for="preco_grande" class="form-label">Valor pizza tamanho grande:</label>
        <div class="input-group flex-nowrap">
            <label for="preco_grande" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="preco_grande" class="form-control  @error('preco_grande') is-invalid @enderror" id="preco_grande" placeholder="R$ 00,00" wire:model="preco_grande" onkeyup="k(this);">
            @error('preco_grande')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3 my-3 @if ($addClass == true) d-none @endif">
        <label for="preco_gigante" class="form-label">Valor pizza tamanho gigante:</label>
        <div class="input-group flex-nowrap">
            <label for="preco_gigante" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="preco_gigante" class="form-control  @error('preco_gigante') is-invalid @enderror" id="preco_gigante" placeholder="R$ 00,00" wire:model="preco_gigante" onkeyup="k(this);">
            @error('preco_gigante')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3 my-3 @if ($addClass == true) d-none @endif">
        <label for="qtd_fatia_pequena" class="form-label">Quantidade de fatia pizza pequena:</label>
        <div class="input-group flex-nowrap">
            <label for="qtd_fatia_pequena" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="qtd_fatia_pequena" class="form-control  @error('qtd_fatia_pequena') is-invalid @enderror" id="qtd_fatia_pequena" placeholder="" wire:model="qtd_fatia_pequena">
            @error('qtd_fatia_pequena')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3 my-3 @if ($addClass == true) d-none @endif">
        <label for="qtd_fatia_media" class="form-label">Quantidade de fatia pizza media:</label>
        <div class="input-group flex-nowrap">
            <label for="qtd_fatia_media" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="qtd_fatia_media" class="form-control  @error('qtd_fatia_media') is-invalid @enderror" id="qtd_fatia_media" placeholder="" wire:model="qtd_fatia_media">
            @error('qtd_fatia_media')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3 my-3 @if ($addClass == true) d-none @endif">
        <label for="qtd_fatia_grande" class="form-label">Quantidade de fatia pizza grande:</label>
        <div class="input-group flex-nowrap">
            <label for="qtd_fatia_grande" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="qtd_fatia_grande" class="form-control  @error('qtd_fatia_grande') is-invalid @enderror" id="qtd_fatia_grande" placeholder="" wire:model="qtd_fatia_grande">
            @error('qtd_fatia_grande')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-3 my-3 @if ($addClass == true) d-none @endif">
        <label for="qtd_fatia_gigante" class="form-label">Quantidade de fatia pizza gigante:</label>
        <div class="input-group flex-nowrap">
            <label for="qtd_fatia_gigante" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="qtd_fatia_gigante" class="form-control  @error('qtd_fatia_gigante') is-invalid @enderror" id="qtd_fatia_gigante" placeholder="" wire:model="qtd_fatia_gigante">
            @error('qtd_fatia_gigante')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6 my-3 @if ($addClass != true) d-none @endif">
        <label for="preco" class="form-label">Valor:</label>
        <div class="input-group flex-nowrap">
            <label for="preco" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="preco" class="form-control  @error('preco') is-invalid @enderror" id="preco" placeholder="R$ 00,00" wire:model="preco" onkeyup="k(this);">
            @error('preco')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6 my-3">
        <label for="descricao" class="form-label">Descricão:</label>
        <div class="input-group flex-nowrap">
            <label for="descricao" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="descricao" class="form-control  @error('descricao') is-invalid @enderror" id="descricao" placeholder="Informações internas" wire:model="descricao">
            @error('descricao')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6 ml-4">
        <label class="form-label">
        <input type="checkbox" class="form-check-input" wire:click="promocao()" id="promocao" value="S" wire:model="promocao">Colocar o produto em promoção</label>
    </div>
    <div class="row col-md-12 pl-4 @if ($addPromocao == false) d-none @endif">
        <div class="col-md-4 pl-1 @if ($addClass == true) d-none @endif">
            <label for="preco_promocao_pequena" class="form-label">Valor promoção pizza tamanho pequeno:</label>
            <div class="input-group flex-nowrap">
                <label for="preco_promocao_pequena" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
                <input type="text" name="preco_promocao_pequena" class="form-control  @error('preco_promocao_pequena') is-invalid @enderror" id="preco_promocao_pequena" placeholder="R$ 00,00" wire:model="preco_promocao_pequena" onkeyup="k(this);">
                @error('preco_promocao_pequena')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-4 pl-1 @if ($addClass == true) d-none @endif">
            <label for="preco_preco_promocao_media" class="form-label">Valor promoção pizza tamanho media:</label>
            <div class="input-group flex-nowrap">
                <label for="preco_preco_promocao_media" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
                <input type="text" name="preco_preco_promocao_media" class="form-control  @error('preco_preco_promocao_media') is-invalid @enderror" id="preco_preco_promocao_media" placeholder="R$ 00,00" wire:model="preco_preco_promocao_media" onkeyup="k(this);">
                @error('preco_preco_promocao_media')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-4 pl-1 @if ($addClass == true) d-none @endif">
            <label for="preco_promocao_grande" class="form-label">Valor promoção pizza tamanho grande:</label>
            <div class="input-group flex-nowrap">
                <label for="preco_promocao_grande" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
                <input type="text" name="preco_promocao_grande" class="form-control  @error('preco_promocao_grande') is-invalid @enderror" id="preco_promocao_grande" placeholder="R$ 00,00" wire:model="preco_promocao_grande" onkeyup="k(this);">
                @error('preco_promocao_grande')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-4 pl-1 @if ($addClass == true) d-none @endif">
            <label for="preco_preco_promocao_gigante" class="form-label">Valor promoção pizza tamanho gigante:</label>
            <div class="input-group flex-nowrap">
                <label for="preco_preco_promocao_gigante" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
                <input type="text" name="preco_preco_promocao_gigante" class="form-control  @error('preco_preco_promocao_gigante') is-invalid @enderror" id="preco_preco_promocao_gigante" placeholder="R$ 00,00" wire:model="preco_preco_promocao_gigante" onkeyup="k(this);">
                @error('preco_preco_promocao_gigante')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6 pl-1 @if ($addClass != true) d-none @endif">
        <label for="preco_promocao" class="form-label">Valor promoção:</label>
        <div class="input-group flex-nowrap">
            <label for="preco_promocao" class="form-label"><span class="input-group-text" id="addon-wrapping"><i class="fab fa-product-hunt"></i></span></label>
            <input type="text" name="preco_promocao" class="form-control  @error('preco_promocao') is-invalid @enderror" id="preco_promocao" placeholder="R$ 00,00" wire:model="preco_promocao" onkeyup="k(this);">
            @error('preco_promocao')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>
  </form>