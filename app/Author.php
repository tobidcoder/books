<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable = [
            'name', 'username'
    ];

    /**
     * The books that belong to author
     */

    public function book()
        {
            return $this->belongsToMany('App\Book', 'author_book', 'book_id', 'author_id');
        }
}
