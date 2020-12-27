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
                    <li class="nav-item @if (\Request::route()->getName() == "cardapio") active @endif">
                        <a class="@if (\Request::route()->getName() == "cardapio")nav-active @endif nav-link" href="{{route("cardapio")}}">Cardápio</a>
                    </li>
                    <li class="nav-item @if (\Request::route()->getName() == "quem-somos") active @endif">
                        <a class="@if (\Request::route()->getName() == "quem-somos")nav-active @endif nav-link" href="{{route("quem-somos")}}">Quem Somos</a>
                    </li>
                    <li class="nav-item @if (\Request::route()->getName() == "noticias") active @endif">
                        <a class="@if (\Request::route()->getName() == "noticias")nav-active @endif nav-link" href="{{route("noticias")}}">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="@if (\Request::route()->getName() == "contado") nav-active-contato @endif" href="{{route("contado")}}" id="contato">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>