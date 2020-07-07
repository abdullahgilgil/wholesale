<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index()
    {
       $categories = Category::all();
       return view('category.index', compact('categories'));
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

        $data = $request->validate([
            'name' => 'required | min:4',
            'parent_category' => 'required',
            'description' => 'sometimes|required|min:20'
        ]);
        $data['slug'] = Str::slug($request->name, '-');

         if($request->hasFile('image_path')) {

             $image = $request->file('image_path');

             $imagepath = Storage::disk('public')->putFile('/category_images', $image);
             $data['image_path'] = $imagepath;

             // IMAGE INTERVENTION HERE
            $img = Image::make(public_path('storage/' . $imagepath))->fit('600', '360');
            $img->save();
         }

         $category = Category::create($data);

        return redirect()->route('category.create')
           ->with(['message'=> $category->name.' Added', 'message_tur' => 'success']);
    }

    public function edit(Request $request,$id)
    {

       $cat = Category::where('id',$id)->first();
//       return $cat;
       $categories = Category::all();
       return view('category.edit', compact('cat', 'categories'));
    }

   public function update(Request $request, $id)
   {
      $category = Category::where('id', $id)->first();
      $data = $request->validate([
         'name' => 'required | min:4',
         'parent_category' => 'required',
         'description' => 'sometimes|required|min:20'
      ]);
      $data['slug'] = Str::slug($request->name, '-');

      if($request->hasFile('image_path')) {
         if($category->image_path !== null){
            Storage::disk('public')->delete($category->image_path);
         }

         $image = $request->file('image_path');

         $imagepath = Storage::disk('public')->putFile('/category_images', $image);
         $data['image_path'] = $imagepath;

         // IMAGE INTERVENTION HERE
//            $img = Image::make(public_path('storage/' . $imagepath))->fit('600', '360');
//            $img->save();
      }
      $category->update($data);

      return redirect()->route('category.edit', $category->id)
         ->with(['message'=> $category->name.' Updated', 'message_tur' => 'success']);
   }


}
