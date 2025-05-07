@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="welcome-note">
        <h1 class="text-3xl">Welcome Rajan Sharma</h1>
    </div>

    <section class="mt-5">
        <div class="max-w-sm rounded overflow-hidden border bg-white">
            {{-- <img class="w-full" src="https://via.placeholder.com/150" alt="Card Image"> --}}
            <div class="px-6 py-4">
                <h6 class="text-red-500">Spotlight</h6>
                <h4 class="text-xl mb-2">National Stock Exchange Ltd (NSE)</h4>
                <p class="text-gray-700 text-base">
                    Stock Exchange
                </p>

                <div class="company-logo p-4 my-3">
                    <img src="{{ asset('assets/images/company-logo/nse.jpg') }}" alt="">
                </div>

                <p class="text-green-400 text-base">
                    Available at offer price!
                </p>
            </div>
            <div class="px-6 py-4 flex items-center justify-between">
                <!-- Using utilities: -->
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">
                    + Watchlist
                </a>
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">
                    Explore Asset
                </a>
            </div>
        </div>
    </section>


    <section class="mt-5">
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4">
            <!-- Card 1 -->
            <div class="max-w-sm rounded overflow-hidden border bg-white">
                <div class="px-6 py-4">
                    <h6 class="text-blue-500">Featured</h6>
                    <h4 class="text-xl mb-2">Reliance Industries</h4>
                    <p class="text-gray-700 text-base">
                        Conglomerate
                    </p>

                    <div class="company-logo p-4 my-3">
                        <img src="{{ asset('assets/images/company-logo/reliance.jpg') }}" alt="">
                    </div>

                    <p class="text-green-400 text-base">
                        Growing steadily!
                    </p>
                </div>
                <div class="px-6 py-4 flex items-center justify-between">
                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">
                        + Watchlist
                    </a>
                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">
                        Explore Asset
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="max-w-sm rounded overflow-hidden border bg-white">
                <div class="px-6 py-4">
                    <h6 class="text-blue-500">Trending</h6>
                    <h4 class="text-xl mb-2">Tata Consultancy Services</h4>
                    <p class="text-gray-700 text-base">
                        IT Services
                    </p>

                    <div class="company-logo p-4 my-3">
                        <img src="{{ asset('assets/images/company-logo/tcs.jpg') }}" alt="">
                    </div>

                    <p class="text-green-400 text-base">
                        High demand in market!
                    </p>
                </div>
                <div class="px-6 py-4 flex items-center justify-between">
                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">
                        + Watchlist
                    </a>
                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">
                        Explore Asset
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="max-w-sm rounded overflow-hidden border bg-white">
                <div class="px-6 py-4">
                    <h6 class="text-blue-500">Trending</h6>
                    <h4 class="text-xl mb-2">Infosys</h4>
                    <p class="text-gray-700 text-base">
                        IT Services
                    </p>

                    <div class="company-logo p-4 my-3">
                        <img src="{{ asset('assets/images/company-logo/infosys.jpg') }}" alt="">
                    </div>

                    <p class="text-green-400 text-base">
                        Consistent growth!
                    </p>
                </div>
                <div class="px-6 py-4 flex items-center justify-between">
                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">
                        + Watchlist
                    </a>
                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded">
                        Explore Asset
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
