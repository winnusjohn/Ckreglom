@extends('user/app')

@section('main-content')
   <!--Showcase Carousel Wrapper-->
   <div class="wrapper">
        <!--Showcase Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('user/img/slider/image2.jpg')}}" alt="First slide">
                </div> 
               <!--/First slide--> 
               <!--Second slide--> 
               <div class="carousel-item"> 
                  <img class="d-block w-100" src="{{ asset('user/img/slider/image1.jpg')}}" alt="Second slide">
                </div> 
              <!--/Second slide--> 
              <!--Third slide--> 
               <div class="carousel-item"> 
                   <img class="d-block w-100" src="{{ asset('user/img/slider/image3.jpg')}}" alt="Third slide">
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Showcase Carousel Wrapper-->

        <!--New Here Section-->
        <section id="newHere" class="" style="background-color: rgba(0, 0, 0, 0.62)">
            <div class="container">
                <div class="row vdivide">
                    <div class="col-sm-6  text-light">
                        <div class="py-5 new-here">
                            <h5 class="text-uppercase">I'm new here</h5>
                            <p class="" style="font-size: 130%">Find more about <strong class="mr-4">CKREGLOM</strong><a
                                    href="about.html" class="button box-1 btn btn-primary" id="aboutbtn">ABOUT US</a>
                            </p>
                            <!-- <a href="#" class="box-2 btn btn-primary">ABOUT US</a> -->
                        </div>
                    </div>

                    <div class="col-sm-6  text-light" id="find-branch">
                        <div class="py-5 branch">
                            <h5 class="text-uppercase">Find a branch</h5>
                            <p class="" style="font-size: 130%">Worship in a branch near you<a href="#"
                                    class=" button box-2 btn btn-primary " id="locationbtn">LOCATIONS</a></p>
                            <!-- <a href="#" class="box-2 btn btn-primary">ABOUT US</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/. New Here Section-->

                <!--================================================== 
            SERVICE SECTION      
===================================================-->
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="about-section">
    <div class="container-fluid px-0">
        <div class="row d-md-flex text-wrapper">
            <div class="one-half img" style="background-image: url('{{ asset('user/img/slider/slider_3.JPG')}}');"></div>
            <div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
                <div class="text-inner pl-md-5 ">
                    <h3 class="heading">Our <span>Church</span> Service</h3>
                    <ul class="my-4">
                        <li class="mr-5"><span class="ion-ios-checkmark-circle mr-2"></span>Sunday Services:
                            7:30AM - 1:00PM
                        </li>
                        <hr style="background-color: rgba(0, 0, 0, 0.62)">
                        <li><span class="ion-ios-checkmark-circle mr-2"></span>Wednesday Services:
                            7:30AM - 10:00AM
                        </li>
                        <hr style="background-color: rgba(0, 0, 0, 0.62)">
                        <li><span class="ion-ios-checkmark-circle mr-2"></span> Last Friday Of Every Month:
                            11:00PM - 4:00AM
                        </li>
                        <hr style="background-color: rgba(0, 0, 0, 0.62)">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
        <!--Connect Section-->
        <section class="pt-2 connect-with" style="background-color:rgba(0, 0, 0, 0.2)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pa-img">
                        <img src="{{ asset('user/img/elements/papa.jpg')}}" alt="Prophet's Picture"
                            class="go-img img-fluid rounded-circle d-none d-md-block">
                    </div>
                    <div class="col-md-6 our-prophet py-5 conn-proph">
                        <h1 class="">connect with our prophet</h1>
                        <h6>prophet g.o onaolapo</h6>
                        <hr class="bg-danger">
                        <p>Stay connected and join our conversations via social media on Facebook, Twitter, Youtube
                            and
                            Instagram.</p>
                        <div class="social-media-icons middle mt-5">
                            <ul class="list-inline">
                                <a class="social-btn" href=""><i class="fa fa-facebook"></i></a>
                                <a class="social-btn" href=""><i class="fa fa-twitter"></i></a>
                                <a class="social-btn" href=""><i class="fa fa-instagram"></i></a>
                                <a class="social-btn" href=""><i class="fa fa-youtube"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--/.connect Section-->

    
        <!--================================================== 
            TESTIMONIALS SECTION      
===================================================-->
        <!-- TESTIMONIALS -->
        <section class="testimonials">
            <div class="container">

                <div class="row">
                    <div class="col">
                        <div class="subheading" style="padding-top: 90px;">
                            <h2 class="col text-center mb-5" class=" text-center">Testimony
                            </h2>
                            <h4 class="text-center">The Positively Impacted Members Said</h4>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div id="customers-testimonials" class="owl-carousel">
                            @foreach ($testimonial as $test)
                            <!--TESTIMONIAL 1 -->
                                <div class="item">
                                    <div class="shadow-effect">
                                        <h5 class="mb-3">{{$test->title}}</h5>
                                        <p class="testimonial-text">
                                            {!! htmlspecialchars_decode($test->body) !!}
                                        </p>
                                        <div class="testimonial-name text-uppercase">{{$test->name}}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF TESTIMONIALS -->


@endsection