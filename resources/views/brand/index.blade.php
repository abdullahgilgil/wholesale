@extends("layouts.app")
@section("title", "WholeSale | Brands")
@section("content")
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Brands</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Brands</li>
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
                     <h3 class="card-title">All Brands</h3>
                     <a href="{{route('brand.create')}}" class="btn btn-success float-right">Add New Brand</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                           <th class="sorting_asc">ID</th>
                           <th class="sorting">Name</th>
                           <th class="sorting">Slug</th>
                           <th class="sorting">Description</th>
                           <th class="sorting">Image</th>
                           <th class="sorting">Edit</th>
                           <th class="sorting">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                           <tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">{{$brand->id}}</td>
                              <td>{{$brand->name}}</td>
                              <td>{{$brand->slug}}</td>
                              <td>{!!$brand->description!!}</td>
                              <td><img src="{{'storage/'.$brand->image_path}}" alt="" style="max-width: 60px;"></td>
                              <td>
                                 <a href="{{route('brand.edit', ['brand' => $brand->id, 'slug' => $brand->slug])}}" class="btn btn-sm btn-warning">Edit</a>
                              </td>
                              <td>
                                 <!-- Button trigger modal -->
                                 <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#deleteModal-{{$brand->id}}">
                                    Delete
                                 </button>
                              </td>
                           </tr>
                           <!-- Delete Modal -->
                           <div class="modal fade" id="deleteModal-{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete <strong>{{$brand->name}}</strong>?</h5>

                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>

                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                       <form action="{{route('brand.destroy')}}" method="post">
                                          @csrf
                                          @method('delete')
                                          <input type="hidden" name="delete" value="{{$brand->id}}">
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach
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
      </div>
      <!-- /.container-fluid -->
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
