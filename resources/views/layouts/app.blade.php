<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Proof of Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div x-data="{ mobileMenu: false }">
        <div class="max-w-full">
            <nav class="px-2 py-1.5 border-b-2 border-gray-400 shadow-lg bg-gray-50">
                <div class="mx-3 flex flex-row items-center justify-between">

                    <div class="block flex items-center justify-center h-12 ml-2">
                        <svg class="h-6 mr-3" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                            viewBox="0 0 24 24" xml:space="preserve">
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="2.9" y1="12" x2="21.1"
                                y2="12">
                                <stop offset="0" stop-color="#1245c6" />
                                <stop offset="1" stop-color="#9909b7" />
                            </linearGradient>
                            <path
                                d="M20.7 18.9L14.4 9V4h.8l.6-.2.2-.6-.2-.6c-.2-.2-.3-.2-.6-.2H8.8l-.6.2-.2.6.2.6.6.2h.8v5l-6.3 9.9c-.5.7-.6 1.4-.3 1.9s.9.8 1.8.8h14.4c.9 0 1.5-.3 1.8-.8a2 2 0 00-.3-1.9zM7.6 15.2L11 9.8l.2-.4V4h1.6v5.5l.2.3 3.4 5.4H7.6z"
                                fill="url(#SVGID_1_)" />
                        </svg>
                        <a class="whitespace-nowrap text-purple-700 no-underline hover:no-underline font-extrabold text-2xl"
                            href="#">
                            {{ env('APP_NAME') }}
                        </a>
                    </div>

                    <!-- Mobilie Menu Button -->
                    <a @click.prevent="mobileMenu =! mobileMenu" class="md:hidden cursor-pointer">
                        <span class="block p-0.5 text-purple-600 rounded border border-3 border-purple-600">
                            <svg class="fill-current inline-block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </span>
                    </a>
                </div>
            </nav>
            <div id="container" class="flex flex-col h-screen">
                <!-- Inner container -->
                <div class="flex flex-row h-full">
                    <!-- Mobile sidebar -->
                    <div x-show="mobileMenu"
                        class="absolute h-full z-0 w-10/12 bg-gray-100 border-r-2 border-200 text-gray-700">
                        @include('layouts.navigation')
                    </div>
                    <!-- Side Navbar -->
                    <div id="sidebar"
                        class="hidden h-full md:block md:w-80 fixed bg-gray-100 border-r-2 border-gray-200 text-gray-700">
                        @include('layouts.navigation')
                    </div>
                    <!-- Main Content Area -->
                    <div @click="mobileMenu = false" id="content"
                        class="md:pl-80 w-full px-3 py-6 bg-white text-gray-700">
                        <!-- Page Content -->
                        <main>
                            <div class="mx-10 py-6">

                                {{ $slot }}

                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
