<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Master\MasterController;
use App\Repository\Repository;
use App\Models\Admin\AdminMenuSelect;
use App\Models\Admin\AdminMenu;
use App\Http\Requests\Admin\MenuSelectRequest;

class MenuSelectController extends MasterController
{
    public function __construct() {
        parent::__construct();
        $this->adn_menu_select = new Repository(new AdminMenuSelect);
        $this->adminSidebar();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->breadcrumbs("Admin Sidebar Select", "menu_selectees");
        $adn_menus = $this->adn_sidebar->get();
        $adn_menu_selects = $this->adn_menu_select->get();
        return $this->outputView("admin.templates.menus.selectees.index", ["adn_menu_selects", "adn_menus"], [$adn_menu_selects, $adn_menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->breadcrumbs("Admin Sidebar Select", "menu_selectees");
        $adn_menus = $this->adn_sidebar->get();
        $adn_menu_selects = $this->adn_menu_select->get();
        return $this->outputView("admin.templates.menus.selectees.create", ["adn_menu_selects", "adn_menus"], [$adn_menu_selects, $adn_menus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuSelectRequest $request)
    {
        $data = $request->all();

        $test = $this->adn_menu_select->create([
            "slug"                  =>  $data["slug"],
            "admin_menu_id"         =>  $data["menu_id"],
            "select_id"             =>  $data["select_menu_id"] ?? null,
            "active"                =>  $data["active"],
        ]);

        return redirect()->route("admin.menu_selectees.index")->with("success", "Под раздел меню успешно создан!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($menu)
    {
        $this->breadcrumbs("Admin Sidebar Select", "menu_selectees");
        $select = $this->adn_menu_select->findBySlug($menu);
        return $this->outputView("admin.templates.menus.selectees.show", "select", $select);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($menu)
    {
        $this->breadcrumbs("Admin Sidebar Select", "menu_selectees");
        $select = $this->adn_menu_select->findBySlug($menu);
        $adn_menus = $this->adn_sidebar->get();
        $adn_menu_selects = $this->adn_menu_select->get();
        return $this->outputView("admin.templates.menus.selectees.edit", ["select", "adn_menu_selects", "adn_menus", "admin_menus"], [$select, $adn_menu_selects, $adn_menus, $adn_menus]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuSelectRequest $request, $menu)
    {
        $data = $request->except("_token", "_method");
        $menu = $this->adn_menu_select->findBySlug($menu);
        $menu->update([
            "slug"                  =>  $data["slug"],
            "admin_menu_id"         =>  $data["menu_id"],
            "select_id"             =>  $data["select_menu_id"] ?? null,
            "active"                =>  $data["active"],
        ]);
        return redirect()->route('admin.menu_selectees.index')->with("success", "Выборка меню сайта успешно обновлен!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($menu)
    {
        $menu = $this->adn_menu_select->findBySlug($menu);

        // $menu->admin_menu_id = 0;
        // $menu->select_id = 0;
        // $menu->update($menu->toArray());
        // dd($menu);
        return redirect()->route('admin.menu_selectees.index')->with("danger", "Выборка меню сайта невозможно удалить");
        // return redirect()->route('admin.menu_selectees.index')->with("success", "Выборка меню сайта успешно удален");
    }
}
