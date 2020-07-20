<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dropdown()
    {
       $categories = Category::where('parent_category', '0')->get();
       return view('frontside.dropdown', compact('categories'));
    }

   public function brands()
   {
      $categories = Category::where('parent_category', '0')->get();
      return view('frontside.brands', compact('categories'));
   }

   public function categories()
   {
      $categories = Category::where('parent_category', '0')->get();
      return view('frontside.categories', compact('categories'));
   }

   public function products()
   {
      $categories = Category::where('parent_category', '0')->get();
      return view('frontside.products', compact('categories'));
   }



}
