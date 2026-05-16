@extends('layouts.public')

@section('content')

<div class="min-h-screen bg-gray-950 flex items-center justify-center px-4 py-16">

    <div class="w-full max-w-6xl grid lg:grid-cols-2 gap-12 items-center">

        {{-- =========================================
        LEFT SIDE — BRANDING / SALES MESSAGE
        ========================================== --}}
        <div class="hidden lg:block">

            <img
                src="{{ asset('images/logo.png') }}"
                class="h-14 mb-8"
                alt="Next Level Africa Academy"
            >

            <h1 class="text-5xl font-extrabold text-white leading-tight mb-6">
                The Modern Economy
                <span class="text-cyan-400">Rewards Skill.</span>
            </h1>

            <p class="text-gray-300 text-lg leading-relaxed mb-6">
                Access elite-level training on:
                cryptocurrency, e-commerce, copywriting, investing,
                online income systems, and digital wealth creation.
            </p>

            <div class="space-y-4 mb-10">

                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-cyan-400 flex items-center justify-center text-black font-bold text-sm">
                        ✓
                    </div>
                    <p class="text-gray-300">
                        Step-by-step systems designed for beginners
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-cyan-400 flex items-center justify-center text-black font-bold text-sm">
                        ✓
                    </div>
                    <p class="text-gray-300">
                        Learn high-income digital skills
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-cyan-400 flex items-center justify-center text-black font-bold text-sm">
                        ✓
                    </div>
                    <p class="text-gray-300">
                        Join a fast-growing community of ambitious builders
                    </p>
                </div>

            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">

                <p class="text-gray-400 text-sm uppercase tracking-widest mb-3">
                    Member Access
                </p>

                <div class="flex items-center gap-4">

                    <div class="w-14 h-14 rounded-full bg-cyan-400/20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-7 h-7 text-cyan-400"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M5.121 17.804A11.953 11.953 0 0112 15c2.5 0 4.847.765 6.879 2.07M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>

                    <div>
                        <h3 class="text-white font-bold text-lg">
                            Existing Members Login
                        </h3>

                        <p class="text-gray-400 text-sm">
                            Continue your learning journey
                        </p>
                    </div>

                </div>

            </div>

        </div>

        {{-- =========================================
        RIGHT SIDE — LOGIN CARD
        ========================================== --}}
        <div class="w-full">

            <div class="bg-gray-900 border border-gray-800 rounded-3xl shadow-2xl overflow-hidden">

                {{-- TOP SECTION --}}
                <div class="p-8 sm:p-10 border-b border-gray-800">

                    <div class="flex justify-center lg:hidden mb-6">
                        <img
                            src="{{ asset('images/logo.png') }}"
                            class="h-12"
                            alt="Next Level Africa Academy"
                        >
                    </div>

                    <h2 class="text-3xl font-extrabold text-white text-center mb-2">
                        Welcome Back
                    </h2>

                    <p class="text-gray-400 text-center">
                        Login to continue learning and building wealth.
                    </p>

                </div>

                {{-- FORM --}}
                <div class="p-8 sm:p-10">

                    {{-- SESSION STATUS --}}
                    <x-auth-session-status
                        class="mb-6 text-green-400"
                        :status="session('status')"
                    />

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        {{-- EMAIL --}}
                        <div>
                            <label
                                for="email"
                                class="block text-sm font-semibold text-gray-300 mb-2"
                            >
                                Email Address
                            </label>

                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Enter your email"
                                class="w-full bg-gray-950 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 rounded-xl px-4 py-4 text-white placeholder-gray-500 outline-none transition"
                            >

                            @error('email')
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- PASSWORD --}}
                        <div>
                            <div class="flex items-center justify-between mb-2">

                                <label
                                    for="password"
                                    class="block text-sm font-semibold text-gray-300"
                                >
                                    Password
                                </label>

                                @if (Route::has('password.request'))
                                    <a
                                        href="{{ route('password.request') }}"
                                        class="text-sm text-cyan-400 hover:text-cyan-300 transition"
                                    >
                                        Forgot Password?
                                    </a>
                                @endif

                            </div>

                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Enter your password"
                                class="w-full bg-gray-950 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 rounded-xl px-4 py-4 text-white placeholder-gray-500 outline-none transition"
                            >

                            @error('password')
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- REMEMBER --}}
                        <div class="flex items-center justify-between">

                            <label class="flex items-center gap-3 cursor-pointer">

                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    name="remember"
                                    class="rounded border-gray-700 bg-gray-900 text-cyan-400 focus:ring-cyan-400"
                                >

                                <span class="text-sm text-gray-400">
                                    Remember me
                                </span>

                            </label>

                        </div>

                        {{-- LOGIN BUTTON --}}
                        <button
                            type="submit"
                            class="w-full bg-cyan-400 hover:bg-cyan-500 text-black font-extrabold py-4 rounded-xl transition duration-200 text-lg shadow-lg"
                        >
                            LOG IN
                        </button>

                    </form>

                    {{-- DIVIDER --}}
                    <div class="relative my-8">

                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-800"></div>
                        </div>

                        <div class="relative flex justify-center">
                            <span class="bg-gray-900 px-4 text-sm text-gray-500">
                                OR
                            </span>
                        </div>

                    </div>

                    {{-- JOIN CTA --}}
                    <a
                        href="{{ route('register') }}"
                        class="block w-full text-center bg-gray-800 hover:bg-gray-700 text-white font-bold py-4 rounded-xl transition"
                    >
                        I Don’t Have an Account
                    </a>

                    {{-- FOOTNOTE --}}
                    <p class="text-center text-gray-500 text-sm mt-8 leading-relaxed">
                        By continuing, you agree to participate responsibly
                        in educational and business training programs.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection