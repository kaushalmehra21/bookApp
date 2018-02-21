<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /*public function categories()
    {
        return $this->hasMany('App\Admin\Category');
    }*/

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
