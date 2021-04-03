<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * @var string[] $fillable
     */
    protected $fillable = ['name', 'email'];

    public function articles()
    {
        $this->hasMany('App\Models\Article');
    }
}
