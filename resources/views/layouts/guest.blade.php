<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AgroGestión') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700,800" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-50 text-slate-900 selection:bg-agro-500 selection:text-white">
        <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-6xl grid gap-8 lg:grid-cols-[1.15fr_0.85fr]">
                <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-agro-900 via-agro-800 to-agro-700 p-10 text-white shadow-2xl">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(59,163,118,0.35),_transparent_35%)]"></div>
                    <div class="absolute inset-x-0 bottom-0 h-40 bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.18),_transparent_60%)]"></div>
                    <div class="relative z-10 flex h-full flex-col justify-between gap-8">
                        <div>
                            <div class="inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/10 px-4 py-2 text-sm font-semibold tracking-[0.18em] text-white/80">
                                AGRONEGOCIO DIGITAL
                            </div>
                            <div class="mt-10 max-w-xl">
                                <p class="text-sm uppercase tracking-[0.3em] text-agro-200 font-semibold mb-4">AgroGestión</p>
                                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight font-heading tracking-tight">Gestiona tu inventario, ventas y clientes con confianza.</h1>
                                <p class="mt-6 text-base leading-8 text-slate-100/85">Una plataforma profesional creada para el sector agrícola. Controla stock, optimiza rutas de venta y lleva los números de tu negocio con claridad y velocidad.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="rounded-3xl bg-white/10 p-5 shadow-[0_30px_80px_rgba(0,0,0,0.12)] backdrop-blur-xl">
                                <p class="text-sm uppercase tracking-[0.25em] text-agro-200 font-semibold mb-3">Lo que obtienes</p>
                                <ul class="space-y-3 text-slate-100/90 text-base leading-7">
                                    <li class="flex gap-3"><span class="mt-1 inline-flex h-9 w-9 items-center justify-center rounded-2xl bg-agro-500 text-white">✓</span>Control completo del stock en tiempo real.</li>
                                    <li class="flex gap-3"><span class="mt-1 inline-flex h-9 w-9 items-center justify-center rounded-2xl bg-agro-500 text-white">✓</span>Reportes claros para decisiones rápidas.</li>
                                    <li class="flex gap-3"><span class="mt-1 inline-flex h-9 w-9 items-center justify-center rounded-2xl bg-agro-500 text-white">✓</span>Interfaz limpia, segura y fácil para tu equipo.</li>
                                </ul>
                            </div>
                            <div class="rounded-3xl bg-white/5 border border-white/10 p-6 text-slate-200">
                                <p class="text-sm uppercase tracking-[0.25em] text-agro-200 font-semibold mb-3">Enfocado en</p>
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <span class="rounded-2xl bg-white/10 px-4 py-3 text-sm">Ventas</span>
                                    <span class="rounded-2xl bg-white/10 px-4 py-3 text-sm">Inventario</span>
                                    <span class="rounded-2xl bg-white/10 px-4 py-3 text-sm">Clientes</span>
                                    <span class="rounded-2xl bg-white/10 px-4 py-3 text-sm">Reportes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200/80 bg-white p-8 shadow-[0_35px_80px_rgba(15,23,42,0.12)] sm:p-10">
                    <div class="mb-6">
                        <div class="inline-flex items-center gap-2 rounded-full bg-agro-50 px-4 py-2 text-sm font-semibold text-agro-800">AgroGestión</div>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
