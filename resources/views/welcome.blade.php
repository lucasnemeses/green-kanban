<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Green Kanban') }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" >
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    </head>
    <body class="antialiased">
        <div class="h-screen flex justify-center items-center bg-grey-0D">
            <div class="w-full sm:max-w-md mt-6 p-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="w-2/3 m-auto">
                    <img src="{{ asset('img/green-kanban_logo-full.png') }}">
                </div>
                @if (Route::has('login'))
                    <div class="mt-11 mx-auto space-x-4 flex justify-center">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="transition w-full text-center inline-block bg-green-75 hover:opacity-90 text-white font-bold text-sm py-2 px-4 rounded-md">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="transition w-full text-center inline-block bg-green-87 hover:opacity-90 text-white font-bold text-lg py-2 px-4 rounded-md">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="transition w-full text-center inline-block bg-green-75 hover:opacity-90 text-white font-bold text-lg py-2 px-4 rounded-md">Cadastrar</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
