<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Garden extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'location', 'description'];


    public function plants(): BelongsToMany
    {
        return $this->belongsToMany(Plant::class)->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
