<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    public function user(){
        return $this->hasOne('App\User');
    }
    public function store(){
        return $this->hasOne('App\Store');
    }
}
