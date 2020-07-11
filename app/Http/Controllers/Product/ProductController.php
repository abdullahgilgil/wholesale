<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       return view('product.index');
    }

    public function create()
    {
       $brands = Brand::all();
       $categories = Category::all();
       return view('product.create', compact('brands', 'categories'));
    }

   public function store(Request $request)
   {
      $data = $request->validate([
         'name' => 'required',
         'product_code' => 'required|unique:products',
         'pack_barcode' => 'required',
         'single_barcode' => 'required',
         'size' => 'required',
         'vat_code' => 'required',
         'pack_price' => 'required',
         'single_price' => 'required',
         'case_qty' => 'required',
         'category_id' => 'required',
         'brand_id' => 'required',
         'images' => 'required',
      ]);
      return $data;
   }



}
