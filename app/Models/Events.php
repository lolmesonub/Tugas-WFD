<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Events extends Pivot
{
    use HasFactory;

    public function organizer(): BelongsToMany
    {
        return $this->belongsToMany(Organizers::class);
    }

    public function event_category(): BelongsToMany
    {
        return $this->belongsToMany(Event_Categories::class);
    }
}
