<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuiviSanitaire extends Model
{
    // Autoriser la masse d'attributs pour ces colonnes
    protected $fillable = [
        'animaux_id',
        'date',
        'type',
        'description'
    ];

    // Définir la relation avec le modèle Animal
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animaux_id');
    }

    // Optionnel: Si vous souhaitez que la date soit automatiquement transformée en instance Carbon (utile pour la gestion des dates)
    protected $casts = [
        'date' => 'date',
    ];
}
