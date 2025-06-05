@extends('layouts.app')

@section('title', 'Order Book')

@section('content')

    <div class="container py-4">
        <!-- Header Controls -->
        <div class="row align-items-center g-2 mb-4">
            <!-- Filter Dropdown -->
            <div class="col-auto">
                <select class="form-select">
                    <option>All</option>
                    <option>Unlisted Companies</option>
                    <option>MLDs</option>
                    <option>Government Securities</option>
                    <option>Pre-IPO Basket</option>
                    <option>Startup Investing</option>
                    <option>Earn Fixed 11% with P2P</option>
                    <option>Get high returns with Liquiloans (NDX P2P Pvt Ltd)</option>
                </select>
            </div>

            <!-- Navigation Tabs -->
            <div class="col-auto">
                <div class="btn-group" role="group">
                    <button class="btn btn-outline-secondary">Open Orders</button>
                    <button class="btn btn-primary">Executed Orders</button>
                    <button class="btn btn-success">Buy</button>
                    <button class="btn btn-outline-danger">Sell</button>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="col">
                <input type="text" placeholder="Search Asset/Status" class="form-control">
            </div>

            <!-- Export Button -->
            <div class="col-auto">
                <button class="btn btn-primary d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" class="me-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Export Orders
                </button>
            </div>
        </div>

        <!-- Company Header -->
        <div class="mb-4">
            <h2 class="h5 fw-bold text-uppercase">UNLISTED COMPANY</h2>
        </div>

        <!-- Orders Table -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Order Id/Instrument</th>
                        <th>Date</th>
                        <th>Qty</th>
                        <th>Price/Security</th>
                        <th>Price Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td>
                            <div class="fw-semibold">31243</div>
                            <div class="small text-muted">Kanpur International Airport Ltd (KIAL)</div>
                        </td>
                        <td>17-Feb-2025</td>
                        <td>4,000</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>₹103.00</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ms-1 text-warning">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>₹5,20,000.00</span>
                                <span class="ms-2 badge bg-success">Completed</span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td>
                            <div class="fw-semibold">28910</div>
                            <div class="small text-muted">Southern Ispat And Energy Limited</div>
                        </td>
                        <td>13-Dec-2024</td>
                        <td>30,000</td>
                        <td>₹3.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>₹90,000.00</span>
                                <span class="ms-2 badge bg-success">Completed</span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td>
                            <div class="fw-semibold">27956</div>
                            <div class="small text-muted">Southern Ispat And Energy Limited</div>
                        </td>
                        <td>29-Nov-2024</td>
                        <td>30,000</td>
                        <td>₹3.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>₹90,000.00</span>
                                <span class="ms-2 badge bg-success">Completed</span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr>
                        <td>
                            <div class="fw-semibold">27578</div>
                            <div class="small text-muted">Southern Ispat And Energy Limited</div>
                        </td>
                        <td>22-Nov-2024</td>
                        <td>30,000</td>
                        <td>₹3.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>₹90,000.00</span>
                                <span class="ms-2 badge bg-danger">Rejected</span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr>
                        <td>
                            <div class="fw-semibold">26684</div>
                            <div class="small text-muted">Cochin International Airport Ltd (CIAL) (ESTD-1994)</div>
                        </td>
                        <td>16-Oct-2024</td>
                        <td>300</td>
                        <td>₹495.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>₹1,48,500.00</span>
                                <span class="ms-2 badge bg-success">Completed</span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr>
                        <td>
                            <div class="fw-semibold">25917</div>
                            <div class="small text-muted">Goodluck Defence and Aerospace Pvt. Ltd.</div>
                        </td>
                        <td>16-Oct-2024</td>
                        <td>11,500</td>
                        <td>₹305.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>₹35,07,500.00</span>
                                <span class="ms-2 badge bg-success">Completed</span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Download Invoice</button>
                        </td>
                    </tr>

                    <!-- Row 7 -->
                    <tr>
                        <td>
                            <div class="fw-semibold">20539</div>
                            <div class="small text-muted">Glenmark Healthcare and Pharmaceuticals Ltd.</div>
                        </td>
                        <td>05-Sep-2024</td>
                        <td>3,775</td>
                        <td>₹63.00</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>₹2,37,825.00</span>
                                <span class="ms-2 badge bg-danger">Rejected</span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Download Invoice</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
