<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
       return view('category.index');
    }

   public function show()
   {
      return view('category.index');
   }

   public function create()
   {
      return view('category.create');

   }



}
