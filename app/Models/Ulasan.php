<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',  // PENTING: Untuk menghubungkan ulasan dengan akun user
        'content',  // Isi ulasan (kita pakai 'content' biar standar, ganti 'deskripsi')
        'rating'    // Bintang 1-5
    ];

    /**
     * Relasi: Sebuah Ulasan dimiliki oleh satu User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}