<form class="row g-3">
    <div class="col-md-6 my-2">
        <label class="form-label">Título</label>
        <div class="input-group">
            <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="Subtitulo isntituicional" wire:model="title">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Imagem para pagina sobre</label>
        <div class="input-group">
            <input type="file" name="image" class="@error('image') is-invalid @enderror" id="image" placeholder="image" wire:model="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Paragrafo 1</label>
        <div class="form-floating">
            <textarea class="form-control @error('paragrafo1') is-invalid @enderror" name="paragrafo1" id="paragrafo1" wire:model="paragrafo1" style="height: 100px"></textarea>
            <label for="paragrafo1">Digite o primeiro paragrafo</label>
            @error('paragrafo1')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Paragrafo 2</label>
        <div class="form-floating">
            <textarea class="form-control @error('paragrafo2') is-invalid @enderror" name="paragrafo2" id="paragrafo2" wire:model="paragrafo2" style="height: 100px"></textarea>
            <label for="paragrafo2">Digite o segundo paragrafo</label>
            @error('paragrafo2')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Paragrafo 3</label>
        <div class="form-floating">
            <textarea class="form-control @error('paragrafo3') is-invalid @enderror" name="paragrafo3" id="paragrafo3" wire:model="paragrafo3" style="height: 100px"></textarea>
            <label for="paragrafo3">Digite o terceiro paragrafo</label>
            @error('paragrafo3')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Paragrafo 4</label>
        <div class="form-floating">
            <textarea class="form-control @error('paragrafo4') is-invalid @enderror" name="paragrafo4" id="paragrafo4" wire:model="paragrafo4" style="height: 100px"></textarea>
            <label for="paragrafo4">Digite o quarto paragrafo</label>
            @error('paragrafo4')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Paragrafo 5</label>
        <div class="form-floating">
            <textarea class="form-control @error('paragrafo5') is-invalid @enderror" name="paragrafo5" id="paragrafo5" wire:model="paragrafo5" style="height: 100px"></textarea>
            <label for="paragrafo5">Digite o quinto paragrafo</label>
            @error('paragrafo5')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</form>
