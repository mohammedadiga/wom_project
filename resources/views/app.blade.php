<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        <link rel="stylesheet" href="{{ mix('css/vivify.min.css') }}">

        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="{{ mix('css/vendor/c3.min.css') }}"/>
        <link rel="stylesheet" href="{{ mix('css/vendor/chartist.min.css') }}">
        <link rel="stylesheet" href="{{ mix('css/vendor/chartist-plugin-tooltip.css') }}">
        <link rel="stylesheet" href="{{ mix('css/vendor/bootstrap-progressbar-3.3.4.min.css') }}">

        <link rel="stylesheet" href="{{ mix('css/main.css')}}">

    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            {{-- <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script> --}}
        @endenv
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="{{ mix('js/bundles/libscripts.bundle.js') }}" defer></script>
        <script src="{{ mix('js/bundles/vendorscripts.bundle.js') }}" defer></script>

        <!-- Vedor js file and create bundle with grunt  -->
        <script src="{{ mix('js/bundles/chartist.bundle.js') }}" defer></script>
        <script src="{{ mix('js/bundles/knob.bundle.js') }}" defer></script> <!-- Jquery Knob-->
        <script src="{{ mix('js/bundles/c3.bundle.js') }}" defer></script>

        <script src="{{ mix('js/bundles/mainscripts.bundle.js') }}" defer></script>
        <script src="{{ mix('js/widgets.js')}}" defer></script>

    </body>
</html>
