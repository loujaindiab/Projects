<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer_Team extends Model
{
    use HasFactory;
    public function position(){
        return $this->belongsTo(Position::class);
    }
}
