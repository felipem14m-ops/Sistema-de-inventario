<x-guest-layout>
    <div class="mb-10 text-center space-y-3">
        <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-slate-900 to-slate-700 font-heading">
            Crear Cuenta
        </h1>
        <p class="text-slate-600 text-base leading-relaxed">
            Únete a AgroGestión y empieza a gestionar tu inventario
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-slate-700 font-semibold" />
            <x-text-input id="name" class="block mt-2.5 w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:border-agro-500 focus:ring-2 focus:ring-agro-200 transition-all shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Tu nombre completo" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600 text-sm" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-700 font-semibold" />
            <x-text-input id="email" class="block mt-2.5 w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:border-agro-500 focus:ring-2 focus:ring-agro-200 transition-all shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="tu@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600 text-sm" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-slate-700 font-semibold" />

            <x-text-input id="password" class="block mt-2.5 w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:border-agro-500 focus:ring-2 focus:ring-agro-200 transition-all shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 text-sm" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-slate-700 font-semibold" />

            <x-text-input id="password_confirmation" class="block mt-2.5 w-full px-4 py-3 border-2 border-slate-200 rounded-lg focus:border-agro-500 focus:ring-2 focus:ring-agro-200 transition-all shadow-sm"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" 
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600 text-sm" />
        </div>

        <button type="submit" class="w-full mt-8 px-6 py-3 bg-gradient-to-r from-agro-500 to-agro-600 hover:from-agro-600 hover:to-agro-700 text-white font-semibold rounded-lg transition-all shadow-lg shadow-agro-500/30 hover:shadow-lg hover:shadow-agro-600/40 focus:outline-none focus:ring-2 focus:ring-agro-500 focus:ring-offset-2">
            {{ __('Crear Cuenta') }}
        </button>

        <div class="text-center pt-4 border-t border-slate-200">
            <p class="text-slate-600 text-sm">
                ¿Ya tienes cuenta? 
                <a href="{{ route('login') }}" class="font-semibold text-agro-600 hover:text-agro-700 transition-colors">
                    Inicia sesión aquí
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>