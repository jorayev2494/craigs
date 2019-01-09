<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', "lastname", 'email', "avatar", "phone", "phone_verify", "phone_code", "sex", 'password', "uuid", "role_id", "site", "facebook", "instagram", "telegram", "vk", "api_token", "block", "role_id", "country_id"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'uuid';
    // }

    /**
     * Генерировать Token из 60 символов
     *
     * @return void
     */
    public function generateToken()
    {
        return str_random(60);
    }

    /**
     * Сгенерировать случайный число из 6 символов
     *
     * @param Type $var
     * @return void
     */
    public function generateRandom(Type $var = null)
    {
        return random_int(100000, 999999);
    }


    /**
     * Отношение между ролями пользователей
     *
     * @return void
     */
    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }



}
