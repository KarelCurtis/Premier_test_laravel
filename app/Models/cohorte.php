<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cohorte extends Model
{

    use HasFactory;
    protected $table = 'cohortes';
    protected $fillable = ['startinDate','endingDate'];
}
