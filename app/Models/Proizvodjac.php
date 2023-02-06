<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvodjac extends Model
{
    use HasFactory;

    protected $table = 'proizvodjaci';

    protected $fillable = ['proizvodjac', 'drzava'];
}
