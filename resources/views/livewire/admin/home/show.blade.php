<div class="row">
     <div class="col-md-12 row my-2">
        <div class="col-md-4">
            <h6 class="card-subtitle mb-2">{{$homeSite->subtitulo_isntituicional ?? "Não informado"}}</h6>
            <h1 class="card-title cor-texto">{{$homeSite->titulo_isntituicional ?? "Não informado"}}</h1>
            <p class="card-text tamanho-font-col-texto">
                <strong>{{$homeSite->descricao_isntituicional ?? "Não informado"}}</strong>
            </p>
            <p class="card-text font-texto">
                {{$homeSite->detalhes_isntituicional ?? "Não informado"}}
            </p>
            {{-- <a href="#" class="btn dvm-button-redondo" style="height: auto;width: 62%;">
                Mais sobre nós
                <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-arrow-right-short"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg>
            </a> --}}
        </div>
        <div class="col-md-4">
            @if (!empty($homeSite->image1))
                <img src="{{url("storage/{$homeSite->image1}")}}" alt="{{-- {{$homeSite->nome}} --}}" class="h-90 w-70">
            @else
                <img src="{{url("image/sem-image.jpg")}}" class="h-80 w-65" alt="">
            @endif
        </div>
        <div class="col-md-4">
            @if (!empty($homeSite->image2))
                <img src="{{url("storage/{$homeSite->image2}")}}" alt="{{-- {{$homeSite->nome}} --}}" class="h-90 w-70">
            @else
                <img src="{{url("image/sem-image.jpg")}}" class="h-80 w-65" alt="">
            @endif
        </div>
    </div>
    <div class="col-md-12">
        <div class="container mb-4">
            <div class="row">
                <div class="col-sm-12 col-md-6 pl-0 ">
                    @if (!empty($homeSite->image3))
                        <img src="{{url("storage/{$homeSite->image3}")}}" alt="{{-- {{$homeSite->nome}} --}}" class="img-fluid">
                    @else
                        <img src="{{url("image/sem-image.jpg")}}" class="h-80 w-65" alt="">
                    @endif
                </div>
                <div class="col-sm-12 col-md-6 text-center">
                    <span class="mt-5" id="tacavinho"><i class="fas fa-wine-glass-alt"></i></span>
                    <p class="font-texto" style="font-size: 22px;">{{$homeSite->subtitulo ?? "Não informado"}}</p>
                    <h1 class="card-title cor-texto pb-0 mb-0">{{$homeSite->titulo ?? "Não informado"}}</h1>
                    <small class="linha-horizontal pt-0 mb-2"></small>
                    <p class="font-texto" id="happy">
                        {{$homeSite->descricao ?? "Não informado"}}
                    </p>
                   {{--  <p>
                        <a href="#" id="noticias" class="btn">
                            MAIS NOTÍCIAS
                            <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-arrow-right-short"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
