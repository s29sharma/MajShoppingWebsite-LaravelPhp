<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function productimages(){
        return $this->hasMany('App\ProductImage');
    }

    public function getProductnameAttribute($value){
        return strtoupper($value);
    }
}
