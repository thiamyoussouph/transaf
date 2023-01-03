<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'CNI',
        'adresse'
    ];
    public function chauffeur_camions()
    {
        return $this->hasMany(Chauffeur_camion::class);
    }
}
