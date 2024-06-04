<?php

namespace Anhhh\CrudGhepGiaoDien\Controllers\Admin;

use Anhhh\CrudGhepGiaoDien\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
