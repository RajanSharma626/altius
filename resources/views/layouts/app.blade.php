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
    @include('components.navbar')

    <div class="container-fluid">
        <div class="row">
            @php
                $noSidebarRoutes = ['login', 'register', 'forgot-password', 'my-account', 'holdings'];
                $isNoSidebar = request()->routeIs($noSidebarRoutes);
                $mainPaddingClass = $isNoSidebar ? 'p-0 p-md-4' : 'p-4';
            @endphp

            @if ($isNoSidebar)
                <!-- Routes without application sidebar -->
                <main class="col-12 {{ $mainPaddingClass }}">
                    @yield('content')
                </main>
            @else
                @include('components.sidebar')

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
    @stack('scripts')
</body>

</html>
