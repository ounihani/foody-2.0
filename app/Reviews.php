<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    public function store(){
        return $this->hasMany('App\Store');
    }
    public function user(){
        return $this->hasOne('App\User');
    }
}
