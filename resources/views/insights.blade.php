@extends('layouts.app')

@section('title', 'Insights')

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
        <main class="container py-4 px-4">
            <div class="border-bottom overflow-auto">
                <div class="d-flex flex-row gap-3 small">
                    <a href="{{ route('price') }}"
                        class="py-2 px-1  text-secondary text-decoration-none hover-text-dark hover-border-secondary">Price</a>
                    <a href="{{ route('overview') }}"
                        class="py-2 px-1  text-secondary text-decoration-none hover-text-dark hover-border-secondary">Overview</a>
                    <a href="{{ route('insights') }}"
                        class="py-2 px-1 border-bottom border-primary text-primary fw-medium text-decoration-none active">Insights</a>
                    <a href="{{ route('balance-sheet') }}"
                        class="py-2 px-1  text-secondary text-decoration-none hover-text-dark hover-border-secondary">Balance
                        Sheet</a>
                    <a href="{{ route('profit-and-loss') }}"
                        class="py-2 px-1  text-secondary text-decoration-none hover-text-dark hover-border-secondary">Profit
                        and Loss</a>
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

                <div class="mt-4">

                    <h4 class="fw-bold mb-4">Calculation of Intrinsic worth from Listed Investments:</h4>

                    <table class="table table-bordered small text-secondary mb-4">
                        <thead class="table-light">
                            <tr>
                                <th>Company Name</th>
                                <th>No. of Equity Shares</th>
                                <th>CMP as on 09-12-2024</th>
                                <th>Total Investment of Apollo Green</th>
                                <th>Outstanding Shares of Apollo Green as on 09-12-2024</th>
                                <th>Intrinsic Worth Per Share</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-medium">Apolo Tyres Ltd</td>
                                <td>984485</td>
                                <td>546</td>
                                <td>Rs. 54.04 Crore</td>
                                <td>4.18 Crore</td>
                                <td><b>Rs 13</b></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">UFO Moviez India Ltd</td>
                                <td>2266417</td>
                                <td>114</td>
                                <td>Rs 25.83 Crore</td>
                                <td>4.18 Crore</td>
                                <td><b>Rs 6</b></td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 class="fw-bold mb-4">Latest Insights of AGEL:</h4>

                    <ul class="list-unstyled ps-3 small text-secondary lh-lg mt-2">
                        <li class="mb-2">Apollo Green Energy Limited (AGEL), part of Apollo International Group, is working towards
                            <b>expanding its renewable energy portfolio to ₹10,000 crore by 2025.</b>
                        </li>
                        <li class="mb-2">The company currently manages projects worth ₹33,500 crore, with a robust balance sheet and
                            plans for further growth and new initiatives.</li>
                        <li class="mb-2">AGEL operates in eight states and has developed <b>400 MW of solar power installations</b>,
                            playing a crucial role in India's renewable energy sector.</li>
                        <li class="mb-2">AGEL is also finalizing a <b>₹700 crore Flue Gas Desulfurization (FGD) project</b>, aimed at
                            reducing emissions in power generation.</li>
                        <li class="mb-2"><b>Engineering, Procurement & Construction (EPC) Division:</b> Specializing in medium and
                            large-scale infrastructure and industrial projects, this division undertakes turnkey projects in
                            power, oil storage, transmission, solar, irrigation, and sugar processing sectors across
                            international and domestic markets.</li>
                        <li class="mb-2"><b>Supply of Goods Division:</b> Engaged in trading tyres, batteries, lubricants, white goods,
                            and electronic goods, this division operates in India, Dubai, Singapore, and China, overseeing
                            marketing and distribution operations in 70 countries.</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

@endsection
