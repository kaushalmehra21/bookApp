<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function languages()
    {
        return $this->belongsTo(Language::class, 'language_id', 'id');
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
