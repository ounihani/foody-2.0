<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    public function users(){
        return $this->hasOne('App\User');
    }

    public function store(){
        return $this->hasOne('App\Store');
    }

    

}
