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

        <div class="container-fluid p-4">
        <div class="row g-3">
            <!-- Refer and Earn Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                        <h6 class="card-title mb-0 fw-bold">Refer and Earn</h6>
                        <button class="btn btn-primary btn-sm">Refer a Friend</button>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-3">Refer a friend and you both get ₹500</p>
                        
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="border-end">
                                    <h3 class="text-success fw-bold mb-1">0<span class="text-muted">/20</span></h3>
                                    <small class="text-muted">Referrals Done</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <h3 class="text-success fw-bold mb-1">₹0.00</h3>
                                <small class="text-muted">Rewards Earned</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Relationship Manager Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-white border-0">
                        <h6 class="card-title mb-0 fw-bold">Relationship Manager</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-user text-muted me-2"></i>
                                <strong class="me-2">Name :</strong>
                                <span>Ranjit Thakur</span>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-envelope text-muted me-2"></i>
                                <strong class="me-2">Email :</strong>
                                <a href="mailto:ranjit@altosinvestech.com" class="text-primary text-decoration-none">
                                    ranjit@altosinvestech.com
                                </a>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-phone text-muted me-2"></i>
                                <strong class="me-2">Mobile No. :</strong>
                                <a href="tel:+918727201510" class="text-primary text-decoration-none">
                                    +918727201510
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Research Area Card -->
            <div class="col-lg-4 col-md-12">
                <div class="card h-100">
                    <div class="card-header bg-white border-0">
                        <h6 class="card-title mb-0 fw-bold">Research Area</h6>
                    </div>
                    <div class="card-body">
                        <ol class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="#" class="text-primary text-decoration-none small">
                                    1. Join Our WhatsApp Community For the Latest Updates
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-primary text-decoration-none small">
                                    2. All you need to know about Waaree Energies Limited
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-primary text-decoration-none small">
                                    3. Long IPO wait times fuel Gyo would look for private funding
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
@endsection
