<div class="col-md-12 sobre-nos">
    <div class="opacite-black">
        <h1 id="title-sobre-nos">Quem somos</h1>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-9 my-2">
            <h2 class="card-title cor-texto pb-0">{{$sobre->title ?? "Não informado"}}</h2>
            <p class="my-1">{{$sobre->paragrafo1 ?? "Não informado"}}</p>
            <p class="my-1">{{$sobre->paragrafo2 ?? "Não informado"}}</p>
            <p class="my-1">{{$sobre->paragrafo3 ?? "Não informado"}}</p>
        </div>
        <div class="col-3">
            @if (!empty($sobre->image))
                <img src="{{url("storage/{$sobre->image}")}}" class="img-fluid float-end" alt="La pizza" style="object-fit: cover;height: 318px;width: 268px;">
            @else
                <img src="{{url("image/sem-image.jpg")}}" class="img-fluid float-end" alt="La pizza" style="object-fit: cover;height: 318px;width: 268px;">
            @endif
        </div>
        <div class="col-12 my-2">
            <p class="my-1">{{$sobre->paragrafo4 ?? "Não informado"}}</p>
            <p class="my-1">{{$sobre->paragrafo5 ?? "Não informado"}}</p>
        </div>
    </div>
</div>
