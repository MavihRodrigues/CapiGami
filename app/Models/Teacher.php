<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'nif',
        'password',
        'confirm_password',
        'telefone'
    ];
}
