
@extends('layouts.frontend.app')
@section('title','Home')
@push('css')
    <link href="{{asset('assets/frontend/css/home/styles.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/css/home/responsive.css')}}" rel="stylesheet"> 
@endpush
@section('content')

  <div class="main-slider">
        <div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
            data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
            data-swiper-breakpoints="true" data-swiper-loop="true" >
            <div class="swiper-wrapper">

              

        @foreach($categorys as $category)
                <div class="swiper-slide">
                    <a class="slider-category" href="#">
                        <div class="blog-image"><img  class="img-responsive thumbnail" src="{{ url('storage/category/slider/'. $category->image) }}" alt="{{$category->name}}"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b>{{$category->name}}</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->
           @endforeach


               

              

              

              

               

            </div><!-- swiper-wrapper -->

        </div><!-- swiper-container -->

    </div><!-- slider -->
  <section class="blog-area section">
        <div class="container">

            <div class="row">



             @foreach($posts as $post)

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img class="img-responsive thumbnail" src="{{ url('storage/post/'. $post->image) }}">   </div>

                            <a class="avatar" href="#"><img src="{{asset('assets/frontend/images/icons8-team-355979.jpg')}}" alt="{{$post->title}}"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href="#"><b>{{$post->title}}</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>57</a></li>
                                    <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>6</a></li>
                                    <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$post->count}}</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

           @endforeach

               

              


               

            </div><!-- row -->

            <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

        </div><!-- container -->
    </section><!-- section -->
@endsection
@push('js')
   
@endpush