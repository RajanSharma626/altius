@extends('layouts.app')

@section('title', 'Price')

@section('content')
    <div class="min-vh-100 bg-light">
        <header class="bg-white border-bottom py-2 px-4">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="height: 40px; width: 40px;">
                            <span class="text-success fw-semibold small">A</span>
                        </div>
                        <div>
                            <h1 class="h6 fw-semibold mb-0">Apollo Green Energy Limited (ESTD-1994)</h1>
                            <div class="d-flex align-items-center gap-1 small">
                                <span class="text-secondary">INE838A01015</span>
                                <button class="btn btn-outline-secondary btn-sm px-2 py-1"><i class="bi bi-share"></i></button>
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
                <div class="d-flex flex-nowrap gap-3 small">
                    <a href="{{route('price')}}"
                        class="py-2 px-1 border-bottom border-primary text-primary fw-medium text-decoration-none active">Price</a>
                    <a href="{{route('overview')}}"
                        class="py-2 px-1 text-secondary text-decoration-none">Overview</a>
                    <a href="{{route('insights')}}"
                        class="py-2 px-1 text-secondary text-decoration-none">Insights</a>
                    <a href="{{route('balance-sheet')}}"
                        class="py-2 px-1 text-secondary text-decoration-none">Balance Sheet</a>
                    <a href="{{route('profit-and-loss')}}"
                        class="py-2 px-1 text-secondary text-decoration-none">Profit and Loss</a>
                    <a href="{{ route('shareholdings') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Shareholdings</a>
                    <a href="" class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Ancillary</a>
                    <a href="{{ route('press') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Press</a>
                   <a href="{{route('annual.report')}}" class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Annual
                        Report</a>
                    <a href="{{route('company.info')}}" class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Company
                        Information</a>
                </div>
            </div>
            <div class="mt-4 bg-white border rounded p-4">
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-baseline gap-2">
                            <h2 class="h4 fw-semibold mb-0">₹19.73</h2>
                            <span class="small text-danger d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                </svg>
                                0.15 (0.75%)
                            </span>
                        </div>
                        <div class="btn-group btn-group-sm" role="group">
                            <button class="btn btn-outline-secondary">1D</button>
                            <button class="btn btn-outline-secondary">1W</button>
                            <button class="btn btn-primary text-white">1M</button>
                            <button class="btn btn-outline-secondary">3M</button>
                            <button class="btn btn-outline-secondary">6M</button>
                            <button class="btn btn-outline-secondary">1Y</button>
                            <button class="btn btn-outline-secondary">3Y</button>
                            <button class="btn btn-outline-secondary">5Y</button>
                            <button class="btn btn-outline-secondary">MAX</button>
                        </div>
                    </div>
                    <div style="width: 100%;">
                        <div id="priceChart"></div>
                    </div>
                    <div class="mt-4 d-flex justify-content-between small text-secondary">
                        <div>
                            <div class="fw-medium">52 Week High: <span class="text-success">499</span></div>
                            <div class="fw-medium">52 Week Low: <span class="text-danger">159</span></div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-success btn-sm">BUY</button>
                            <button class="btn btn-danger btn-sm">SELL</button>
                            <button class="btn btn-primary btn-sm">HOLD</button>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-12">
                        <h3 class="small fw-semibold mb-2">Data as per 31st March, 2024</h3>
                        <div class="row row-cols-2 row-cols-md-4 g-3">
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">P/E</div>
                                    <div class="fw-semibold">19.73</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">P/S</div>
                                    <div class="fw-semibold">0.6</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">P/B</div>
                                    <div class="fw-semibold">1.43</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">Industry P/E</div>
                                    <div class="fw-semibold">40</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">Dividend (/sh)</div>
                                    <div class="fw-semibold">₹0.00</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">Dividend Yield</div>
                                    <div class="fw-semibold">0%</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">Face Value</div>
                                    <div class="fw-semibold">₹10.00</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">EPS</div>
                                    <div class="fw-semibold">₹11.15</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">PAT</div>
                                    <div class="fw-semibold">₹38.59 Cr</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">Share capital</div>
                                    <div class="fw-semibold">₹34.61 Cr</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">Market cap</div>
                                    <div class="fw-semibold">₹761.43 Cr</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded p-2">
                                    <div class="small text-secondary">Sales</div>
                                    <div class="fw-semibold">₹1268.00 Cr</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 small text-secondary">
                            <p>*Data is as per last available financials, corporate actions in the interim period might not be reflected here.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h3 class="small fw-semibold mb-2">About the company</h3>
                    <p class="small text-secondary lh-base">
                        Apollo Green Energy Limited (AGEL) was formerly known as Apollo International Limited. The company operates in various sectors that include integrated logistics, digital cinema, leather processing, and automotive. The company is engaged in manufacturing and distribution of leather products, footwear, and automotive components. AGEL's business includes manufacturing of leather products, leather jackets, leather wallets, leather belts, leather footwear for men, leather designer bag, leather belts, leather ladies handbags, and leather sample development.
                    </p>
                </div>
            </div>
        </main>
    </div>

@endsection
