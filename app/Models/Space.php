<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function type () {
        return $this->belongsTo(SpaceType::class);
    }

    public function expositions () {
        return $this->hasMany(Exposition::class);
    }
    public function city () {
        return $this->belongsTo(City::class);
    }
    public function modalities () {
        return $this->belongsToMany(Modality::class);
    }

    public function services () {
        return $this->belongsToMany(Service::class);
    }
}
