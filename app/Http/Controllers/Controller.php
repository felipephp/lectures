<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function firstFunc(){
        return view('view');
//        return 'The first function!';
    }
}
