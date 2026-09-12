<?php

namespace App\Models;

use Database\Factories\TournamentFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['game', 'capacity', 'start_time', 'end_time', 'registration_deadline', 'status_id', 'organizer_id', 'classroom_id'])]
class Tournament extends Model
{
    /** @use HasFactory<TournamentFactory> */
    use HasFactory;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'capacity' => 'integer',
            'start_time' => 'datetime',
            'end_time' => 'datetime',
            'registration_deadline' => 'datetime',
        ];
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(EventStatus::class, 'status_id');
    }

    public function organizer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(TournamentEnrollment::class);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'tournament_enrollments')
            ->withPivot(['enrolled_at', 'bracket_position'])
            ->withTimestamps();
    }
}
