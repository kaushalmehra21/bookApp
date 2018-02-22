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

    public function languages()
    {
        return $this->belongsTo(Language::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function tags()
    {
        return $this->belongsToMany(ProductTag::class);
    }
}
