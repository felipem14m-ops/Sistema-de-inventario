<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <div class="mb-10 text-center space-y-3">
        <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-700 font-heading">
            Bienvenido
        </h1>
        <p class="text-slate-600 text-base leading-relaxed">
            Ingresa tus credenciales para acceder a tu cuenta
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-700 font-semibold" />
            <x-text-input id="email" class="block mt-2.5 w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:border-agro-500 focus:ring-2 focus:ring-agro-200 transition-all shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="tu@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600 text-sm" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-slate-700 font-semibold" />

            <x-text-input id="password" class="block mt-2.5 w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:border-agro-500 focus:ring-2 focus:ring-agro-200 transition-all shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 text-sm" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between pt-2">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="w-5 h-5 rounded border-2 border-slate-300 text-agro-600 shadow-sm focus:ring-2 focus:ring-agro-500 focus:ring-offset-2 transition-all cursor-pointer" name="remember">
                <span class="ms-2.5 text-sm text-slate-600 font-medium">{{ __('Recuérdame') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-agro-600 hover:text-agro-700 transition-colors" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>

        <button type="submit" class="w-full mt-8 px-6 py-3 bg-gradient-to-r from-agro-500 to-agro-600 hover:from-agro-600 hover:to-agro-700 text-white font-semibold rounded-lg transition-all shadow-lg shadow-agro-500/30 hover:shadow-lg hover:shadow-agro-600/40 focus:outline-none focus:ring-2 focus:ring-agro-500 focus:ring-offset-2">
            {{ __('Ingresar') }}
        </button>

        <div class="text-center pt-4 border-t border-slate-200">
            <p class="text-slate-600 text-sm">
                ¿No tienes cuenta? 
                <a href="{{ route('register') }}" class="font-semibold text-agro-600 hover:text-agro-700 transition-colors">
                    Regístrate aquí
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>