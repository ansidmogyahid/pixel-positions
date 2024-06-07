<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pixel Positions</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @vite('resources/css/app.css')
    </head>
    <body class="bg-black text-white font-hanken-grotesk antialiased">
        <div class="px-10">
            {{-- <nav class="flex items-center justify-between py-4"> --}}
            <nav class="flex justify-between items-center py-4 border-b border-white/10">
                <div>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                    </a>
                </div>

                <div class="inline-flex items-center font-bold space-x-6">
                    <a href="" class="hover:text-blue-600">Jobs</a>
                    <a href="" class="hover:text-blue-600">Career</a>
                    <a href="" class="hover:text-blue-600">Salaries</a>
                    <a href="" class="hover:text-blue-600">Companies</a>
                </div>

                @auth
                    <div class="space-x-6 font-bold flex">
                        <a href="/jobs/create">Post a Job</a>

                        <form method="POST" action="/logout">
                            @csrf
                            @method('DELETE')

                            <button>Log Out</button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="space-x-6 font-bold">
                        <a href="/register">Sign Up</a>
                        <a href="/login">Log In</a>
                    </div>
                @endguest
            </nav>

            <main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>
        </div>
    </body>
</html>
