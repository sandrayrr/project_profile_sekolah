<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
    use HasFactory;

    /**
     * Nama tabel (opsional, tapi aman ditulis)
     */
    protected $table = 'marketplaces';

    /**
     * Kolom yang boleh diisi (mass assignment)
     */
    protected $fillable = [
        'foto',
        'nama',
        'harga',
    ];

    /**
     * Casting tipe data
     */
    protected $casts = [
        'harga' => 'decimal:2',
    ];
}
