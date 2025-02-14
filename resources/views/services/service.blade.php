@extends('layouts.guest')

@section('title', $service->description->title)

@section('content')

    <div class="container py-16">
        <div class="mx-auto p-6 bg-white shadow-lg rounded-lg mt-8">
            <p class="text-lg font-semibold">{{ $service->description->title }}</p>
            <div class="mt-6 border p-4 rounded-lg">
                {{ $service->description->description }}
            </div>
            <div class="mt-6 text-center">
                <a href="/order" class="btn-order text-white font-semibold py-2 px-6 rounded-full shadow-md">Замовити сервіс</a>
            </div>
        </div>
    </div>

@endsection