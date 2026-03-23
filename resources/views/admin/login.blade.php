@extends('layouts.app')

@section('title', __('admin.login_title'))

@section('content')
<!-- Login Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-black pt-20">
    <!-- Background Animation -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-72 h-72 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-72 h-72 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <div class="relative z-10 w-full max-w-md px-4">
        <div class="bg-white shadow-2xl p-4 md:p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center space-x-2 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-ptimary/85 flex items-center justify-center">
                        <span class="text-white font-bold font-Playfair text-xl">V</span>
                    </div>
                    <span class="text-2xl font-bold uppercase font-Playfair text-secondary">Villa Plein Sud</span>
                </div>
            </div>

            <!-- Login Form -->
            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-bold text-gray-900 mb-2">{{ __('admin.email') }}</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 border-2 border-gray-300 focus:border-primary focus:outline-none transition @error('email') border-red-500 @enderror"
                        placeholder="admin@villa.test"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-bold text-gray-900 mb-2">{{ __('admin.password') }}</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3 border-2 border-gray-300 focus:border-primary focus:outline-none transition"
                        placeholder="••••••••">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="rounded">
                    <label for="remember" class="ml-2 text-sm text-gray-600">{{ __('admin.remember_me') }}</label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-primary hover:to-primary/70 text-white font-bold py-4 transition transform hover:scale-105 flex items-center justify-center">
                    {{ __('admin.login_button') }}
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
            </form>

            <!-- Back Link -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-primary hover:text-primary/70 font-medium">← {{ __('admin.back_to_home') }}</a>
            </div>
        </div>
    </div>
</section>
@endsection
