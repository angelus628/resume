<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function author()
    {
        $this->belongsTo('App\Author\Author');
    }
}
