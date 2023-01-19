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
    public function lieu()
    {
        return $this->belongsTo(Lieu::class);
    }
    public function lieudechargement()
    {
        return $this->belongsTo(Lieudechargement::class);
    }
    public function chargement()
    {
        return $this->belongsTo(Chargement::class);
    }
    public function dechargement()
    {
        return $this->belongsTo(Dechargement::class);
    }
}