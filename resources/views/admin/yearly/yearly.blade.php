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
            <form role="form" action="{{ route('yearly.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-6">

              
                <div class="form-group">
                  <label for="post_title">Yearly Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Year title" >
                </div>

                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                       <div class="pull-right">
                          <label for="image">File input</label>
                          <input type="file" name ="image" id="image">
                       </div>
                       <br>
                       <div class="checkbox pull-left">
                    <label>
                        <input type="checkbox" name="status" value="1"> Publish
                    </label>
                    </div>  
                    </div>
                    <br>

                  
                </div>

              </div>
              <!-- /.box-body -->

             

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href='{{ route("yearly.index") }}' class="btn btn-warning">Back</a>
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