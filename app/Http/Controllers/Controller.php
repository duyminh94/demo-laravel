<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        // View::share('menu', 'Menu 2');
        view()->composer('web*', function($view){
            $view->with('menu', 'NewNet');
        });
        view()->composer('admin*', function($view){
            $view->with('menu', 'NewNet-admin');
        });
    }
}
