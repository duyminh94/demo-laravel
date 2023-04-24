<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home() {
        $key = 'value';
        $home = 'Home';
        $menu = 'Menu1';

        $data = [
            [   'id' => 1,
                'image' =>  'string',
                'title' => 'string',
                'description' => 'text'
            ],
            [   
                'id' => 2,
                'image' =>  'string',
                'title' => 'string',
                'description' => 'text'
            ],
            [   
                'id' => 3,
                'image' =>  'string',
                'title' => 'string',
                'description' => 'text'
            ],
            [   
                'id' => 4,
                'image' =>  'string',
                'title' => 'string',
                'description' => 'text'
            ],
        ];
        // return view('admin.home.home', ['key' => 'value']);
        return view('admin.home.home', compact('key', 'home', 'menu', 'data'));
    }

    public function dashboard() {
        $menu = 'Menu';
        return view('admin.home.dashboard', compact('menu'));
    }
}
