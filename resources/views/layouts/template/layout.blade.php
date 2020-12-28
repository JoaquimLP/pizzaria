<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'dashboard') }}</title>

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

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

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
                <div class="main-panel">
                    <!--Corpo-->
                    <section>
                        @yield('body')
                    </section>
                    @include('layouts.template.footer')
                </div>
            </div>

            @stack('modals')
        </div>

        <script src="{{asset('vendor/js/vendor.bundle.base.js')}}"></script>
        <script src="{{asset('vendor/js/vendor.bundle.addons.js')}}"></script>
        <script src="{{asset('js/shared/off-canvas.js')}}"></script>
        <script src="{{asset('js/shared/misc.js')}}"></script>
        <script src="{{asset('js/demo_1/dashboard.js')}}"></script>
        <script src="{{asset('js/shared/jquery.cookie.js')}}" type="text/javascript"></script>

        @livewireScripts
    </body>
</html>
