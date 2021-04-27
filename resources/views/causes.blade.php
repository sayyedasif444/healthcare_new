@extends('layouts.app')
@section('page-title')
    Causes
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
            <li class="active"><a href="/causes">Causes</a> </li>
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
            <h3 class="text-theme-colored font-36">Causes</h3>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Causes</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Upcoming Event -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-9">
            @foreach ($causes as $item)
            <div class="upcoming-events box-hover-effect effect1 media maxwidth400 bg-light mb-20">
                <div class="row equal-height">
                  <div class="col-sm-4 pr-0 pr-sm-15">
                    <div class="thumb p-15">
                      <img class="img-fullwidth" src="/storage/uploads/{{$item->image_path}}" alt="...">
                    </div>
                  </div>
                  <div class="col-sm-4 border-right pl-0 pl-sm-15">
                    <div class="event-details p-15 mt-20">
                      <h4 class="media-heading text-uppercase font-weight-500">{{$item->cause_title}}</h4>
                      <p>@php echo substr($item->cause_desc, 0, 100) @endphp</p>
                      <a href="/causes/{{$item->cause_slug}}" class="text-theme-colored">Details <i class="fa fa-angle-double-right"></i></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="event-count causes p-15 mt-15">
                      <div class="progress-item mt-20 mb-40">
                        <div class="progress mb-30">
                          <div class="progress-bar" data-percent="85"></div>
                        </div>
                      </div>
                      <ul class="list-inline clearfix">
                        <li class="pull-left pr-0">Raised: $1890</li>
                        <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                      </ul>
                      <div class="mt-10">
                        <ul class="pull-left list-inline mt-15">
                          <li class="pr-0"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</li>
                        </ul>
                        <a href="#" class="btn btn-dark btn-flat btn-sm pull-right mt-10">Donate</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach


          {{-- <div class="row">
            <div class="col-sm-12">
              <nav>
                <ul class="pagination theme-colored pull-right xs-pull-center mb-xs-40">
                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                </ul>
              </nav>
            </div>
          </div> --}}
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="sidebar sidebar-right mt-sm-30">
            <div class="widget">
              <h5 class="widget-title line-bottom">Latest News</h5>
              <div class="latest-posts">
                @foreach ($blogs as $item)
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
