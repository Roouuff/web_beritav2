<div class="d-flex flex-column h-100">
    {{-- Brand --}}
    <div class="px-3 py-3 border-bottom" style="border-color: rgba(108,99,255,0.15) !important;">
        <a href="{{ route('home') }}" class="sidebar-brand">
            <div class="brand-icon">
                <i class="bi bi-boxes"></i>
            </div>
            <span>{{ config('app.name') }}</span>
        </a>
    </div>

    {{-- Navigation --}}
    <div class="flex-grow-1 overflow-auto sidebar-nav">
        <span class="sidebar-label">Main</span>
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    wire:navigate href="{{ route('dashboard') }}">
                    <i class="bi bi-grid-1x2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>

        <span class="sidebar-label mt-2">Account</span>
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('settings.*') ? 'active' : '' }}"
                    wire:navigate href="{{ route('settings.profile') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" wire:navigate href="{{ route('settings.password') }}">
                    <i class="bi bi-shield-lock"></i>
                    <span>Security</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" wire:navigate href="{{ route('settings.appearance') }}">
                    <i class="bi bi-palette"></i>
                    <span>Appearance</span>
                </a>
            </li>
        </ul>
    </div>

    {{-- User Footer --}}
    <div class="sidebar-user">
        <div class="dropdown">
            <button class="user-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <div class="user-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="flex-grow-1 text-start text-truncate" style="min-width:0;">
                    <div style="font-size:13px; font-weight:600; color:#E2E2F0; line-height:1.2;">{{ auth()->user()->name }}</div>
                    <div style="font-size:11px; color:#5A5A7A; line-height:1.2; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{ auth()->user()->email }}</div>
                </div>
            </button>
            <ul class="dropdown-menu w-100 shadow" style="border-radius:14px; border:1px solid rgba(108,99,255,0.15);">
                <li>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('settings.profile') }}">
                        <i class="bi bi-person-bounding-box"></i> Profile Settings
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item d-flex align-items-center gap-2 py-2 text-danger">
                            <i class="bi bi-box-arrow-right"></i> Sign Out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>






