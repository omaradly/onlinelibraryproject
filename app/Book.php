<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable=[
        'bookname','bookdescription','bookprice','bookimage','keysale','newprice'
     ];
     public function categories(){
         return $this->belongsToMany('App\Category');
     }
}
