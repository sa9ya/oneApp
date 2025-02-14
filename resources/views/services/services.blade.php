@extends('layouts.guest')

@section('title', 'Main')

@section('content')

    <div class="container py-10">
        @if(isset($services) && count($services) > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 items-stretch w-full">
                @foreach($services as $service)
                        <div class="flex flex-col h-full bg-white shadow-lg rounded-lg transition transform hover:scale-105">
                            <div class="p-6 text-center flex-grow flex flex-col items-center">
                                <div class="p-4 rounded-full inline-block mb-4">
                                    <img src="{{ $service['image'] }}" alt="{{ $service->description->title }}" class="w-24 h-24">
                                </div>
                                <div class="text-xl font-semibold text-gray-800">{{ $service->description->title }}</div>
                                <p class="text-gray-600 mt-2">{{ $service->description->title }}</p>
                            </div>
                            <a class="w-full text-center block p-6 text-white dark-btn uppercase hover:text-white" href="{{ route('service', ['slug' => $service->slug]) }}">More</a>
                        </div>
                @endforeach
            </div>
        @else
            <p class="text-6xl text-center min-h-screen">Please check this page later!</p>
        @endif
    </div>

@endsection