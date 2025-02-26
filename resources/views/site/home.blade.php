@extends('layouts.guest')

@section('title', 'Main')

@section('content')

    <section class="bg-[#0400f5] round-bottom">
        <div class="container flex pt-[4em]">
            <div class="basis-2/5">
                <h1 class="text-white">FrootFlow: All Services, One App</h1>
                <p class="text-white mb-12">Need help fast? FrootFlow connects you to reliable services in seconds — from home repairs to business tasks. With one app, you get everything done quickly and effortlessly, powered by a trusted network of experts ready to support you anytime.</p>

                <a href="" class="btn-main">Request Service</a>
            </div>
            <div class="basis-3/5 relative">
                <div class="absolute w-60 h-60 l-0 t-0 bg-[linear-gradient(270deg,#0400f500_0%,#7d49f299_100%)] rounded-full z-0"></div>
                <div class="rounded-tl-[100em] overflow-hidden relative">
                    <div class="absolute bg-black/50 inset-0"></div>
                    <img src="../images/home/all_professionals.webp" alt="">
                </div>
            </div>
        </div>
    </section>

{{--    <section class="py-16 relative h-[600px] flex flex-col bg-cover bg-top bg-[url('/public/images/home/all_professionals.webp')]">--}}
{{--        <!-- Затемнення -->--}}
{{--        <div class="absolute inset-0 bg-[rgba(0,0,0,0.7)]"></div>--}}

{{--        <!-- Контент -->--}}
{{--        <div class="relative mt-auto py-6 px-4 flex flex-col items-center shadow-lg">--}}
{{--            <h1 class="text-center text-8xl text-white font-semibold text-gray-900 mb-2">--}}
{{--                Welcome to OneApp--}}
{{--            </h1>--}}
{{--            <p class="text-center text-4xl text-white font-semibold mb-20">One place to solve all your problems</p>--}}
{{--            <div class="flex w-[500px]">--}}
{{--                <button class="flex-1 text-4xl rounded-l-full dark-btn py-4 px-6">--}}
{{--                    Customer--}}
{{--                </button>--}}
{{--                <button class="flex-1 text-4xl rounded-r-full bright-btn py-4 px-6">--}}
{{--                    Worker--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    @if(isset($services) && count($services) > 0)
        <section id="popular-services" class="w-full py-20 px-10">
            <div class="container">
                <div class="text-6xl text-dark font-semibold text-gray-900 mb-20">Services</div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch w-full">
                    @foreach ($services as $service)
                        <div class="flex flex-col h-full bg-white shadow-lg transition transform hover:scale-105 rounded-br-[5em] overflow-hidden">
                            <div class=" flex-grow flex flex-col bg-[#0400F5]">
                                <div class="p-6 text-white h-[300px]">
                                    <div class="text-left"><span class="bg-[rgba(4,0,245,1)]">Cleaning</span></div>
                                    <div class="text-4xl font-semibold">{{ $service->description->title }}</div>
                                    <p class="mt-2 text-lg">{{ $service->description->description }}</p>
                                    <a class="text-center p-6 text-white dark-btn uppercase hover:text-white" href="{{ route('service', ['slug' => $service->slug]) }}">More</a>
                                </div>
                                <div class="w-full"><!--{{ $service['image'] }}-->
                                    <img src="../images/home/all_professionals.webp" alt="{{ $service->description->title }}" class="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

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