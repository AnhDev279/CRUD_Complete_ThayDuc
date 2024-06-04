<?php

namespace Anhhh\CrudGhepGiaoDien\Controllers\Client;

use Anhhh\CrudGhepGiaoDien\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'AnhNTPH36206';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}