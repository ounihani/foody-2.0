<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function store(){
        return $this->belongsTo('App\Store');
    }
}
