<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
            <img src="{{url('image/logo.svg')}}" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{url('image/logo-mini.svg')}}" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        {{-- <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
            <li class="nav-item dropdown language-dropdown">
                <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#"
                    data-toggle="dropdown" aria-expanded="false">
                    <div class="d-inline-flex mr-0 mr-md-3">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                    </div>
                    <span class="profile-text font-weight-medium d-none d-md-block">English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>English
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-fr"></i>
                        </div>French
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-ae"></i>
                        </div>Arabic
                    </a>
                    <a class="dropdown-item">
                        <div class="flag-icon-holder">
                            <i class="flag-icon flag-icon-ru"></i>
                        </div>Russian
                    </a>
                </div>
            </li>
        </ul> 
        <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Search Here">
            </div>
        </form>--}}
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-user-circle"></i> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <i class="fas fa-user-circle"></i>
                        <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                        <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                    </div>
                    <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i
                            class="dropdown-item-icon ti-dashboard"></i></a>
                    <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                    <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                    <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                    <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
