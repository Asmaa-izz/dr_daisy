<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breed extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class, 'breed_id');
    }
}
