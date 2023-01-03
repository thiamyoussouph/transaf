<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvement_lieu extends Model
{
    use HasFactory;
    protected $fillable = [
        'mouvement_id',
        'lieu_id',
        'date',
    ];
    public function lieu()
    {
        return $this->belongsTo(Lieu::class);
    }
    public function mouvement()
    {
        return $this->belongsTo(Mouvement::class);
    }
}
