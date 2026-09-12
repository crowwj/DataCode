<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'code',
    'hackathon_id',
    'user_id',
];

    // Relación con el usuario creador
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con los miembros del equipo
    public function members()
    {
        return $this->hasMany(User::class, 'team_id');
    }
}