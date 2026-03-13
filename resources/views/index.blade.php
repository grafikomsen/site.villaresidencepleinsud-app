@extends('layouts.app')

@section('title', __('pages.home_title'))
@section('description', __('pages.home_description'))

@section('content')
<!-- Hero Section -->
<section id="hero" class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black relative flex items-center justify-center overflow-hidden pt-20">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center opacity-40" style="background-image: url('https://images.unsplash.com/photo-1613395877344-13d4a8e0d49e?w=1200&h=800&fit=crop'); background-position: center;"></div>

    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-72 h-72 bg-amber-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute top-40 right-20 w-72 h-72 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center text-white max-w-4xl px-4">
        <h1 class="text-6xl md:text-7xl font-bold mb-6 leading-tight animate-fade-in">
            {{ __('hero.title') }}
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8 leading-relaxed animate-fade-in" style="animation-delay: 0.2s;">
            {{ __('hero.subtitle') }}
        </p>
        <div class="flex flex-col md:flex-row gap-4 justify-center animate-fade-in" style="animation-delay: 0.4s;">
            <a href="#reservation" class="px-8 py-4 bg-amber-600 hover:bg-amber-700 rounded-lg font-bold text-lg transition transform hover:scale-105 inline-flex items-center justify-center">
                {{ __('hero.book_visit') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
            <a href="#gallery" class="px-8 py-4 bg-transparent border-2 border-white hover:bg-white hover:text-black rounded-lg font-bold text-lg transition inline-flex items-center justify-center">
                {{ __('hero.view_gallery') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
        <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- About Villa Section -->
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ __('about.title') }}</h2>
            <p class="text-xl text-gray-600">{{ __('about.subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <!-- Left: Image -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-amber-600 to-yellow-600 rounded-xl blur-lg opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                <img class="relative w-full h-96 object-cover rounded-xl shadow-2xl" src="https://images.unsplash.com/photo-1616694342806-431e36752fa3?w=600&h=400&fit=crop" alt="Villa Exterior">
            </div>

            <!-- Right: Details -->
            <div class="space-y-6">
                <p class="text-lg text-gray-700 leading-relaxed">{{ __('about.description') }}</p>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-6 rounded-lg border-2 border-amber-100 hover:border-amber-500 transition">
                        <div class="text-3xl font-bold text-amber-600 mb-2">{{ __('about.size') }}</div>
                        <p class="text-gray-600">{{ __('about.size_label') }}</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg border-2 border-amber-100 hover:border-amber-500 transition">
                        <div class="text-3xl font-bold text-amber-600 mb-2">{{ __('about.bedrooms') }}</div>
                        <p class="text-gray-600">{{ __('about.bedroom_label') }}</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg border-2 border-amber-100 hover:border-amber-500 transition">
                        <div class="text-3xl font-bold text-amber-600 mb-2">{{ __('about.bathrooms') }}</div>
                        <p class="text-gray-600">{{ __('about.bathroom_label') }}</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg border-2 border-amber-100 hover:border-amber-500 transition">
                        <div class="text-3xl font-bold text-amber-600 mb-2">{{ __('about.price') }}</div>
                        <p class="text-gray-600">{{ __('about.price_label') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gradient-to-br from-amber-50 to-yellow-50 rounded-xl hover:shadow-lg transition">
                <div class="text-5xl mb-4">🏛️</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('about.feature_1') }}</h3>
                <p class="text-gray-700">{{ __('about.feature_1_desc') }}</p>
            </div>
            <div class="text-center p-8 bg-gradient-to-br from-amber-50 to-yellow-50 rounded-xl hover:shadow-lg transition">
                <div class="text-5xl mb-4">✨</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('about.feature_2') }}</h3>
                <p class="text-gray-700">{{ __('about.feature_2_desc') }}</p>
            </div>
            <div class="text-center p-8 bg-gradient-to-br from-amber-50 to-yellow-50 rounded-xl hover:shadow-lg transition">
                <div class="text-5xl mb-4">🌟</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('about.feature_3') }}</h3>
                <p class="text-gray-700">{{ __('about.feature_3_desc') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ __('gallery.title') }}</h2>
            <p class="text-xl text-gray-600">{{ __('gallery.subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Gallery Items -->
            @php
                $images = [
                    ['url' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=600&h=400&fit=crop', 'title' => 'Living Room'],
                    ['url' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=400&fit=crop', 'title' => 'Master Bedroom'],
                    ['url' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&h=400&fit=crop', 'title' => 'Kitchen'],
                    ['url' => 'https://images.unsplash.com/photo-1576573938621-95104bbcbf2e?w=600&h=400&fit=crop', 'title' => 'Pool Area'],
                    ['url' => 'https://images.unsplash.com/photo-1579365080667-cd47ea1c37f3?w=600&h=400&fit=crop', 'title' => 'Garden View'],
                    ['url' => 'https://images.unsplash.com/photo-1600585150207-d5e6ba04ab3d?w=600&h=400&fit=crop', 'title' => 'Terrace'],
                ];
            @endphp

            @foreach($images as $image)
            <div class="relative group cursor-pointer overflow-hidden rounded-xl shadow-lg gallery-item">
                <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}" class="w-full h-72 object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-2xl font-bold">{{ $image['title'] }}</h3>
                        <p class="text-sm mt-2">{{ __('gallery.click') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Image Lightbox Modal -->
        <div id="lightbox" class="hidden fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4">
            <button id="close-lightbox" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300">&times;</button>
            <img id="lightbox-image" src="" alt="" class="max-w-4xl max-h-96 object-contain">
        </div>
    </div>
</section>

<!-- Amenities Section -->
<section id="amenities" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ __('amenities.title') }}</h2>
            <p class="text-xl text-gray-600">{{ __('amenities.subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $amenities = [
                    ['icon' => '🏊', 'name' => __('amenities.pool'), 'desc' => __('amenities.pool_desc')],
                    ['icon' => '🌳', 'name' => __('amenities.garden'), 'desc' => __('amenities.garden_desc')],
                    ['icon' => '🚗', 'name' => __('amenities.parking'), 'desc' => __('amenities.parking_desc')],
                    ['icon' => '🔒', 'name' => __('amenities.security'), 'desc' => __('amenities.security_desc')],
                    ['icon' => '📡', 'name' => __('amenities.internet'), 'desc' => __('amenities.internet_desc')],
                    ['icon' => '🌡️', 'name' => __('amenities.climate'), 'desc' => __('amenities.climate_desc')],
                ];
            @endphp

            @foreach($amenities as $amenity)
            <div class="group p-8 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl hover:from-amber-50 hover:to-yellow-50 border border-gray-200 hover:border-amber-500 transition cursor-pointer">
                <div class="text-6xl mb-4 group-hover:scale-110 transition">{{ $amenity['icon'] }}</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $amenity['name'] }}</h3>
                <p class="text-gray-700">{{ $amenity['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Location Section -->
<section id="location" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ __('location.title') }}</h2>
            <p class="text-xl text-gray-600">{{ __('location.subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Map -->
            <div class="w-full h-96 rounded-xl overflow-hidden shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.0340156485937!2d7.2679541!3d43.5527466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdc9dbecbf59b3%3A0x1000000000000000!2sCote%20d'Azur!5e0!3m2!1sen!2sfr!4v1234567890" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Info -->
            <div class="space-y-8">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-amber-500 text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">{{ __('location.address_title') }}</h3>
                        <p class="mt-2 text-gray-700">{{ __('location.address') }}</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-amber-500 text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 00.948-.684l1.498-4.493a1 1 0 011.502-.684l1.498 4.493a1 1 0 00.948.684H19a2 2 0 012 2v1M3 5v14a2 2 0 002 2h14a2 2 0 002-2V5m-5 5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">{{ __('location.distance_title') }}</h3>
                        <p class="mt-2 text-gray-700">{{ __('location.distance') }}</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-amber-500 text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">{{ __('location.access_title') }}</h3>
                        <p class="mt-2 text-gray-700">{{ __('location.access') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reservation Section -->
<section id="reservation" class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ __('reservation.title') }}</h2>
            <p class="text-xl text-gray-600">{{ __('reservation.subtitle') }}</p>
        </div>

        <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-8 md:p-12 rounded-2xl shadow-lg border border-gray-200">
            <form action="{{ route('reservation.store') }}" method="POST" class="space-y-6" x-data="reservationForm()">
                @csrf

                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-bold text-gray-900 mb-2">{{ __('reservation.name') }} *</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-amber-500 focus:outline-none transition @error('name') border-red-500 @enderror"
                        placeholder="{{ __('reservation.name_placeholder') }}"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-bold text-gray-900 mb-2">{{ __('reservation.email') }} *</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-amber-500 focus:outline-none transition @error('email') border-red-500 @enderror"
                        placeholder="{{ __('reservation.email_placeholder') }}"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone Field -->
                <div>
                    <label for="phone" class="block text-sm font-bold text-gray-900 mb-2">{{ __('reservation.phone') }} *</label>
                    <input type="tel" id="phone" name="phone" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-amber-500 focus:outline-none transition @error('phone') border-red-500 @enderror"
                        placeholder="{{ __('reservation.phone_placeholder') }}"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Visit Date Field -->
                <div>
                    <label for="visit_date" class="block text-sm font-bold text-gray-900 mb-2">{{ __('reservation.visit_date') }} *</label>
                    <input type="datetime-local" id="visit_date" name="visit_date" required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-amber-500 focus:outline-none transition @error('visit_date') border-red-500 @enderror"
                        value="{{ old('visit_date') }}">
                    @error('visit_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-bold text-gray-900 mb-2">{{ __('reservation.message') }}</label>
                    <textarea id="message" name="message" rows="4"
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-amber-500 focus:outline-none transition @error('message') border-red-500 @enderror"
                        placeholder="{{ __('reservation.message_placeholder') }}">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-gradient-to-r from-amber-600 to-yellow-600 hover:from-amber-700 hover:to-yellow-700 text-white font-bold py-3 rounded-lg transition transform hover:scale-105 flex items-center justify-center"
                    @click="isSubmitting = true">
                    <span x-show="!isSubmitting">{{ __('reservation.submit') }}</span>
                    <span x-show="isSubmitting" class="flex items-center">
                        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        {{ __('reservation.submitting') }}
                    </span>
                </button>
            </form>
        </div>

        <!-- Privacy Notice -->
        <p class="text-center text-gray-600 text-sm mt-6">{{ __('reservation.privacy') }}</p>
    </div>
</section>

@push('scripts')
<script>
    function reservationForm() {
        return {
            isSubmitting: false,
        };
    }

    // Gallery lightbox
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            document.getElementById('lightbox-image').src = img.src;
            document.getElementById('lightbox').classList.remove('hidden');
        });
    });

    document.getElementById('close-lightbox').addEventListener('click', function() {
        document.getElementById('lightbox').classList.add('hidden');
    });

    document.getElementById('lightbox').addEventListener('click', function(e) {
        if (e.target === this) {
            this.classList.add('hidden');
        }
    });

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('visit_date').min = today;
</script>
@endpush
@endsection
