<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikal extends Model
{
    use HasFactory;

    protected $table = 'artikli';

    protected $fillable = ['sifra', 'proizvodjacID', 'polID', 'cena'];
}
