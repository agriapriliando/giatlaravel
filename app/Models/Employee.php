<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function leader()
    {
        return $this->belongsTo(Leader::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    use HasFactory;
}
