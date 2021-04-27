@extends('layouts.app')
@section('page-title')
    About Us
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
            <li class="active"><a href="/about-us">About</a> </li>
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
            <h2 class="text-theme-colored font-36">About</h2>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>
              <li class="active">About</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: About -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7">
          <div class="image-carousel">
            <div class="item">
              <div class="thumb">
                <img src="http://placehold.it/1920x1280" alt="">
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="http://placehold.it/1920x1280" alt="">
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="http://placehold.it/1920x1280" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-5">
          <h3 class="text-theme-colored text-uppercase mt-0">About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Quas, veniam nobis minima. Delectus, dolorem rerum, eos nemo dolore amet quis, eum debiti modi voluptatibus ducimus molestiae laborum itaque quam maxime dolor amit laboriosam aperiam exercitationem.Cos nemo dolore amet quis, eum debiti modi voluptatibus ducimus molestiae laborum itaque quam maxime dolor amit laboriosam aperiam exercitationem. Amit dolor sit.</p>
          <div class="row mt-30 mb-30 ml-20">
           <div class="col-xs-6">
            <ul class="mt-10">
              <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Education</li>
              <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Community</li>
              <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Education</li>
            </ul>
           </div>
           <div class="col-xs-6">
            <ul class="mt-10">
              <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Education</li>
              <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Teamwork</li>
              <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Creativity</li>
            </ul>
           </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Quas, veniam nobis minima. Delectus, dolorem rerum, eos nemo dolore amet quis, eum debiti modi voluptatibus ducimus molestiae laborum itaque quam maxime dolor amit laboriosam aperiam exercitationem.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- divider: Emergency Services -->
  <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2"  data-bg-img="/assets/images/website_images/helpusbg.jpg">
    <div class="container">
      <div class="section-content text-center">
        <div class="row">
          <div class="col-md-12">
            <h3 class="mt-0">How you can help us</h3>
            <h2>Just call at <span class="text-theme-colored">+(91) 8888 4422 02</span> to make a donation</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Causes -->
  <section>
    <div class="container pb-80">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h3 class="text-uppercase mt-0">Our Causes</h3>
            <div class="title-icon">
              <i class="flaticon-charity-hand-holding-a-heart"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
          </div>
        </div>
      </div>
      <div class="row mtli-row-clearfix">
          @foreach ($causes as $item)
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="/storage/uploads/{{$item->image_path}}">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="84"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5 class="text-capitalize"><a href="/causes/{{$item->cause_slug}}">{{$item->cause_title}}</a></h5>
                <p >@php
                    $abc = $item->cause_desc;
                    echo substr($abc, 0, 70) . '...';
                @endphp</p>
                <ul class="list-inline clearfix mt-20">
                  <li class="pull-left pr-0">Raised: $1890</li>
                  <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                 <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
              </div>
            </div>
          </div>
          @endforeach


      </div>
    </div>
  </section>

  <!-- divider: Became a Volunteers -->
  <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="/assets/images/website_images/volunteers.jpg">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-7">
            <h3 class="line-bottom">Became a Volunteer</h3>
            <p class="mt-30 mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, et placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis! Quidem, repellendus exit placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis.</p>
            <a class="btn btn-dark btn-theme-colored btn-lg btn-flat pull-left pl-30 pr-30" href="#">Join Us</a>
          </div>
          <div class="col-md-5">
            <div class="fluid-video-wrapper">
              <iframe src="//player.vimeo.com/video/22029657?title=0&amp;byline=0&amp;portrait=0" width="640" height="360"  title="Creative" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Volunteer -->
  <section>
    <div class="container">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h3 class="text-uppercase mt-0">Our Volunteers</h3>
            <div class="title-icon">
              <i class="flaticon-charity-hand-holding-a-heart"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row multi-row-clearfix">
          <div class="col-md-12 text-left sm-text-center">
            <div class="volunteers-carousel owl-nav-top" data-dots="true">
                @foreach ($volunteers as $item)
                <div class="item">
                    <div class="volunteer maxwidth400">
                      <div class="thumb"><img alt="" src="/storage/uploads/{{$item->v_img}}" class="img-fullwidth"></div>
                      <div class="overlay">
                        <div class="content text-center">
                          <h4 class="author mb-0"><a  class="text-white">{{$item->v_name}}</a></h4>
                          <h6 class="title text-black font-14 mt-5 mb-15">{{$item->v_post}}</h6>
                          <ul class="styled-icons icon-gray icon-sm mt-10">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider: Partners & Donors -->
  <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="/assets/images/website_images/partners.jpg">
    <div class="container pt-30 pb-30">
      <div class="row">
        <div class="col-md-12">
          <div class="clients-logo carousel">
            <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
