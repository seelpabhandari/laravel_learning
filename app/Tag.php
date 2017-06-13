<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
       public function posts()
     {
        // any task may have many tags
        //any tag may be applied to
       return $this->belongsToMany(Post::class);
     }
}
