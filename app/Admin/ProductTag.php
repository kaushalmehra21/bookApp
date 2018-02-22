<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    /**
     * The roles that belong to the user.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
