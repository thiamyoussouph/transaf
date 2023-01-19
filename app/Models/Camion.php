<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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