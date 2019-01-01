<?php

namespace App\Repository;

use Uuid;

class Repository
{
    protected $model = null;

    public function __construct($model) {
        $this->model = $model;
    }

    /**
     * Получить все данные из Бд-х
     *
     * @param string $select
     * @return void
     */
    public function get($select = "*")
    {
        $builder = $this->model->select($select)->get();
        return $builder;
    }

    /**
     * Найти строго по Uuid
     *
     * @param boolean $uuid
     * @return void
     */
    public function findByUuid($uuid = false)
    {
        if ($uuid) {
            $builder = $this->model->where("uuid", "=", $uuid)->first();
            if ($builder)
                return $builder;
            else
                abort(404);
        } else {
            abort(404);
        }
    }

    /**
     * Найти строго по Slug
     *
     * @param boolean $uuid
     * @return void
     */
    public function findBySlug($slug = false)
    {
        if ($slug) {
            $builder = $this->model->where("slug", "=", $slug)->first();
            if ($builder)
                return $builder;
            else
                abort(404);
        } else {
            abort(404);
        }
    }

    /**
     * Создать данный на Бд-х
     *
     * @param boolean $data
     * @return void
     */
    public function create($data = false)
    {
        if ($data) {
            return $this->model->create($data);
        } else {
            abort(404);
        }
    }

    /**
     * Обновление данный на Бд-х
     *
     * @param boolean $data
     * @return void
     */
    public function update($data = false)
    {
        if ($data) {
            return $this->model->update($data);
        } else {
            abort(404);
        }
    }

}
