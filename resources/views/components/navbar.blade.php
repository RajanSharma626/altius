@php
    $notifications = [
        [
            'title' => 'Order Executed',
            'description' => 'Cochin International Airport order completed successfully.',
            'time' => '2h ago',
            'type' => 'success',
            'unread' => true,
        ],
        [
            'title' => 'Price Alert Triggered',
            'description' => 'Goodluck Defence breached your watch price of ₹225.',
            'time' => '5h ago',
            'type' => 'warning',
            'unread' => true,
        ],
        [
            'title' => 'Document Reminder',
            'description' => 'Upload latest income proof to keep account compliant.',
            'time' => 'Yesterday',
            'type' => 'info',
            'unread' => false,
        ],
    ];

    $unreadNotifications = collect($notifications)->where('unread', true)->count();
@endphp

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid px-3">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="https://bridginggap.org/wp-content/uploads/2025/03/BgisLogoFinalx300.png" class="img-fluid"
                alt="Bridging Gap Logo">
        </a>
        <div class="d-none d-lg-flex align-items-center flex-grow-1 justify-content-end">
            <ul class="navbar-nav mb-0 ms-4">
                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('dashboard') ? 'text-primary' : '' }}"
                        href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('holdings') ? 'text-primary' : '' }}"
                        href="{{ route('holdings') }}">Holdings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('order-book') ? 'text-primary' : '' }}"
                        href="{{ route('order-book') }}">Order Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('refer-and-earn') ? 'text-primary' : '' }}"
                        href="{{ route('refer-and-earn') }}">Refer and Earn</a>
                </li>
                <li class="nav-item dropdown notification-dropdown">
                    <a class="nav-link px-2 position-relative d-flex align-items-center" href="#" id="notificationMenu"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell"></i>
                        @if ($unreadNotifications > 0)
                            <span class="notification-badge">{{ $unreadNotifications }}</span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow notification-menu p-0"
                        aria-labelledby="notificationMenu">
                        <div class="notification-header d-flex justify-content-between align-items-center px-3 py-2">
                            <div>
                                <p class="mb-0 fw-semibold">Notifications</p>
                                <small class="text-muted">{{ $unreadNotifications }} unread</small>
                            </div>
                            <button class="btn btn-link btn-sm text-decoration-none text-primary">Mark all read</button>
                        </div>
                        <div class="notification-list">
                            @foreach ($notifications as $notification)
                                <div
                                    class="notification-item {{ $notification['unread'] ? 'notification-item--unread' : '' }}">
                                    <div class="notification-indicator notification-indicator--{{ $notification['type'] }}">
                                        <i class="bi {{ $notification['type'] === 'success' ? 'bi-check-circle' : ($notification['type'] === 'warning' ? 'bi-exclamation-triangle' : 'bi-info-circle') }}"></i>
                                    </div>
                                    <div class="notification-body">
                                        <p class="notification-title mb-1">{{ $notification['title'] }}</p>
                                        <p class="notification-text mb-1 text-muted">{{ $notification['description'] }}
                                        </p>
                                        <span class="notification-time text-muted small">{{ $notification['time'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="notification-footer text-center py-2">
                            <a href="{{ route('notifications') }}"
                                class="text-primary small text-decoration-none">View all notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 dropdown-toggle d-flex align-items-center" href="#" id="profileMenu"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle me-1"></i> {{ \Illuminate\Support\Str::of(auth()->user()->name ?? '')->before(' ') ?: (auth()->user()->email ?? '') }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow rounded-3 p-0 overflow-hidden"
                        aria-labelledby="profileMenu" style="min-width: 260px;">
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center py-2"
                                href="{{ route('my-account') }}">
                                <span>My Account</span>
                                <i class="bi bi-person text-muted"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center py-2"
                                href="#">
                                <span>Tax Sheet</span>
                                <i class="bi bi-receipt text-muted"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center py-2"
                                href="#">
                                <span>Price Alerts</span>
                                <i class="bi bi-bell text-muted"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center py-2"
                                href="#">
                                <span>Terms and conditions</span>
                                <i class="bi bi-file-text text-muted"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center py-2"
                                href="#">
                                <span>Privacy Policy</span>
                                <i class="bi bi-file-lock2 text-muted"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center py-2"
                                href="#">
                                <span>Disclosures</span>
                                <i class="bi bi-files text-muted"></i>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider my-0">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="dropdown-item text-danger d-flex justify-content-between align-items-center py-2">
                                    Logout
                                    <i class="bi bi-box-arrow-right"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav>
    <div class="container-fluid bg-app-bar p-1">
        <div class="d-flex align-items-center justify-content-between">
            <div class=" px-3 py-1 rounded-2 flex-grow-1 mx-4 text-center small">For any inquiries, please contact
                your Relationship Manager</div>
        </div>
    </div>
</nav>
