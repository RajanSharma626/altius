@extends('layouts.app')

@section('title', 'Profit and Loss')

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
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Price</a>
                    <a href="{{ route('overview') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Overview</a>
                    <a href="{{ route('insights') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Insights</a>
                    <a href="{{ route('balance-sheet') }}"
                        class="py-2 px-1 text-secondary text-decoration-none hover-text-dark">Balance
                        Sheet</a>
                    <a href="{{ route('profit-and-loss') }}"
                        class="py-2 px-1 border-bottom border-primary text-primary fw-medium text-decoration-none">Profit
                        and Loss</a>
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
            <div class="mt-4 bg-white border rounded p-4">
                <div>
                    <div class="d-flex flex-row gap-3 small">
                        <button
                            class="py-2 px-4 border-bottom border-primary text-primary fw-medium btn btn-link text-decoration-none">Standalone</button>
                        <button
                            class="py-2 px-4 text-secondary btn btn-link text-decoration-none">Consolidated</button>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr class="border-bottom">
                                    <th class="text-start p-2 border"> </th>
                                    <th class="fw-normal text-end p-2 border">FY24</th>
                                    <th class="fw-normal text-end p-2 border">FY23</th>
                                    <th class="fw-normal text-end p-2 border">FY22</th>
                                    <th class="fw-normal text-end p-2 border">FY21</th>
                                    <th class="fw-normal text-end p-2 border">FY20</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-warning">
                                    <td class="text-start p-2 fw-bold border">Net Revenue</td>
                                    <td class="text-end p-2 fw-bold border">1148.48</td>
                                    <td class="text-end p-2 fw-bold border">653.81</td>
                                    <td class="text-end p-2 fw-bold border">314.82</td>
                                    <td class="text-end p-2 fw-bold border">274.43</td>
                                    <td class="text-end p-2 fw-bold border">325.58</td>
                                </tr>
                                <tr class="table-primary">
                                    <td class="text-start p-2 fw-bold border">Total Op Cost</td>
                                    <td class="text-end p-2 fw-bold border">1078.80</td>
                                    <td class="text-end p-2 fw-bold border">623.26</td>
                                    <td class="text-end p-2 fw-bold border">283.28</td>
                                    <td class="text-end p-2 fw-bold border">251.64</td>
                                    <td class="text-end p-2 fw-bold border">312.32</td>
                                </tr>
                                <tr>
                                    <td class="text-start p-2 border">Material cost</td>
                                    <td class="text-end p-2 border">362.84</td>
                                    <td class="text-end p-2 border">305.21</td>
                                    <td class="text-end p-2 border">255.28</td>
                                    <td class="text-end p-2 border">183.72</td>
                                    <td class="text-end p-2 border">142.27</td>
                                </tr>
                                <tr>
                                    <td class="text-start p-2 border">Stock Purchases</td>
                                    <td class="text-end p-2 border">362.84</td>
                                    <td class="text-end p-2 border">305.21</td>
                                    <td class="text-end p-2 border">255.28</td>
                                    <td class="text-end p-2 border">183.72</td>
                                    <td class="text-end p-2 border">142.27</td>
                                </tr>
                                <tr>
                                    <td class="text-start p-2 border">Changes in Inventory</td>
                                    <td class="text-end p-2 border">362.84</td>
                                    <td class="text-end p-2 border">305.21</td>
                                    <td class="text-end p-2 border">255.28</td>
                                    <td class="text-end p-2 border">183.72</td>
                                    <td class="text-end p-2 border">142.27</td>
                                </tr>
                                <tr>
                                    <td class="text-start p-2 border">Employee Expense</td>
                                    <td class="text-end p-2 border">362.84</td>
                                    <td class="text-end p-2 border">305.21</td>
                                    <td class="text-end p-2 border">255.28</td>
                                    <td class="text-end p-2 border">183.72</td>
                                    <td class="text-end p-2 border">142.27</td>
                                </tr>
                                <tr>
                                    <td class="text-start p-2 border">Other Expenses</td>
                                    <td class="text-end p-2 border">362.84</td>
                                    <td class="text-end p-2 border">305.21</td>
                                    <td class="text-end p-2 border">255.28</td>
                                    <td class="text-end p-2 border">183.72</td>
                                    <td class="text-end p-2 border">142.27</td>
                                </tr>
                                <tr class="table-warning">
                                    <td class="text-start p-2 fw-bold border">EBITDA</td>
                                    <td class="text-end p-2 fw-bold border">838.80</td>
                                    <td class="text-end p-2 fw-bold border">625.94</td>
                                    <td class="text-end p-2 fw-bold border">383.52</td>
                                    <td class="text-end p-2 fw-bold border">323.90</td>
                                    <td class="text-end p-2 fw-bold border">1168.62</td>
                                </tr>
                                <tr class="table-warning">
                                    <td class="text-start p-2 fw-bold border">Other Income</td>
                                    <td class="text-end p-2 fw-bold border">838.80</td>
                                    <td class="text-end p-2 fw-bold border">625.94</td>
                                    <td class="text-end p-2 fw-bold border">383.52</td>
                                    <td class="text-end p-2 fw-bold border">323.90</td>
                                    <td class="text-end p-2 fw-bold border">1168.62</td>
                                </tr>
                                <tr class="table-warning">
                                    <td class="text-start p-2 fw-bold border">Depreciation</td>
                                    <td class="text-end p-2 fw-bold border">838.80</td>
                                    <td class="text-end p-2 fw-bold border">625.94</td>
                                    <td class="text-end p-2 fw-bold border">383.52</td>
                                    <td class="text-end p-2 fw-bold border">323.90</td>
                                    <td class="text-end p-2 fw-bold border">1168.62</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
