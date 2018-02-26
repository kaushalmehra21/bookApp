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
        return $this->hasOne(UserDetail::class, 'user_id', 'id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function vendor_bank_details()
    {
        return $this->hasOne(VendorBankDetail::class, 'user_id', 'id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function vendor_business_details()
    {
        return $this->hasOne(VendorBusinessDetail::class, 'user_id', 'id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function vendor_store_details()
    {
        return $this->hasOne(VendorStoreDetail::class, 'user_id', 'id');
    }
}
