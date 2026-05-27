<x-slot:sidebar>
    <x-layouts.sidebar />
</x-slot:sidebar>

<div class="container-fluid py-4 px-4">

    {{-- Page Header --}}
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h3 class="mb-1 fw-bold">Dashboard</h3>
            <p class="mb-0 small" style="color:#8B8BA7;">Welcome back, {{ auth()->user()->name }} 👋</p>
        </div>
        <div class="d-flex gap-2">
            <div class="dropdown">
                <button class="btn btn-sm d-flex align-items-center gap-2 px-3"
                    style="border-radius:10px; border:1px solid var(--bs-border-color); font-size:13px;"
                    data-bs-toggle="dropdown">
                    <i class="bi bi-calendar3"></i> This week
                    <i class="bi bi-chevron-down" style="font-size:10px;"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm" style="border-radius:12px; font-size:13.5px;">
                    <li><a class="dropdown-item py-2" href="#"><i class="bi bi-calendar-day me-2"></i>Today</a></li>
                    <li><a class="dropdown-item py-2" href="#"><i class="bi bi-calendar-week me-2"></i>This week</a></li>
                    <li><a class="dropdown-item py-2" href="#"><i class="bi bi-calendar-month me-2"></i>This month</a></li>
                    <li><a class="dropdown-item py-2" href="#"><i class="bi bi-calendar3 me-2"></i>This year</a></li>
                </ul>
            </div>
            <button class="btn btn-sm px-3" style="border-radius:10px; background:var(--gradient-purple); color:white; border:none; font-size:13px; font-weight:600;">
                <i class="bi bi-download me-1"></i> Export
            </button>
        </div>
    </div>

    {{-- Stat Cards --}}
    <div class="row g-3 mb-4">
        {{-- Users --}}
        <div class="col-sm-6 col-xl-3">
            <div class="card stat-card border-0 shadow-sm h-100" style="--card-accent: #6C63FF;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div class="stat-icon" style="background: rgba(108,99,255,0.12);">
                            <i class="bi bi-people-fill" style="color:#6C63FF;"></i>
                        </div>
                        <span class="badge-soft" style="background:rgba(67,233,123,0.12); color:#43E97B;">+12.5%</span>
                    </div>
                    <div>
                        <h2 class="mb-0 fw-bold" style="font-family:'Syne',sans-serif; letter-spacing:-1px;">2,647</h2>
                        <p class="mb-0 mt-1 small" style="color:#8B8BA7;">Total Users</p>
                    </div>
                    <div class="mini-progress mt-3">
                        <div class="mini-progress-bar" style="width:62%; background:linear-gradient(90deg,#6C63FF,#9B8FFF);"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Revenue --}}
        <div class="col-sm-6 col-xl-3">
            <div class="card stat-card border-0 shadow-sm h-100" style="--card-accent: #43E97B;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div class="stat-icon" style="background: rgba(67,233,123,0.12);">
                            <i class="bi bi-currency-dollar" style="color:#43E97B;"></i>
                        </div>
                        <span class="badge-soft" style="background:rgba(255,101,132,0.12); color:#FF6584;">-2.1%</span>
                    </div>
                    <div>
                        <h2 class="mb-0 fw-bold" style="font-family:'Syne',sans-serif; letter-spacing:-1px;">$32.5K</h2>
                        <p class="mb-0 mt-1 small" style="color:#8B8BA7;">Total Revenue</p>
                    </div>
                    <div class="mini-progress mt-3">
                        <div class="mini-progress-bar" style="width:48%; background:linear-gradient(90deg,#43E97B,#38F9D7);"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Orders --}}
        <div class="col-sm-6 col-xl-3">
            <div class="card stat-card border-0 shadow-sm h-100" style="--card-accent: #4FACFE;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div class="stat-icon" style="background: rgba(79,172,254,0.12);">
                            <i class="bi bi-cart-fill" style="color:#4FACFE;"></i>
                        </div>
                        <span class="badge-soft" style="background:rgba(67,233,123,0.12); color:#43E97B;">+5.7%</span>
                    </div>
                    <div>
                        <h2 class="mb-0 fw-bold" style="font-family:'Syne',sans-serif; letter-spacing:-1px;">1,204</h2>
                        <p class="mb-0 mt-1 small" style="color:#8B8BA7;">Total Orders</p>
                    </div>
                    <div class="mini-progress mt-3">
                        <div class="mini-progress-bar" style="width:74%; background:linear-gradient(90deg,#4FACFE,#00F2FE);"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Visitors --}}
        <div class="col-sm-6 col-xl-3">
            <div class="card stat-card border-0 shadow-sm h-100" style="--card-accent: #F093FB;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div class="stat-icon" style="background: rgba(240,147,251,0.12);">
                            <i class="bi bi-graph-up-arrow" style="color:#F093FB;"></i>
                        </div>
                        <span class="badge-soft" style="background:rgba(67,233,123,0.12); color:#43E97B;">+15.2%</span>
                    </div>
                    <div>
                        <h2 class="mb-0 fw-bold" style="font-family:'Syne',sans-serif; letter-spacing:-1px;">4,821</h2>
                        <p class="mb-0 mt-1 small" style="color:#8B8BA7;">Site Visitors</p>
                    </div>
                    <div class="mini-progress mt-3">
                        <div class="mini-progress-bar" style="width:85%; background:linear-gradient(90deg,#F093FB,#F5576C);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Lower Row --}}
    <div class="row g-3">

        {{-- Recent Activity --}}
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent py-3 px-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-0 fw-bold" style="font-family:'Syne',sans-serif;">Recent Activity</h6>
                        <a href="#" class="btn btn-sm px-3" style="border-radius:8px; font-size:12.5px; border:1px solid var(--bs-border-color); color:var(--bs-body-color);">
                            View All <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    @php
                        $activities = [
                            ['icon'=>'bi-cart-check', 'color'=>'#6C63FF', 'bg'=>'rgba(108,99,255,0.1)', 'title'=>'New order placed', 'desc'=>'John Doe placed a new order worth $150', 'time'=>'2 min ago'],
                            ['icon'=>'bi-person-plus', 'color'=>'#43E97B', 'bg'=>'rgba(67,233,123,0.1)', 'title'=>'New user registered', 'desc'=>'sarah@example.com just created an account', 'time'=>'18 min ago'],
                            ['icon'=>'bi-exclamation-triangle', 'color'=>'#F5A623', 'bg'=>'rgba(245,166,35,0.1)', 'title'=>'Payment failed', 'desc'=>'Order #4821 payment could not be processed', 'time'=>'1 hr ago'],
                            ['icon'=>'bi-star', 'color'=>'#4FACFE', 'bg'=>'rgba(79,172,254,0.1)', 'title'=>'New review received', 'desc'=>'Product "Starter Kit Pro" got a 5-star review', 'time'=>'3 hrs ago'],
                            ['icon'=>'bi-check-circle', 'color'=>'#F093FB', 'bg'=>'rgba(240,147,251,0.1)', 'title'=>'Deployment success', 'desc'=>'v2.4.1 deployed to production successfully', 'time'=>'5 hrs ago'],
                        ];
                    @endphp
                    @foreach($activities as $a)
                    <div class="activity-item">
                        <div class="activity-dot" style="background:{{ $a['bg'] }};">
                            <i class="bi {{ $a['icon'] }}" style="color:{{ $a['color'] }};"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <span style="font-size:13.5px; font-weight:600;">{{ $a['title'] }}</span>
                                <small style="color:#8B8BA7; font-size:11.5px; white-space:nowrap; margin-left:12px;">{{ $a['time'] }}</small>
                            </div>
                            <p class="mb-0 mt-1" style="font-size:12.5px; color:#8B8BA7;">{{ $a['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Quick Actions + Stats --}}
        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-header bg-transparent py-3 px-4">
                    <h6 class="mb-0 fw-bold" style="font-family:'Syne',sans-serif;">Quick Actions</h6>
                </div>
                <div class="card-body p-3 d-flex flex-column gap-2">
                    @php
                        $actions = [
                            ['icon'=>'bi-plus-circle', 'label'=>'New Project', 'color'=>'#6C63FF', 'bg'=>'rgba(108,99,255,0.1)'],
                            ['icon'=>'bi-people', 'label'=>'Invite Team', 'color'=>'#43E97B', 'bg'=>'rgba(67,233,123,0.1)'],
                            ['icon'=>'bi-gear', 'label'=>'Settings', 'color'=>'#4FACFE', 'bg'=>'rgba(79,172,254,0.1)'],
                            ['icon'=>'bi-bar-chart', 'label'=>'View Reports', 'color'=>'#F093FB', 'bg'=>'rgba(240,147,251,0.1)'],
                        ];
                    @endphp
                    @foreach($actions as $action)
                    <button class="quick-action-btn">
                        <div class="quick-action-icon" style="background:{{ $action['bg'] }};">
                            <i class="bi {{ $action['icon'] }}" style="color:{{ $action['color'] }};"></i>
                        </div>
                        <span>{{ $action['label'] }}</span>
                        <i class="bi bi-arrow-right ms-auto" style="font-size:12px; color:#8B8BA7;"></i>
                    </button>
                    @endforeach
                </div>
            </div>

            {{-- Summary mini card --}}
            <div class="card border-0 shadow-sm" style="background:linear-gradient(135deg,rgba(108,99,255,0.12),rgba(240,147,251,0.08));">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div style="width:8px;height:8px;border-radius:50%;background:#43E97B;box-shadow:0 0 6px #43E97B;"></div>
                        <span style="font-size:12px; color:#8B8BA7; font-weight:600; letter-spacing:.5px; text-transform:uppercase;">System Status</span>
                    </div>
                    <p class="mb-2 fw-bold" style="font-size:15px; font-family:'Syne',sans-serif;">All systems operational</p>
                    <p class="mb-0 small" style="color:#8B8BA7;">Uptime: 99.98% — Last incident: 14 days ago</p>
                </div>
            </div>
        </div>

    </div>
</div>
