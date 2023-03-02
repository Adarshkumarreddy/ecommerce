<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

class Brandscontroller extends Controller
{
    public function index()
    {
        return view('brands');
    }
}
