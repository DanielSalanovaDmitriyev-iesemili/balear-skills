<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exposition extends Model
{
    use HasFactory;

    public function space () {
        return $this->belongsTo(Space::class);
    }

    public function arts () {
        return $this->hasMany(Art::class);
    }
}
