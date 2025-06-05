@extends('layouts.app')

@section('title', 'Balance Sheet')

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
                    <a href="{{ route('price') }}"
                        class="py-2 px-1 text-secondary text-decoration-none">Price</a>
                    <a href="{{ route('overview') }}"
                        class="py-2 px-1 text-secondary text-decoration-none">Overview</a>
                    <a href="{{ route('insights') }}"
                        class="py-2 px-1 text-secondary text-decoration-none">Insights</a>
                    <a href="{{ route('balance-sheet') }}"
                        class="py-2 px-1 border-bottom border-primary text-primary fw-medium text-decoration-none">Balance Sheet</a>
                    <a href="{{ route('profit-and-loss') }}"
                        class="py-2 px-1 text-secondary text-decoration-none">Profit and Loss</a>
                    <a href=""
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
            <div class="mt-4 bg-white rounded p-4">
                <div>
                    <div class="d-flex flex-row gap-3 small">
                        <button class="btn border-bottom border-primary text-primary fw-medium py-2 px-4">Standalone</button>
                        <button class="btn border-bottom border-0 text-secondary py-2 px-4">Consolidated</button>
                    </div>
                </div>
                <div class="mt-4">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th class="text-start p-2"> </th>
                                <th class="fw-normal text-end p-2">FY24</th>
                                <th class="fw-normal text-end p-2">FY23</th>
                                <th class="fw-normal text-end p-2">FY22</th>
                                <th class="fw-normal text-end p-2">FY21</th>
                                <th class="fw-normal text-end p-2">FY20</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-warning">
                                <td class="text-start p-2 fw-bold">Equity</td>
                                <td class="text-end p-2 fw-bold">362.84</td>
                                <td class="text-end p-2 fw-bold">305.21</td>
                                <td class="text-end p-2 fw-bold">255.28</td>
                                <td class="text-end p-2 fw-bold">183.72</td>
                                <td class="text-end p-2 fw-bold">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-start p-2">Share Capital</td>
                                <td class="text-end p-2">362.84</td>
                                <td class="text-end p-2">305.21</td>
                                <td class="text-end p-2">255.28</td>
                                <td class="text-end p-2">183.72</td>
                                <td class="text-end p-2">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-start p-2">Reserves</td>
                                <td class="text-end p-2">362.84</td>
                                <td class="text-end p-2">305.21</td>
                                <td class="text-end p-2">255.28</td>
                                <td class="text-end p-2">183.72</td>
                                <td class="text-end p-2">142.27</td>
                            </tr>
                            <tr class="table-warning">
                                <td class="text-start p-2 fw-bold">Liabilities</td>
                                <td class="text-end p-2 fw-bold">838.80</td>
                                <td class="text-end p-2 fw-bold">625.94</td>
                                <td class="text-end p-2 fw-bold">383.52</td>
                                <td class="text-end p-2 fw-bold">323.90</td>
                                <td class="text-end p-2 fw-bold">1168.62</td>
                            </tr>
                            <tr>
                                <td class="text-start p-2">Share Capital</td>
                                <td class="text-end p-2">362.84</td>
                                <td class="text-end p-2">305.21</td>
                                <td class="text-end p-2">255.28</td>
                                <td class="text-end p-2">183.72</td>
                                <td class="text-end p-2">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-start p-2">Reserves</td>
                                <td class="text-end p-2">362.84</td>
                                <td class="text-end p-2">305.21</td>
                                <td class="text-end p-2">255.28</td>
                                <td class="text-end p-2">183.72</td>
                                <td class="text-end p-2">142.27</td>
                            </tr>
                            <tr class="table-warning">
                                <td class="text-start p-2 fw-bold">NCL</td>
                                <td class="text-end p-2 fw-bold">838.80</td>
                                <td class="text-end p-2 fw-bold">625.94</td>
                                <td class="text-end p-2 fw-bold">383.52</td>
                                <td class="text-end p-2 fw-bold">323.90</td>
                                <td class="text-end p-2 fw-bold">1168.62</td>
                            </tr>
                            <tr>
                                <td class="text-start p-2">LT Borrowings</td>
                                <td class="text-end p-2">362.84</td>
                                <td class="text-end p-2">305.21</td>
                                <td class="text-end p-2">255.28</td>
                                <td class="text-end p-2">183.72</td>
                                <td class="text-end p-2">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-start p-2">Net DTL</td>
                                <td class="text-end p-2">362.84</td>
                                <td class="text-end p-2">305.21</td>
                                <td class="text-end p-2">255.28</td>
                                <td class="text-end p-2">183.72</td>
                                <td class="text-end p-2">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-start p-2">OLT Liabilities</td>
                                <td class="text-end p-2">362.84</td>
                                <td class="text-end p-2">305.21</td>
                                <td class="text-end p-2">255.28</td>
                                <td class="text-end p-2">183.72</td>
                                <td class="text-end p-2">142.27</td>
                            </tr>
                            <tr>
                                <td class="text-start p-2">LT Provisions</td>
                                <td class="text-end p-2">362.84</td>
                                <td class="text-end p-2">305.21</td>
                                <td class="text-end p-2">255.28</td>
                                <td class="text-end p-2">183.72</td>
                                <td class="text-end p-2">142.27</td>
                            </tr>
                            <tr class="table-info">
                                <td class="text-start p-2 fw-bold">NCL</td>
                                <td class="text-end p-2 fw-bold">838.80</td>
                                <td class="text-end p-2 fw-bold">625.94</td>
                                <td class="text-end p-2 fw-bold">383.52</td>
                                <td class="text-end p-2 fw-bold">323.90</td>
                                <td class="text-end p-2 fw-bold">1168.62</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

@endsection
