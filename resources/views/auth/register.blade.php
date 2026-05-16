@extends('layouts.public')

@section('content')

<div class="min-h-screen bg-gray-950 flex items-center justify-center px-4 py-16">

    <div class="w-full max-w-6xl grid lg:grid-cols-2 gap-12 items-center">

        {{-- =========================================
        LEFT SIDE — BRANDING
        ========================================== --}}
        <div class="hidden lg:block">

            <img
                src="{{ asset('images/logo.png') }}"
                class="h-14 mb-8"
                alt="Next Level Africa Academy"
            >

            <h1 class="text-5xl font-extrabold text-white leading-tight mb-6">
                Join The
                <span class="text-cyan-400">
                    Next Level Africa Academy
                </span>
            </h1>

            <p class="text-gray-300 text-lg leading-relaxed mb-8">
                Learn modern wealth creation systems including:
                crypto, e-commerce, investing, digital income systems,
                freelancing, copywriting, and online business.
            </p>

            <div class="space-y-4 mb-10">

                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-cyan-400 flex items-center justify-center text-black font-bold text-sm">
                        ✓
                    </div>
                    <p class="text-gray-300">
                        Beginner-friendly step-by-step training
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-cyan-400 flex items-center justify-center text-black font-bold text-sm">
                        ✓
                    </div>
                    <p class="text-gray-300">
                        Access exclusive members-only resources
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <div class="w-6 h-6 rounded-full bg-cyan-400 flex items-center justify-center text-black font-bold text-sm">
                        ✓
                    </div>
                    <p class="text-gray-300">
                        Learn real-world online income systems
                    </p>
                </div>

            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">

                <p class="text-gray-400 text-sm uppercase tracking-widest mb-3">
                    Member Benefits
                </p>

                <div class="grid grid-cols-2 gap-4 text-sm">

                    <div class="bg-gray-950 rounded-xl p-4 border border-gray-800">
                        <p class="text-cyan-400 font-bold text-lg">100+</p>
                        <p class="text-gray-400">Learning Modules</p>
                    </div>

                    <div class="bg-gray-950 rounded-xl p-4 border border-gray-800">
                        <p class="text-cyan-400 font-bold text-lg">24/7</p>
                        <p class="text-gray-400">Community Access</p>
                    </div>

                </div>

            </div>

        </div>

        {{-- =========================================
        RIGHT SIDE — REGISTER CARD
        ========================================== --}}
        <div class="w-full">

            <div class="bg-gray-900 border border-gray-800 rounded-3xl shadow-2xl overflow-hidden">

                {{-- HEADER --}}
                <div class="p-8 sm:p-10 border-b border-gray-800">

                    <div class="flex justify-center lg:hidden mb-6">
                        <img
                            src="{{ asset('images/logo.png') }}"
                            class="h-12"
                            alt="Next Level Africa Academy"
                        >
                    </div>

                    <h2 class="text-3xl font-extrabold text-white text-center mb-2">
                        Create Your Account
                    </h2>

                    <p class="text-gray-400 text-center">
                        Start your journey toward digital income and financial growth.
                    </p>

                </div>

                {{-- FORM --}}
                <div class="p-8 sm:p-10">

                    <form
                        method="POST"
                        action="{{ route('register') }}"
                        enctype="multipart/form-data"
                        class="space-y-6"
                    >
                        @csrf

                        {{-- KEEP NEXT PARAMETER --}}
                        <input
                            type="hidden"
                            name="next"
                            value="{{ request('next') }}"
                        >

                        {{-- NAME --}}
                        <div>

                            <label
                                for="name"
                                class="block text-sm font-semibold text-gray-300 mb-2"
                            >
                                Full Name
                            </label>

                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Enter your full name"
                                class="w-full bg-gray-950 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 rounded-xl px-4 py-4 text-white placeholder-gray-500 outline-none transition"
                            >

                            @error('name')
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

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

                        {{-- REFERRAL CODE --}}
                        <div>

                            <label
                                for="referral_code"
                                class="block text-sm font-semibold text-gray-300 mb-2"
                            >
                                Referral Code
                                <span class="text-gray-500 text-xs">(Optional)</span>
                            </label>

                            <input
                                id="referral_code"
                                type="text"
                                name="referral_code"
                                value="{{ old('referral_code', $referralCode ?? session('referral_code')) }}"
                                placeholder="e.g. ML-X7P9QK"
                                autocomplete="off"
                                class="w-full bg-gray-950 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 rounded-xl px-4 py-4 text-white placeholder-gray-500 outline-none transition"
                            >

                            @error('referral_code')
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        {{-- PROFILE PHOTO --}}
                        <div>

                            <label
                                for="profile_photo"
                                class="block text-sm font-semibold text-gray-300 mb-2"
                            >
                                Profile Photo
                                <span class="text-gray-500 text-xs">(Optional)</span>
                            </label>

                            <input
                                id="profile_photo"
                                type="file"
                                name="profile_photo"
                                accept="image/*"
                                class="w-full bg-gray-950 border border-gray-700 rounded-xl px-4 py-3 text-gray-300 file:bg-cyan-400 file:text-black file:border-0 file:px-4 file:py-2 file:rounded-lg file:font-semibold hover:file:bg-cyan-500"
                            >

                            @error('profile_photo')
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        {{-- PASSWORD --}}
                        <div>

                            <label
                                for="password"
                                class="block text-sm font-semibold text-gray-300 mb-2"
                            >
                                Password
                            </label>

                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Create a password"
                                class="w-full bg-gray-950 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 rounded-xl px-4 py-4 text-white placeholder-gray-500 outline-none transition"
                            >

                            @error('password')
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        {{-- CONFIRM PASSWORD --}}
                        <div>

                            <label
                                for="password_confirmation"
                                class="block text-sm font-semibold text-gray-300 mb-2"
                            >
                                Confirm Password
                            </label>

                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Confirm your password"
                                class="w-full bg-gray-950 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 rounded-xl px-4 py-4 text-white placeholder-gray-500 outline-none transition"
                            >

                            @error('password_confirmation')
                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                        {{-- REGISTER BUTTON --}}
                        <button
                            type="submit"
                            class="w-full bg-cyan-400 hover:bg-cyan-500 text-black font-extrabold py-4 rounded-xl transition duration-200 text-lg shadow-lg"
                        >
                            CREATE ACCOUNT
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

                    {{-- LOGIN CTA --}}
                    <a
                        href="{{ route('login') }}"
                        class="block w-full text-center bg-gray-800 hover:bg-gray-700 text-white font-bold py-4 rounded-xl transition"
                    >
                        Already Registered? Login Here
                    </a>

                    {{-- FOOTNOTE --}}
                    <p class="text-center text-gray-500 text-sm mt-8 leading-relaxed">
                        By creating an account, you agree to participate responsibly
                        in educational and business training programs.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection