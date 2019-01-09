<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Models\User;
use App\Models\Admin\AdminMenu;

class IndexController extends Master\MasterController
{

    public function __construct() {
        $this->user_r = new Repository(new User);
        $this->admin_sidebar = new Repository(new AdminMenu);
    }

    public function index($uuid = null)
    {
        $admin_menus = $this->admin_sidebar->get();
        // dd($admin_menus);
        return $this->outputView("admin.templates.index");
    }

}
