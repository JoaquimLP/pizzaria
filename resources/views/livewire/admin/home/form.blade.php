<form class="row g-3">
    <div class="col-md-4 my-2">
        <label class="form-label">Imagem 1</label>
        <div class="input-group flex-nowrap">
            <label class="col-md-12" for="image1"><img src="{{url("image/sem-image.jpg")}}" class="h-200 w-100 btn-image" alt=""></label>
            <input type="file" name="image1" class="d-none @error('image1') is-invalid @enderror" id="image1" placeholder="image1" wire:model="image1">
            @error('image1')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Imagem 2</label>
        <div class="input-group flex-nowrap">
            <label class="col-md-12" for="image2"><img src="{{url("image/sem-image.jpg")}}" class="h-200 w-100 btn-image" alt=""></label>
            <input type="file" name="image2" class="d-none @error('image2') is-invalid @enderror" id="image2" placeholder="image2" wire:model="image2">
            @error('image2')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Imagem 3</label>
        <div class="input-group flex-nowrap">
            <label class="col-md-12" for="image3"><img src="{{url("image/sem-image.jpg")}}" class="h-200 w-100 btn-image" alt=""></label>
            <input type="file" name="image3" class="d-none @error('image3') is-invalid @enderror" id="image3" placeholder="image3" wire:model="image3">
            @error('image3')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <label for="titulo_isntituicional" class="form-label">Titulo isntituicional:</label>
        <div class="input-group flex-nowrap">
            <label for="titulo_isntituicional" class="form-label"><span class="input-group-text"><i class="fas fa-home"></i></span></label>
            <input type="text" name="titulo_isntituicional" class="form-control  @error('titulo_isntituicional') is-invalid @enderror" id="titulo_isntituicional" placeholder="titulo isntituicional" wire:model="titulo_isntituicional">
            @error('titulo_isntituicional')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <label for="subtitulo_isntituicional" class="form-label">Subtitulo isntituicional:</label>
        <div class="input-group flex-nowrap">
            <label for="subtitulo_isntituicional" class="form-label"><span class="input-group-text"><i class="fas fa-home"></i></span></label>
            <input type="text" name="subtitulo_isntituicional" class="form-control  @error('subtitulo_isntituicional') is-invalid @enderror" id="subtitulo_isntituicional" placeholder="Subtitulo isntituicional" wire:model="subtitulo_isntituicional">
            @error('subtitulo_isntituicional')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 my-1">
        <label for="descricao_isntituicional" class="form-label">Drescrição:</label>
        <div class="input-group flex-nowrap">
            <textarea class="form-control  @error('subtitulo_isntituicional') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            @error('descricao_isntituicional')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</form>
