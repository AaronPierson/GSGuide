<?php

namespace App\Models;

use DeepCopy\f001\B;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Plant extends Model
{
    use HasFactory;

    public function gardens(): BelongsToMany
    {
        return $this->belongsToMany(Garden::class)->withPivot('quantity');
    }
}
