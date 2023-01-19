<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvement extends Model
{
    use HasFactory;
    protected $fillable = [
        'numeromouvement',
        'categorie_id',
        'description',
        'camion_id',
        'lieu_id',
        'chargement_id',
        'dechargement_id',
        'decharger',
    ];
    public function mouvement_lieux()
    {
        return $this->hasMany(Mouvement_lieu::class);
    }

    public function camion()
    {
        return $this->belongsTo(Camion::class);
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
