<x-authentication-layout>
    <h1 class="text-3xl text-gray-800 dark:text-gray-100 font-bold mb-6">
        {{ __('Selamat Datang!') }}
    </h1>

    {{-- Status sukses misalnya setelah reset password --}}
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <!-- Form Login -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="space-y-4">
            <!-- Email -->
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember" type="checkbox" name="remember"
                    class="rounded border-gray-300 text-violet-600 shadow-sm focus:ring-violet-500">
                <label for="remember" class="ml-2 text-sm text-gray-900 dark:text-gray-300">
                    {{ __('Ingat saya') }}
                </label>
            </div>
        </div>

        <!-- Aksi Bawah -->
        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <a class="text-sm underline hover:no-underline" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif

            <x-button class="ml-3">
                {{ __('Sign in') }}
            </x-button>
        </div>
    </form>

    <!-- Error Validation -->
    <x-validation-errors class="mt-4" />

    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-gray-100 dark:border-gray-700/60">
        <div class="text-sm">
            {{ __('Belum punya akun?') }}
            <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400"
                href="{{ route('register') }}">
                {{ __('Daftar') }}
            </a>
        </div>
    </div>
</x-authentication-layout>
