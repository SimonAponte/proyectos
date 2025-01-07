<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Provider extends Model
{
    public function products(): BelongsToMany 
    {

        return $this->belongsToMany(Product::class)->using(ProductProvider::class)->withPivot('stock', 'cost');

    }
}
