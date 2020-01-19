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
            <form role="form" action="{{ route('testimonial.update', $testimonial->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
              <div class="box-body">
              <div class="col-lg-6">

              
                
                <div class="form-group">
                    <label for="post_title">Testimonial Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Testimonial title" value="{{ $testimonial->title }}">
                  </div>
  
                  <div class="form-group">
                    <label for="subtitle">Testimony name</label>
                    <input type="text" class="form-control" id="subtitle" name="name" placeholder="Testimonial name" value="{{ $testimonial->name }}">
                  </div>
               
                    <label>
                        <input type="checkbox" name="status" value="1" @if ($testimonial->status == 1)
                            {{ 'checked' }}
                        @endif> Publish
                    </label>
                </div>
                    <br>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box">
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
                <textarea id="editor1" name="body" style="width: 100%; height: 500px; font-size: 14px; 
                 line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $testimonial->body }}
                </textarea>
              
            </div>
          </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href='{{ route("testimonial.index") }}' class="btn btn-warning">Back</a>
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
</script>  --}}
<script>
  $(document).ready(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
  })
</script>
@endsection