<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Round extends Model
{
    use HasFactory;

    protected $table = 'rounds';

    protected $fillable = [
        'first_team',
        'second_team',
        'group_id',
        'round',
        'datetime',
    ];

    public function team(string $teamPosition): BelongsTo
    {
        return $this->belongsTo(Team::class, $teamPosition, 'id');
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
