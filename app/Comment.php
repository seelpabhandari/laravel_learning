<?php

namespace App;


class comment extends Model
{
    public function task()
    {
    	return $this->belongsTo(Task::class);
    }
      public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
