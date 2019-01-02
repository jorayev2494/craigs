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
        $this->admin_menu = new Repository(new AdminMenu);
        $this->adn_menu_select = new Repository(new AdminMenuSelect);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->breadcrumbs("menu_selectees", "menu_selectees");
        $adn_menus = $this->admin_menu->get();
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
        $this->breadcrumbs("menu_selectees", "create_selected");
        $adn_menus = $this->admin_menu->get();
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
            "select_id"             =>  $data["select_menu_id"],
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
    public function show($id)
    {
        echo __METHOD__;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo __METHOD__;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo __METHOD__;
    }
}
