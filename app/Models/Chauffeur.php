<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chauffeur extends Model
{
    use HasFactory , HasRoles;
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