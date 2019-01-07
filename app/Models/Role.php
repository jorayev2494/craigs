<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ["slug", "permission_id", "active"];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'role_id');
    }
}
