<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    
    use HasFactory;
}
