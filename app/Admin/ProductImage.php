<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
