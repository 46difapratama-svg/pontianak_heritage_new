<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

   protected $fillable = ['nama_event', 'kategori', 'lokasi', 'tanggal_pelaksanaan', 'deskripsi', 'foto'];
}