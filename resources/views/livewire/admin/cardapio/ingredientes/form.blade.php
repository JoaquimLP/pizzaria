<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" class="form-control  @error('nome') is-invalid @enderror" id="nome" placeholder="nome da categoria" wire:model="nome">
    @error('nome')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="mb-3">
    <label for="quantidade" class="form-label">Quantidade:</label>
    <input type="text" name="quantidade" class="form-control  @error('quantidade') is-invalid @enderror" id="quantidade" placeholder="quantidade da categoria" wire:model="quantidade">
    @error('quantidade')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>