<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function user(){
        return $this->BelongsTo('App\User');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }
}
