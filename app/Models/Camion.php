<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'marque',
        'volume',
  ];
    public function chauffeur_camions()
    {
        return $this->hasMany(Chauffeur_camion::class);
    }
}