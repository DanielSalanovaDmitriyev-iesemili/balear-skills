<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $primaryKey = "id";

    public function users () {
        return $this->hasMany(User::class);
    }
    public function spaces () {
        return $this->hasMany(Space::class);
    }
}
