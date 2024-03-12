<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garden extends Model
{
    use HasFactory;

    public function plants()
    {
        return $this->belongsToMany(Plant::class)->withPivot('quantity');
    }
}