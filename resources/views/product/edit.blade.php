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
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Add New Category</h3>

                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" id="addCategory" enctype='multipart/form-data' method="POST">
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="name" class="col-sm-2 col-form-label">Name</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                           </div>
                        </div><!-- Name -->
                        <div class="form-group row">
                           <label for="title" class="col-sm-2 col-form-label">Title</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" id="title" name="title" placeholder="Product Title">
                           </div>
                        </div><!-- Title -->
                        <div class="form-group row">
                           <label for="product_code" class="col-sm-2 col-form-label">Product Code</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Product Code">
                           </div>
                        </div><!-- Product Code -->
                        <div class="form-group row">
                           <label for="pack_barcode" class="col-sm-2 col-form-label">Pack Barcode</label>
                           <div class="col-sm-10">
                              <input type="number" class="form-control" id="pack_barcode" name="pack_barcode" placeholder="Pack Barcode">
                           </div>
                        </div><!-- Pack Barcode -->
                        <div class="form-group row">
                           <label for="single_barcode" class="col-sm-2 col-form-label">Single Barcode</label>
                           <div class="col-sm-10">
                              <input type="number" class="form-control" id="single_barcode" name="single_barcode" placeholder="Single Barcode">
                           </div>
                        </div><!-- Single Barcode -->
                        <div class="form-group row">
                           <label for="size" class="col-sm-2 col-form-label"> Size</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" id="size" name="size" placeholder=" Size">
                           </div>
                        </div><!-- Size -->
                        <div class="form-group row">
                           <label for="type" class="col-sm-2 col-form-label">Type</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" id="type" name="type" placeholder="Type">
                           </div>
                        </div><!-- Type -->
                        <div class="form-group row">
                           <label for="vat_code" class="col-sm-2 col-form-label">VAT Code</label>
                           <div class="col-sm-10">
                              <input type="number" class="form-control" id="vat_code" name="vat_code" placeholder="VAT Code">
                           </div>
                        </div><!-- Vat Code -->

                        <div class="form-group row">
                           <label for="cost_price" class="col-sm-2 col-form-label">Cost Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="cost_price" name="cost_price" placeholder="Cost Price 12.25">
                           </div>
                        </div><!-- Cost Price -->
                        <div class="form-group row">
                           <label for="pack_price" class="col-sm-2 col-form-label">Pack Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="pack_price" name="pack_price" placeholder="Pack Price">
                           </div>
                        </div><!-- Pack Price -->
                        <div class="form-group row">
                           <label for="single_price" class="col-sm-2 col-form-label">Single Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="single_price" name="single_price" placeholder="Single Price">
                           </div>
                        </div><!-- Single Price -->
                        <div class="form-group row">
                           <label for="layer_price" class="col-sm-2 col-form-label">Layer Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="layer_price" name="layer_price" placeholder="Layer Price">
                           </div>
                        </div><!-- Layer Price -->
                        <div class="form-group row">
                           <label for="pallet_price" class="col-sm-2 col-form-label">Pallet Price</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="pallet_price" name="pallet_price" placeholder="Pallet Price">
                           </div>
                        </div><!-- Pallet Price -->

                        <div class="form-group row">
                           <label for="case_qty" class="col-sm-2 col-form-label">Case Quantity</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="case_qty" name="case_qty" placeholder="Case Quantity">
                           </div>
                        </div><!-- Case Quantity -->
                        <div class="form-group row">
                           <label for="layer_qty" class="col-sm-2 col-form-label">Layer Quantity</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="layer_qty" name="layer_qty" placeholder="Layer Quantity">
                           </div>
                        </div><!-- Layer Quantity -->
                        <div class="form-group row">
                           <label for="pallet_qty" class="col-sm-2 col-form-label">Pallet Quantity</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="pallet_qty" name="pallet_qty" placeholder="Pallet Quantity">
                           </div>
                        </div><!-- Pallet Quantity -->
                        <div class="form-group row">
                           <label for="total_stock" class="col-sm-2 col-form-label">Total Stock</label>
                           <div class="col-sm-10">
                              <input type="number" step="0.01" class="form-control" id="total_stock" name="total_stock" placeholder="Total Stock">
                           </div>
                        </div><!-- Total Stock -->

                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label" for="category">Category</label>
                           <div class="col-sm-10">
                              <div class="select2-purple" data-select2-id="38">
                                 <select class="select2 select2-hidden-accessible" name="category_id[]" id="category" multiple="" data-placeholder="Select Parent Category" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="47">Alabama</option>
                                    <option data-select2-id="48">Alaska</option>
                                    <option data-select2-id="49">California</option>
                                    <option data-select2-id="50">Delaware</option>
                                    <option data-select2-id="51">Tennessee</option>
                                    <option data-select2-id="52">Texas</option>
                                    <option data-select2-id="53">Washington</option>
                                 </select>
                              </div>
                           </div>
                        </div><!-- Category -->
                        <div class="form-group row">
                           <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                           <div class="col-sm-10">
                              <select class="form-control" id="brand" name="brand">
                                 <option>Select Brand</option>
                                 <option value="1">Domestos</option>
                                 <option value="1">Finish</option>
                                 <option value="1">Colgate</option>
                                 <option value="1">Dettol</option>
                              </select>
                           </div>
                        </div><!-- Brand -->

                        <div class="form-group row">
                           <label for="description" class="col-sm-2 col-form-label">Description</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" placeholder="Place some text here" id="description" name="description"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                           </div>
                        </div><!-- Description -->
                        <div class="form-group row">
                           <label for="features" class="col-sm-2 col-form-label">Features</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" placeholder="Place some text here" id="features" name="features"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                           </div>
                        </div><!-- Features -->
                        <div class="form-group row">
                           <label for="warnings" class="col-sm-2 col-form-label">Warnings</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" placeholder="Place some text here" id="warnings" name="warnings"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                           </div>
                        </div><!-- Warnings -->
                        <div class="form-group row">
                           <label for="specifications" class="col-sm-2 col-form-label">Specifications</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" placeholder="Place some text here" id="specifications" name="specifications"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                           </div>
                        </div><!-- Specifications -->
                        <div class="form-group row">
                           <label for="benefits" class="col-sm-2 col-form-label">Benefits</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" placeholder="Place some text here" id="benefits" name="benefits"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                           </div>
                        </div><!-- Benefits -->
                        <div class="form-group row">
                           <label for="uses" class="col-sm-2 col-form-label">Uses</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" placeholder="Place some text here" id="uses" name="uses"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                           </div>
                        </div><!-- Uses -->
                        <div class="form-group row">
                           <label for="tips" class="col-sm-2 col-form-label">Tips</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" placeholder="Place some text here" id="tips" name="tips"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                           </div>
                        </div><!-- Tips -->

                        <div class="form-group row">
                           <label for="images" class="col-sm-2 col-form-label">Product Image(s)</label>
                           <div class="input-group col-sm-10">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="images" name="images[]" multiple>
                                 <label class="custom-file-label" for="exampleInputFile">Choose Product Image(s)</label>
                              </div>
                           </div>
                        </div><!-- Images -->

                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
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

