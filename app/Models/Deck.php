<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;

    public function variations()
    {
        return $this->hasMany(DeckVariation::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }
}
