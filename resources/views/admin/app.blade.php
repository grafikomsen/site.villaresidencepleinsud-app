<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Luxurious Villa - Your Dream Property')">
    <title>@yield('title', 'Villa haute standing residence plein sud')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('frontend/fontawesome/css/all.min.css') }}">
</head>
<body class="font-Open text-gray-900">
    <!-- Header / Navigation -->
    <header class="fixed w-full top-0 z-50 bg-white shadow-lg">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-bold text-gray-900 uppercase font-Playfair">
                    <a href="{{ route('home') }}">Villa plein sud</a>
                </span>
            </div>

            <div class="hidden md:flex space-x-8 items-center">
                <!-- Language Switcher -->
                <div class="flex space-x-2 pl-4">
                   <select onchange="window.location.href=this.value" class="border-none bg-gray-300 px-3 py-2">
                        <option value="/locale/fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>
                            FR
                        </option>
                        <option value="/locale/en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                            EN
                        </option>
                    </select>
                    <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-600 text-white px-6 py-2 hover:bg-red-700 transition font-medium">
                            {{ __('admin.logout') }}
                        </button>
                    </form>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-4">
                <div class="flex space-x-4 pt-2">
                    @if(app()->getLocale() === 'en')
                        <span class="text-primary font-bold">EN</span>
                        <a href="/locale/fr" class="text-gray-600 hover:text-primary">FR</a>
                    @else
                        <a href="/locale/en" class="text-gray-600 hover:text-primary">EN</a>
                        <span class="text-primary font-bold">FR</span>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Alert Messages -->
    @if($message = Session::get('success'))
        <div class="fixed top-20 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 alert-message">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if($errors->any())
        <div class="fixed top-20 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 alert-message max-w-sm">
            <p>{{ $errors->first() }}</p>
        </div>
    @endif

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-primary font-Playfair">{{ __('footer.about') }}</h3>
                    <p class="text-gray-400">{{ __('footer.description') }}</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-primary font-Playfair">{{ __('footer.quick_links') }}</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}#hero" class="hover:text-amber-500 transition">{{ __('nav.home') }}</a></li>
                        <li><a href="{{ route('home') }}#about" class="hover:text-amber-500 transition">{{ __('nav.about') }}</a></li>
                        <li><a href="{{ route('home') }}#gallery" class="hover:text-amber-500 transition">{{ __('nav.gallery') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-primary font-Playfair">{{ __('footer.contact') }}</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>{{ __('footer.phone') }}: +221 33 333 33 33</li>
                        <li>{{ __('footer.email') }}: contact@villa-plein-sud-saly.com</li>
                        <li>{{ __('footer.address') }}: Sénégal, Saly Portudal, Résidence plein sud</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-primary font-Playfair">{{ __('footer.follow') }}</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2s9 5 20 5a9.5 9.5 0 00-9-5.5c4.75 2.25 7-7 7-7-2.25 4.5-7 7-7 7z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3.501 12.5l-5.5 3v-6l5.5 3z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 mt-8 text-center text-gray-400">
                <p>&copy; 2026 Villa plein sud. {{ __('footer.rights') }}</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', () => {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Auto-hide alerts after 5 seconds
        document.querySelectorAll('.alert-message').forEach(alert => {
            setTimeout(() => {
                alert.style.opacity = '0';
                alert.style.transition = 'opacity 0.3s ease-out';
                setTimeout(() => alert.remove(), 300);
            }, 5000);
        });

        // Smooth scroll navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
