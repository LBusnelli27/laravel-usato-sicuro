<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;

class Car extends Model
{
    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function colors() {
        return $this->belongsToMany('App\Color');
    }
}
