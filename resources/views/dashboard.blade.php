@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
            <div class="px-4 pt-4">
                <!-- Welcome + Cards Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome-banner">
                            <h5 class="fw-bold d-inline mb-0">Welcome Back, <span class="text-primary">{{ auth()->user()->name ?? auth()->user()->email }}</span></h5>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mb-3">
                    <div class="col-md-6 col-lg-5">
                        <div class="spotlight-card px-4 py-3 mb-0">
                            <div class="spotlight-title mb-2">Spotlight</div>
                            <div class="fw-bold fs-5 mb-1">National Stock Exchange Ltd (NSE)</div>
                            <div class="text-muted mb-2">Stock Exchange</div>
                            <div class="mb-3 text-center">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRglzIuVU3DozlJkM8ZZlgepRriNhalGAqObg&s" alt="NSE" style="height:85px;">
                            </div>
                            <div class="text-success mb-2" style="font-size:1rem;">Available at offer price!</div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-primary btn-watchlist">+ Watchlist</button>
                                <button class="btn btn-sm btn-outline-primary btn-explore">Explore Asset</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 offset-lg-1">
                        <div class="most-watched-card px-3">
                            <div class="d-flex flex-column justify-content-center align-items-center w-100">
                                <span class="fw-semibold fs-5">Most Watched Companies</span>
                                <img src="https://cdn-icons-png.flaticon.com/512/2739/2739688.png" style="height:60px; margin-top:24px;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Startup Unicorns, Popular Companies, Companies with ... -->
                <div class="row g-4 mb-3">
                    <div class="col-md-4">
                        <div class="card-section p-3 h-100">
                            <div class="section-title mb-2">Startup Unicorns</div>
                            <div><a href="#" class="company-link"><img src="https://seeklogo.com/images/M/mobikwik-logo-0B34C096F2-seeklogo.com.png" class="mini-icon">Mobikwik (One Mobikwik Systems Ltd)</a></div>
                            <div><a href="#" class="company-link"><img src="https://cdn.pharmeasy.in/payments/pe-logo-big.png" class="mini-icon">PharmEasy (API Holdings Ltd)</a></div>
                            <div><a href="#" class="company-link"><img src="https://www.bira91.com/static/brandv2/img/logos/bira-logo.svg" class="mini-icon">Bira91 (B9 Beverages Ltd.) (ESTD-2012)</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-section p-3 h-100">
                            <div class="section-title mb-2">Popular Companies</div>
                            <div><a href="#" class="company-link">HDFC Securities Ltd</a></div>
                            <div><a href="#" class="company-link">Hexaware Technologies Ltd</a></div>
                            <div><a href="#" class="company-link">Chennai Super Kings Cricket Ltd. (CSK)</a></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-section p-3 h-100">
                            <div class="section-title mb-2">Companies with ...</div>
                            <div><a href="#" class="company-link">Otis Elevator Company</a></div>
                            <div><a href="#" class="company-link">GKN Driveline (India) Ltd</a></div>
                            <div><a href="#" class="company-link">A V Thomas and Company Ltd (AVT)</a></div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
