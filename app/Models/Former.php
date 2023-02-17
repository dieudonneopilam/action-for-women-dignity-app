<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Former extends Model
{
    protected $fillable = [
        ' \noms',
        'domaine',
        'dateNaissance'
    ];
    use HasFactory;
}
