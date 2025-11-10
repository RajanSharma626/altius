@extends('layouts.app')

@section('title', 'Holdings')

@section('content')
    @php
        $holdings = [
            [
                'instrument' => 'Goodluck Defence and Aerospace Pvt. Ltd.',
                'segment' => 'Equity - Unlisted',
                'qty' => 11500,
                'avg_cost' => 305,
                'ltp' => 225,
                'current_value' => 2587500,
                'investment_value' => 3507500,
                'pnl' => -920000,
                'pnl_percent' => -26.23,
                'day_change' => -1.2,
            ],
            [
                'instrument' => 'Cochin International Airport Ltd (CIAL) (ESTD-1994)',
                'segment' => 'Equity - Unlisted',
                'qty' => 300,
                'avg_cost' => 494,
                'ltp' => 414,
                'current_value' => 1242000,
                'investment_value' => 1482000,
                'pnl' => -240000,
                'pnl_percent' => -16.19,
                'day_change' => -0.8,
            ],
            [
                'instrument' => 'Southern Ispat And Energy Limited',
                'segment' => 'Equity - SME',
                'qty' => 60000,
                'avg_cost' => 2.75,
                'ltp' => 0.9,
                'current_value' => 540000,
                'investment_value' => 1650000,
                'pnl' => -1110000,
                'pnl_percent' => -67.27,
                'day_change' => -3.6,
            ],
            [
                'instrument' => 'Kannur International Airport Ltd (KIAL)',
                'segment' => 'Equity - Unlisted',
                'qty' => 4000,
                'avg_cost' => 130,
                'ltp' => 126,
                'current_value' => 504000,
                'investment_value' => 520000,
                'pnl' => -16000,
                'pnl_percent' => -3.08,
                'day_change' => 0.4,
            ],
        ];

        $totalCurrentValue = collect($holdings)->sum('current_value');
        $totalInvestment = collect($holdings)->sum('investment_value');
        $totalPnL = $totalCurrentValue - $totalInvestment;
        $totalPnLPercent = $totalInvestment > 0 ? ($totalPnL / $totalInvestment) * 100 : 0;
        $todayChangePercent = collect($holdings)->avg('day_change');
    @endphp

    <div class="holdings-page">
       
        <div class="card holdings-toolbar shadow-sm">
            <div class="row g-3 align-items-center">
                <div class="col-lg-3 col-md-4">
                    <label class="form-label small text-muted mb-1">Segment</label>
                    <select class="form-select form-select-sm">
                        <option selected>All</option>
                        <option>Unlisted Companies</option>
                        <option>MLDs</option>
                        <option>Government Securities</option>
                        <option>Pre-IPO Basket</option>
                        <option>Startup Investing</option>
                        <option>Earn Fixed 11% with P2P</option>
                        <option>Get high returns with Liquiloans (NDX P2P Pvt Ltd)</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-4">
                    <label class="form-label small text-muted mb-1">Search Asset</label>
                    <div class="position-relative">
                        <span class="search-icon"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control holdings-search form-control-sm" placeholder="Search by company or symbol">
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 d-flex justify-content-md-end gap-2">
                    <button class="btn btn-primary px-3"><i class="bi bi-pencil-square me-2"></i>Modify Holdings</button>
                    <button class="btn btn-outline-primary px-3"><i class="bi bi-download me-2"></i>Export</button>
                </div>
            </div>
        </div>

        <div class="card holdings-table-card shadow-sm">
            <div class="d-flex flex-wrap flex-md-nowrap justify-content-between align-items-center holdings-table-header">
                <div>
                    <h5 class="mb-1">Portfolio Holdings</h5>
                    <small class="text-muted">Live valuation &amp; performance overview</small>
                </div>
                <div class="holdings-legend text-muted small">
                    <span><i class="bi bi-circle-fill text-success me-1"></i>Gain</span>
                    <span><i class="bi bi-circle-fill text-danger mx-1"></i>Loss</span>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-middle holdings-table mb-0 small">
                    <thead>
                        <tr>
                            <th scope="col">Instrument</th>
                            <th scope="col" class="text-center">Qty</th>
                            <th scope="col" class="text-center">Avg Cost</th>
                            <th scope="col" class="text-center">LTP</th>
                            <th scope="col" class="text-end">Cur. Value</th>
                            <th scope="col" class="text-end">P&amp;L</th>
                            <th scope="col" class="text-end">Change</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($holdings as $holding)
                            @php
                                $hasGain = $holding['pnl'] >= 0;
                            @endphp
                            <tr>
                                <td>
                                    <div class="instrument-cell">
                                        <div class="instrument-avatar">
                                            {{ strtoupper(substr($holding['instrument'], 0, 2)) }}
                                        </div>
                                        <div class="instrument-meta">
                                            <span class="instrument-name">{{ $holding['instrument'] }}</span>
                                            <span class="instrument-segment">{{ $holding['segment'] }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ number_format($holding['qty']) }}</td>
                                <td class="text-center">₹{{ number_format($holding['avg_cost'], 2) }}</td>
                                <td class="text-center">₹{{ number_format($holding['ltp'], 2) }}</td>
                                <td class="text-end">₹{{ number_format($holding['current_value'], 2) }}</td>
                                <td class="text-end">
                                    <span class="{{ $hasGain ? 'pnl-positive' : 'pnl-negative' }}">
                                        {{ $hasGain ? '+' : '-' }}₹{{ number_format(abs($holding['pnl']), 2) }}
                                    </span>
                                </td>
                                <td class="text-end">
                                    <span class="badge {{ $hasGain ? 'badge-gain' : 'badge-loss' }}">
                                        {{ $hasGain ? '+' : '-' }}{{ number_format(abs($holding['pnl_percent']), 2) }}%
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
