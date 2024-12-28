<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    public function Workdays(): HasMany
    {
        return $this->hasMany(Workday::class);
    }
}
