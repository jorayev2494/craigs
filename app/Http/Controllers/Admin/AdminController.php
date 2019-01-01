<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Master\MasterController;
use App\Repository\Repository;
use App\Models\Admin\AdminMenu;
use App\Models\Admin\AdminMenuSelect;
use App\Http\Requests\Admin\AdminSidebarRequest;

class AdminController extends MasterController
{

    public function __construct() {
        $this->admin_menu = new Repository(new AdminMenu);
        $this->admin_menu_select = new Repository(new AdminMenuSelect);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_menus = $this->admin_menu->get();
        $admin_menu_selects = $this->admin_menu_select->get();
        // return $this->outputView("admin.templates.index");
        return $this->outputView("admin.templates.admin_sidebars.index", "admin_menus", $admin_menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->outputView("admin.templates.admin_sidebars.create");
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
        $this->admin_menu->create($data);
        return redirect()->route('dashboard.index')->with("success", "Меню сайта успешно создан!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $menu = $this->admin_menu->findBySlug($slug);
        return $this->outputView("admin.templates.admin_sidebars.show", "menu", $menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $menu = $this->admin_menu->findBySlug($slug);
        return $this->outputView("admin.templates.admin_sidebars.edit", "menu", $menu);
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
        $menu = $this->admin_menu->findBySlug($slug);
        $menu->update($request->except("_token", "_method"));
        return redirect()->route('dashboard.index')->with("success", "Меню сайта успешно обновлен!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $menu = $this->admin_menu->findBySlug($slug);
        $menu->delete();
        return redirect()->route('dashboard.index')->with("success", "Меню сайта успешно удален");
    }
}
