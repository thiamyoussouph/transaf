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
        'quantitecharger',
        'quantitedecharger',
        'lieu_id',
        'lieudechargement_id',
        'user_id',
       

    ];
    public function mouvement_lieux()
    {
        return $this->hasMany(Mouvement_lieu::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
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
}
