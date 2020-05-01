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

    public function author(){
        return $this->belongsToMany('App\Author', 'author_book');
    }

   public function reviews()
   {
       return $this->hasMany('App\Review');
   }
  
}
