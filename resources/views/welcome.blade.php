@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="welcome-note">
        <h1 class="text-2xl font-bold">Welcome Rajan Sharma</h1>
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


    <section class="mt-5 w-full">
        <div class=" mx-auto bg-white rounded-xl p-6 w-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="bg-gray-100 p-4 rounded border">
                    <h3 class="font-bold text-xl mb-3">Startup Unicorns</h3>

                    <ul class="list-none text-gray-700 text-base">
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Razorpay_logo.svg"
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">Razorpay Razorpay </span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Zomato_logo.png"
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">Zomato</span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://play-lh.googleusercontent.com/IWU8HM1uQuW8wVrp6XpyOOJXvb_1tDPUDAOfkrl83RZPG9Ww3dCY9X1AV6T1atSvgXc"
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">Paytm</span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-100 p-4 rounded border">
                    <h3 class="font-bold text-xl mb-3">Popular Companies</h3>

                    <ul class="list-none text-gray-700 text-base">
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://www.armssecurities.com/wp-content/uploads/2020/07/HDFC-SECURITIES.jpg"
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">HDFC Securities Ltd</span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://download.logo.wine/logo/Hexaware_Technologies/Hexaware_Technologies-Logo.wine.png "
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">Hexaware Technologies Ltd</span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF1vlp4HChxPG30ttSTzLoqghFQPr9sNUs7w&s"
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">Chennai Super Kings Cricket Ltd. (CSK)</span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-100 p-4 rounded border">
                    <h3 class="font-bold text-xl mb-3">Companies</h3>

                    <ul class="list-none text-gray-700 text-base">
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Razorpay_logo.svg"
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">Razorpay Razorpay </span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Zomato_logo.png"
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">Zomato</span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                        <li class="mb-3 border-b pb-3">
                            <a href="" class="flex items-center justify-between">
                                <span class="flex items-center">
                                    <img src="https://play-lh.googleusercontent.com/IWU8HM1uQuW8wVrp6XpyOOJXvb_1tDPUDAOfkrl83RZPG9Ww3dCY9X1AV6T1atSvgXc"
                                        class="w-5 h-5 rounded" alt="">
                                    <span class="ml-2">Paytm</span>
                                </span>

                                <span>
                                    <i class="bi bi-arrow-right-circle-fill text-black"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
@endsection
