<nav class="gap-10 flex items-center space-x-6 text-xl">
    <a href="{{ LaravelLocalization::localizeUrl('/') }}" class="text-white hover:text-gray-300 hover-effect">{{ __('menu.home') }}</a>
    <a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="text-white hover:text-gray-300 hover-effect">{{ __('menu.about') }}</a>
    <a href="{{ LaravelLocalization::localizeUrl('/services') }}" class="text-white hover:text-gray-300 hover-effect">{{ __('menu.services') }}</a>
    <a href="{{ LaravelLocalization::localizeUrl('/contacts') }}" class="text-white hover:text-gray-300 hover-effect">{{ __('menu.contacts') }}</a>

    <div class="relative inline-block text-left">
        <button id="language-button" class="flex items-center px-4 py-2 text-white focus:outline-none">
                            <span class="uppercase">
                                @php
                                    $currentLocale = LaravelLocalization::getCurrentLocale();
                                    $locales = LaravelLocalization::getSupportedLocales();
                                @endphp
                                {{ $currentLocale }}
                            </span>
            <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <div id="language-menu" class="absolute z-50 mt-2 w-40 rounded-lg shadow-lg hidden bg-white">
            @foreach($locales as $localeCode => $properties)
                @if($localeCode !== $currentLocale)
                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" class="rounded-lg block w-full text-left px-4 py-2 text-gray-800  hover:text-white hover:bg-[#0400f5]">
                        {{ $properties['native'] }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</nav>