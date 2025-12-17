<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'image', // <--- SUDAH DITAMBAHKAN
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer'
    ];
}