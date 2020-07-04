@extends("layouts.app")
@section("title", "WholeSale | Create New Category")
@section("content")
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Add New Category</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active">Add Category</li>
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
                  <form class="form-horizontal" id="addCategory">
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="name" class="col-sm-2 col-form-label">Name</label>
                           <div class="col-sm-10">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Category Name">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-sm-2 col-form-label">Parent Category</label>
                           <div class="col-sm-10">
                              <div class="select2-purple" data-select2-id="38">
                                 <select class="select2 select2-hidden-accessible" name="parent_id[]" multiple="" data-placeholder="Select Parent Category" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="47" value="">Alabama</option>
                                    <option data-select2-id="48" value="">Alaska</option>
                                    <option data-select2-id="49" value="">California</option>
                                    <option data-select2-id="50" value="">Delaware</option>
                                    <option data-select2-id="51" value="">Tennessee</option>
                                    <option data-select2-id="52" value="">Texas</option>
                                    <option data-select2-id="53" value="">Washington</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                               <textarea class="textarea form-group" name="description" placeholder="Place some text here" id="description"
                                         style="width: 100%; height: 200px; font-size: 14px;
                                         line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
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
