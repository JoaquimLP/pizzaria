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
                <p class="text-white">{{$banner->legenda_banners1 ?? "Não informado"}}</p>
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
                <p class="text-white">{{$banner->legenda_banners2 ?? "Não informado"}}</p>
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
                <p class="text-white">{{$banner->legenda_banners3 ?? "Não informado"}}</p>
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
<div class="">
    <div class="image-fundo">
        <div class="col" id="opacity">
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-4">
                        <h6 class="card-subtitle mb-2">O mais amado do bairro</h6>
                        <h1 class="card-title cor-texto">Bem-vindo</h1>
                        <p class="card-text tamanho-font-col-texto">
                            <strong>Reconhecido pela boa comida e bebida desde de 1995</strong>
                        </p>
                        <p class="card-text font-texto">
                            Dinheiro não compra felicidade, mas compra pizza que é a mesma coisa!
                        </p>
                        <a href="#" class="btn dvm-button-redondo">
                            Mais sobre nós
                            <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-arrow-right-short"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url("image/pizza.jpg")}}" alt="pizza" class="image-collun">
                    </div>
                    <div class="col-md-4">
                        <img src="{{url("image/restaurante02.jpg")}}" alt="restaurante02" class="image-collun">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cor-pills">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 my-4">
                    <ul class="nav nav-tabs justify-content-center mb-3">
                        <li class="nav-item">
                            <a class="nav-link active tamanho-font-col-texto text-dark" data-toggle="pill"
                                href="#nav-item-01">Depoimento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tamanho-font-col-texto text-dark" id="_contato"
                                data-toggle="pill" href="#nav-item-02">Fazer um pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tamanho-font-col-texto text-dark" data-toggle="pill"
                                href="#nav-item-03">Cardápio promocional</a>
                        </li>
                    </ul>
                    <div class="tab-content bg-light" id="nav-pills-content">
                        <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel"
                            aria-labelledby="nav-item-01-tab">
                            <div class="row">
                                <div class="text-center">
                                    <svg width="100px" height="100px" viewBox="0 0 16 16" class="bi bi-chat-quote" fill="#DE350B" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                        <path d="M7.468 7.667c0 .92-.776 1.666-1.734 1.666S4 8.587 4 7.667C4 6.747 4.776 6 5.734 6s1.734.746 1.734 1.667z" />
                                        <path fill-rule="evenodd" d="M6.157 6.936a.438.438 0 0 1-.56.293.413.413 0 0 1-.274-.527c.08-.23.23-.44.477-.546a.891.891 0 0 1 .698.014c.387.16.72.545.923.997.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c1.093-1.087 1.058-2.158.77-2.794-.152-.336-.354-.514-.47-.563zm-.035-.012h-.001.001z" />
                                        <path d="M11.803 7.667c0 .92-.776 1.666-1.734 1.666-.957 0-1.734-.746-1.734-1.666 0-.92.777-1.667 1.734-1.667.958 0 1.734.746 1.734 1.667z" />
                                        <path fill-rule="evenodd" d="M10.492 6.936a.438.438 0 0 1-.56.293.413.413 0 0 1-.274-.527c.08-.23.23-.44.477-.546a.891.891 0 0 1 .698.014c.387.16.72.545.924.997.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c1.093-1.087 1.058-2.158.77-2.794-.152-.336-.354-.514-.469-.563zm-.034-.012h-.002.002z" />
                                    </svg>
                                    <h2 class="card-title cor-texto mt-0">
                                        Depoimentos
                                    </h2>
                                    <div class="container mt-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4 mb-5">
                                                <div class="row mb-2">
                                                    <img src="{{url("image/depoimento3.png")}}" class="rounded-circle depoimento-image" alt="...">
                                                </div>
                                                <p class="font-texto">“Contrary to popular belief, Lorem Ipsum
                                                    is not simply random text. It has roots in a piece of classical
                                                    Latin literature from 45 BC, making it over 2000 years old.
                                                    Richard McClintock, a Latin professor.”
                                                </p>
                                                <p class="pb-0 mb-0">Maria Clara</p>
                                                <span class="pt-0 font-texto">Facebook</span>
                                            </div>
                                            <div class="col-sm-12 col-md-4 mb-5">
                                                <div class="row mb-2">
                                                    <img src="{{url("image/depoimento1.png")}}" class="rounded-circle depoimento-image" alt="...">
                                                </div>
                                                <p class="font-texto">
                                                    “There are many variations of passages of
                                                    Lorem Ipsum available, but the majority have suffered
                                                    alteration in some form, by injected humour, or randomised words which
                                                    don't look even slightly believable.”
                                                </p>
                                                <p class="pb-0 mb-0">Mario Jose</p>
                                                <span class="pt-0 font-texto">Youtube</span>
                                            </div>
                                            <div class="col-sm-12 col-md-4 mb-2">
                                                <div class="row mb-2">
                                                    <img src="{{url("image/depoimento4.png")}}" class="rounded-circle depoimento-image" alt="...">
                                                </div>
                                                <p class="font-texto">
                                                    “It is a long established fact that a reader
                                                    will be distracted by the readable content of a page when
                                                    looking at its layout. The point of using Lorem Ipsum is
                                                    that it has a more-or-less normal distribution of letters.”
                                                </p>
                                                <p class="pb-0 mb-0">Ana Barbosa</p>
                                                <span class="pt-0 font-texto">LinkedIn</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-02" role="tabpanel" aria-labelledby="nav-item-02-tab">
                            <div class="col-sm-12 bg-light">
                                <div class="text-center">
                                    <h2>
                                        <svg width="30px" height="30px" viewBox="0 0 16 16"
                                            class="bi bi-telephone-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                                        </svg>
                                    </h2>
                                    <h1>Crie o seu pedido</h1>
                                    <p>Preencha o formulário abaixo e nos enviar pelo, o Whatssapp</p>
                                </div>
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-8">
                                        <form class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Nome</label>
                                                <input type="text" class="form-control" id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Telefone de contato</label>
                                                <input type="text" class="form-control" id="inputPassword4">
                                            </div>
                                            <h4>Endereço de entrega</h4>
                                            <div class="col-md-3">
                                                <label for="inputAddress" class="form-label">CEP</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="00000-000">
                                            </div>
                                            <div class="col-md-9">
                                                <label for="inputAddress" class="form-label">Endereço</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputCity" class="form-label">Bairro</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputCity" class="form-label">Cidade</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="inputCity" class="form-label">Estado</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="inputZip" class="form-label">Numero</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="inputZip" class="form-label">Complemento</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-03" role="tabpanel"
                            aria-labelledby="nav-item-03-tab">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <h2 class="card-title cor-texto">
                                        Pizzas em promoções
                                    </h2>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6 my-2">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-4 py-0">
                                                            <img src="{{url("image/cardapio/pizza1.jpg")}}" class="card-img-cardapio" alt="...">
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 conteudo-cardapio">
                                                            <h5 class="card-title">Brócolis e Bacon</h5>
                                                            <p class="card-text mb-1 pr-1">Mussarela, Brócolis e Bacon. (Molho especial Flavor e Orégano)</p>
                                                            <div class="row pr-1">
                                                                <span class="price col-3">
                                                                    Pequena R$ 19,90 4 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Média R$ 29,90 6 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Grande R$ 35,90 8 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Gigante R$ 40,90 12 fatias.
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6 my-2">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-4 py-0">
                                                            <img src="{{url("image/cardapio/pizza2.jpg")}}" class="card-img-cardapio" alt="...">
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 conteudo-cardapio">
                                                            <h5 class="card-title">Calabresa</h5>
                                                            <p class="card-text mb-1 pr-1">Mussarela, Cebola e Calabresa. (Molho especial Flavor e Orégano)</p>
                                                            <div class="row pr-1">
                                                                <span class="price col-3">
                                                                    Pequena R$ 19,90 4 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Média R$ 29,90 6 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Grande R$ 35,90 8 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Gigante R$ 40,90 12 fatias.
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6 my-2">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-4 py-0">
                                                            <img src="{{url("image/cardapio/pizza3.jpg")}}" class="card-img-cardapio" alt="...">
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 conteudo-cardapio">
                                                            <h5 class="card-title">Corn Bacon</h5>
                                                            <p class="card-text mb-1 pr-1">Mussarela, Milho Verde e Bacon. (Molho especial Flavor e Orégano)</p>
                                                            <div class="row pr-1">
                                                                <span class="price col-3">
                                                                    Pequena R$ 19,90 4 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Média R$ 29,90 6 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Grande R$ 35,90 8 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Gigante R$ 40,90 12 fatias.
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6 my-2">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-4 py-0">
                                                            <img src="{{url("image/cardapio/pizza4.jpg")}}" class="card-img-cardapio" alt="...">
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 conteudo-cardapio">
                                                            <h5 class="card-title">Havaiana</h5>
                                                            <p class="card-text mb-1 pr-1">Mussarela, Lombinho e Abacaxi. (Molho especial Flavor e Orégano)</p>
                                                            <div class="row pr-1">
                                                                <span class="price col-3">
                                                                    Pequena R$ 19,90 4 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Média R$ 29,90 6 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Grande R$ 35,90 8 fatias.
                                                                </span>
                                                                <span class="price col-3">
                                                                    Gigante R$ 40,90 12 fatias.
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-sm-12 col-md-6 pl-0 ">
                <img src="{{url("image/restaurante01-768x578.jpg")}}" class="img-fluid" alt="...">
            </div>
            <div class="col-sm-12 col-md-6 text-center">
                <span class="mt-5" id="tacavinho"><i class="fas fa-wine-glass-alt"></i></span>
                <p class="font-texto" style="font-size: 22px;">Toda quarta-feira</p>
                <h1 class="card-title cor-texto pb-0 mb-0">Happy Hour!</h1>
                <small class="linha-horizontal pt-0 mb-2"></small>
                <p class="font-texto" id="happy">
                    Metade do preço nas garrafas de vinho e seis deliciosos lanches por R$9
                </p>
                <p>
                    <a href="#" id="noticias" class="btn">
                        MAIS NOTÍCIAS
                        <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-arrow-right-short"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
