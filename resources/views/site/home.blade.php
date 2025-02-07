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

    <section id="popular-services" class="container px-10">
        <div class="flex bg-white rounded-lg shadow-lg p-6 md:p-10 my-10 md:my-16 gap-6">
            <div class="flex justify-center items-center">
                <img class="w-100 h-auto rounded-lg" src="/images/decentralization.webp" alt="Futuristic Digital Network">
            </div>
            <div class="">
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
            <div>
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
            <div class="flex justify-center items-center">
                <img class="w-72 h-auto rounded-lg" src="/images/decentralization.webp" alt="Futuristic Digital Network">
            </div>
        </div>
        <div class="flex bg-white rounded-lg shadow-lg p-6 md:p-10 my-10 md:my-16 gap-6">
            <div class="text-3xl font-bold text-gray-800 mb-4">How It Works</div>
            <p class="text-gray-600 text-lg leading-relaxed">
                Our platform is designed to make collaboration seamless and efficient for both clients and
                specialists. Here’s how it works:
            </p>
            <ul class="list-disc text-gray-600 text-lg leading-relaxed pl-6 mt-4">
                <li><strong>Step 1: Registration</strong> - Sign up as a client or a specialist and create your profile.</li>
                <li><strong>Step 2: Posting or Searching</strong> - Clients post job requirements, and specialists browse available opportunities.</li>
                <li><strong>Step 3: Matching</strong> - Our system connects clients with the best-suited specialists based on expertise and ratings.</li>
                <li><strong>Step 4: Collaboration</strong> - Clients and specialists communicate, agree on terms, and execute tasks.</li>
                <li><strong>Step 5: Completion & Feedback</strong> - After successful completion, both parties leave reviews, ensuring trust and quality.</li>
                <li><strong>Step 6: Secure Payments</strong> - Specialists receive payments securely through our platform.</li>
            </ul>
        </div>
    </section>

    <section id="popular-services" class="container py-20 px-10">
        <div class="text-6xl text-dark text-center font-semibold text-gray-900 mb-20">Popular Services</div>
        <div class="flex flex-wrap justify-center items-center w-full gap-8">
            <div class="flex flex-col items-center text-center flex-1 min-w-[200px]">
                <img src="/images/house.png" alt="" class="w-24 h-24">
                <div class="mt-4 text-lg font-semibold">House Cleaning</div>
                <p class="text-gray-600">Professional home cleaning services</p>
            </div>

            <div class="flex flex-col items-center text-center flex-1 min-w-[200px]">
                <img src="/images/accountant.png" alt="" class="w-24 h-24">
                <div class="mt-4 text-lg font-semibold">Accountant Services</div>
                <p class="text-gray-600">Financial and accounting expertise</p>
            </div>

            <div class="flex flex-col items-center text-center flex-1 min-w-[200px]">
                <img src="/images/car.png" alt="" class="w-24 h-24">
                <div class="mt-4 text-lg font-semibold">Car Cleaning</div>
                <p class="text-gray-600">High-quality vehicle cleaning services</p>
            </div>

            <div class="flex flex-col items-center text-center flex-1 min-w-[200px]">
                <img src="/images/lawyer.png" alt="" class="w-24 h-24">
                <div class="mt-4 text-lg font-semibold">Lawyer Services</div>
                <p class="text-gray-600">Legal assistance and consulting</p>
            </div>
        </div>
    </section>

@endsection