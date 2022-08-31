<?php

namespace App\Models;

use App\Enums\TeamGender;
use App\Enums\TeamModality;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'image',
        'name',
        'modality_id',
        'gender',
        'muse',
    ];

    protected $appends = [
        'modality_name',
        'gender_name',
    ];

    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class);
    }

    public function getModalityNameAttribute()
    {
        return TeamModality::tryFrom($this->modality_id)->toString();
    }

    public function getGenderNameAttribute()
    {
        return TeamGender::tryFrom($this->gender)->toString();
    }
}
