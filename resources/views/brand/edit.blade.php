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
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Edit Brand</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" id="addCategory" enctype='multipart/form-data' method="POST">
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="name" class="col-sm-2 col-form-label">Name</label>
                           <div class="col-sm-10">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Category Name">
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="description" class="col-sm-2 col-form-label">Description</label>
                           <div class="col-sm-10">
                               <textarea class="textarea form-group" placeholder="Place some text here" id="description" name="description"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="image" class="col-sm-2 col-form-label">Brand Image</label>
                           <div class="input-group col-sm-10">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="image" name="image_path">
                                 <label class="custom-file-label" for="exampleInputFile">Choose Brand Image</label>
                              </div>
{{--                              @if($cat->image_path !== null)--}}
{{--                                 <img src="{{asset('storage/'.$cat->image_path)}}" alt="" style="max-height: 60px;">--}}
{{--                              @endif--}}
                           </div>
                        </div>
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
@endpush()

@push("customJs")
@endpush()
