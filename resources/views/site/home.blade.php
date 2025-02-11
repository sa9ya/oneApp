@extends('layouts.guest')

@section('title', 'Main')

@section('content')

    <section class="py-16 relative h-[600px] flex flex-col bg-cover bg-top bg-[url('/public/images/home/all_professionals.webp')]">
        <!-- Затемнення -->
        <div class="absolute inset-0 bg-black/70"></div>

        <!-- Контент -->
        <div class="relative mt-auto py-6 px-4 flex flex-col items-center shadow-lg">
            <h1 class="text-center text-8xl text-white font-semibold text-gray-900 mb-2">
                Welcome to OneApp
            </h1>
            <p class="text-center text-4xl text-white font-semibold mb-20">One place to solve all your problems</p>
            <div class="flex w-[500px]">
                <button class="flex-1 text-4xl rounded-l-full dark-btn py-4 px-6">
                    Customer
                </button>
                <button class="flex-1 text-4xl rounded-r-full bright-btn py-4 px-6">
                    Worker
                </button>
            </div>
        </div>
    </section>

    <section id="popular-services" class="w-full py-20 px-10 bg-gray-100">
        <div class="container">
            <div class="text-6xl text-dark text-center font-semibold text-gray-900 mb-20">
                Popular Services
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 items-stretch w-full">
                @php
                    $services = [
                        ['image' => '/images/house.png', 'title' => 'House Cleaning', 'description' => 'Professional home cleaning services'],
                        ['image' => '/images/accountant.png', 'title' => 'Accountant Services', 'description' => 'Financial and accounting expertise'],
                        ['image' => '/images/car.png', 'title' => 'Car Cleaning', 'description' => 'High-quality vehicle cleaning services'],
                        ['image' => '/images/lawyer.png', 'title' => 'Lawyer Services', 'description' => 'Legal assistance and consulting']
                    ];
                @endphp

                @foreach ($services as $service)
                    <div class="flex flex-col h-full bg-white shadow-lg rounded-lg transition transform hover:scale-105">
                        <div class="p-6 text-center flex-grow flex flex-col items-center">
                            <div class="p-4 rounded-full inline-block mb-4">
                                <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-24 h-24">
                            </div>
                            <div class="text-xl font-semibold text-gray-800">{{ $service['title'] }}</div>
                            <p class="text-gray-600 mt-2">{{ $service['description'] }}</p>
                        </div>
                        <a class="w-full text-center block p-6 text-white dark-btn uppercase hover:text-white" href="#">More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="popular-services" class="container py-14 px-10">
        <div class="text-6xl text-dark text-center font-semibold text-gray-900 mb-20">About</div>
        <div class="flex bg-white rounded-lg shadow-lg p-6 md:p-10 my-10 md:my-16 gap-6">
            <div class="w-1/4">
                <img class="w-100 h-auto rounded-lg" src="/images/home/decentralization.webp" alt="Futuristic Digital Network">
            </div>
            <div class="w-3/4">
                <div class="text-3xl font-bold text-gray-800 mb-4">Who We Are?</div>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Alternative Vision Technologies LLC is an innovative company that creates a decentralized
                    platform for efficient interaction between clients and specialists. We provide quick access
                    to high-quality solutions, promote productive collaboration, and enhance trust in work processes.
                    Our goal is to optimize the search for specialists, minimize task execution time, and ensure
                    the highest standard of services for all platform users.
                </p>
            </div>
        </div>
        <div class="flex bg-white rounded-lg shadow-lg p-6 md:p-10 my-10 md:my-16 gap-6">
            <div class="w-3/4">
                <div class="text-3xl font-bold text-gray-800 mb-4">Why chose us?</div>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Our platform stands out by providing a transparent, efficient, and reliable space for both
                    clients and specialists. Here’s why we are beneficial:
                </p>
                <ul class="list-disc text-gray-600 text-lg leading-relaxed pl-6 mt-4">
                    <li><strong>Quality Assurance:</strong> Verified professionals and client feedback ensure high-quality services.</li>
                    <li><strong>Fast and Reliable:</strong> Quick access to experts and job opportunities saves time for everyone.</li>
                    <li><strong>Transparent Process:</strong> Open pricing, clear contracts, and review systems guarantee fairness.</li>
                    <li><strong>Flexible Opportunities:</strong> Specialists can work on projects that match their skills and preferences.</li>
                    <li><strong>Trust-Based Community:</strong> A growing network built on transparency and reputation.</li>
                </ul>
            </div>
            <div class="w-1/4">
                <img class="w-100 h-auto rounded-lg" src="/images/home/why-we.png" alt="Futuristic Digital Network">
            </div>
        </div>
        <div class="flex bg-white rounded-lg shadow-lg p-6 md:p-10 my-10 md:my-16 gap-6">
            <div class="w-1/4">
                <img class="w-100 h-auto rounded-lg" src="/images/home/register.png" alt="Futuristic Digital Network">
            </div>
            <div class="w-3/4">
                <div class="text-3xl font-bold text-gray-800 mb-4">How It Works</div>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Our platform is designed to make collaboration seamless and efficient for both clients and
                    specialists. Here’s how it works:
                </p>
                <ul class="list-disc text-gray-600 text-lg leading-relaxed pl-6 mt-4">
                    <li><strong>Step 1: Registration</strong> - Sign up as a client or a specialist and create your profile.</li>
                    <li><strong>Step 2: Posting Job</strong> - Clients post job requirements, date when this job need to do and photo if needed.</li>
                    <li><strong>Step 3: Matching</strong> - Our system connects clients with the closest specialist with best rating.</li>
                    <li><strong>Step 4: Completion & Feedback</strong> - After successful completion, both parties leave reviews, ensuring trust and quality.</li>
                    <li><strong>Step 5: Payments</strong> - Final payment will be charged after specialist do his job and client is approve that job is finished.</li>
                </ul>
            </div>
        </div>
    </section>

@endsection