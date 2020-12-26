<!-- Header -->
<header id="header" class="">
    <div class="container-fluid navbar-gray-200">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
            <a class="navbar-brand ml-3" href="{{route("home")}}">
                <img src="{{url("image/logo.png")}}" id="imagem_logo" alt="logo" style="width: 60px; height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item @if (\Request::route()->getName() == "home") active @endif">
                        <a class="@if (\Request::route()->getName() == "home")nav-active @endif nav-link" href="{{route("home")}}">Home</a>
                    </li>
                    <li class="nav-item @if (\Request::route()->getName() == "home.cardapio") active @endif">
                        <a class="@if (\Request::route()->getName() == "home.cardapio")nav-active @endif nav-link" href="{{route("home.cardapio")}}">Cardápio</a>
                    </li>
                    <li class="nav-item @if (\Request::route()->getName() == "home.quem-somos") active @endif">
                        <a class="@if (\Request::route()->getName() == "home.quem-somos")nav-active @endif nav-link" href="{{route("home.quem-somos")}}">Quem Somos</a>
                    </li>
                    <li class="nav-item @if (\Request::route()->getName() == "home.noticias") active @endif">
                        <a class="@if (\Request::route()->getName() == "home.noticias")nav-active @endif nav-link" href="{{route("home.noticias")}}">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="@if (\Request::route()->getName() == "home.contado") nav-active-contato @endif" href="{{route("home.contado")}}" id="contato">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>