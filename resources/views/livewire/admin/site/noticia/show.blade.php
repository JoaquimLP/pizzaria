<div class="card-group">
    @foreach ($noticias as $noticia)
        <div class="card-group col-sm-12 col-lg-4 my-2">
            <div class="card border shadow-sm mx-1">
                @if (!empty($noticia->image))
                    <img src="{{url("storage/{$noticia->image}")}}" class="card-img-top" alt="La pizza" style="height:208px">
                @else
                    <img src="{{url("image/sem-image.jpg")}}" class="img-fluid float-end" alt="La pizza" style="object-fit: cover;height: 318px;width: 268px;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$noticia->title}}</h5>
                    <p class="card-text">{{$noticia->resumo}}</p>
                    @if ($noticia->link_outro_site)
                        <a href="{{$noticia->link_outro_site}}" class="btn btn-primary" target="_blank">Lê mais</a>
                    @else
                        <a href="#" class="btn btn-primary">Lê mais</a>
                    @endif
                </div>
                <div class="card-footer">
                    <div class="row">
                        <button wire:click="edit({{$noticia->id}})" class="col-md-4 btn btn-primary mr-1">Editar</button>
                        <button wire:click="destroy({{$noticia->id}})" class="col-md-4 btn btn-danger mr-1">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{$noticias->links()}}

</div>
