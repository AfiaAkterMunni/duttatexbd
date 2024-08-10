<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return view('dashboard.pages.products.index');
    }

    public function create()
    {
        return view('dashboard.pages.products.create');
    }

    public function edit()
    {
        return view('dashboard.pages.products.edit');
    }
}
