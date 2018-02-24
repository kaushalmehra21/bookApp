<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
