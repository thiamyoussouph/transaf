<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lieudechargement extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle'
    ];
    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }
    
}
