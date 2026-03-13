<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function dashboard(){

        $reservations = Reservation::orderBy('visit_date', 'desc')->paginate(10);
        $pendingCount = Reservation::whereNull('contacted_at')->count();
        $totalCount = Reservation::count();

        Session::put('page', 'dashboard');
        return view('admin.dashboard', compact('reservations', 'pendingCount', 'totalCount'));
    }

    public function login(){

        return view('admin.login');
    }

    public function store(Request $request)
    {
        $rule =  [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $message = [
            'email.required'    => "S'il vous plaît, veuillez entrer votre e-mail",
            'email.email'       => "S'il vous plaît, mettez une adresse email valide.",
            'password.required' => "S'il vous plaît, veuillez entrer votre mot de passe"
        ];

        $validator = Validator::make($request->all(), $rule, $message);

        if ($validator->passes()) {
            # code...
            if (Auth::guard('admin')->attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password,
                ]
            )) {
                # Mémoriser l'e-mail et le mot de passe de l'administrateur
                if (!empty($request['remember'])) {
                    # code...
                    setcookie('email',$request['email'],time()+3600);
                    setcookie('password',$request['password'],time()+3600);
                } else {
                    # code...
                    setcookie('email');
                    setcookie('password','');
                }

                return redirect()->route('admin.dashboard')->with('success', __('admin.login_success'));;

            } else {
                # code...
                return redirect()->route('admin.login')
                    ->withInput($request->only('email'))
                    ->with('error', "S'il vous plaît, E-mail/mot de passe est incorrect.");
            }
        } else {
            # code...
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
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
    * Supprimer la ressource spécifiée du stockage.
    */
    public function destroy(Admin $admin)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
