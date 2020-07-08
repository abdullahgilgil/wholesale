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
       $brands = Brand::all();
       return view('brand.index', compact('brands'));
    }

    public function create ()
    {
       return view('brand.create');
    }


    public function store(Request $request)
    {
       $data = $request->validate([
          'name' => 'required | min:4',
          'description' => 'sometimes',
          'image_path' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
       ]);

       $data['slug'] = Str::slug($request->name, '-');

       $image = $request->file('image_path');

       $imagepath = Storage::disk('public')->putFile('/brand_images', $image);
       $data['image_path'] = $imagepath;

       // IMAGE INTERVENTION HERE
       $img = Image::make(public_path('storage/' . $imagepath))->fit('600', '360');
       $img->save();

       $brand = Brand::create($data);

       return redirect()->route('brand.create')
          ->with(['message'=> $brand->name.' Added', 'message_tur' => 'success']);

    }

}
