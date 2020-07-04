<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index ()
    {
       return view('brand.index');
    }

    public function create ()
    {
       return view('brand.create');
    }


}
