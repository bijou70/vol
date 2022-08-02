<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
    protected $fillable = ["code_vol", "date_depart", "heure_depart", "destination","nbre_placeA", "nbre_placeB", "prix_classeA", "prix_classeB"];

}
