@if(Auth::guard('staff')->user()->level == 1)
  @include('layouts.adminside')
@else
@include('layouts.staffside')
@endif
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Department</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title" style="float: right;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-overlay">
                  Add Department
                </button></h3>
                @include('modal.addDepartment')
                @if(session('SuccessMessage'))
                <div class="alert alert-success" style="width:50%">
                    {{ (session('SuccessMessage'))}}
</div>
@endif
              </div>
           
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Department</th>
<td>Action</td>
                  </tr>
                  </thead>
                  <tbody>
                  @php $i=0;$i +=1; @endphp
                  @foreach($selectDepartment as $row) 
                 
                      <tr>

                        <td>{{ $i++ }}</td>
                        <td>{{$row->department}}</td>
                        <td style="width: 10%"><i data-toggle="modal" data-target="#modal-edits{{$row->id}}" 
                        class="fa fa-edit" style="color: green" title="Edit Department"></i> |
                         <i data-toggle="modal" data-target="#modal-delete{{$row->id}}" 
                         class="fa fa-trash" style="color: red" title="Delete Department"></i> 

                        </td>
                        @include('modal.editDepartment')
                       @include('modal.delectdepartment')
                       
                      </tr>
                      @endforeach
                     <?php  //} ?>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="#">Human Resource Information</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 0.1
      </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="/pdf_js/pdfobject.js"></script>
<script>PDFObject.embed("/pdf_js/sample-3pp.pdf", "#example1");</script>

<script src="../Admin_Dashboard/plugins/jquery/jquery.min.js"></script>
<script src="../Admin_Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../Admin_Dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Admin_Dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Admin_Dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../Admin_Dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
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