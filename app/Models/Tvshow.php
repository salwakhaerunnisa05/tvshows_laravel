<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    use HasFactory;

    // Gunakan nama tabel standar Laravel dengan garis bawah
    protected $table = 'tv_shows';

    protected $fillable = [
        'title',
        'subtitle',
        'channel',
        'category',
        'rating',
        'seasons',
        'image_url',
        'description',
    ];

    protected $casts = [
        'episodes' => 'array',
    ];
}