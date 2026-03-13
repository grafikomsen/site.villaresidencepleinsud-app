<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ReservationController extends Controller
{
    /**
     * Show the reservation form.
     */
    public function show(): View
    {
        return view('reservation');
    }

    /**
     * Store a newly created reservation in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'visit_date' => 'required|date|after:today',
            'message' => 'nullable|string|max:1000',
        ]);

        Reservation::create($validated);

        return back()->with('success', __('reservations.success_message'));
    }
}
