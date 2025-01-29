<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="We provide different spectr of services">
        <title>@yield('title')</title>
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <header class="bg-gray-800 text-white shadow">
            <div class="container mx-auto flex justify-between items-center p-4">
                <a href="#" class="text-xl font-bold hover:text-gray-300">
                    <img src="logo.png" alt="Logo" class="h-8 inline-block">
                </a>

                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="hover:text-gray-300">Home</a>
                    <a href="#" class="hover:text-gray-300">About</a>
                    <a href="#" class="hover:text-gray-300">Services</a>
                    <a href="#" class="hover:text-gray-300">Contact</a>
                </nav>

                <button class="block md:hidden text-gray-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </header>

        <main class="pt-12 pb-12">
            @yield('content')
        </main>

        <footer class="bg-gray-900 text-white py-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">

                    <a href="#" class="text-xl font-bold hover:text-gray-400">
                        <img src="logo.png" alt="Logo" class="h-10">
                    </a>

                    <nav class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="hover:text-gray-400">Home</a>
                        <a href="#" class="hover:text-gray-400">About</a>
                        <a href="#" class="hover:text-gray-400">Services</a>
                        <a href="#" class="hover:text-gray-400">Contact</a>
                    </nav>

                    <div class="flex space-x-4 mt-4 md:mt-0">
                        <a href="#" class="hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.04c-5.51 0-9.96 4.45-9.96 9.96 0 4.98 3.64 9.09 8.39 9.88v-7H8.4v-2.88h2.03v-2.22c0-2.02 1.22-3.14 3.02-3.14.86 0 1.76.15 1.76.15v1.94h-1c-1 0-1.31.61-1.31 1.24v1.53h2.22l-.36 2.88h-1.86v7c4.74-.79 8.39-4.9 8.39-9.88 0-5.51-4.45-9.96-9.96-9.96z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.954 4.569a10.02 10.02 0 01-2.825.775 4.958 4.958 0 002.163-2.723 9.972 9.972 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482A13.953 13.953 0 011.671 3.15a4.92 4.92 0 001.523 6.573 4.9 4.9 0 01-2.229-.616v.061a4.926 4.926 0 003.947 4.829 4.96 4.96 0 01-2.22.084 4.924 4.924 0 004.604 3.417 9.868 9.868 0 01-6.115 2.105c-.396 0-.787-.023-1.175-.069a13.945 13.945 0 007.557 2.213c9.053 0 14.002-7.496 14.002-13.986 0-.213 0-.426-.015-.637A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="text-center text-gray-500 text-sm mt-6">
                    © 2025 OneApp. All rights reserved.
                </div>
            </div>
        </footer>
    </body>
</html>
