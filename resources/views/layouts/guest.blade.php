<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="We provide different spectr of services">
        <title>@yield('title')</title>
        @vite(['resources/css/main.scss', 'resources/js/main.js'])
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <header class="w-full text-white">
{{--            <div class="bg-gray-900 px-6 py-2">--}}
{{--                <div class="container flex justify-between items-center">--}}
{{--                    <div>--}}
{{--                        <a href="" class="mr-4 text-white hover-effect">224 220 6079</a>--}}
{{--                        <a href="" class="text-white hover-effect">info@oneapp.com</a>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <a href="{{ LaravelLocalization::localizeUrl('/form') }}" class="px-2 text-white rounded-lg hover:text-blue-500">Join Us</a><!--{{ __('menu.be_a_worker') }}-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="mx-auto py-12 px-6 bg-[#0400f5]">
                <div class="container">
                    <div class="flex justify-between items-center">
                        <a href="/" class="text-4xl font-bold flex items-center">
{{--                            <img src="/images/logo.png" alt="Logo" class="h-20 mr-2">--}}
                            <span class="uppercase text-white">Froot<span class="text-green-400">Flow</span></span>
                        </a>

                        <div class="bg-[linear-gradient(270deg,#0400f5_0%,#7d49f2_100%)] rounded-full py-4 pl-8">
                            <div class="md:flex">
                                <x-navigation-menu />

{{--                                <div class="flex ml-8 space-x-4">--}}
{{--                                    <a href="" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-700">{{ __('menu.request_service') }}</a>--}}
{{--                                </div>--}}
                            </div>

                            <button id="menu-toggle" class="block md:hidden text-gray-400 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                                </svg>
                            </button>
                        </div>
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

        <main class="">
            @yield('content')
        </main>

        <footer class="bg-[#0400f5] text-white py-14">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-top text-lg">

                    <div class="basis-1/4">
                        <a href="{{ LaravelLocalization::localizeUrl('/') }}" class="text-xl font-bold">
    {{--                        <div class="flex items-center">--}}
    {{--                            <img src="/images/logo.png" alt="Logo" class="h-34 mr-2">--}}
                                <span class="uppercase text-white text-6xl">Froot<span class="text-green-400">Flow</span></span>
    {{--                        </div>--}}
                        </a>
                        <p class="text-xl">your one-stop app for fast, reliable solutions. Connecting you to trusted experts for every need.</p>
                    </div>

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
                </div>

                <div class="companies-list flex gap-4 py-10">
                    <div><a href="https://nomadscleaners.com/"><img src="/images/companies/nomads-cleaners-logo.png" alt="Nomadsc Cleaners logo"></a></div>
                    <div><a href="https://sweetlyk.com/"><img src="/images/companies/sweetlyk-logo.png" alt="Sweetlyk logo"></a></div>
                </div>

                <div class="flex text-white text-md mt-12 justify-between">
                    <div class="text-xl text-white/50">© {{ date('Y') }} FrootFlow. All rights reserved. Part of the Alternative Vision Technologies LLC</div>
                    <div class="flex space-x-4 mt-4 md:mt-0">
                        <a href="#" class="text-white hover:text-white/70">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-white/70">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M11.666,2.005C6.62,2.17,2.374,6.251,2.025,11.288c-0.369,5.329,3.442,9.832,8.481,10.589V14.65H8.892 c-0.726,0-1.314-0.588-1.314-1.314v0c0-0.726,0.588-1.314,1.314-1.314h1.613v-1.749c0-2.896,1.411-4.167,3.818-4.167 c0.357,0,0.662,0.008,0.921,0.021c0.636,0.031,1.129,0.561,1.129,1.198v0c0,0.663-0.537,1.2-1.2,1.2h-0.442 c-1.022,0-1.379,0.969-1.379,2.061v1.437h1.87c0.591,0,1.043,0.527,0.953,1.111l-0.108,0.701c-0.073,0.47-0.477,0.817-0.953,0.817 h-1.762v7.247C18.235,21.236,22,17.062,22,12C22,6.366,17.341,1.821,11.666,2.005z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>