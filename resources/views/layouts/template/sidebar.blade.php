<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Cardápio</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cardapio.categoria')}}">Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cardapio.ingredientes')}}">Ingredientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cardapio.produto')}}">Produto</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Pedido</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('empresa')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Dados da Empresa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Site</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("home.site")}}">Página Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("home.site.contato")}}">Página Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("home.site.sobre")}}">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("home.site.banner")}}">Banners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("home.site.noticia")}}">Notícias</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#config" aria-expanded="false" aria-controls="config">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Configuração</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="config">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("unidade")}}">Unidade</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
