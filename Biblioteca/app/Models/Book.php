<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function editorials()
    {
        return $this->belongsToMany(Editorial::class)->withPivot('edition_number', 'url');
    }


    protected $fillable = [
        'title', 
        'description', 
    ];
}
