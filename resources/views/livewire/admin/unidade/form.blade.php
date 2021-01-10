<div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" name="nome" class="form-control  @error('nome') is-invalid @enderror" id="nome" placeholder="nome da unidade" wire:model="nome">
    @error('nome')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>