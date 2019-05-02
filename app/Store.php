<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function photos(){
        return $this->hasMany('App\Photos');
    }

    public function collections(){
        return $this->hasMany('App\Collection');
    }
    
    public function categories(){
        return $this->hasMany('App\Category');
    }

    public function menu(){
        return $this->hasOne('App\Menu');
    }

    public function reviews(){
        return $this->hasMany('App\Reviews');
    }

    public function bookmarks(){
        return $this->hasMany('App\Bookmark');
    }
}
