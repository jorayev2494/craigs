<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminMenuSelect extends Model
{
    protected $fillable = ["slug", "admin_menu_id", "select_id", "active"];

    /**
     * Обратная связь между под раздел меню
     *
     * @return void
     */
    public function menus()
    {
        return $this->belongsTo(AdminMenu::class, 'admin_menu_id', 'id');
    }

    /**
     * Отношение один к одному к своей же полю select_id
     *
     * @return void
     */
    public function MySelect()
    {
        return $this->hasOne($this, 'select_id', 'id');
    }

    /**
     * Обратная связь к своему полю select_id
     *
     * @return void
     */
    public function OneSelect()
    {
        return $this->belongsTo($this, 'select_id', 'id');
    }


// public function user()
// {
//     return this->hasOne('App\User', 'foreign_key', 'local_key');
// }


    // public function user()
    // {
    //     return $this->hasOne('App\User', 'foreign_key', 'local_key');
    // }

}
