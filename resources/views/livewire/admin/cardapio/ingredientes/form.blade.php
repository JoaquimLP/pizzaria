<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" class="form-control  @error('nome') is-invalid @enderror" id="nome" placeholder="nome da Ingrediente" wire:model="nome">
    @error('nome')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="quantidade" class="form-label">Quantidade:</label>
    <input type="text" name="quantidade" class="form-control  @error('quantidade') is-invalid @enderror" id="quantidade" placeholder="quantidade" wire:model="quantidade">
    @error('quantidade')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="categoria_id" class="form-label">Cateogria:</label>
    <select class="form-control" name="categoria_id" id="categoria_id" wire:model="categoria_id">
        <option selected>-----</option>
        @foreach ($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
        @endforeach
    </select>
    @error('categoria_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="unidade_id" class="form-label">Unidade:</label>
    <select class="form-control" name="unidade_id" id="unidade_id" wire:model="unidade_id">
        <option selected>-----</option>
        @foreach ($unidades as $unidade)
        <option value="{{$unidade->id}}">{{$unidade->nome}}</option>
        @endforeach
    </select>
    @error('unidade_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>