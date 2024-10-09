<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organizers extends Model
{
    use HasFactory;
    protected $table = "organizers";

    public function event(): HasMany
    {
        return $this->hasMany(Events::class);
    }
}
