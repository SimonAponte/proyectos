<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookEditorial extends Model
{
    protected $table = 'book_editorial';

    public function users()
    {
        return $this->belongsToMany(User::class, 'book_editorial_user')
                    ->withTimestamps()
                    ->withPivot('comment'); // Agregar campos extras de la tabla intermedia si los usas
    }
}
