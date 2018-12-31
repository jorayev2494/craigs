<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Models\User;

class IndexController extends Master\MasterController
{

    public function __construct() {
        $this->user_r = new Repository(new User);
    }

    public function index($uuid)
    {
        $user = $this->user_r->findByUuid($uuid);
        return $this->outputView("welcome", "user", $user);
    }

}
