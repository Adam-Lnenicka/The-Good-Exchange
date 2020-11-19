<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>

    <body class="font-sans antialiased">
        <div class="mx-40  my-0 max-w-4xl bg-white bg-transparent  ">
        <div class=" bg-gray-100">
            @livewire('navigation-dropdown') 
          
        </div>

            <!-- Page Content -->
            <main>

                @yield('content')
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <div>
        @livewire('footer')
        </div>
    </div>
    </body>
</html>
