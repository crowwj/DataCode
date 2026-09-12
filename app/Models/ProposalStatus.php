<?php

namespace App\Models;

use Database\Factories\ProposalStatusFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class ProposalStatus extends Model
{
    /** @use HasFactory<ProposalStatusFactory> */
    use HasFactory;

    public function proposals(): HasMany
    {
        return $this->hasMany(CommitteeProposal::class, 'status_id');
    }
}
