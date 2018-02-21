<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the comments for the blog post.
     */
    public function user_details()
    {
        return $this->hasOne(UserDetail::class);
    }
}
