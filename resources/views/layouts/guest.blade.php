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
        <header class="fixed z-50 top-0 left-0 w-full bg-gray-800 text-white shadow">
            <div class="container mx-auto flex justify-between items-center py-4 px-6">

                <a href="/" class="text-xl font-bold flex items-center">
                    <img src="/images/logo.png" alt="Logo" class="h-10 mr-2">
                    <span>OneApp</span>
                </a>

                <nav class="hidden md:flex items-center space-x-6">
                    <a href="{{ LaravelLocalization::localizeUrl('/') }}" class="hover:text-gray-300">{{ __('menu.home') }}</a>
                    <a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="hover:text-gray-300">{{ __('menu.about') }}</a>
                    <a href="{{ LaravelLocalization::localizeUrl('/services') }}" class="hover:text-gray-300">{{ __('menu.services') }}</a>
                    <a href="{{ LaravelLocalization::localizeUrl('/contacts') }}" class="hover:text-gray-300">{{ __('menu.contacts') }}</a>

                    <div class="relative inline-block text-left">
                        <button id="language-button" class="flex items-center px-4 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 focus:outline-none">
                            <span>
                                @php
                                    $currentLocale = LaravelLocalization::getCurrentLocale();
                                    $locales = LaravelLocalization::getSupportedLocales();
                                @endphp
                                {{ $locales[$currentLocale]['native'] }}
                            </span>
                            <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div id="language-menu" class="absolute mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg hidden">
                            @foreach($locales as $localeCode => $properties)
                                @if($localeCode !== $currentLocale)
                                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">
                                        {{ $properties['native'] }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <a href="" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-700">{{ __('menu.request_service') }}</a>
                        <a href="{{ LaravelLocalization::localizeUrl('/form') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">{{ __('menu.be_a_worker') }}</a>
                    </div>
                </nav>

                <button id="menu-toggle" class="block md:hidden text-gray-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <nav id="mobile-menu" class="hidden md:hidden bg-gray-900 text-white py-4">
                <div class="container mx-auto flex flex-col items-center space-y-4">
                    <a href="#" class="hover:text-gray-300">Home</a>
                    <a href="#" class="hover:text-gray-300">About</a>
                    <a href="#" class="hover:text-gray-300">Services</a>
                    <a href="#" class="hover:text-gray-300">Contact</a>
                    <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-700">Login</a>
                    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">Sign Up</a>
                </div>
            </nav>
        </header>

        <main class="mt-[74px]">
            @yield('content')
        </main>

        <footer class="bg-gray-900 text-white py-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">

                    <a href="#" class="text-xl font-bold hover:text-gray-400">
                        <img src="logo.png" alt="Logo" class="h-10">
                    </a>

                    <nav class="flex space-x-6 mt-4 md:mt-0">
                        <a href="/" class="hover:text-gray-400">Home</a>
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