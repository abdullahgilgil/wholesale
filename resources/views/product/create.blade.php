@extends("layouts.app")
@section("title", "WholeSale | Create New Product")
@section("content")
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Add New Product</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active">Add Product</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-8 offset-lg-2">
               @if(session()->has('message'))
                  <div style="position: relative; min-height: 60px;" class="col-12">
                     <div class="alert alert-dismissible alert-{{session('message_tur')}}" role="alert" style="position: absolute; top: 10px;">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{strtoupper(session('message_tur'))}}</strong>
                        <strong>{{session('message')}}</strong>
                     </div>
                  </div>
               @endif
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Add New Product</h3>

                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" id="addCategory" enctype='multipart/form-data' method="POST" action="{{route('product.store')}}">
                     @csrf
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="name" class="col-sm-2 col-form-label ">Name</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Product Name" value="{{old('name')}}">
                              @if($errors->has('name'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('name')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Name -->
                        <div class="form-group row">
                           <label for="title" class="col-sm-2 col-form-label">Title</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title" placeholder="Product Title" value="{{old('title')}}">
                              @if($errors->has('title'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('title')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Title -->
                        <div class="form-group row">
                           <label for="product_code" class="col-sm-2 col-form-label">Product Code</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control {{$errors->has('product_code') ? 'is-invalid' : ''}}" id="product_code" name="product_code" placeholder="Product Code" value="{{old('product_code')}}">
                              @if($errors->has('product_code'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('product_code')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Product Code -->
                        <div class="form-group row">
                           <label for="pack_barcode" class="col-sm-2 col-form-label">Pack Barcode</label>
                           <div class="col-sm-10">
                              <input type="number" class="form-control {{$errors->has('pack_barcode') ? 'is-invalid' : ''}}" id="pack_barcode" name="pack_barcode" placeholder="Pack Barcode" value="{{old('pack_barcode')}}">
                              @if($errors->has('pack_barcode'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('pack_barcode')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Pack Barcode -->
                        <div class="form-group row">
                           <label for="single_barcode" class="col-sm-2 col-form-label">Single Barcode</label>
                           <div class="col-sm-10">
                              <input type="number" class="form-control {{$errors->has('single_barcode') ? 'is-invalid' : ''}}" id="single_barcode" name="single_barcode" placeholder="Single Barcode" value="{{old('single_barcode')}}">
                              @if($errors->has('single_barcode'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('single_barcode')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Single Barcode -->
                        <div class="form-group row">
                           <label for="size" class="col-sm-2 col-form-label"> Size</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control {{$errors->has('size') ? 'is-invalid' : ''}}" id="size" name="size" placeholder=" Size" value="{{old('size')}}">
                              @if($errors->has('size'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('size')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Size -->
                        <div class="form-group row">
                           <label for="type" class="col-sm-2 col-form-label">Type</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" id="type" name="type" placeholder="Type" value="{{old('type')}}">
                              @if($errors->has('type'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('type')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Type -->
                        <div class="form-group row">
                           <label for="vat_code" class="col-sm-2 col-form-label">VAT Code</label>
                           <div class="col-sm-10">
                              <input type="number" class="form-control {{$errors->has('vat_code') ? 'is-invalid' : ''}}" id="vat_code" name="vat_code" placeholder="VAT Code" value="{{old('vat_code')}}">
                              @if($errors->has('vat_code'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('vat_code')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Vat Code -->

                        <div class="form-group row">
                           <label for="cost_price" class="col-sm-2 col-form-label">Cost Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('cost_price') ? 'is-invalid' : ''}}" id="cost_price" name="cost_price" placeholder="Cost Price 12.25" value="{{old('cost_price')}}">
                              @if($errors->has('cost_price'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('cost_price')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Cost Price -->
                        <div class="form-group row">
                           <label for="pack_price" class="col-sm-2 col-form-label">Pack Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('pack_price') ? 'is-invalid' : ''}}" id="pack_price" name="pack_price" placeholder="Pack Price" value="{{old('pack_price')}}">
                              @if($errors->has('pack_price'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('pack_price')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Pack Price -->
                        <div class="form-group row">
                           <label for="single_price" class="col-sm-2 col-form-label">Single Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('single_price') ? 'is-invalid' : ''}}" id="single_price" name="single_price" placeholder="Single Price" value="{{old('single_price')}}">
                              @if($errors->has('single_price'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('single_price')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Single Price -->

                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label" for="category">Category</label>
                           <div class="col-sm-10">
                              <div class="select2-purple {{$errors->has('categories') ? 'is-invalid' : ''}}" data-select2-id="38">
                                 <select class="select2 select2-hidden-accessible" value="{{old('categories[]')}}" name="categories[]" id="category" multiple="" data-placeholder="Select Parent Category" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">

                                    {{--                                    <option data-select2-id="0" value="0">Select A Category</option>--}}
                                    @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                 </select>
                                 @if($errors->has('categories'))
                                    <div class="text-danger mt-2">
                                       {{$errors->first('categories')}}
                                    </div>
                                 @endif
                              </div>
                           </div>
                        </div><!-- Category -->
                        <div class="form-group row">
                           <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                           <div class="col-sm-10">
                              <select class="form-control" id="brand" name="brand_id">
                                 <option value="">Select Brand</option>
                                 @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                 @endforeach
                              </select>
                              @if($errors->has('brand_id'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('brand_id')}}
                                 </div>
                              @endif
                           </div>

                        </div><!-- Brand -->

                        <div class="form-group row">
                           <label for="images" class="col-sm-2 col-form-label">Product Image(s)</label>
                           <div class="input-group col-sm-10">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input {{$errors->has('images') ? 'is-invalid' : ''}}" id="images" name="images[]" multiple>
                                 <label class="custom-file-label" for="exampleInputFile">Choose Product Image(s)</label>
                              </div>
                              @if($errors->has('images'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('images')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Images -->

                        <div class="form-group row">
                           <label for="layer_price" class="col-sm-2 col-form-label">Layer Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('layer_price') ? 'is-invalid' : ''}}" id="layer_price" name="layer_price" placeholder="Layer Price" value="{{old('layer_price')}}">
                              @if($errors->has('layer_price'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('layer_price')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Layer Price -->
                        <div class="form-group row">
                           <label for="pallet_price" class="col-sm-2 col-form-label">Pallet Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('pallet_price') ? 'is-invalid' : ''}}" id="pallet_price" name="pallet_price" placeholder="Pallet Price" value="{{old('pallet_price')}}">
                              @if($errors->has('pallet_price'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('pallet_price')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Pallet Price -->

                        <div class="form-group row">
                           <label for="case_qty" class="col-sm-2 col-form-label">Case Quantity</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('case_qty') ? 'is-invalid' : ''}}" id="case_qty" name="case_qty" placeholder="Case Quantity" value="{{old('case_qty')}}">
                              @if($errors->has('case_qty'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('case_qty')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Case Quantity -->
                        <div class="form-group row">
                           <label for="layer_qty" class="col-sm-2 col-form-label">Layer Quantity</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('layer_qty') ? 'is-invalid' : ''}}" id="layer_qty" name="layer_qty" placeholder="Layer Quantity" value="{{old('layer_qty')}}">
                              @if($errors->has('layer_qty'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('layer_qty')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Layer Quantity -->
                        <div class="form-group row">
                           <label for="pallet_qty" class="col-sm-2 col-form-label">Pallet Quantity</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('pallet_qty') ? 'is-invalid' : ''}}" id="pallet_qty" name="pallet_qty" placeholder="Pallet Quantity" value="{{old('pallet_qty')}}">
                              @if($errors->has('pallet_qty'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('pallet_qty')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Pallet Quantity -->
                        <div class="form-group row">
                           <label for="total_stock" class="col-sm-2 col-form-label">Total Stock</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control {{$errors->has('total_stock') ? 'is-invalid' : ''}}" id="total_stock" name="total_stock" placeholder="Total Stock" value="{{old('total_stock')}}">
                              @if($errors->has('total_stock'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('total_stock')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Total Stock -->


                        <div class="form-group row">
                           <label for="description" class="col-sm-2 col-form-label">Description</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group {{$errors->has('description') ? 'is-invalid' : ''}}" placeholder="Place some text here" id="description" name="description"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                              @if($errors->has('description'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('description')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Description -->
                        <div class="form-group row">
                           <label for="features" class="col-sm-2 col-form-label">Features</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group {{$errors->has('features') ? 'is-invalid' : ''}}" placeholder="Place some text here" id="features" name="features"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                              @if($errors->has('features'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('features')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Features -->
                        <div class="form-group row">
                           <label for="warnings" class="col-sm-2 col-form-label">Warnings</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group {{$errors->has('warnings') ? 'is-invalid' : ''}}" placeholder="Place some text here" id="warnings" name="warnings"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                              @if($errors->has('warnings'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('warnings')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Warnings -->
                        <div class="form-group row">
                           <label for="specifications" class="col-sm-2 col-form-label">Specifications</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group {{$errors->has('specifications') ? 'is-invalid' : ''}}" placeholder="Place some text here" id="specifications" name="specifications"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                            </textarea>
                              @if($errors->has('specifications'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('specifications')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Specifications -->
                        <div class="form-group row">
                           <label for="benefits" class="col-sm-2 col-form-label">Benefits</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group {{$errors->has('benefits') ? 'is-invalid' : ''}}" placeholder="Place some text here" id="benefits" name="benefits"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                            </textarea>
                              @if($errors->has('benefits'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('benefits')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Benefits -->
                        <div class="form-group row">
                           <label for="uses" class="col-sm-2 col-form-label">Uses</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group {{$errors->has('uses') ? 'is-invalid' : ''}}" placeholder="Place some text here" id="uses" name="uses"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                            </textarea>
                              @if($errors->has('uses'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('uses')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Uses -->
                        <div class="form-group row">
                           <label for="tips" class="col-sm-2 col-form-label">Tips</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group {{$errors->has('tips') ? 'is-invalid' : ''}}" placeholder="Place some text here" id="tips" name="tips"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                            </textarea>
                              @if($errors->has('tips'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('tips')}}
                                 </div>
                              @endif
                           </div>
                        </div><!-- Tips -->



                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <a href="{{route('product.index')}}" class="btn btn-warning">All Products</a>
                        <button type="submit" class="btn btn-info float-right">Submit</button>
                     </div>
                     <!-- /.card-footer -->
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection()

@push("customCss")
   <!-- Select2 -->
   <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush()

@push("customJs")
   <!-- Select2 -->
   <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

   <script>
       $(function(){
           //Initialize Select2 Elements
           $('.select2').select2();

           //Initialize Select2 Elements
           $('.select2bs4').select2({
               theme: 'bootstrap4'
           });
       });
   </script>
@endpush()
