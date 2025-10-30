<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid px-3">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://bridginggap.org/wp-content/uploads/2025/03/BgisLogoFinalx300.png" alt="Bridging Gap Logo">
        </a>
        <div class="d-none d-lg-flex align-items-center flex-grow-1 justify-content-between">
            <div class="bg-app-bar px-3 py-1 rounded-2 flex-grow-1 mx-4">For any inquiries, please contact
                your Relationship Manager</div>
            <ul class="navbar-nav mb-0 ms-4">
                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('dashboard') ? 'text-primary' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('holdings') ? 'text-primary' : '' }}" href="#">Holdings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('order-book') ? 'text-primary' : '' }}" href="{{ route('order-book') }}">Order Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('refer-and-earn') ? 'text-primary' : '' }}" href="{{ route('refer-and-earn') }}">Refer and Earn</a>
                </li>
                <li class="nav-item"><a class="nav-link px-2" href="#"><i class="bi bi-bell"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 dropdown-toggle d-flex align-items-center" href="#" id="profileMenu"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle me-1"></i> {{ auth()->user()->name ?? auth()->user()->email }}
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
