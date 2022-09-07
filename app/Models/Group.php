<?php

namespace App\Models;

use App\Enums\TeamModality;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = [
        'modality_id',
        'group_letter',
    ];

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }

    public function modality(): HasOne
    {
        return $this->hasOne(Modality::class);
    }

    public function setGroupLetterAttribute($value)
    {
        $alphabet = range('A', 'Z');

        $this->attributes['group_letter'] = $alphabet[$value];
    }

    public function getModalityNameAttribute()
    {
        return TeamModality::tryFrom($this->modality_id)->toString();
    }
}
