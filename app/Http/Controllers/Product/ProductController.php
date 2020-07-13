<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    public function validateImagesAndCategories()
    {
        return request()->validate([
            'categories' => 'required',
            'images' => 'required',
        ]);
    }

    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products') );
    }

    public function create()
    {
       $brands = Brand::all();
       $categories = Category::all();
       return view('product.create', compact('brands', 'categories'));
    }

   public function store(Request $request)
   {
      $this->validateImagesAndCategories();

      $data = $request->validate([
         'name' => 'required',
         'product_code' => 'required|unique:products',
         'pack_barcode' => 'required',
         'single_barcode' => 'required',
         'size' => 'required',
         'type' => 'required',
         'vat_code' => 'required',
         'pack_price' => 'required',
         'single_price' => 'required',
         'case_qty' => 'required',
         'brand_id' => 'required',
      ]);
      $data['slug'] = Str::slug($request->name, '-');

      $product = Product::create($data);

      if($product) {

          $product->categories()->attach($request->categories);

          // IF REQUEST HAS FILE
          if(request()->hasFile('images')){
              $images = request()->file('images');
              foreach ($images as $image) {
                  // FILE UPLOADS CODE HERE
                  $imagepath = Storage::disk('public')->putFile('/product_images', $image);

                  $productImage = $product->images()->create([
                      'product_id' => $product->id,
                      'image_path' => $imagepath
                  ]);

                  // IMAGE INTERVENTION HERE
                  $img = Image::make(public_path('storage/' . $productImage->image_path))->resize('600', '360');
                  $img->save();
              } // foreach
          }


      }

      return redirect()->route('product.create')
                ->with(['message' => $product->name . ' Added', 'message_tur' => 'success']);


   }  // STORE

    public function edit(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $brands = Brand::all();
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories', 'brands'));
    } // EDIT

    public function update (Request $request, $id)
    {
//       $this->validateImagesAndCategories();

       $data = $request->validate([
          'name' => 'required',
          'product_code' => 'required|unique:products',
          'pack_barcode' => 'required',
          'single_barcode' => 'required',
          'size' => 'required',
          'type' => 'required',
          'vat_code' => 'required',
          'pack_price' => 'required',
          'single_price' => 'required',
          'case_qty' => 'required',
          'brand_id' => 'required',
       ]);
       $data['slug'] = Str::slug($request->name, '-');

       $product = Product::where('id', $id)->first();
       $product->update($data);
       $product->categories()->sync($request->categories);

       // IF REQUEST HAS FILE
       if(request()->hasFile('images')){
          foreach($product->images as $img):
             Storage::disk('public')->delete($img->image_path);
             $product->images()->delete($img);
          endforeach;

          $images = request()->file('images');
          foreach ($images as $image):
             // FILE UPLOADS CODE HERE
             $imagepath = Storage::disk('public')->putFile('/product_images', $image);

             $productImage = $product->images()->create([
                'product_id' => $product->id,
                'image_path' => $imagepath
             ]);

             // IMAGE INTERVENTION HERE
             $img = Image::make(public_path('storage/' . $productImage->image_path))->resize('600', '360');
             $img->save();
          endforeach;
       }


       return redirect()->route('product.edit',['product' => $product->id, 'slug' => $product->slug])
          ->with(['message' => $product->name . ' Updated', 'message_tur' => 'success']);

    } // UPDATE


   public function destroy(Request $request)
   {
      $product = Product::where('id', $request->delete)->first();

      foreach($product->images as $img):
         Storage::disk('public')->delete($img->image_path);
      endforeach;

      $product->delete();

      return redirect()->route('product.index')
         ->with(['message' => 'Product Deleted', 'message_tur' => 'success']);
   }

}
