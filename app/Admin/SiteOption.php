<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class SiteOption extends Model
{
    public function getOption()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
