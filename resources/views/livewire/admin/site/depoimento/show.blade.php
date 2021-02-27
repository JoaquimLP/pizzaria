<div class="container text-center my-3">
    <h2 class="font-weight-light">Depoimentos</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                @foreach ($depoimentos as $key => $depoimento)
                    <div class="carousel-item @if ($key==0) active @endif">
                        <div class="col-md-4">
                            <div class="card card-body">
                                <div class="row mb-2">
                                    @if ($depoimento->path)
                                        <img src="{{ url("storage/{$depoimento->path}") }}"
                                            class="rounded-circle depoimento-image" alt="...">
                                    @else
                                        <img src="{{ url('image/sem-image.jpg') }}"
                                            class="rounded-circle depoimento-image" alt="...">
                                    @endif
                                </div>
                                <p class="font-texto">“{{ $depoimento->depoimento }}”
                                </p>
                                <p class="pb-0 mb-0">{{ $depoimento->nome }}</p>
                                <span class="pt-0 font-texto">{{ $depoimento->origen }}</span>
                                <div class="row mt-2 pb-0">
                                    <button wire:click="edit({{$depoimento->id}})" class="col-md-4 btn btn-primary mr-1">Editar</button>
                                    <button wire:click="destroy({{$depoimento->id}})" class="col-md-4 btn btn-danger mr-1">Excluir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                    aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                    aria-hidden="true"></span>
                <span class="sr-only">Próxima</span>
            </a>
        </div>
    </div>
</div>
