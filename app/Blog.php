<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function create_blog($title,$body)
    {
        $this->title=$title;
        $this->body=$body;
        $this->save();

    }
}
