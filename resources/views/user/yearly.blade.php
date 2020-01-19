@extends('user/blog_app') 

@section('main-content')
<section class="yearly-gallery py-5">
    <div class="container">
           
        <div class="intro">
            <h2 class="text-center">OUR YEARLY ANCHOR FROM INCEPTION</h2>
        </div>
        <div class="row yearly">
             
        @foreach ($yearly as $year)
            <div class=" col-md-3 item"> 
                <a href="{{Storage::disk('local')->url($year->image)}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="{{Storage::disk('local')->url($year->image)}}" width="768" height="1200" class="img-fluid rounded" name="image">
                </a>
                 
            </div>
           
            @endforeach  
        </div>
        
    </div>
</section>
@endsection