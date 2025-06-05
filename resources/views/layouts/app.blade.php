<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <style>
        .sidebar {
            height: 100vh;
            overflow-y: auto;
        }
        .sidebar-body {
            height: calc(100vh - 120px);
            overflow-y: auto;
        }
        .company-item {
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .company-item:hover {
            background-color: #f8f9fa !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e5e7eb;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://trade.altiusinvestech.com/static/media/logo.a64f96971bd96c977fe749686ab36237.svg"
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
                        <a href="#" class="nav-link text-dark">Refer and Earn</a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#" class="nav-link text-dark"><i class="bi bi-bell-fill"></i></a>
                    </li>
                    <li class="nav-item me-3">
                        <a href="#" class="nav-link text-dark"><i class="bi bi-mortarboard-fill fs-5"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark"><i class="bi bi-person-circle fs-4"></i></a>
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
                <!-- Main Content -->
                @yield('content')
              
            </main>
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