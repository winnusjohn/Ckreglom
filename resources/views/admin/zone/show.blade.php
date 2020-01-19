@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('main-content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">zone</h3>
          <a class="col-lg-offset-5 btn btn-success" href="{{ route('zone.create') }}">Add New</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>HostName</th>
                    <th>Host Number</th>
                    <th>Zone Category</th>
                    <th>Zonal Address</th>
                    <th>Zonal Pastor</th>
                    <th>Zonal Pastor Number</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($zones as $zone)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $zone->host_name }}</td>
                  <td>{{ $zone->host_number }}</td>
                  <td>{{ $zone->zone_category }}</td>
                  <td>{{ $zone->zonal_address }}</td>
                  <td>{{ $zone->zonal_pastor }}</td>
                  <td>{{ $zone->zonal_pastor_number }}</td>
                  <td>{{ $zone->created_at }}</td>
                  <td><a href="{{ route('zone.edit', $zone->id) }}"><span class="glyphicon glyphicon-edit">Edit</span></a></td>
                  <td>
                    <form id="delete-form-{{ $zone->id }}" method="post" action="{{ route('zone.destroy', $zone->id) }}" style="display:none">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    </form>
                    <a href="" onclick="
                    if(confirm('Are you sure, You want to delete this?'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $zone->id }}').submit();
                    }
                    else
                    {
                      event.preventDefault();
                    }"><span class="glyphicon glyphicon-trash">Delete</span></a>
                  </td>
                </tr> 
                @endforeach
             
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>HostName</th>
                  
                  <th>Host Number</th>
                  <th>Zone Category</th>
                  <th>Zonal Address</th>
                  <th>Zonal Pastor</th>
                  <th>Zonal Pastor Number</th>
                  <th>Created At</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@endsection

@section('footerSection')
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>

@endsection