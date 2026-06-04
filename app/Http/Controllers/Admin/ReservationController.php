<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::latest()->get();

        return view('admin.reservasi.index', compact('reservations'));
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return back();
    }

    public function updateStatus(Reservation $reservation, $status)
    {
        $reservation->update([
            'status' => $status
        ]);

        return back();
    }
}