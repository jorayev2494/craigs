<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    protected $fillable = ["icon", "slug", "group", "active"];

    /**
     * Отношение Многие ко Многим с выборкой под раздела меню
     *
     * @return void
     */
    public function selectees(bool $active = false)
    {
        return $this->hasMany(AdminMenuSelect::class, 'admin_menu_id', 'id');
    }


}
