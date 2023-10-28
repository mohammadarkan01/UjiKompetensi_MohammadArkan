<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komik extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'komik';
    protected $fillable = [
        'judul_komik',
        'penulis',
        'penerbit',
        'genre_komik',
        'volume_komik',
        'tahun_terbit',
        'sinopsis',
        'cover_komik'
    ];
}
