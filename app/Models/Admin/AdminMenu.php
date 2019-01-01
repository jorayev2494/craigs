<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    protected $fillable = ["icon", "slug", "active"];
}
