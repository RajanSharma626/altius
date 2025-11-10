@extends('layouts.app')

@section('title', 'Annual Report')

@section('content')
    <div class="min-vh-100 bg-light">
        <header class="bg-white border-bottom py-2 px-4">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center"
                            style="height: 40px; width: 40px;">
                            <span class="text-success fw-semibold small">A</span>
                        </div>
                        <div>
                            <h1 class="h6 fw-semibold mb-0">Apollo Green Energy Limited (ESTD-1994)</h1>
                            <div class="d-flex align-items-center gap-1 small">
                                <span class="text-secondary">INE838A01015</span>
                                <button class="btn btn-outline-secondary btn-sm px-2 py-1"><i
                                        class="bi bi-share"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <button class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                            <i class="bi bi-trash3"></i><span>Watchlist</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-sm px-2 py-1"><i class="bi bi-bell"></i></button>
                        <div class="small text-secondary d-flex align-items-center gap-1">
                            <span>Demat In:</span>
                            <span class="fw-medium d-flex align-items-center">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHZ4WX0z69bThNo6s077o9A5cMC5ne1woIhw&s"
                                    class="me-1" style="height: 40px; width: 40px; object-fit: contain;" alt="">
                                <img src="https://media.top10stockbroker.com/wp-content/uploads/2020/10/NSDL-or-National-Securities-Depository-Limited-300x104.png"
                                    class="me-1" style="height: 40px; width: 40px; object-fit: contain;" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="container px-4 py-4">
            <div class="border-bottom overflow-auto">
                <div class="d-flex flex-row gap-3 small">
                    <a href="{{ route('price') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Price</a>
                    <a href="{{ route('overview') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Overview</a>
                    <a href="{{ route('insights') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Insights</a>
                    <a href="{{ route('balance-sheet') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Balance
                        Sheet</a>
                    <a href="{{ route('profit-and-loss') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Profit
                        and Loss</a>
                    <a href="{{ route('shareholdings') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Shareholdings</a>
                    <a href="" class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Ancillary</a>
                    <a href="{{ route('press') }}" class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Press</a>
                    <a href="{{route('annual.report')}}"
                        class="py-2 px-1 border-bottom border-primary text-primary fw-medium text-decoration-none active">Annual
                        Report</a>
                    <a href="{{route('company.info')}}" class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Company
                        Information</a>
                </div>
            </div>
            <div class="mt-4 bg-white border rounded p-4">
                <p>
                    <a href="">AGEL Investor Presentation Sept 2024</a>
                </p>
                <p>
                    <a href="">AGEL Annual Report 2023-2024</a>
                </p>
                <p>
                    <a href="">AGEL Annual Report 2022-2023</a>
                </p>
            </div>
        </main>
    </div>

@endsection
