<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pol extends Model
{
    use HasFactory;

    protected $table = 'polovi';

    protected $fillable = ['pol'];
}
