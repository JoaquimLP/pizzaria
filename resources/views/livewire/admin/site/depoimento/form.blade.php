<form class="row g-3">
    <div class="col-md-4 my-2">
        <label class="form-label">Nome do cliente</label>
        <div class="input-group">
            <input type="text" name="nome" class="form-control  @error('nome') is-invalid @enderror" id="nome" wire:model="nome">
            @error('nome')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Origen do depoimento</label>
        <div class="input-group">
            <input type="text" name="origen" class="form-control  @error('origen') is-invalid @enderror" id="origen" wire:model="origen">
            @error('origen')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Foto do cliente</label>
        <div class="input-group">
            <input type="file" name="path" class="@error('path') is-invalid @enderror" id="path" placeholder="path" wire:model="path">
            @error('path')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Depoimento</label>
        <div class="form-floating">
            <textarea class="form-control @error('depoimento') is-invalid @enderror" name="depoimento" id="depoimento" wire:model="depoimento" style="height: 100px"></textarea>
            <label for="depoimento">O que o cliente disse a respeito da sua empresa</label>
            @error('depoimento')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</form>
