@extends('layouts.app')
@section('page-title')
@php    echo ucwords($causes[0]->cause_title) @endphp
@endsection
@section('meta-tags')

@endsection
@section('nav-section')
<div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
      <div class="container">
        <nav id="menuzord" class="menuzord orange bg-light">
          <ul class="menuzord-menu">
            <li class=""><a href="/">Home</a> </li>
            <li class=""><a href="/about-us">About</a> </li>
            <li class=""><a href="/causes">Causes</a> </li>
            <li class=""><a href="/events">Events</a> </li>
            <li class=""><a href="/gallery">Gallery</a> </li>
            <li class=""><a href="/blogs">Blogs</a> </li>
            <li class=""><a href="/contact-us">Contact</a> </li>
          </ul>
          <ul class="pull-right hidden-sm hidden-xs">
            <li>
              <a class="btn btn-colored btn-flat btn-theme-colored mt-15 ajaxload-popup" href="ajax-load/donation-form.html" >Donate Now</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
@endsection
@section('main-content')
 <!-- Section: inner-header -->
 <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="/assets/images/website_images/image1.jpg">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content text-center">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="text-theme-colored font-36">Causes</h2>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Causes</a></li>
              <li class="active">@php echo ucwords($causes[0]->cause_title) @endphp</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider: Partners & Donors -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-9">
          <div class="upcoming-events media bg-light p-15 pb-60 mb-50 mb-sm-30">
            <div class="thumb">
              <img class="img-fullwidth" src="http://placehold.it/815x410" alt="...">
            </div>
            <div class="row">

              <div class="col-sm-12">
                <div class="event-count causes clearfix p-15 mt-15 border-bottom ">
                  <div class="progress-item mt-20 mb-30">
                    <div class="progress mb-30">
                      <div class="progress-bar" data-percent="85"></div>
                    </div>
                  </div>
                  <ul class="list-inline clearfix">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="pull-right pr-0"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</li>
                  </ul>
                  <div class="mt-10">
                    <ul class="pull-left list-inline mt-20">
                      <li class="text-theme-colored pr-0">Goal: $2500</li>
                    </ul>
                    <a href="#" class="btn btn-dark btn-flat btn-sm pull-right mt-15">Donate</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="event-details">
              <p class="mb-20">@php
                  echo $causes[0]->cause_desc
              @endphp</p>
            </div>
          </div>

        </div>
        <div class="col-sm-12 col-md-3">
          <div class="sidebar sidebar-right mt-sm-30">

            <div class="widget">
              <h5 class="widget-title line-bottom">Latest News</h5>
              <div class="latest-posts">
                @foreach ($allblogs as $item)
                <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="/storage/uploads/{{$item->image_path}}" alt="" width="75px" height="75px"></a>
                    <div class="post-right">
                        <h5 class="post-title mt-0" title="{{$item->blog_title}}"><a href="/blogs/{{$item->blog_slug}}">@php echo substr(ucwords($item->blog_title), 0, 20) . '...'  @endphp</a></h5>
                        <p>@php echo substr($item->blog_desc, 0, 50) . '...' @endphp</p>
                    </div>
                </article>
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
