<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animaux';

    protected $fillable = ['nom', 'espece', 'date_naissance', 'etat_sante'];

    // Cast la colonne 'date_naissance' en objet Carbon
    protected $casts = [
        'date_naissance' => 'date',  // Cela va convertir automatiquement la valeur en objet Carbon
    ];
}
