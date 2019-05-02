<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function Store(){
        return $this->hasMany('App\Sore');
    }
}
