<div class="auth-container">
    <div class="auth-card card shadow">
        <div class="auth-header">
            <div class="auth-logo">
                <i class="bi bi-boxes"></i>
            </div>
            <h4 class="auth-title">Welcome back</h4>
            <p class="auth-subtitle">Sign in to your account to continue</p>
        </div>
        <div class="auth-body">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label-custom" for="email">Email address</label>
                    <input wire:model="email" type="email" class="form-control form-control-custom" id="email" placeholder="you@example.com" required autofocus>
                    @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <label class="form-label-custom mb-0" for="password">Password</label>
                        <a href="{{ route('password.request') }}" style="font-size:12.5px; color:var(--brand-primary); text-decoration:none;">Forgot password?</a>
                    </div>
                    <input wire:model="password" type="password" class="form-control form-control-custom" id="password" placeholder="••••••••" required>
                    @error('password') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="mb-4 d-flex align-items-center gap-2">
                    <input wire:model="remember" type="checkbox" class="form-check-input m-0" id="remember" style="border-radius:6px; width:16px; height:16px;">
                    <label class="mb-0" for="remember" style="font-size:13.5px; cursor:pointer;">Remember me for 30 days</label>
                </div>
                <button type="submit" class="btn-auth">
                    Sign In
                </button>
                <p class="text-center mt-4 mb-0" style="font-size:13.5px; color:#8B8BA7;">
                    Don't have an account?
                    <a href="{{ route('register') }}" style="color:var(--brand-primary); text-decoration:none; font-weight:600;">Create one</a>
                </p>
            </form>
        </div>
    </div>
</div>