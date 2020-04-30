<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     //
     protected $fillable = [
        'book_id', 'review', 'comment', 'user_id',	
	
    ];
}
