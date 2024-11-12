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
        return $this->belongsToMany(Editorial::class)->withPivot('url', 'edition_number');
    }

    //query scope

    public function scopeTitle($query, $title)
    {
        if($title)
        {
            return $query->where('title', 'LIKE', "%$title%");
        }
    }
    public function scopeAuthors($query, $author)
    {
        return $query->orwhereHas('authors', function ($query) use ($author) {
            $query->where('name', 'LIKE', "%$author%");
        });
    }
    public function scopeGenres($query, $genre)
    {
        return $query->orwhereHas('genres', function ($query) use ($genre) {
            $query->where('title', 'LIKE', "%$genre%");
        });
    }
    public function scopeEditorials($query, $editorial)
    {
        return $query->orwhereHas('editorials', function ($query) use ($editorial) {
            $query->where('name', 'LIKE', "%$editorial%");
        });
    }
    
}
