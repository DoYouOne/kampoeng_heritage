<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    protected $fillable = [
        'id', 'judul', 'deskripsi', 'penyelenggara', 'waktu', 'jam', 'foto'
    ];
}
