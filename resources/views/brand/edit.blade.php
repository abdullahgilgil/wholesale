@extends("layouts.app")
@section("title", "WholeSale | Create New Brand")
@section("content")
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Brand</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active">Edit Brand</li>
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
                  <div style="position: relative; min-height: 60px;">
                     <div class="alert alert-dismissible alert-{{session('message_tur')}}" role="alert" style="position: absolute; top: 10px;">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{strtoupper(session('message_tur'))}}</strong>
                        {{session('message')}}
                     </div>
                  </div>
               @endif
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Edit Brand</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" id="editBrand" enctype='multipart/form-data' method="POST" action="{{route('brand.update', $brand->id)}}">
                     @csrf
                     @method('patch')
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="name" class="col-sm-2 col-form-label">Name</label>
                           <div class="col-sm-10">
                              <input type="text" name="name" class="form-control" id="name" value="{{$brand->name ?? old('name')}}">
                              @if($errors->has('name'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('name')}}
                                 </div>
                              @endif
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="description" class="col-sm-2 col-form-label">Description</label>
                           <div class="col-sm-10">
                            <textarea class="textarea form-group" placeholder="Place some text here" id="description" name="description"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                               {{$brand->description ?? old('description')}}
                            </textarea>
                           @if($errors->has('description'))
                              <div class="text-danger mt-2">
                                 {{$errors->first('description')}}
                              </div>
                           @endif
                           </div>
                        </div>

                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label" for="category">Category</label>
                           <div class="col-sm-10">
                              <div class="select2-purple {{$errors->has('categories') ? 'is-invalid' : ''}}" data-select2-id="38">
                                 <select class="select2 select2-hidden-accessible" value="{{old('categories[]')}}" name="categories[]" id="category" multiple="" data-placeholder="Select Category" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">

                                    {{--                                    <option data-select2-id="0" value="0">Select A Category</option>--}}
                                    @foreach($categories as $category)
                                       <option value="{{$category->id}}"
                                       @foreach($brand->categories as $cat)
                                          {{$category->id == $cat->id ? 'selected' : ''}}
                                             @endforeach
                                       >{{$category->name}}</option>
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
                           <label class="col-sm-2 col-form-label" for="is_active">Is Brand Active ?</label>
                           <div class="col-sm-10">
                              <div class="">
                                 <select class="form-control" name="is_active" id="is_active">
                                    <option value="1" {{$brand->is_active == '1' ? 'selected' : ''}}>Active</option>
                                    <option value="0" {{$brand->is_active == '0' ? 'selected' : ''}}>Passive</option>
                                 </select>

                                 @if($errors->has('is_active'))
                                    <div class="text-danger mt-2">
                                       {{$errors->first('is_active')}}
                                    </div>
                                 @endif
                              </div>
                           </div>
                        </div> <!-- is_active -->

                        <div class="form-group row">
                           <label for="image" class="col-sm-2 col-form-label">Brand Image</label>
                           <div class="input-group col-sm-10">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="image" name="image_path">
                                 <label class="custom-file-label" for="exampleInputFile">Choose Brand Image</label>
                              </div>
                              @if($errors->has('image_path'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('image_path')}}
                                 </div>
                              @endif
                           </div>
                           @if($brand->image_path !== null)
                              <img src="{{asset('storage/'.$brand->image_path)}}" alt="" style="max-height: 60px;">
                           @endif
                        </div>


                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <a href="{{route('brand.index')}}" class="btn btn-warning">All Brands</a>
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
