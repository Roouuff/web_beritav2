<div class="auth-container">
    <div class="auth-card card shadow">
        <div class="auth-header">
            <div class="auth-logo">
                <i class="bi bi-boxes"></i>
            </div>
            <h4 class="auth-title">Create account</h4>
            <p class="auth-subtitle">Start your journey for free today</p>
        </div>
        <div class="auth-body">
            <form wire:submit.prevent="register">
                <div class="mb-3">
                    <label class="form-label-custom" for="name">Full name</label>
                    <input wire:model="name" type="text" class="form-control form-control-custom" id="name" placeholder="John Doe" required autofocus>
                    @error('name') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label-custom" for="email">Email address</label>
                    <input wire:model="email" type="email" class="form-control form-control-custom" id="email" placeholder="you@example.com" required>
                    @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label-custom" for="password">Password</label>
                    <input wire:model="password" type="password" class="form-control form-control-custom" id="password" placeholder="Min. 8 characters" required>
                    @error('password') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label-custom" for="password_confirmation">Confirm password</label>
                    <input wire:model="password_confirmation" type="password" class="form-control form-control-custom" id="password_confirmation" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn-auth">
                    Create Account
                </button>
                <p class="text-center mt-4 mb-0" style="font-size:13.5px; color:#8B8BA7;">
                    Already have an account?
                    <a href="{{ route('login') }}" style="color:var(--brand-primary); text-decoration:none; font-weight:600;">Sign in</a>
                </p>
            </form>
        </div>
    </div>
</div>