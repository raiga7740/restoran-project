<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'jumlah_orang' => 'required',
        ]);

        Reservation::create($request->all());

        return back()->with('success', 'Reservasi berhasil dikirim.');
    }
}