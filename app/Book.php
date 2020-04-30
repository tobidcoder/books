<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'isbn', 'title', 'description', 
    ];
    
    // The user which is author, that belong to the Books

    public function users(){
        return $this->belongsToMany(User::class, 'book_user');
    }

}
