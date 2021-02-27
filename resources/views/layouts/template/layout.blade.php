<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'dashboard') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link rel="stylesheet" href="{{asset('vendor/iconfonts/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/iconfonts/ionicons/dist/css/ionicons.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/css/vendor.bundle.base.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/css/vendor.bundle.addons.css')}}">

        <link rel="stylesheet" href="{{asset('css/shared/style.css')}}">

        <link rel="stylesheet" href="{{asset('css/demo_1/style.css')}}">
        <!-- End Layout styles -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"/>

        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/global.css')}}" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <div class="container-scroller">
            <!--Cabeçalho-->
            @include('layouts.template.navbar')
            <div class="container-fluid page-body-wrapper">
                @include('layouts.template.sidebar')
                <div class="main-panel ms-sm-auto">
                    <!--Corpo-->
                    <section>
                        @yield('body')
                    </section>
                    @include('layouts.template.footer')
                </div>
            </div>

            @stack('modals')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> --}}

         <!-- Adicionando JQuery -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="{{asset('vendor/js/vendor.bundle.base.js')}}"></script>
        <script src="{{asset('vendor/js/vendor.bundle.addons.js')}}"></script>
        <script src="{{asset('js/shared/off-canvas.js')}}"></script>
        <script src="{{asset('js/shared/misc.js')}}"></script>
        <script src="{{asset('js/demo_1/dashboard.js')}}"></script>
        @livewireScripts
        @stack('script')
    </body>
</html>
