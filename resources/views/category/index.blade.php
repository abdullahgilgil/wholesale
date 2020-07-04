@extends("layouts.app")
@section("title", "WholeSale | Categories")
@section("content")
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Categories</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active">Category</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">All Categories</h3>
                     <a href="{{route('category.create')}}" class="btn btn-success float-right">Add New Category</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                           <div class="col-sm-12 col-md-6"></div>
                           <div class="col-sm-12 col-md-6"></div>
                        </div><div class="row">
                           <div class="col-sm-12">
                              <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                           <tr role="row">
                              <th class="sorting_asc">ID</th>
                              <th class="sorting">Name</th>
                              <th class="sorting">Parent ID's</th>
                              <th class="sorting">Slug</th>
                              <th class="sorting">Description</th>
                              <th class="sorting">Edit</th>
                              <th class="sorting">Delete</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">1</td>
                              <td>Household</td>
                              <td>1,2,3</td>
                              <td>household</td>
                              <td>Household products is used for ...</td>
                              <td>
                                 <a href="" class="btn btn-sm btn-warning">Edit</a>
                              </td>
                              <td><button class="btn btn-sm btn-danger">Delete</button></td>
                           </tr>
                           <tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">1</td>
                              <td>Household</td>
                              <td>1,2,3</td>
                              <td>household</td>
                              <td>Household products is used for ...</td>
                              <td>
                                 <a href="" class="btn btn-sm btn-warning">Edit</a>
                              </td>
                              <td><button class="btn btn-sm btn-danger">Delete</button></td>
                           </tr>
                           <tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">1</td>
                              <td>Household</td>
                              <td>1,2,3</td>
                              <td>household</td>
                              <td>Household products is used for ...</td>
                              <td>
                                 <a href="" class="btn btn-sm btn-warning">Edit</a>
                              </td>
                              <td><button class="btn btn-sm btn-danger">Delete</button></td>
                           </tr>
                           <tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">1</td>
                              <td>Household</td>
                              <td>1,2,3</td>
                              <td>household</td>
                              <td>Household products is used for ...</td>
                              <td>
                                 <a href="" class="btn btn-sm btn-warning">Edit</a>
                              </td>
                              <td><button class="btn btn-sm btn-danger">Delete</button></td>
                           </tr>
                           <tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">1</td>
                              <td>Household</td>
                              <td>1,2,3</td>
                              <td>household</td>
                              <td>Household products is used for ...</td>
                              <td>
                                 <a href="" class="btn btn-sm btn-warning">Edit</a>
                              </td>
                              <td><button class="btn btn-sm btn-danger">Delete</button></td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>

                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div><!-- /.container-fluid -->
   </section>
@endsection()

@push('customCss')
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@push('customJs')
   <!-- DataTables -->
   <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
   <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
   <script>
       $(function () {
           $("#example1").DataTable({
               "responsive": true,
               "autoWidth": false,
           });
           $('#example2').DataTable({
               "paging": true,
               "lengthChange": false,
               "searching": false,
               "ordering": true,
               "info": true,
               "autoWidth": false,
               "responsive": true,
           });
       });
   </script>
@endpush