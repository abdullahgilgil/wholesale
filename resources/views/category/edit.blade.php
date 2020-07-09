@extends("layouts.app")
@section("title", "WholeSale | Edit Category")
@section("content")
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Category</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active">Edit Category</li>
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
                     <h3 class="card-title">Edit Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" id="editCategory" action="{{route('category.update', $cat->id)}}" method="post" enctype='multipart/form-data'>
                     @csrf
                     @method('patch')
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="name" class="col-sm-2 col-form-label">Name</label>
                           <div class="col-sm-10">
                              <input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                     id="name" placeholder="Category Name" value="{{$cat->name ?? old('name')}}">
                              @if($errors->has('name'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('name')}}
                                 </div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label" for="category">Parent Category</label>
                           <div class="col-sm-10">
                              <div class="">
                                 <select class="form-control" name="parent_category" id="category">
                                    <option value="">Select Parent Category</option>
                                    <option value="0" {{$cat->parent_category == '0' ? 'selected' : ''}}>No Parent Category</option>
                                    @if($categories)
                                       @foreach($categories as $category)
                                          <option value="{{$category->id}}" {{$cat->parent_category == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                       @endforeach
                                    @endif
                                 </select>

                                 @if($errors->has('parent_category'))
                                    <div class="text-danger mt-2">
                                       {{$errors->first('parent_category')}}
                                    </div>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="description" class="col-sm-2 col-form-label">Description</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" name="description" placeholder="Place some text here" id="description"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                  {{$cat->description ?? old('description')}}
                            </textarea>
                              @if($errors->has('description'))
                                 <div class="text-danger mt-2">
                                    {{$errors->first('description')}}
                                 </div>
                              @endif
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="image_path" class="col-sm-2 col-form-label">Category Image</label>
                           <div class="input-group col-sm-10">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="image_path" name="image_path">
                                 <label class="custom-file-label" for="exampleInputFile">Choose Category Image</label>
                              </div>
                           </div>
                           @if($cat->image_path !== null)
                           <img src="{{asset('storage/'.$cat->image_path)}}" alt="" style="max-height: 60px;">
                           @endif
                        </div><!-- Images -->
                  
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <a href="{{route('category.index')}}" class="btn btn-warning">All Categories</a>
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

   <!-- summernote -->
   {{--   <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">--}}
@endpush()

@push("customJs")
   <!-- Select2 -->
   <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
   <!-- Summernote -->
   {{--   <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>--}}
   <script>
       $(function(){
           //Initialize Select2 Elements
           $('.select2').select2();

           //Initialize Select2 Elements
           $('.select2bs4').select2({
               theme: 'bootstrap4'
           });

           $('#summernote').summernote({
               placeholder: 'Hello Bootstrap 4',
               tabsize: 2,
               height: 100
           });
       });
   </script>
@endpush()
