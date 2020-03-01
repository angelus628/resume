<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function articles()
    {
        $this->hasMany('App\Article');
    }
}
