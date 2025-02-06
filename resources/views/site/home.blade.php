@extends('layouts.guest')

@section('title', 'Main')

@section('content')

    <section class="py-16 relative h-[600px] flex flex-col bg-cover bg-top bg-[url('/public/images/all_professionals.webp')]">
        <!-- Затемнення -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Контент -->
        <div class="relative mt-auto py-6 px-4 flex flex-col items-center shadow-lg">
            <h2 class="text-6xl text-white font-semibold text-gray-900 mb-8">
                Welcome to OneApp
            </h2>
            <div class="flex w-[500px]">
                <button class="flex-1 text-4xl px-6 py-4 bg-blue-500 text-white font-semibold rounded-l-full shadow-md hover:bg-blue-600">
                    Customer
                </button>
                <button class="flex-1 text-4xl px-6 py-4 bg-gray-300 text-gray-700 font-semibold rounded-r-full shadow-md hover:bg-gray-400">
                    Worker
                </button>
            </div>
        </div>
    </section>

    <section id="popular-services" class="container py-14 px-10">
        <div class="flex flex-wrap justify-center items-center w-full gap-8">
            <!-- House Cleaning -->
            <div class="flex flex-col items-center text-center flex-1 min-w-[200px]">
                <img src="/images/house.png" alt="" class="w-24 h-24">
                <div class="mt-4 text-lg font-semibold">House Cleaning</div>
                <p class="text-gray-600">Professional home cleaning services</p>
            </div>

            <!-- Accountant Services -->
            <div class="flex flex-col items-center text-center flex-1 min-w-[200px]">
                <img src="/images/accountant.png" alt="" class="w-24 h-24">
                <div class="mt-4 text-lg font-semibold">Accountant Services</div>
                <p class="text-gray-600">Financial and accounting expertise</p>
            </div>

            <!-- Car Cleaning -->
            <div class="flex flex-col items-center text-center flex-1 min-w-[200px]">
                <img src="/images/car.png" alt="" class="w-24 h-24">
                <div class="mt-4 text-lg font-semibold">Car Cleaning</div>
                <p class="text-gray-600">High-quality vehicle cleaning services</p>
            </div>

            <!-- Lawyer Services -->
            <div class="flex flex-col items-center text-center flex-1 min-w-[200px]">
                <img src="/images/lawyer.png" alt="" class="w-24 h-24">
                <div class="mt-4 text-lg font-semibold">Lawyer Services</div>
                <p class="text-gray-600">Legal assistance and consulting</p>
            </div>
        </div>
    </section>

@endsection