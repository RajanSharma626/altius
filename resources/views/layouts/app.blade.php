<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e5e7eb;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://bridginggap.org/wp-content/uploads/2025/03/BgisLogoFinalx300.png"
                    class="d-inline-block align-text-top" style="height: 32px;" alt="Logo">
            </a>

            <!-- Menu -->
            <div class="navbar-nav ms-auto">
                <ul class="navbar-nav d-flex flex-row align-items-center">
                    <li class="nav-item me-3">
                        <a href="/" class="nav-link text-dark">Dashboard</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#" class="nav-link text-dark">Holdings</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="{{ route('order-book') }}" class="nav-link text-dark">Order Book</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="{{ route('refer-and-earn') }}" class="nav-link text-dark">Refer and Earn</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#" class="nav-link text-dark"><i class="bi bi-bell-fill"></i></a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#" class="nav-link text-dark" data-bs-toggle="modal"
                            data-bs-target="#videoModal"><i class="bi bi-mortarboard-fill fs-5"></i></a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="#" class="nav-link text-dark dropdown-toggle" id="userDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle fs-4"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="{{ route('my-account') }}"><i
                                            class="bi bi-person"></i> My Account</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="bi bi-file-earmark-spreadsheet"></i> Tax Sheet</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-bell"></i> Price Alert</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="bi bi-file-earmark-spreadsheet"></i> Terms and conditions</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="bi bi-file-earmark-spreadsheet"></i> Privacy Policy</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="bi bi-file-earmark-spreadsheet"></i> Disclosures</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="#"><i
                                            class="bi bi-box-arrow-left"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="alert alert-success text-center py-2 mb-0 rounded-0" role="alert">
                    For any inquiries, please contact your Relationship Manager
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @php
                $isMyAccount = request()->routeIs('my-account');
            @endphp

            @if ($isMyAccount)
                <main class="col-12 p-4">
                    @yield('content')
                </main>
            @else
                <aside class="col-md-3 sidebar bg-light border-end">
                    <div class="p-3 border-bottom">
                        <!-- Search Box -->
                        <input type="text" placeholder="Search..." class="form-control">
                    </div>
                    <div class="d-flex border-bottom">
                        <!-- Tabs -->
                        <button class="btn btn-outline-secondary flex-fill rounded-0 border-0 fw-bold">
                            All Companies
                        </button>
                        <button class="btn btn-outline-secondary flex-fill rounded-0 border-0 fw-bold">
                            Watchlist
                        </button>
                    </div>
                    <div class="sidebar-body">
                        <!-- Sidebar Body -->
                        <ul class="list-unstyled">
                            <li class="p-2 bg-white company-item border-bottom">Company 1</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 2</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 3</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 4</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 5</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 6</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 7</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 8</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 9</li>
                            <li class="p-2 bg-white company-item border-bottom">Company 10</li>
                        </ul>
                    </div>
                </aside>

                <main class="col-md-9 p-4">
                    @yield('content')
                </main>
            @endif
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl-custom modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-header-custom">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom flex-grow-1" id="platformTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                data-bs-target="#overview" type="button" role="tab">
                                Platform Overview
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="investing-tab" data-bs-toggle="tab"
                                data-bs-target="#investing" type="button" role="tab">
                                Pre-IPO Investing
                            </button>
                        </li>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-0">
                    <div class="tab-content tab-content-custom" id="platformTabContent">
                        <!-- Platform Overview Tab -->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel">
                            <div class="row g-0">
                                <!-- Video Section -->
                                <div class="col-md-8 p-3">
                                    <div class="video-container" id="videoContainer">
                                        <iframe width="100%" height="100%" style="aspect-ratio: 16/9;"
                                            src="https://www.youtube.com/embed/L3Dp4oGkn3k?si=KPuacrs0bVDEIMMR"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <!-- Menu Section -->
                                <div class="col-md-4 border-start">
                                    <div class="menu-item active" onclick="selectVideo('kyc', this)">
                                        <i class="bi bi-check-circle text-primary me-2"></i>
                                        Complete Your KYC
                                    </div>
                                    <div class="menu-item" onclick="selectVideo('dashboard', this)">
                                        Dashboard Overview
                                    </div>
                                    <div class="menu-item" onclick="selectVideo('explore', this)">
                                        Explore Pre-IPO Companies
                                    </div>
                                    <div class="menu-item" onclick="selectVideo('order', this)">
                                        Place your First Order
                                    </div>
                                    <div class="menu-item" onclick="selectVideo('filter', this)">
                                        Filter companies using Screener
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pre-IPO Investing Tab -->
                        <div class="tab-pane fade" id="investing" role="tabpanel">
                            <div class="row g-0">
                                <!-- Video Section -->
                                <div class="col-md-8 p-3">
                                    <div class="video-container" id="videoContainer2">
                                          <iframe width="100%" height="100%" style="aspect-ratio: 16/9;"
                                            src="https://www.youtube.com/embed/L3Dp4oGkn3k?si=KPuacrs0bVDEIMMR"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <!-- Menu Section -->
                                <div class="col-md-4 border-start">
                                    <div class="menu-item active" onclick="selectVideo('investing-intro', this)">
                                        Introduction to Pre-IPO
                                    </div>
                                    <div class="menu-item" onclick="selectVideo('risk-assessment', this)">
                                        Risk Assessment
                                    </div>
                                    <div class="menu-item" onclick="selectVideo('portfolio', this)">
                                        Portfolio Management
                                    </div>
                                    <div class="menu-item" onclick="selectVideo('market-analysis', this)">
                                        Market Analysis
                                    </div>
                                    <div class="menu-item" onclick="selectVideo('exit-strategies', this)">
                                        Exit Strategies
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var options = {
                series: [{
                    name: 'series1',
                    data: [31, 40, 28, 51, 42, 109, 100]
                }, {
                    name: 'series2',
                    data: [11, 32, 45, 32, 34, 52, 41]
                }],
                chart: {
                    height: 350,
                    type: 'area'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                        "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z",
                        "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"
                    ]
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#priceChart"), options);
            chart.render();
        });
    </script>
</body>

</html>
