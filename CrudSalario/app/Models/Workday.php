<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Workday extends Model
{
    public function post(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
