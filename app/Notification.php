<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function user(){
        return $this->hasMany('App\User');
    }
    
}