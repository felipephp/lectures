<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//$admin = [
//    'home' => new App\Http\Controllers\Controller()
//];

class admin {
    public function home()
    {
        return new App\Http\Controllers\Controller();
    }
}

$admin = new admin();

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'admin'], function () use ($app, $admin){

    $app->get('/home', function () use ($admin){
        return $admin->home()->index();
    });

});