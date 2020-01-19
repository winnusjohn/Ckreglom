@extends('user/blog_app') 

{{-- @section('slider-4', asset('user/img/slider/slider_4.jpg')) --}}

@section('main-content')

    <!--================Blog Area =================-->
    <section class="blog_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach ($posts as $post)
                            <article class="blog_style1">
                            
                                    <div class="blog_img">
                                        <img class="img-fluid image-resizer" src="{{Storage::disk('local')->url($post->image) }}" alt="">
                                    </div>
                                    <div class="blog_text">
                                    
                                            <div class="blog_text_inner">

                                                <a href="{{ route('post', $post->slug) }}">
                                                    <h4>{{$post->title}}</h4>
                                                    <p class="">{{$post->subtitle}}</p>
                                                </a>
                                                <p>Posted by
                                                        <a>CKReglom</a>
                                                    on {{ $post->created_at->diffForHumans()}}</p>
                                                <p>
                                                   {!!  Str::limit($post->body) !!} 
                                                </p>
                                                <div class="date">
                                                    <a ><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
                                                    <a ><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
                                                    <a><i class="fa fa-eye" aria-hidden="true"></i>3</a>
                                                    <a ><i class="fa fa-heart" aria-hidden="true"></i> 05</a>
                                                </div>
                                            </div>
                                            
                                    </div>
                            </article>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    {{ $posts->links() }}
                                </li>
                            
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i
                                            class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img class="img-fluid" width="99" height="66" src="{{ asset('user/img/slider/slider_7.jpeg') }}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Space The Final Frontier</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img class="img-fluid" width="99" height="66" src="{{ asset('user/img/slider/slider_3.JPG') }}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img class="img-fluid" width="99" height="66" src="{{ asset('user/img/blog/popular-post/post3.jpg') }}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img class="img-fluid" width="99" height="66" src="{{ asset('user/img/blog/popular-post/post4.jpg') }}" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget">
                            <a href="#"><img class="img-fluid" src="{{ asset('user/img/blog/add.jpg') }}" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                @foreach ($post->categories as $category)
                                    <li>
                                        <a href="{{ route('category', $category->slug) }}">     
                                            {{ $category->name}}
                                        </a>
                                    </li>       
                                @endforeach
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('tag', $tag->slug) }}"> {{ $tag->name}} </a>
                                    @endforeach
                                    </li>
                                
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection

