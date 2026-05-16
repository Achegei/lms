<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Next Level Africa Academy')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<style>

/* =====================================================
   GLOBAL
===================================================== */

html {
    scroll-behavior: smooth;
}

body {
    background: #030712;
}

/* =====================================================
   ANIMATIONS
===================================================== */

@keyframes slideIn {
    0% {
        opacity: 0;
        transform: translateY(12px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-slide-in {
    animation: slideIn 0.35s ease-out;
}

/* =====================================================
   SOCIAL PROOF
===================================================== */

.social-proof-container {
    position: fixed;
    bottom: 16px;
    left: 16px;
    z-index: 99999;
    pointer-events: none;
}

.social-toast {
    background: linear-gradient(135deg, #22c55e, #16a34a);
    color: white;
    border-radius: 14px;
    padding: 12px 14px;
    max-width: 320px;
    font-size: 13px;
    line-height: 1.35;

    box-shadow:
        0 10px 25px rgba(34,197,94,0.3),
        0 0 18px rgba(34,197,94,0.25);
}

@media (max-width: 640px) {

    .social-proof-container {
        left: 50%;
        transform: translateX(-50%);
        bottom: 12px;
    }

    .social-toast {
        max-width: calc(100vw - 24px);
    }

}

</style>

<body class="font-sans antialiased bg-gray-950 text-white">

<div class="min-h-screen flex flex-col">

    <!-- SOCIAL PROOF -->
    <div id="social-proof-container" class="social-proof-container"></div>

    <!-- =====================================================
         HEADER
    ====================================================== -->

    <header class="sticky top-0 z-50 bg-black/80 backdrop-blur-xl border-b border-gray-800">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <nav class="flex items-center justify-between min-h-[84px]">

                <!-- LOGO -->
                <a href="{{ route('home') }}"
                   class="flex items-center shrink-0">

                    <img
                        src="{{ asset('images/synflowlogo2.jpeg') }}"
                        alt="Next Level Africa Academy"
                        class="h-12 w-auto object-contain"
                    >
                </a>

                <!-- DESKTOP NAV -->
                <div class="hidden lg:flex items-center gap-7 text-sm font-medium">

                    <a href="{{ route('home') }}"
                       class="text-gray-300 hover:text-cyan-400 transition">
                        Home
                    </a>

                    <a href="{{ route('crypto') }}"
                       class="text-gray-300 hover:text-cyan-400 transition">
                        Crypto
                    </a>

                    <a href="{{ route('copywriting') }}"
                       class="text-gray-300 hover:text-cyan-400 transition">
                        Copywriting
                    </a>

                    <a href="{{ route('ecommerce') }}"
                       class="text-gray-300 hover:text-cyan-400 transition">
                        E-Commerce
                    </a>

                    <a href="{{ route('saccos.page') }}"
                       class="text-gray-300 hover:text-cyan-400 transition">
                        SACCOs
                    </a>

                    <a href="{{ route('investments') }}"
                       class="text-gray-300 hover:text-cyan-400 transition">
                        Investments
                    </a>

                    <a href="{{ route('marketing') }}"
                       class="text-gray-300 hover:text-cyan-400 transition">
                        Marketing
                    </a>

                </div>

                <!-- RIGHT ACTIONS -->
                <div class="hidden lg:flex items-center gap-3 shrink-0">

                    <!-- WhatsApp -->
                    <a href="https://wa.me/254119066667"
                       target="_blank"
                       class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-green-500 text-green-400 hover:bg-green-500/10 transition text-sm font-semibold">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512"
                             class="w-4 h-4 fill-current">

                            <path d="M256.064 0C114.844 0 0 114.836 0 256.064c0 45.16 11.656 89.3 33.792 128.248L0 512l132.78-34.732c37.42 20.46 79.62 31.248 123.284 31.248h.004C397.288 508.516 512 393.772 512 256.064 512 114.836 397.284 0 256.064 0z"/>
                        </svg>

                        WhatsApp
                    </a>

                    <!-- CTA -->
                    <a href="{{ route('pricing') }}"
                       class="bg-cyan-400 hover:bg-cyan-300 text-black px-5 py-2 rounded-xl font-semibold transition text-sm shadow-lg shadow-cyan-500/20">

                        Join Now
                    </a>

                </div>

                <!-- MOBILE MENU BUTTON -->
                <div class="lg:hidden" x-data="{ open: false }">

                    <button
                        @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-xl border border-gray-700 text-gray-300 hover:text-white hover:border-cyan-400 transition"
                    >

                        <svg
                            x-show="!open"
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg
                            x-show="open"
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>

                    <!-- MOBILE DROPDOWN -->
                    <div
                        x-show="open"
                        x-transition
                        @click.away="open = false"
                        class="absolute left-0 top-full w-full bg-black/95 backdrop-blur-xl border-b border-gray-800 shadow-2xl animate-slide-in"
                    >

                        <div class="px-6 py-6 flex flex-col space-y-5">

                            <a href="{{ route('home') }}"
                               class="text-gray-300 hover:text-cyan-400 transition">
                                Home
                            </a>

                            <a href="{{ route('crypto') }}"
                               class="text-gray-300 hover:text-cyan-400 transition">
                                Crypto
                            </a>

                            <a href="{{ route('copywriting') }}"
                               class="text-gray-300 hover:text-cyan-400 transition">
                                Copywriting
                            </a>

                            <a href="{{ route('ecommerce') }}"
                               class="text-gray-300 hover:text-cyan-400 transition">
                                E-Commerce
                            </a>

                            <a href="{{ route('saccos.page') }}"
                               class="text-gray-300 hover:text-cyan-400 transition">
                                SACCOs
                            </a>

                            <a href="{{ route('investments') }}"
                               class="text-gray-300 hover:text-cyan-400 transition">
                                Investments
                            </a>

                            <a href="{{ route('marketing') }}"
                               class="text-gray-300 hover:text-cyan-400 transition">
                                Marketing
                            </a>

                            <a href="{{ route('contact') }}"
                               class="text-gray-300 hover:text-cyan-400 transition">
                                Contact
                            </a>

                            <!-- MOBILE ACTIONS -->
                            <div class="pt-4 border-t border-gray-800 flex flex-col gap-3">

                                <a href="https://wa.me/254119066667"
                                   target="_blank"
                                   class="w-full text-center border border-green-500 text-green-400 px-4 py-3 rounded-xl font-semibold hover:bg-green-500/10 transition">

                                    WhatsApp
                                </a>

                                <a href="{{ route('ecommerce') }}"
                                   class="w-full text-center bg-cyan-400 hover:bg-cyan-300 text-black px-4 py-3 rounded-xl font-bold transition">

                                    Join Now
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </nav>

        </div>

    </header>

    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="flex-grow">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

            @yield('content')

        </div>

    </main>

    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer class="bg-black border-t border-gray-800 mt-20">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                <!-- BRAND -->
                <div>

                    <h3 class="text-xl font-bold text-white mb-4">
                        Next Level Africa Academy
                    </h3>

                    <p class="text-gray-400 leading-relaxed text-sm">
                        Money-making skills, real systems, and real execution
                        for ambitious Africans building financial freedom.
                    </p>

                </div>

                <!-- QUICK LINKS -->
                <div>

                    <h4 class="text-white font-semibold mb-4">
                        Quick Links
                    </h4>

                    <ul class="space-y-3 text-sm">

                        <li>
                            <a href="{{ route('home') }}"
                               class="text-gray-400 hover:text-cyan-400 transition">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('ecommerce') }}"
                               class="text-gray-400 hover:text-cyan-400 transition">
                                E-commerce
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}"
                               class="text-gray-400 hover:text-cyan-400 transition">
                                Contact
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('faqs') }}"
                               class="text-gray-400 hover:text-cyan-400 transition">
                                FAQs
                            </a>
                        </li>

                    </ul>

                </div>

                <!-- PROGRAMS -->
                <div>

                    <h4 class="text-white font-semibold mb-4">
                        Programs
                    </h4>

                    <ul class="space-y-3 text-sm">

                        <li class="text-gray-400">Crypto</li>
                        <li class="text-gray-400">Copywriting</li>
                        <li class="text-gray-400">E-Commerce</li>
                        <li class="text-gray-400">SACCO Wealth</li>
                        <li class="text-gray-400">Investments</li>

                    </ul>

                </div>

                <!-- CONTACT -->
                <div>

                    <h4 class="text-white font-semibold mb-4">
                        Contact
                    </h4>

                    <div class="space-y-3 text-sm text-gray-400">

                        <p>
                            Nairobi, Kenya
                        </p>

                        <p>
                            Vision Plaza, Mombasa Road
                        </p>

                        <a href="https://wa.me/254119066667"
                           target="_blank"
                           class="inline-flex items-center text-green-400 hover:text-green-300 transition">

                            WhatsApp Support
                        </a>

                    </div>

                </div>

            </div>

            <!-- COPYRIGHT -->
            <div class="border-t border-gray-800 mt-12 pt-6 text-center">

                <p class="text-sm text-gray-500">
                    © {{ date('Y') }} Next Level Africa Academy. All Rights Reserved.
                </p>

            </div>

        </div>

    </footer>

</div>

</body>
</html>