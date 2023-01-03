<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur_camion extends Model
{
    use HasFactory;
    protected $fillable = [
        'chauffeur_id',
        'camion_id',
         ];
    public function chauffeurs()
    {
        return $this->belongsTo(Chauffeur::class);
    }
    public function camions()
    {
        return $this->belongsTo(Camion::class);
    }
}
