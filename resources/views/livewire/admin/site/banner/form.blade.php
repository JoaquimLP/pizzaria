<form class="row g-3">
    <div class="col-md-4 my-2">
        <label class="form-label">Foto Banner 1</label>
        <div class="input-group">
            <input type="file" name="foto_banners1" class="@error('foto_banners1') is-invalid @enderror" id="foto_banners1" placeholder="foto_banners1" wire:model="foto_banners1">
            @error('foto_banners1')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Foto Banner 2</label>
        <div class="input-group">
            <input type="file" name="foto_banners2" class="@error('foto_banners2') is-invalid @enderror" id="foto_banners2" placeholder="foto_banners2" wire:model="foto_banners2">
            @error('foto_banners2')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Foto Banner 3</label>
        <div class="input-group">
            <input type="file" name="foto_banners3" class="@error('foto_banners3') is-invalid @enderror" id="foto_banners3" placeholder="foto_banners3" wire:model="foto_banners3">
            @error('foto_banners3')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Título 1</label>
        <div class="input-group">
            <input type="text" name="title_banners1" class="form-control  @error('title_banners1') is-invalid @enderror" id="title_banners1" wire:model="title_banners1">
            @error('title_banners1')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Título 2</label>
        <div class="input-group">
            <input type="text" name="title_banners2" class="form-control  @error('title_banners2') is-invalid @enderror" id="title_banners2" wire:model="title_banners2">
            @error('title_banners2')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Título 3</label>
        <div class="input-group">
            <input type="text" name="title_banners3" class="form-control  @error('title_banners3') is-invalid @enderror" id="title_banners3" wire:model="title_banners3">
            @error('title_banners3')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Legenda 1</label>
        <div class="input-group">
            <input type="text" name="legenda_banners1" class="form-control  @error('legenda_banners1') is-invalid @enderror" id="legenda_banners1" wire:model="legenda_banners1">
            @error('legenda_banners1')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Legenda 2</label>
        <div class="input-group">
            <input type="text" name="legenda_banners2" class="form-control  @error('legenda_banners2') is-invalid @enderror" id="legenda_banners2" wire:model="legenda_banners2">
            @error('legenda_banners2')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Legenda 3</label>
        <div class="input-group">
            <input type="text" name="legenda_banners3" class="form-control  @error('legenda_banners3') is-invalid @enderror" id="legenda_banners3" wire:model="legenda_banners3">
            @error('legenda_banners3')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</form>
