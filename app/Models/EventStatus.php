<?php

namespace App\Models;

use Database\Factories\EventStatusFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class EventStatus extends Model
{
    /** @use HasFactory<EventStatusFactory> */
    use HasFactory;

    public $timestamps = false;

    public function workshops(): HasMany
    {
        return $this->hasMany(Workshop::class, 'status_id');
    }

    public function tournaments(): HasMany
    {
        return $this->hasMany(Tournament::class, 'status_id');
    }
}
