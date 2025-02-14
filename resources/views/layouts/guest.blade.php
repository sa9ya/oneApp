<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="We provide different spectr of services">
        <title>@yield('title')</title>
        @vite(['resources/css/main.scss', 'resources/js/main.js'])
    </head>
    <body>
        <header class="fixed z-50 top-0 left-0 w-full text-white shadow">
            <div class="bg-gray-900 px-6 py-2">
                <div class="container flex justify-between items-center">
                    <div>
                        <a href="" class="mr-4 text-white hover-effect">224 220 6079</a>
                        <a href="" class="text-white hover-effect">info@oneapp.com</a>
                    </div>
                    <div>
                        <a href="{{ LaravelLocalization::localizeUrl('/form') }}" class="px-2 text-white rounded-lg hover:text-blue-500">Join Us</a><!--{{ __('menu.be_a_worker') }}-->
                    </div>
                </div>
            </div>
            <div class="mx-auto py-4 px-6 bg-gray-800">
                <div class="container">
                    <div class="flex justify-between items-center">
                        <a href="/" class="text-xl font-bold flex items-center">
                            <img src="/images/logo.png" alt="Logo" class="h-10 mr-2">
                            <span>OneApp</span>
                        </a>

                        <div class=" md:flex">
                            <x-navigation-menu />

                            <div class="flex ml-8 space-x-4">
                                <a href="" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-700">{{ __('menu.request_service') }}</a>
                            </div>
                        </div>

                        <button id="menu-toggle" class="block md:hidden text-gray-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <nav id="mobile-menu" class="hidden md:hidden bg-gray-900 text-white py-4">
                <div class="container mx-auto flex flex-col items-center space-y-4">
                    <a href="#" class="hover:text-gray-300 hover-effect">Home</a>
                    <a href="#" class="hover:text-gray-300 hover-effect">About</a>
                    <a href="#" class="hover:text-gray-300 hover-effect">Services</a>
                    <a href="#" class="hover:text-gray-300 hover-effect">Contact</a>

                    <div class="flex ml-8 space-x-4">
                        <a href="" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-700">{{ __('menu.request_service') }}</a>
                        <a href="{{ LaravelLocalization::localizeUrl('/form') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">{{ __('menu.be_a_worker') }}</a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="mt-[112px]">
            @yield('content')
        </main>

        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-top text-lg">

                    <a href="{{ LaravelLocalization::localizeUrl('/') }}" class="text-xl font-bold">
                        <div class="flex items-center">
                            <img src="/images/logo.png" alt="Logo" class="h-14 mr-2">
                            <span>OneApp</span>
                        </div>
                    </a>

                    <nav class="space-x-6 mt-4 md:mt-0">
                        <ul>
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/') }}" class="text-white hover:text-gray-400">Home</a>
                            </li>
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="text-white hover:text-gray-400">About</a>
                            </li>
                            <li>
                                <a href="#" class="text-white hover:text-gray-400">Services</a>
                            </li>
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/contacts') }}" class="text-white hover:text-gray-400">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    <nav class="flex space-x-6 mt-4 md:mt-0">
                        <ul>
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/') }}" class="text-white hover:text-gray-400">Home cleaning</a>
                            </li>
                            <li>
                                <a href="#" class="text-white hover:text-gray-400">Office cleaning</a>
                            </li>
                            <li>
                                <a href="#" class="text-white hover:text-gray-400">Tax accounting</a>
                            </li>
                            <li>
                                <a href="#" class="text-white hover:text-gray-400">Lawyer</a>
                            </li>
                        </ul>
                    </nav>

                    <nav class="flex space-x-6 mt-4 md:mt-0">
                        <ul>
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/career') }}" class="text-white hover:text-gray-400">Career</a>
                            </li>
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/privacy') }}" class="text-white hover:text-gray-400">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/cookies') }}" class="text-white hover:text-gray-400">Cookies</a>
                            </li>
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/terms-of-use') }}" class="text-white hover:text-gray-400">Terms of Use</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="flex space-x-4 mt-4 md:mt-0">
                        <a href="#" class="text-[#84C5F6] hover:text-[#4297E1]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.04c-5.51 0-9.96 4.45-9.96 9.96 0 4.98 3.64 9.09 8.39 9.88v-7H8.4v-2.88h2.03v-2.22c0-2.02 1.22-3.14 3.02-3.14.86 0 1.76.15 1.76.15v1.94h-1c-1 0-1.31.61-1.31 1.24v1.53h2.22l-.36 2.88h-1.86v7c4.74-.79 8.39-4.9 8.39-9.88 0-5.51-4.45-9.96-9.96-9.96z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#84C5F6] hover:text-[#4297E1]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.954 4.569a10.02 10.02 0 01-2.825.775 4.958 4.958 0 002.163-2.723 9.972 9.972 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482A13.953 13.953 0 011.671 3.15a4.92 4.92 0 001.523 6.573 4.9 4.9 0 01-2.229-.616v.061a4.926 4.926 0 003.947 4.829 4.96 4.96 0 01-2.22.084 4.924 4.924 0 004.604 3.417 9.868 9.868 0 01-6.115 2.105c-.396 0-.787-.023-1.175-.069a13.945 13.945 0 007.557 2.213c9.053 0 14.002-7.496 14.002-13.986 0-.213 0-.426-.015-.637A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="text-center text-white text-md mt-12">
                    © 2025 OneApp. All rights reserved.
                </div>
            </div>
        </footer>
    </body>
</html>