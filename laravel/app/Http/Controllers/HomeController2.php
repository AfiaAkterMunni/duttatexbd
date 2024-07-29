<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    public function show()
    {
        return view('pages.index');
    }
}
