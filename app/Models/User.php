<?php

namespace App\Models;

// 1. PENTING: Import Enum Role agar dikenali
use App\Enums\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'foto', 
        'role', // 2. Tambahkan ini agar kolom role bisa diisi
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            // 3. INI KUNCINYA: Mengubah teks database menjadi Enum otomatis
            'role' => Role::class, 
        ];
    }
    
    // Tambahan: Relasi ke Ulasan (Opsional tapi bagus untuk Admin Panel nanti)
    public function ulasans()
    {
        return $this->hasMany(Ulasan::class);
    }
}