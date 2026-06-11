<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión — AgroGestión</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700,800" rel="stylesheet" />

    <!-- Scripts/Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        agro: {
                            50:  '#f2fbf5',
                            100: '#e1f6e8',
                            200: '#c4ebd4',
                            300: '#96d8b6',
                            400: '#60bc90',
                            500: '#3ba376',
                            600: '#2b825d',
                            700: '#25684d',
                            800: '#20533f',
                            900: '#1b4435',
                            950: '#0e261d',
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .hero-pattern {
                background-color: #1b4435;
                background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232b825d' fill-opacity='0.2'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
            .auth-input {
                width: 100%;
                padding: 0.7rem 1rem;
                background: rgba(255,255,255,0.06);
                border: 1.5px solid rgba(96,188,144,0.3);
                border-radius: 0.625rem;
                color: #fff;
                font-size: 0.9rem;
                transition: border-color .2s, box-shadow .2s, background .2s;
                font-family: 'Inter', sans-serif;
            }
            .auth-input::placeholder { color: rgba(148,163,184,0.6); }
            .auth-input:hover  { border-color: rgba(96,188,144,0.55); background: rgba(255,255,255,0.09); }
            .auth-input:focus  { outline: none; border-color: #60bc90; box-shadow: 0 0 0 3px rgba(96,188,144,0.18); background: rgba(255,255,255,0.1); }
        }
        body { font-family: 'Inter', sans-serif; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="antialiased min-h-screen hero-pattern selection:bg-agro-500 selection:text-white">

    <!-- Blobs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-40 -right-40 w-[28rem] h-[28rem] bg-agro-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20" style="animation: blob 7s infinite;"></div>
        <div class="absolute top-1/2 -left-40 w-[28rem] h-[28rem] bg-agro-400 rounded-full mix-blend-multiply filter blur-3xl opacity-15" style="animation: blob 7s infinite 2s;"></div>
        <div class="absolute -bottom-40 right-1/3 w-80 h-80 bg-agro-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10" style="animation: blob 7s infinite 4s;"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-agro-950/80 via-agro-900/70 to-agro-950/90"></div>
    </div>

    <!-- Top nav bar -->
    <nav class="relative z-20 w-full">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 group">
                <svg class="w-7 h-7 text-agro-400 group-hover:text-agro-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
                <span class="font-heading font-bold text-xl text-white tracking-tight">Agro<span class="text-agro-400">Gestión</span></span>
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-slate-300 hover:text-white text-sm font-medium transition-colors flex items-center gap-1">
                    ¿Sin cuenta?
                    <span class="text-agro-400 hover:text-agro-300 font-semibold ml-1">Regístrate</span>
                </a>
            @endif
        </div>
    </nav>

    <!-- Main layout -->
    <div class="relative z-10 min-h-[calc(100vh-4rem)] flex items-center justify-center py-10 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-4xl flex flex-col lg:flex-row items-stretch gap-0 rounded-2xl overflow-hidden shadow-[0_25px_60px_rgba(0,0,0,0.5)] border border-white/10">

            <!-- Left panel — branding -->
            <div class="lg:w-5/12 bg-gradient-to-br from-agro-600/90 to-agro-800/90 backdrop-blur-sm p-10 flex flex-col justify-between relative overflow-hidden">
                <!-- Decorative circles -->
                <div class="absolute -top-12 -right-12 w-48 h-48 rounded-full border-[24px] border-white/10"></div>
                <div class="absolute -bottom-16 -left-16 w-64 h-64 rounded-full border-[32px] border-white/10"></div>

                <div class="relative z-10">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-agro-800/60 border border-agro-400/30 text-agro-300 text-xs font-semibold mb-8 backdrop-blur-sm">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-agro-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-agro-400"></span>
                        </span>
                        Sistema Activo
                    </div>

                    <h2 class="text-3xl md:text-4xl font-extrabold text-white font-heading leading-tight mb-4">
                        Bienvenido de <span class="text-transparent bg-clip-text bg-gradient-to-r from-agro-200 to-agro-400">nuevo</span>
                    </h2>
                    <p class="text-agro-50/80 text-base leading-relaxed mb-10">
                        Accede a tu panel de control y mantén el dominio total de tu inventario y ventas agrícolas.
                    </p>

                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-agro-700/40 rounded-xl p-4 border border-agro-500/20">
                            <p class="text-2xl font-extrabold font-heading text-agro-300 mb-1">24/7</p>
                            <p class="text-agro-100/60 text-xs font-medium uppercase tracking-wider">Disponibilidad</p>
                        </div>
                        <div class="bg-agro-700/40 rounded-xl p-4 border border-agro-500/20">
                            <p class="text-2xl font-extrabold font-heading text-agro-300 mb-1">+5k</p>
                            <p class="text-agro-100/60 text-xs font-medium uppercase tracking-wider">Productos</p>
                        </div>
                    </div>

                    <!-- Quick access features -->
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <div class="w-7 h-7 rounded-lg bg-agro-500/40 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-agro-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <span class="text-agro-100 text-sm">Dashboard en tiempo real</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-7 h-7 rounded-lg bg-agro-500/40 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-agro-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <span class="text-agro-100 text-sm">Reportes y estadísticas</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-7 h-7 rounded-lg bg-agro-500/40 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-agro-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <span class="text-agro-100 text-sm">Acceso seguro con SSL</span>
                        </li>
                    </ul>
                </div>

                <!-- Image pill at bottom -->
                <div class="relative z-10 mt-10">
                    <div class="flex items-center gap-3 bg-agro-800/50 rounded-xl p-3 border border-agro-500/20 backdrop-blur-sm">
                        <div class="w-9 h-9 rounded-lg bg-agro-500/50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-agro-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white text-sm font-semibold font-heading">Ventas del día</p>
                            <p class="text-agro-300 text-xs">Actualizado en tiempo real</p>
                        </div>
                        <span class="ml-auto text-agro-400 font-extrabold font-heading text-lg">+24%</span>
                    </div>
                </div>
            </div>

            <!-- Right panel — form -->
            <div class="lg:w-7/12 bg-agro-950/80 backdrop-blur-md p-8 md:p-12 flex flex-col justify-center">

                <div class="mb-8">
                    <h1 class="text-2xl font-extrabold text-white font-heading mb-1">Iniciar sesión</h1>
                    <p class="text-slate-400 text-sm">Ingresa tus credenciales para acceder</p>
                </div>

                <!-- Session status -->
                @if (session('status'))
                    <div class="mb-6 p-4 bg-agro-500/15 border border-agro-500/30 rounded-xl flex gap-3">
                        <svg class="w-5 h-5 text-agro-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-agro-300 text-sm">{{ session('status') }}</p>
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-500/15 border border-red-500/30 rounded-xl flex gap-3">
                        <svg class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="text-red-300 font-semibold text-sm mb-1">Credenciales incorrectas:</p>
                            <ul class="space-y-0.5">
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-400 text-sm">• {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Correo electrónico
                        </label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                            required autofocus autocomplete="username" placeholder="tu@email.com"
                            class="auth-input" />
                        <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-red-400 text-xs" />
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                Contraseña
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-agro-400 hover:text-agro-300 text-xs font-medium transition-colors">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" name="password"
                            required autocomplete="current-password" placeholder="••••••••"
                            class="auth-input" />
                        <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-red-400 text-xs" />
                    </div>

                    <!-- Remember me -->
                    <div class="flex items-center gap-2.5 pt-1">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="w-4 h-4 rounded border-white/20 bg-white/10 text-agro-500 focus:ring-agro-400 cursor-pointer flex-shrink-0" />
                        <label for="remember_me" class="text-slate-400 text-sm cursor-pointer hover:text-slate-300 transition-colors">
                            Mantener sesión iniciada
                        </label>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full inline-flex justify-center items-center gap-2 px-6 py-3.5 bg-agro-500 hover:bg-agro-400 text-white rounded-xl font-semibold text-base transition-all shadow-[0_0_20px_rgba(59,163,118,0.35)] hover:shadow-[0_0_28px_rgba(59,163,118,0.55)] hover:-translate-y-0.5 active:scale-[.98] mt-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        Ingresar al Sistema
                    </button>
                </form>

                <!-- Divider -->
                <div class="flex items-center gap-3 my-6">
                    <div class="flex-1 h-px bg-white/10"></div>
                    <span class="text-slate-500 text-xs">o</span>
                    <div class="flex-1 h-px bg-white/10"></div>
                </div>

                <!-- Register link -->
                @if (Route::has('register'))
                    <p class="text-center text-slate-400 text-sm">
                        ¿No tienes cuenta?
                        <a href="{{ route('register') }}" class="text-agro-400 hover:text-agro-300 font-semibold transition-colors ml-1">
                            Regístrate aquí →
                        </a>
                    </p>
                @endif

                <!-- Back to home -->
                <div class="mt-6 text-center">
                    <a href="/" class="inline-flex items-center gap-1 text-slate-600 hover:text-slate-400 text-xs font-medium transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes blob {
            0%, 100% { transform: translate(0,0) scale(1); }
            33%       { transform: translate(30px,-50px) scale(1.1); }
            66%       { transform: translate(-20px,20px) scale(0.9); }
        }
    </style>
</body>
</html>