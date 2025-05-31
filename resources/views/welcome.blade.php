@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="welcome-note">
        <h4 class="font-bold">Welcome Rajan Sharma</h4>
    </div>

    <section class="mt-5">
        <div class="row">
            <div class="col-6">
                <div class="card p-3">
                    <div class="">
                        <h6 class="text-danger">Spotlight</h6>
                        <h4 class="fs-5 mb-2">National Stock Exchange Ltd (NSE)</h4>
                        <p class="text-muted text-base">
                            Stock Exchange
                        </p>

                        <div class="px-5 my-4">
                            <img src="{{ asset('assets/images/company-logo/nse.jpg') }}" class="img-fluid" alt="">
                        </div>

                        <p class="text-success text-base">
                            Available at offer price!
                        </p>
                    </div>
                    <div class=" d-flex align-items-center justify-content-between">
                        <!-- Using utilities: -->
                        <a href="#" class="btn btn-primary btn-sm py-1 px-4 rounded img-fluid">
                            + Watchlist
                        </a>
                        <a href="{{ route('price') }}" class="btn btn-primary btn-sm py-1 px-4 rounded img-fluid">
                            Explore Asset
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="mt-5 w-full">
        <div class=" mx-auto bg-white rounded-xl p-6 w-full">
            <div class="row justify-content-between w-100">
                <div class="col-md-4 p-2">
                    <div class="p-3 rounded border h-100">
                        <h5 class="font-bold mb-3">Startup Unicorns</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Razorpay_logo.svg"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">Razorpay Razorpay</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Zomato_logo.png"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">Zomato</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://play-lh.googleusercontent.com/IWU8HM1uQuW8wVrp6XpyOOJXvb_1tDPUDAOfkrl83RZPG9Ww3dCY9X1AV6T1atSvgXc"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">Paytm</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="p-3 rounded border h-100">
                        <h5 class="font-bold text-xl mb-3">Popular Companies</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://www.armssecurities.com/wp-content/uploads/2020/07/HDFC-SECURITIES.jpg"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">HDFC Securities Ltd</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://download.logo.wine/logo/Hexaware_Technologies/Hexaware_Technologies-Logo.wine.png"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">Hexaware Technologies Ltd</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSF1vlp4HChxPG30ttSTzLoqghFQPr9sNUs7w&s"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">Chennai Super Kings Cricket Ltd. (CSK)</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 p-2">
                    <div class="p-3 rounded border h-100">
                        <h5 class="font-bold text-xl mb-3">Companies</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Razorpay_logo.svg"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">Razorpay Razorpay</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Zomato_logo.png"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">Zomato</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="d-flex align-items-center">
                                    <img src="https://play-lh.googleusercontent.com/IWU8HM1uQuW8wVrp6XpyOOJXvb_1tDPUDAOfkrl83RZPG9Ww3dCY9X1AV6T1atSvgXc"
                                        class="rounded img-fluid" width="30px" alt=""> &nbsp;
                                    <span class="ml-2">Paytm</span>
                                </span>
                                <i class="bi bi-arrow-right-circle-fill text-black"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
