<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="2000">
            @if (!empty($banner->foto_banners1))
                <img src="{{url("storage/{$banner->foto_banners1}")}}" class="d-block w-100" alt="...">
            @else
                <img src="{{url("image/sem-image.jpg")}}" class="d-block w-100" alt="...">
            @endif
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$banner->title_banners1 ?? "Não informado"}}</h5>
                <p>{{$banner->legenda_banners1 ?? "Não informado"}}</p>
            </div>
        </div>
        <div class="carousel-item" data-interval="2000">
            @if (!empty($banner->foto_banners2))
                <img src="{{url("storage/{$banner->foto_banners2}")}}" class="d-block w-100" alt="...">
            @else
                <img src="{{url("image/sem-image.jpg")}}" class="d-block w-100" alt="...">
            @endif
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$banner->title_banners2 ?? "Não informado"}}</h5>
                <p>{{$banner->legenda_banners2 ?? "Não informado"}}</p>
            </div>
        </div>
        <div class="carousel-item" data-interval="2000">
            @if (!empty($banner->foto_banners3))
                <img src="{{url("storage/{$banner->foto_banners3}")}}" class="d-block w-100" alt="...">
            @else
                <img src="{{url("image/sem-image.jpg")}}" class="d-block w-100" alt="...">
            @endif
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$banner->title_banners3 ?? "Não informado"}}</h5>
                <p>{{$banner->legenda_banners3 ?? "Não informado"}}</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
