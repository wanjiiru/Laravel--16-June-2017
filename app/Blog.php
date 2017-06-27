<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['title', 'content'];

    public function getShortContentAttribute ()
    {
        return substr ( $this->content, 0, random_int ( 60, 200 ) ) . '.....';

    }
}