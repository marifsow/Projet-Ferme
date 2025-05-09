<?php

// app/Models/Employe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'role', 'date_embauche'];

    // Ajouter un cast pour la date
    protected $casts = [
        'date_embauche' => 'date',
    ];
}

