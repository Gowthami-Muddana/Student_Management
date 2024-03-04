<?php

namespace App\Http\Controllers;

use illuminate\view\view;


class HomeController extends Controller
{
    public function index(): view
    {
        
        return view('homes.index');
    }
}
