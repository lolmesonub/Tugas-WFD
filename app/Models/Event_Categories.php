<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event_Categories extends Model
{
    use HasFactory;

    public function event(): BelongsToMany
    {
        return $this->belongsToMany(Events::class);
    }
}
