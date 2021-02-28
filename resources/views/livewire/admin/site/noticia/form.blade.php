<form class="row g-3">
    <div class="col-md-4 my-2">
        <label class="form-label">Titulo</label>
        <div class="input-group">
            <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" wire:model="title">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Autor</label>
        <div class="input-group">
            <input type="text" name="autor" class="form-control  @error('autor') is-invalid @enderror" id="autor" wire:model="autor">
            @error('autor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Adicionar uma imagem</label>
        <div class="input-group">
            <input type="file" name="image" class="@error('image') is-invalid @enderror" id="image" placeholder="image" wire:model="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-3">
        <div class="input-group mt-4">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input wire:click="mudarSite()" value="1" wire:model="mudar" type="checkbox" class="btn-check" id="btncheck1" @if($outroSite != true) checked @endif autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1" style="margin-bottom: 0px;">Redirecionar para outro site</label>
            </div>
        </div>
    </div>

    <div class="col-md-4 @if($outroSite != true) d-none @endif">
        <label class="form-label">Adicionar o link do site</label>
        <div class="input-group">
            <input type="text" name="link_outro_site" class="form-control  @error('link_outro_site') is-invalid @enderror" id="link_outro_site" wire:model="link_outro_site">
            @error('link_outro_site')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Resumo</label>
        <div class="form-floating">
            <textarea class="form-control @error('resumo') is-invalid @enderror" name="resumo" id="resumo" wire:model="resumo" style="height: 100px"></textarea>
            <label for="resumo">Resumo</label>
            @error('resumo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    @if ($outroSite == false)
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
    @endif
</form>
