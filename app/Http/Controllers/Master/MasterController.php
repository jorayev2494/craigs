<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Support\Arr;
use View;
use Lang;
use App\Repository\Repository;
use App\Models\Admin\AdminMenu;

class MasterController extends Controller
{

    // Данные сайта
    protected $user_r;              // Репозитории Пользователей
    protected $role_r;              // Репозитории Ролей
    protected $country_r;           // Репозитории Стран


    // Данные Сайдбар Администратора
    protected $adn_sidebar;
    protected $adn_menu_select;

    #region Данные к виду
    protected $title = null;
    protected $template = null;
    protected $vars = array();
    #endregion

    public function __construct() {
        $this->adn_sidebar = new Repository(new AdminMenu);
    }

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
     * Показать Интерфейс Запаковкой с Compact
     *
     * @param [type] $view
     * @param boolean $dataName
     * @param boolean $data
     * @return void
     */
    public function outputViewComp($view, array $compact = [])
    {
        if (is_array($compact) && count($compact)) {
            foreach ($compact as $name => $value) {
                $this->vars = Arr::add($this->vars, $name, $value);
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
     * Подготовка header страница
     *
     * @param string $view
     * @param string $breadName
     * @param string $title
     * @return void
     */
    protected function pageHeader(string $view = null, string $breadName = null, string $title = null)
    {
        $this->breadcrumbs($breadName, $title);
        // Проверка не пустой ли $view и получение вида
        $headerPage = $view ? $this->outputView("admin.includes.page_headers." . $view)->render() : abort(404);
        $this->vars = Arr::add($this->vars, "page_header", $headerPage);

    }

    /**
     * Загрузка сайт бар меню
     *
     * @return void
     */
    protected function adminSidebar()
    {
        $admin_menus = $this->adn_sidebar->get("*", true);
        $this->vars = Arr::add($this->vars, "admin_menus", $admin_menus);
    }

}
