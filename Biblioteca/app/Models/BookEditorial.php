<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BookEditorial extends Model
{
    protected $table = 'book_editorial';

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'book_editorial_user');
    }
    
}
