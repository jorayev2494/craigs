<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Master\MasterController;
use App\Repository\Repository;
use App\Models\Admin\AdminMenu;
use App\Models\Admin\AdminMenuSelect;
use App\Http\Requests\Admin\AdminSidebarRequest;


class MenuController extends MasterController
{

    public function __construct() {
        parent::__construct();
        $this->admin_menu_select = new Repository(new AdminMenuSelect);
        $this->adminSidebar();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->breadcrumbs("Admin Sidebar", "selectees_sidebar");
        return $this->outputView("admin.templates.menus.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->breadcrumbs("Admin Sidebar", "create_sidebar");
        return $this->outputView("admin.templates.menus.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminSidebarRequest $request)
    {
        $data = $request->except("_token");
        $this->adn_sidebar->create($data);
        return redirect()->route('admin.menus.index')->with("success", "Меню сайта успешно создан!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $this->breadcrumbs("Admin Sidebar", "test");
        $menu = $this->adn_sidebar->findBySlug($slug);
        return $this->outputView("admin.templates.menus.show", "menu", $menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $this->breadcrumbs("Admin Sidebar", "test");
        $menu = $this->adn_sidebar->findBySlug($slug);
        return $this->outputView("admin.templates.menus.edit", "menu", $menu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminSidebarRequest $request, $slug)
    {
        $menu = $this->adn_sidebar->findBySlug($slug);
        $menu->update($request->except("_token", "_method"));
        return redirect()->route('admin.menus.index')->with("success", "Меню сайта успешно обновлен!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $menu = $this->adn_sidebar->findBySlug($slug);
        $menu->delete();
        return redirect()->route('admin.menus.index')->with("success", "Меню сайта успешно удален");
    }
}
