@extends('admin.app')

@section('title', __('admin.dashboard_title'))

@section('content')
<!-- Admin Dashboard -->
<section class="min-h-screen bg-gray-100 pt-32 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-bold text-gray-900 font-Playfair">{{ __('admin.dashboard_title') }}</h1>
                <p class="text-gray-600 mt-2">{{ __('admin.dashboard_subtitle') }}</p>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow p-6 border-l-4 border-amber-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">{{ __('admin.total_reservations') }}</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{ $totalCount }}</p>
                    </div>
                    <div class="text-4xl"><i class="fa-solid text-primary fa-calendar-day"></i></div>
                </div>
            </div>

            <div class="bg-white shadow p-6 border-l-4 border-yellow-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">{{ __('admin.pending') }}</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{ $pendingCount }}</p>
                    </div>
                    <div class="text-4xl">⏳</div>
                </div>
            </div>

            <div class="bg-white shadow p-6 border-l-4 border-green-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">{{ __('admin.contacted') }}</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{ $totalCount - $pendingCount }}</p>
                    </div>
                    <div class="text-4xl"><i class="fa-solid text-green-500 fa-check-to-slot"></i></div>
                </div>
            </div>
        </div>

        <!-- Reservations Table -->
        <div class="bg-white shadow overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-2xl font-bold text-gray-900">{{ __('admin.reservations_list') }}</h2>
                <form action="{{ route('home') }}" method="GET" class="inline">
                    <button type="submit" class="bg-gray-600 text-white px-4 py-2 hover:bg-gray-700 transition text-sm">
                        ← {{ __('admin.back_to_home') }}
                    </button>
                </form>
            </div>

            @if($reservations->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-700">{{ __('admin.name') }}</th>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-700">{{ __('admin.email') }}</th>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-700">{{ __('admin.phone') }}</th>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-700">{{ __('admin.visit_date') }}</th>
                                <th class="px-6 py-3 text-left text-sm font-bold text-gray-700">{{ __('admin.status') }}</th>
                                <th class="px-6 py-3 text-center text-sm font-bold text-gray-700">{{ __('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr class="border-b border-gray-200 hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <p class="font-medium text-gray-900">{{ $reservation->name }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="mailto:{{ $reservation->email }}" class="text-amber-600 hover:underline">{{ $reservation->email }}</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="tel:{{ $reservation->phone }}" class="text-amber-600 hover:underline">{{ $reservation->phone }}</a>
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        {{ $reservation->visit_date->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($reservation->isContacted())
                                            <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-bold">✓ {{ __('admin.contacted_status') }}</span>
                                        @else
                                            <span class="inline-block bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold">⏳ {{ __('admin.pending_status') }}</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-2 justify-star">
                                            <button class="edit-btn bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700 transition"
                                                data-id="{{ $reservation->id }}"
                                                data-name="{{ $reservation->name }}"
                                                data-email="{{ $reservation->email }}"
                                                data-phone="{{ $reservation->phone }}"
                                                data-message="{{ $reservation->message }}"
                                                data-date="{{ $reservation->visit_date->format('d/m/Y H:i') }}">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>

                                            @if(!$reservation->isContacted())
                                                <form action="{{ route('admin.mark-contacted', $reservation) }}" method="POST" class="inline">
                                                    @csrf
                                                    <button type="submit" class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition">
                                                        <i class="fa-solid fa-check"></i>
                                                    </button>
                                                </form>
                                            @endif

                                            <form action="{{ route('admin.delete-reservation', $reservation) }}" method="POST" class="inline" onsubmit="return confirm('{{ __('admin.confirm_delete') }}');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700 transition">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $reservations->links() }}
                </div>
            @else
                <div class="px-6 py-12 text-center">
                    <p class="text-gray-600 text-lg">{{ __('admin.no_reservations') }}</p>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- Details Modal -->
<div id="detailsModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white shadow-2xl max-w-md w-full p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold text-gray-900">{{ __('admin.reservation_details') }}</h3>
            <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">✕</button>
        </div>

        <div id="modalContent" class="space-y-4">
            <!-- Will be filled by JavaScript -->
        </div>

        <button type="button" onclick="closeModal()" class="w-full mt-6 bg-gray-300 text-gray-900 px-4 py-2 rounded hover:bg-gray-400 transition font-medium">
            {{ __('admin.close') }}
        </button>
    </div>
</div>

@push('scripts')
<script>
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const modalContent = document.getElementById('modalContent');
            modalContent.innerHTML = `
                <div>
                    <p class="text-sm text-gray-600">{{ __('admin.name') }}</p>
                    <p class="font-bold text-gray-900">${this.dataset.name}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">{{ __('admin.email') }}</p>
                    <p class="font-bold text-gray-900"><a href="mailto:${this.dataset.email}" class="text-amber-600 hover:underline">${this.dataset.email}</a></p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">{{ __('admin.phone') }}</p>
                    <p class="font-bold text-gray-900"><a href="tel:${this.dataset.phone}" class="text-amber-600 hover:underline">${this.dataset.phone}</a></p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">{{ __('admin.visit_date') }}</p>
                    <p class="font-bold text-gray-900">${this.dataset.date}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">{{ __('admin.message') }}</p>
                    <p class="font-medium text-gray-900 bg-gray-50 p-3 rounded max-h-32 overflow-y-auto">${this.dataset.message || '{{ __('admin.no_message') }}'}</p>
                </div>
            `;
            document.getElementById('detailsModal').classList.remove('hidden');
        });
    });

    function closeModal() {
        document.getElementById('detailsModal').classList.add('hidden');
    }

    // Close modal when clicking outside
    document.getElementById('detailsModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>
@endpush
@endsection
