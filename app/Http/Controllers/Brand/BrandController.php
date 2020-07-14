<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
   public function index ()
   {
      $brands = Brand::orderBy('name', 'desc')->get();
      return view('brand.index', compact('brands'));
   }

   public function create ()
   {
      return view('brand.create');
   }

   public function store(Request $request)
   {
      $data = $request->validate([
         'name' => 'required | min:3',
         'description' => 'sometimes',
         'image_path' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
      ]);

      $data['slug'] = Str::slug($request->name, '-');

      $image = $request->file('image_path');

      $imagepath = Storage::disk('public')->putFile('/brand_images', $image);
      $data['image_path'] = $imagepath;

      // IMAGE INTERVENTION HERE
//      $img = Image::make(public_path('storage/' . $imagepath))->resize('150', '150');
//      $img->save();

      $brand = Brand::create($data);

      return redirect()->route('brand.create')
            ->with(['message'=> $brand->name.' Added', 'message_tur' => 'success']);

   }

   public function edit($id, $slug)
   {
      $brand = Brand::where(['id' => $id, 'slug' => $slug])->first();
      return view('brand.edit', compact('brand'));
   }

   public function update(Request $request, $id)
   {
      $brand = Brand::where('id', $id)->first();


      $data = $request->validate([
         'name' => 'required | min:4',
         'description' => 'sometimes',
         'image_path' => 'sometimes|mimes:jpeg,jpg,png,gif|max:10000'
      ]);

      $data['slug'] = Str::slug($request->name, '-');

      if($request->hasFile('image_path')) {
         if($brand->image_path !== null){
            Storage::disk('public')->delete($brand->image_path);
         }

         $image = $request->file('image_path');

         $imagepath = Storage::disk('public')->putFile('/brand_images', $image);
         $data['image_path'] = $imagepath;

         // IMAGE INTERVENTION HERE
//         $img = Image::make(public_path('storage/' . $imagepath))->resize('150', '150');
//         $img->save();

      }
      $brand->update($data);

      return redirect()->route('brand.edit', ['brand' => $brand->id, 'slug' => $brand->slug])
            ->with(['message'=> $brand->name.' Updated', 'message_tur' => 'success']);

   }


   public function destroy(Request $request)
   {
      $id = $request->input('delete');
      $brand = Brand::where('id', $id)->first();

      if($brand->image_path !== null){
         Storage::disk('public')->delete($brand->image_path);
      }
      $brand->delete();

      return redirect()->route('brand.index')
            ->with(['message'=>'Brand Deleted', 'message_tur' => 'success']);

      }
}
