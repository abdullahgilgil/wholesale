<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

      $categories = Category::all();
      return view('category.create', compact('categories'));

   }

    public function store(Request $request)
    {
            //       BURAYA DIKKAT //
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////// CATEGORY IMAGE EKLEME FASLINI YAP VE EKLEMEYE BASLA ARTIK /////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $data = $request->validate([
            'name' => 'required | min:4',
            'parent_category' => 'required',
            'description' => 'sometimes|required|min:20'
        ]);
        $data['slug'] = Str::slug($request->name, '-');

//        $cat = Category::create($data);

        return redirect()->route('category.create')
            ->with(
                [
                    'name' => $data['name'],
                    'slug' => $data['slug'],
                    'parent_category' => $data['parent_category'],
                    'description' => $data['description'],
                ]
            );
    }

}
