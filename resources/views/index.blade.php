@extends('layouts.app')

@section('title', __('pages.home_title'))
@section('description', __('pages.home_description'))

@section('content')
<!-- Hero Section -->
<section id="hero" class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black relative flex items-center justify-center overflow-hidden pt-20">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center opacity-40" style="background-image: url('{{ asset('frontend/images/hero.jpg') }}'); background-position: center;"></div>

    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-72 h-72 bg-[#d6873f] rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute top-40 right-20 w-72 h-72 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center text-white max-w-4xl px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight font-Playfair animate-fade-in">
            {{ __('hero.title') }}
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-8 leading-relaxed animate-fade-in" style="animation-delay: 0.2s;">
            {{ __('hero.subtitle') }}
        </p>
        <div class="flex flex-col md:flex-row gap-4 justify-center animate-fade-in" style="animation-delay: 0.4s;">
            <a href="#reservation" class="px-4 py-2 bg-[#d6873f] animate-pulse hover:bg-[#d6873f]/90 font-bold text-lg transition transform hover:scale-105 inline-flex items-center justify-center">
                {{ __('hero.book_visit') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
            <a href="#gallery" class="px-4 py-2 bg-transparent border-2 border-white hover:bg-white hover:text-black font-bold text-lg transition inline-flex items-center justify-center">
                {{ __('hero.view_gallery') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
        <svg class="w-6 h-6 text-[#d6873f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- About Villa Section -->
<section id="about" class="py-20 bg-[#1c1f21]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold font-Playfair text-[#d6873f] mb-4">{{ __('about.title') }}</h2>
            <p class="text-xl text-gray-400">{{ __('about.subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <!-- Left: Image -->
            <div class="relative group">
                <img class="relative w-full h-96 object-cover rounded-bl-[70px] shadow-2xl shadow-[#d6873f]/30" src="{{ asset('frontend/images/salle-a-manger.jpg') }}" alt="Villa Exterior">
            </div>

            <!-- Right: Details -->
            <div class="space-y-6">
                <p class="text-lg text-gray-400 leading-relaxed">{{ __('about.description') }}</p>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-6 border-2 border-amber-100 hover:border-[#d6873f] transition rounded-bl-[20px] shadow-2xl shadow-[#d6873f]/30">
                        <div class="text-4xl font-bold font-Playfair text-amber-600 mb-2">{{ __('about.size') }}</div>
                        <p class="text-gray-500 font-semibold text-xl">{{ __('about.size_label') }}</p>
                    </div>
                    <div class="bg-gray-50 p-6 border-2 border-amber-100 hover:border-[#d6873f] transition rounded-bl-[20px] shadow-2xl shadow-[#d6873f]/30">
                        <div class="text-4xl font-bold font-Playfair text-amber-600 mb-2">{{ __('about.bedrooms') }}</div>
                        <p class="text-gray-500 font-semibold text-xl">{{ __('about.bedroom_label') }}</p>
                    </div>
                    <div class="bg-gray-50 p-6 border-2 border-amber-100 hover:border-[#d6873f] transition rounded-bl-[20px] shadow-2xl shadow-[#d6873f]/30">
                        <div class="text-4xl font-bold font-Playfair text-amber-600 mb-2">{{ __('about.bathrooms') }}</div>
                        <p class="text-gray-500 font-semibold text-xl">{{ __('about.bathroom_label') }}</p>
                    </div>
                    <div class="bg-gray-50 p-6 border-2 border-amber-100 hover:border-[#d6873f] transition rounded-bl-[20px] shadow-2xl shadow-[#d6873f]/30">
                        <div class="text-4xl font-bold font-Playfair text-amber-600 mb-2">{{ __('about.price') }}</div>
                        <p class="text-gray-500 font-semibold text-xl">{{ __('about.price_label') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gradient-to-br from-amber-50 to-yellow-50 hover:shadow-lg transition  rounded-bl-[30px] shadow-2xl shadow-[#d6873f]/30">
                <div class="text-5xl mb-4"><i class="fa-solid fa-building"></i></div>
                <h3 class="text-3xl font-bold font-Playfair text-gray-900 mb-2">{{ __('about.feature_1') }}</h3>
                <p class="text-gray-700">{{ __('about.feature_1_desc') }}</p>
            </div>
            <div class="text-center p-8 bg-gradient-to-br from-amber-50 to-yellow-50 hover:shadow-lg transition  rounded-bl-[30px] shadow-2xl shadow-[#d6873f]/30">
                <div class="text-5xl mb-4"><i class="fa-brands fa-galactic-republic"></i></div>
                <h3 class="text-3xl font-bold font-Playfair text-gray-900 mb-2">{{ __('about.feature_2') }}</h3>
                <p class="text-gray-700">{{ __('about.feature_2_desc') }}</p>
            </div>
            <div class="text-center p-8 bg-gradient-to-br from-amber-50 to-yellow-50 hover:shadow-lg transition  rounded-bl-[30px] shadow-2xl shadow-[#d6873f]/30">
                <div class="text-5xl mb-4"><i class="fa-solid fa-computer"></i></div>
                <h3 class="text-3xl font-bold font-Playfair text-gray-900 mb-2">{{ __('about.feature_3') }}</h3>
                <p class="text-gray-700">{{ __('about.feature_3_desc') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-Playfair font-bold text-gray-900 mb-4">{{ __('gallery.title') }}</h2>
            <p class="text-xl text-gray-600">{{ __('gallery.subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Gallery Items -->
            @php
                $images = [
                    ['url' => 'https://images.pexels.com/photos/5875843/pexels-photo-5875843.jpeg?_gl=1*1hum5ay*_ga*MTQ1NjY4Mzg4OC4xNzcwMTA2Nzc2*_ga_8JE65Q40S6*czE3NzQyNTc5MjkkbzUkZzEkdDE3NzQyNTg1NzIkajIxJGwwJGgw', 'title' => 'Living Room'],
                    ['url' => 'https://images.pexels.com/photos/4940611/pexels-photo-4940611.jpeg?_gl=1*zab7am*_ga*MTQ1NjY4Mzg4OC4xNzcwMTA2Nzc2*_ga_8JE65Q40S6*czE3NzQyNTc5MjkkbzUkZzEkdDE3NzQyNTgzNzIkajM3JGwwJGgw', 'title' => 'Master Bedroom'],
                    ['url' => 'https://images.pexels.com/photos/4030912/pexels-photo-4030912.jpeg?_gl=1*rlxlrw*_ga*MTQ1NjY4Mzg4OC4xNzcwMTA2Nzc2*_ga_8JE65Q40S6*czE3NzQyNTc5MjkkbzUkZzEkdDE3NzQyNTgyMDIkajU5JGwwJGgw', 'title' => 'Kitchen'],
                    ['url' => 'https://images.pexels.com/photos/6454837/pexels-photo-6454837.jpeg?_gl=1*axjogj*_ga*MTQ1NjY4Mzg4OC4xNzcwMTA2Nzc2*_ga_8JE65Q40S6*czE3NzQyNTc5MjkkbzUkZzEkdDE3NzQyNTg2NzIkajIxJGwwJGgw', 'title' => 'Pool Area'],
                    ['url' => 'https://images.pexels.com/photos/6364006/pexels-photo-6364006.jpeg?_gl=1*14no6bg*_ga*MTQ1NjY4Mzg4OC4xNzcwMTA2Nzc2*_ga_8JE65Q40S6*czE3NzQyNTc5MjkkbzUkZzEkdDE3NzQyNTg4NjEkajIxJGwwJGgw', 'title' => 'Garden View'],
                    ['url' => 'https://images.pexels.com/photos/6956617/pexels-photo-6956617.jpeg?_gl=1*h9st8j*_ga*MTQ1NjY4Mzg4OC4xNzcwMTA2Nzc2*_ga_8JE65Q40S6*czE3NzQyNTc5MjkkbzUkZzEkdDE3NzQyNTg3NjckajI1JGwwJGgw', 'title' => 'Terrace'],
                ];
            @endphp

            @foreach($images as $image)
            <div class="relative group cursor-pointer overflow-hidden  rounded-bl-[70px]  shadow-2xl shadow-[#d6873f]/30 gallery-item">
                <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}" class="w-full h-72 object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-"{{ $image['url'] }}" bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                    <div class="text-white flex flex-col items-center text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-2xl font-Playfair font-bold">{{ $image['title'] }}</h3>
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
<section id="amenities" class="py-20 bg-[#1c1f21]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-Playfair font-bold text-[#d6873f] mb-4">{{ __('amenities.title') }}</h2>
            <p class="text-xl text-gray-400">{{ __('amenities.subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $amenities = [
                    ['icon' => 'fa-water-ladder', 'name' => __('amenities.pool'), 'desc' => __('amenities.pool_desc')],
                    ['icon' => 'fa-leaf', 'name' => __('amenities.garden'), 'desc' => __('amenities.garden_desc')],
                    ['icon' => 'fa-square-parking', 'name' => __('amenities.parking'), 'desc' => __('amenities.parking_desc')],
                    ['icon' => 'fa-lock', 'name' => __('amenities.security'), 'desc' => __('amenities.security_desc')],
                    ['icon' => 'fa-wifi', 'name' => __('amenities.internet'), 'desc' => __('amenities.internet_desc')],
                    ['icon' => 'fa-temperature-half', 'name' => __('amenities.climate'), 'desc' => __('amenities.climate_desc')],
                ];
            @endphp

            @foreach($amenities as $amenity)
            <div class="group p-8 bg-gradient-to-br from-gray-50 to-gray-100 hover:from-amber-50 hover:to-yellow-50 border border-gray-200 hover:border-[#d6873f] transition cursor-pointer rounded-bl-[30px] shadow-2xl shadow-[#d6873f]/30">
                <div class="text-6xl mb-4 group-hover:scale-110 transition"><i class="fa-solid text-[#d6873f] {{ $amenity['icon'] }}"></i></div>
                <h3 class="text-2xl font-bold font-Playfair text-gray-900 mb-2">{{ $amenity['name'] }}</h3>
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
            <h2 class="text-4xl md:text-5xl font-Playfair font-bold text-gray-900 mb-4">{{ __('location.title') }}</h2>
            <p class="text-xl text-gray-600">{{ __('location.subtitle') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Map -->
            <div class="w-full h-96 overflow-hidden shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.7965980110002!2d-17.01371892585334!3d14.443359130908977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec18983e1f8ef51%3A0x848fa192a0bb32b5!2sR%C3%A9sidence%20plein%20sud!5e1!3m2!1sfr!2ssn!4v1773390080495!5m2!1sfr!2ssn" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Info -->
            <div class="space-y-8">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 bg-[#d6873f] text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 font-Playfair">{{ __('location.address_title') }}</h3>
                        <p class="mt-2 text-gray-700">{{ __('location.address') }}</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 bg-[#d6873f] text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 00.948-.684l1.498-4.493a1 1 0 011.502-.684l1.498 4.493a1 1 0 00.948.684H19a2 2 0 012 2v1M3 5v14a2 2 0 002 2h14a2 2 0 002-2V5m-5 5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 font-Playfair">{{ __('location.distance_title') }}</h3>
                        <p class="mt-2 text-gray-700">{{ __('location.distance') }}</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 bg-[#d6873f] text-white">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 font-Playfair">{{ __('location.access_title') }}</h3>
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
            <h2 class="text-4xl md:text-5xl font-Playfair font-bold text-gray-900 mb-4">{{ __('reservation.title') }}</h2>
            <p class="text-xl text-gray-600">{{ __('reservation.subtitle') }}</p>
        </div>

        <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-8 md:p-12 shadow-lg border border-gray-200">
            <form action="{{ route('reservation.store') }}" method="POST" class="space-y-6" x-data="reservationForm()">
                @csrf

                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-bold text-gray-900 mb-2">{{ __('reservation.name') }} *</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-3 border-2 border-gray-300 focus:border-[#d6873f] focus:outline-none transition @error('name') border-red-500 @enderror"
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
                        class="w-full px-4 py-3 border-2 border-gray-300 focus:border-[#d6873f] focus:outline-none transition @error('email') border-red-500 @enderror"
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
                        class="w-full px-4 py-3 border-2 border-gray-300 focus:border-[#d6873f] focus:outline-none transition @error('phone') border-red-500 @enderror"
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
                        class="w-full px-4 py-3 border-2 border-gray-300 focus:border-[#d6873f] focus:outline-none transition @error('visit_date') border-red-500 @enderror"
                        value="{{ old('visit_date') }}">
                    @error('visit_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-bold text-gray-900 mb-2">{{ __('reservation.message') }}</label>
                    <textarea id="message" name="message" rows="4"
                        class="w-full px-4 py-3 border-2 border-gray-300 focus:border-[#d6873f] focus:outline-none transition @error('message') border-red-500 @enderror"
                        placeholder="{{ __('reservation.message_placeholder') }}">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-[#d6873f] hover:bg-[#d6873f]/70 text-white font-bold py-3 transition transform hover:scale-105 flex items-center justify-center"
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
