<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'id candidature','email','niveau_etude','formation_choisie',
    ];

}
