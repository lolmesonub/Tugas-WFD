<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Events extends Pivot
{
    use HasFactory;

    protected $table = "events";

    public function organizer(): BelongsTo
    {
        return $this->belongsTo(Organizers::class);
    }

    public function event_category(): BelongsTo
    {
        return $this->belongsTo(Event_Categories::class);
    }
}
