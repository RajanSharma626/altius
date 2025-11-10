@extends('layouts.app')

@section('title', 'Overview')

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
                <div class="d-flex flex-row gap-3 small">
                    <a href="{{route('price')}}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark hover-border-secondary">Price</a>
                    <a href="{{route('overview')}}"
                        class="py-2 px-1 border-bottom border-primary text-primary fw-medium text-decoration-none active">Overview</a>
                    <a href="{{route('insights')}}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark hover-border-secondary">Insights</a>
                    <a href="{{route('balance-sheet')}}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark hover-border-secondary">Balance
                        Sheet</a>
                    <a href="{{route('profit-and-loss')}}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark hover-border-secondary">Profit
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
                    <p class="small text-secondary lh-base"><b>Apollo Green Energy Limited (AGEL)</b>, formerly
                        known as
                        Apollo International Limited, is a leading name in India's renewable energy sector. Founded in 1994
                        and headquartered
                        in <b>Gurgaon</b>, with a registered office in <b>New Delhi</b>, AGEL is part of the Apollo Group, a
                        major Indian
                        conglomerate with a wide-ranging portfolio.</p>

                    <p class="small text-secondary lh-base mt-2">
                        AGEL specializes in delivering comprehensive solutions for renewable energy projects, with a strong
                        focus on <b>solar power</b>, <b>wind energy</b>, and <b>energy storage</b>. Drawing on the Apollo
                        Group's extensive experience across diverse sectors, including <b>tyres</b>, <b>healthcare</b>,
                        logistics,
                        apparel, and footwear, AGEL is strategically positioned to drive green energy initiatives
                        and contribute to Indiaʼs sustainability goals.
                    </p>

                    <table class="table table-bordered table-sm w-100 small text-secondary mt-4">
                        <tbody>
                            <tr>
                                <td class="fw-medium px-2 py-1">Company Name:</td>
                                <td class="px-2 py-1">Apollo Green Energy Limited</td>
                            </tr>
                            <tr>
                                <td class="fw-medium px-2 py-1">Company Type:</td>
                                <td class="px-2 py-1">Public Limited</td>
                            </tr>
                            <tr>
                                <td class="fw-medium px-2 py-1">Industry:</td>
                                <td class="px-2 py-1">Renewable Energy</td>
                            </tr>
                            <tr>
                                <td class="fw-medium px-2 py-1">Founded:</td>
                                <td class="px-2 py-1">1994</td>
                            </tr>
                            <tr>
                                <td class="fw-medium px-2 py-1">Registered Address:</td>
                                <td class="px-2 py-1">New Delhi, India</td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 class="fw-bold mt-4">Business Overview</h4>
                    <p class="small text-secondary lh-base mt-2">
                        AGEL operates through three main business verticals: Green Energy, Engineering Procurement &
                        Construction (EPC), and Supply of Goods.
                    </p>

                    <ul class="list-disc ps-4 small text-secondary lh-base mt-2">
                        <li><b>Green Energy Division:</b> This division focuses on providing end-to-end solutions for
                            renewable energy projects, ensuring the seamless integration of solar power, wind energy, and
                            energy storage systems.</li>
                        <li><b>Engineering, Procurement & Construction (EPC) Division:</b> Specializing in medium and
                            large-scale infrastructure and industrial projects, this division undertakes turnkey projects in
                            power, oil storage, transmission, solar, irrigation, and sugar processing sectors across
                            international and domestic markets.</li>
                        <li><b>Supply of Goods Division:</b> Engaged in trading tyres, batteries, lubricants, white goods,
                            and electronic goods, this division operates in India, Dubai, Singapore, and China, overseeing
                            marketing and distribution operations in 70 countries.</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

@endsection
