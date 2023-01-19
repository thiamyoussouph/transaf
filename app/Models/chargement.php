<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chargement extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantite',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
