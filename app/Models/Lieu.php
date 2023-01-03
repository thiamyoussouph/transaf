<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle'
     ];
    public function mouvement_lieux()
    {
        return $this->hasMany(Mouvement_lieu::class);
    }
}
