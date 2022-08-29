<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = [
        'team_id',
        'modality_id',
        'group_number',
    ];

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function modality(): HasOne
    {
        return $this->hasOne(Modality::class);
    }
}
