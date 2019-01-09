<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Master\MasterController;
use App\Repository\Repository;
use App\Models\User;
use App\Models\Country;
use App\Models\Role;

class UserController extends MasterController
{

    public function __construct() {
        parent::__construct();
        parent::adminSidebar();
        $this->user_r       = new Repository(new User);
        $this->role_r       = new Repository(new Role);
        $this->country_r    = new Repository(new Country);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\Models\User::first()->toArray();
        dd($user);
        parent::pageHeader("user_headers", "Admin Users", "users");
        $users = $this->user_r->get();
        return $this->outputView("admin.templates.users.index", "users", $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        parent::pageHeader("user_headers", "Admin Users Create", "create_user");
        $roles = $this->role_r->getActive();
        $countries = $this->country_r->getActive();
        // dd($roles);
        return $this->outputViewComp("admin.templates.users.create", compact("countries", "roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo __METHOD__;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $this->breadcrumbs("Admin Users", "show_user");
        $user = $this->user_r->findByUuid($uuid);
        dd($user);
        return $this->outputView("admin.templates.users.show", "user", $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo __METHOD__;
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
