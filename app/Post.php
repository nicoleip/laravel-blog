<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

   protected $fillable = [
       'title', 'content' ,'category_id', 'featured'
   ];
   
   public function category()
   {
       $this->belongsTo('App\Category');
   }
}
