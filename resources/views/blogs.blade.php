@extends('layouts.app')
@section('page-title')
    Blogs
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
            <li class="active"><a href="/blogs">Blogs</a> </li>
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
            <h2 class="text-theme-colored font-36">Blog</h2>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>

              <li class="active">Blog</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row multi-row-clearfix">
        <div class="col-md-9">
          <div class="blog-posts">
            <div class="col-md-12">
              <div class="row list-dashed">
                  @foreach ($allblogs as $item)
                  <article class="post clearfix mb-50 pb-30">
                    <div class="entry-header">
                      <div class="post-thumb"> <img alt="" src="/storage/uploads/{{$item->image_path}}" class="img-fullwidth img-responsive"> </div>
                      <h5 class="entry-title"><a href="/blogs/{{$item->blog_slug}}">{{$item->blog_title}}</a></h5>
                      <ul class="list-inline font-12 mb-20 mt-10">
                        <li>posted by <a href="#" class="text-theme-colored">Admin |</a></li>
                        <li><span class="text-theme-colored">{{$item->blog_date}}</span></li>
                      </ul>
                    </div>
                    <div class="entry-content">
                      <p class="mb-30">@php echo substr($item->blog_desc, 0, 200) @endphp<a href="/blogs/{{$item->blog_slug}}">[...]</a></p>
                      <ul class="list-inline like-comment pull-left font-12">
                        <li><i class="pe-7s-comment"></i>{{$item->comments}}</li>
                        <li><i class="pe-7s-like2"></i>{{$item->blog_likes}}</li>
                      </ul>
                      <a class="pull-right text-gray font-13" href="/blogs/{{$item->blog_slug}}"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    </div>
                  </article>
                  @endforeach
              </div>
            </div>
            {{-- <div class="col-md-12">
              <nav>
                <ul class="pagination theme-colored">
                  <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                </ul>
              </nav>
            </div> --}}
          </div>
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
                        <h5 class="post-title mt-0" title="{{$item->blog_title}}"><a href="/blogs/{{$item->blog_slug}}">@php echo substr($item->blog_title, 0, 20) . '...'  @endphp</a></h5>
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
