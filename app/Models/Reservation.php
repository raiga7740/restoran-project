<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'nama',
        'no_hp',
        'tanggal',
        'jam',
        'jumlah_orang',
        'catatan',
        'status',
    ];
}