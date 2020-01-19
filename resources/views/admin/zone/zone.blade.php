@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{asset ('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>

            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('zone.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-6">

              
                <div class="form-group">
                  <label for="host_name">Host Name</label>
                  <input type="text" class="form-control" id="host_name" name="host_name" placeholder="Host Name" >
                </div>

                <div class="form-group">
                  <label for="host_number">Host Number</label>
                  <input type="text" class="form-control" id="host_number" name="host_number" placeholder="Host Number">
                </div>

                <div class="form-group">
                  <label for="zonal_address">Zonal Address</label>
                  <input type="text" class="form-control" id="zonal_address" name="zonal_address" placeholder="Zonal Address" >
                </div>

                <div class="form-group">
                  <label for="host_name">Zonal Pastor</label>
                  <input type="text" class="form-control" id="zonal_pastor" name="zonal_pastor" placeholder="Zonal Pastor" >
                </div>

                <div class="form-group">
                  <label for="host_name">Zonal Pastor Number</label>
                  <input type="text" class="form-control" id="zonal_pastor_number" name="zonal_pastor_number" placeholder="Zonal Pastor Number" >
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                       <br>
                       <div class="checkbox pull-left">
                        <label>
                          <input type="checkbox" name="status" value="1"> Publish
                      </label>
                    </div>  
                    </div>
                    <br>

                       <div class="form-group"  style="margin-top:18px">
                          <label>Select Category</label>
                          <select id="zone_category" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;"  tabindex="-1" aria-hidden="true" name="categories[]">
                            @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option> 
                            @endforeach  
                            
                          </select>
                      </div>
                    </div>
                </div>

              </div>
              <!-- /.box-body -->

              {{-- <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Post Body
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea id="editor1" name="zonal_address" style="width: 100%; height: 500px; font-size: 14px; 
                 line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              
            </div> --}}
          {{-- </div> --}}

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href='{{ route("zone.index") }}' class="btn btn-warning">Back</a>
              </div>
            </form>
            </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace( 'editor1' );
</script>
{{-- <script>
  $(function () {
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('editor1')
  //bootstrap WYSIHTML5 - text editor
  $('.textarea').wysihtml5()
})
</script> --}}
<script>
  $(document).ready(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
  })
</script>
@endsection