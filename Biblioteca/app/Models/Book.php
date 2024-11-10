<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
    
    public function editorials(): BelongsToMany 
    {
        return $this->belongsToMany(Editorial::class);
    }

    //query scope

    public function scopeTitle($query, $title)
    {
        if($title)
        {
            return $query->where('title', 'LIKE', "%$title%");
        }
    }
}
