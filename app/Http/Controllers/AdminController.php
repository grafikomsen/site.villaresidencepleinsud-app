<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Show the admin login page.
     */
    public function showLoginForm(): View
    {
        return view('admin.login');
    }

    /**
     * Handle login request.
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('success', __('admin.login_success'));
        }

        return back()->withErrors([
            'email' => __('admin.login_failed'),
        ])->onlyInput('email');
    }

    /**
     * Show the admin dashboard.
     */
    public function dashboard(): View
    {
        $reservations = Reservation::orderBy('visit_date', 'desc')->paginate(10);
        $pendingCount = Reservation::whereNull('contacted_at')->count();
        $totalCount = Reservation::count();

        return view('admin.dashboard', compact('reservations', 'pendingCount', 'totalCount'));
    }

    /**
     * Mark reservation as contacted.
     */
    public function markContacted(Reservation $reservation): RedirectResponse
    {
        $reservation->markAsContacted();
        return back()->with('success', __('admin.marked_as_contacted'));
    }

    /**
     * Delete a reservation.
     */
    public function deleteReservation(Reservation $reservation): RedirectResponse
    {
        $reservation->delete();
        return back()->with('success', __('admin.reservation_deleted'));
    }

    /**
     * Logout the user.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', __('admin.logout_success'));
    }
}
