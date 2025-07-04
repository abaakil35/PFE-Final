<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model


{
  use HasFactory ;

  protected $fillable = [
    'titre', 
    'description',
    'info', // Colonne dans la base
    'niveau', // Colonne dans la base
    'image_path' // N'oubliez pas d'ajouter ce champ
];
  
}
