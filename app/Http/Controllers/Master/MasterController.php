<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Support\Arr;
use View;
use Lang;

class MasterController extends Controller
{

    // Данные сайта
    protected $user_r;                          // Репозитории пользователей


    // Данные Сайдбар Администратора
    protected $admin_sidebar;
    protected $adn_menu_select;

    #region Данные к виду
    protected $title = null;
    protected $template = null;
    protected $vars = array();
    #endregion

    /**
     * Показать Интерфейс
     *
     * @param [type] $view
     * @param boolean $dataName
     * @param boolean $data
     * @return void
     */
    public function outputView($view, $dataName = false, $data = false)
    {
        // $this->vars = Arr::add($this->vars, "title", $this->title);

        if ($dataName) {
            if (is_array($dataName) && is_array($data)) {
               foreach ($dataName as $key => $value) {
                   $this->vars = Arr::add($this->vars, $value, $data[$key]);
               }
            } else {
                $this->vars = Arr::add($this->vars, $dataName, $data);
            }
        }

        // dd($this->vars);
        return View::make($view)->with($this->vars);

    }

    /**
     * Передать данный в Интерфейс формате RESTful API
     *
     * @param [type] $view
     * @param boolean $dataName
     * @param boolean $data
     * @return void
     */
    public function outputRESTful(string $view, $dataName = false, $data = false)
    {
        $this->vars = Arr::add($this->vars, "title", $this->title);

        if ($dataName) {
            if (is_array($dataName) && is_array($data)) {
               foreach ($dataName as $key => $value) {
                   $this->vars = Arr::add($this->vars, $value, $data[$key]);
               }
            } else {
                $this->vars = Arr::add($this->vars, $dataName, $data);
            }
        }

        // dd($this->vars);
        return response()->json($this->vars, 200);

    }

    /**
     * Получить хлебные крошки сайта
     *
     * @param boolean $name
     * @return void
     */
    public function breadcrumbs(string $breadName = null, string $title = null)
    {
        // Проверка хлебного крошки сайта
        $breadcrumbs = $breadName ? Breadcrumbs::render($breadName) : abort(404);
        $this->vars = Arr::add($this->vars, "breadcrumbs", $breadcrumbs);

        // Проверка Титульный текст сайта
        $this->title = $title ? Lang::get("lang." . $title) : abort(404);
        $this->vars = Arr::add($this->vars, "title", $this->title);
    }

    /**
     * Загрузка сайт бар меню
     *
     * @return void
     */
    protected function adminSidebar()
    {
        $admin_menus = $this->admin_menu->get();
        $this->vars = Arr::add($this->vars, "admin_menus", $admin_menus);
    }

}
