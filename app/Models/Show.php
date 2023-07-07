<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Show extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }
}
