<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
