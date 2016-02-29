<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function getPostedAtAttribute($value)
    {
        $date = date("d-m-Y",strtotime($value));
        return $date;
    }
}
