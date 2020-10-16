<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function create_portfolio($title,$body)
    {
        $this->title=$title;
        $this->body=$body;
        $this->save();

    }
}
