@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
    @php
        $notifications = [
            [
                'title' => 'Order Executed',
                'description' => 'Cochin International Airport order completed successfully.',
                'category' => 'Orders',
                'time' => 'Today, 10:32 AM',
                'type' => 'success',
                'unread' => true,
            ],
            [
                'title' => 'Price Alert Triggered',
                'description' => 'Goodluck Defence breached your watch price of ₹225.',
                'category' => 'Alerts',
                'time' => 'Today, 08:15 AM',
                'type' => 'warning',
                'unread' => true,
            ],
            [
                'title' => 'Document Reminder',
                'description' => 'Upload latest income proof to keep account compliant.',
                'category' => 'Account',
                'time' => 'Yesterday, 06:20 PM',
                'type' => 'info',
                'unread' => false,
            ],
            [
                'title' => 'Relationship Manager Update',
                'description' => 'Your RM has scheduled a portfolio review for next week.',
                'category' => 'Account',
                'time' => 'March 23, 04:12 PM',
                'type' => 'info',
                'unread' => false,
            ],
            [
                'title' => 'New Investment Opportunity',
                'description' => 'Explore pre-IPO allocation for NeoFintech Technologies.',
                'category' => 'Opportunities',
                'time' => 'March 22, 01:47 PM',
                'type' => 'success',
                'unread' => false,
            ],
        ];

        $unreadCount = collect($notifications)->where('unread', true)->count();
    @endphp

    <div class="notifications-page py-3">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-2 mb-3">
            <div>
                <h1 class="h4 mb-0">Notifications</h1>
                <p class="text-muted small mb-0">You have {{ $unreadCount }} unread notifications</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-primary btn-sm px-3">
                    <i class="bi bi-check-circle me-1"></i> Mark all as read
                </button>
                <div class="d-flex align-items-center gap-2">
                    <label for="notification-filter" class="small text-muted mb-0">Filter</label>
                    <select id="notification-filter" class="form-select form-select-sm">
                        <option selected>All</option>
                        <option>Unread</option>
                        <option>Orders</option>
                        <option>Alerts</option>
                        <option>Account</option>
                        <option>Opportunities</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            @foreach ($notifications as $notification)
                                <div
                                    class="list-group-item d-flex gap-3 align-items-start notifications-item {{ $notification['unread'] ? 'notifications-item--unread' : '' }}">
                                    <div class="notifications-icon notifications-icon--{{ $notification['type'] }}">
                                        <i class="bi {{ $notification['type'] === 'success' ? 'bi-check-circle' : ($notification['type'] === 'warning' ? 'bi-exclamation-triangle' : 'bi-info-circle') }}"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">{{ $notification['title'] }}</h6>
                                            <span class="badge rounded-pill notifications-badge notifications-badge--{{ $notification['type'] }}">
                                                {{ $notification['category'] }}
                                            </span>
                                        </div>
                                        <p class="mb-1 text-muted small">{{ $notification['description'] }}</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="text-muted small">{{ $notification['time'] }}</span>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-link btn-sm text-decoration-none">Mark as read</button>
                                                <button class="btn btn-link btn-sm text-decoration-none text-danger">Dismiss</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-3">Channels</h6>
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex align-items-start gap-3 p-2 border rounded-3">
                                <span class="notifications-channel-icon bg-primary-subtle text-primary">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <div>
                                    <p class="fw-semibold mb-1">Email</p>
                                    <p class="text-muted small mb-0">Get important updates and statements straight to your
                                        inbox.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3 p-2 border rounded-3">
                                <span class="notifications-channel-icon bg-success-subtle text-success">
                                    <i class="bi bi-whatsapp"></i>
                                </span>
                                <div>
                                    <p class="fw-semibold mb-1">WhatsApp</p>
                                    <p class="text-muted small mb-0">Receive instant trade alerts and reminders.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3 p-2 border rounded-3">
                                <span class="notifications-channel-icon bg-warning-subtle text-warning">
                                    <i class="bi bi-phone"></i>
                                </span>
                                <div>
                                    <p class="fw-semibold mb-1">SMS</p>
                                    <p class="text-muted small mb-0">Stay informed even when you are offline with quick SMS prompts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-3">Preferences</h6>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="mb-0 fw-semibold">Mute promotional alerts</p>
                                    <small class="text-muted">Only show critical order and account updates.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="prefPromotional">
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="mb-0 fw-semibold">Weekly summary email</p>
                                    <small class="text-muted">Receive a recap of performance and activity every Monday.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="prefWeekly" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 