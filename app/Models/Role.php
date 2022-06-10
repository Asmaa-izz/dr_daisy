<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function abilities(): BelongsToMany
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }


    public function allowTo($abilities)
    {
        foreach ($abilities as $ability) {
            $ability = Ability::whereName($ability)->firstOrFail();
            $this->abilities()->sync($ability, false);
        }
    }
}
