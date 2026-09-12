<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'first_last_name', 'second_last_name', 'phone', 'institutional_id', 'role_id', 'municipality_id'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    public function studentProfile(): HasOne
    {
        return $this->hasOne(StudentProfile::class);
    }

    public function teacherProfile(): HasOne
    {
        return $this->hasOne(TeacherProfile::class);
    }

    public function badge(): HasOne
    {
        return $this->hasOne(Badge::class);
    }

    public function instructedWorkshops(): HasMany
    {
        return $this->hasMany(Workshop::class, 'instructor_id');
    }

    public function workshopEnrollments(): HasMany
    {
        return $this->hasMany(WorkshopEnrollment::class);
    }

    public function workshops(): BelongsToMany
    {
        return $this->belongsToMany(Workshop::class, 'workshop_enrollments')
            ->withPivot(['enrolled_at', 'attended'])
            ->withTimestamps();
    }

    public function organizedTournaments(): HasMany
    {
        return $this->hasMany(Tournament::class, 'organizer_id');
    }

    public function tournamentEnrollments(): HasMany
    {
        return $this->hasMany(TournamentEnrollment::class);
    }

    public function tournaments(): BelongsToMany
    {
        return $this->belongsToMany(Tournament::class, 'tournament_enrollments')
            ->withPivot(['enrolled_at', 'bracket_position'])
            ->withTimestamps();
    }

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }

    public function projectEvaluations(): HasMany
    {
        return $this->hasMany(ProjectEvaluation::class, 'jury_id');
    }

    public function committeeProposals(): HasMany
    {
        return $this->hasMany(CommitteeProposal::class, 'created_by');
    }

    public function committeeVotes(): HasMany
    {
        return $this->hasMany(CommitteeVote::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
