<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index(){
//        echo 'here1';
//        return 'Ola!';
        return view('view');
//        return 'The first function!';
    }
}
