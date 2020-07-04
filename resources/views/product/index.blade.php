@extends("layouts.app")
@section("title", "WholeSale | Products")
@section("content")
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Products</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Products</li>
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
                     <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                           <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
                        </thead>
                        <tbody>
                           <tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">Webkit</td>
                              <td>Safari 1.2</td>
                              <td>OSX.3</td>
                              <td>125.5</td>
                              <td>A</td>
                           </tr><tr role="row" class="even">
                              <td class="sorting_1 dtr-control">Webkit</td>
                              <td>Safari 1.3</td>
                              <td>OSX.3</td>
                              <td>312.8</td>
                              <td>A</td>
                           </tr><tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">Webkit</td>
                              <td>Safari 2.0</td>
                              <td>OSX.4+</td>
                              <td>419.3</td>
                              <td>A</td>
                           </tr><tr role="row" class="even">
                              <td class="sorting_1 dtr-control">Webkit</td>
                              <td>Safari 3.0</td>
                              <td>OSX.4+</td>
                              <td>522.1</td>
                              <td>A</td>
                           </tr><tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">Webkit</td>
                              <td>OmniWeb 5.5</td>
                              <td>OSX.4+</td>
                              <td>420</td>
                              <td>A</td>
                           </tr><tr role="row" class="even">
                              <td class="sorting_1 dtr-control">Webkit</td>
                              <td>iPod Touch / iPhone</td>
                              <td>iPod</td>
                              <td>420.1</td>
                              <td>A</td>
                           </tr><tr role="row" class="odd">
                              <td class="sorting_1 dtr-control">Webkit</td>
                              <td>S60</td>
                              <td>S60</td>
                              <td>413</td>
                              <td>A</td>
                           </tr>
                        </tbody>
                        <tfoot>
                           <tr>
                              <th rowspan="1" colspan="1">Rendering engine</th>
                              <th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th>
                              <th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th>
                           </tr>
                        </tfoot>
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