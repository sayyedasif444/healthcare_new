@extends('layouts.app')
@section('page-title')
@php    echo ucwords($blogs[0]->blog_title) @endphp

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
            <h2 class="text-theme-colored font-36">Blogs</h2>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Blogs</a></li>
              <li class="active text-capitalize">{{$blogs[0]->blog_title}}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Blog -->
  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row">
        <div class="col-md-9">
          <div class="blog-posts single-post">
            <article class="post clearfix mb-0">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img src="/storage/uploads/{{$blogs[0]->image_path}}" alt="" class="img-responsive img-fullwidth"> </div>
                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                          <input type="hidden" id="blog_id" value="{{$blogs[0]->blog_id}}">
                        <li><a class="text-white" href="#" id="likes_count"><i class="text-white fa fa-thumbs-o-up"></i> {{$blogs[0]->blog_likes}} <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="text-white fa fa-comments-o"></i> {{$blogs[0]->comments}}<br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="entry-title pt-0">
                <h3><a href="#">{{$blogs[0]->blog_title}}</a></h3>
              </div>
              <div class="entry-meta">
                <ul class="list-inline">
                  <li>Posted: <span class="text-theme-colored">{{$blogs[0]->blog_date}}</span></li>
                  <li>By: <span class="text-theme-colored">Admin</span></li>
                </ul>
              </div>
              <div class="entry-content mt-10">
                @php
                    echo $blogs[0]->blog_desc
                @endphp

              </div>
            </article>
            <div class="tagline p-0 pt-0 pl-20 mt-0 border-bottom  pb-20">
              <div class="row">
                <div class="mt-30 mb-0">
                    <h5 class="pull-left mt-10 mr-20 text-theme-colored">Share:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div>
              </div>
            </div>

            <div class="comments-area">
              <h4 class="comments-title">Comments</h4>
              <ul class="comment-list" id="comments_section">
                @foreach ($comments as $item)
                <li>
                    <div class="media comment-author bg-lighter p-20"> <a class="media-left" href="#"><img class="img-thumbnail" src="http://placehold.it/75x75" alt=""></a>
                      <div class="media-body">
                        <h5 class="media-heading comment-heading">{{$item->name}}</h5>
                        <div class="comment-date">{{$item->blog_date}}</div>
                        <p>{{$item->message}}</p>
                      </div>
                    </div>
                </li>
                @endforeach

              </ul>
            </div>
            <div class="comment-box mt-20">
              <div class="row">
                <div class="col-sm-12">
                  <h5>Leave a Comment</h5>
                  <div class="row">
                    <form role="form" id="commentform">
                      <div class="col-sm-6 pt-0 pb-0">
                        <div class="form-group">
                          <input type="text" class="form-control" required name="contact_name" id="comment_name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <input type="text" required class="form-control" name="contact_email2" id="comment_email" placeholder="Enter Email">
                        </div>

                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <textarea class="form-control" required name="contact_message2" id="comment_msg"  placeholder="Enter Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                        </div>
                      </div>
                      <div class="col-sm-12 mt-5" id="comment_err_msg"></div>
                    </form>
                  </div>
                </div>
              </div>
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
@section('script-section')
<script src="/assets/js/blogs-details.js"></script>
@endsection
