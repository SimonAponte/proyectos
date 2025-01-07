<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    public function providers(): BelongsToMany
    {

        return $this->belongsToMany(Provider::class)->using(ProductProvider::class)->withPivot('stock', 'cost');

    }

    public function inventories(): HasMany
    {   

        return $this->hasMany(Inventory::class);

    }

    public function sales(): HasMany
    {

        return $this->hasMany(Sale::class);

    }

    public function records(): HasMany
    {

        return $this->hasMany(Record::class);

    }

    public function categories(): BelongsToMany
    {

        return $this->belongsToMany(Category::class);

    }
}
