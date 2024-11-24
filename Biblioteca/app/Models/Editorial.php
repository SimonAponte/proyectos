<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Editorial extends Model
{
    public function books()
    {
        return $this->BelongsToMany(Book::class)->withPivot('edition_number', 'url');
    }
}
