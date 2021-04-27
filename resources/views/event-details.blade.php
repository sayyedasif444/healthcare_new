@extends('layouts.app')
@section('page-title')
@php    echo ucwords($events[0]->event_title) @endphp

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
            <h2 class="text-theme-colored font-36">Event Details 1</h2>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">@php    echo ucwords($events[0]->event_title) @endphp</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <ul>
            <li>
              <h5>Topics:</h5>
              <p class="text-capitalize">{{ $events[0]->event_title }}</p>
            </li>
            <li>
              <h5>Host:</h5>
              <p>{{ $events[0]->event_host }}</p>
            </li>
            <li>
              <h5>Location:</h5>
              <p>{{ $events[0]->event_loc }}</p>
            </li>
            <li>
              <h5>Event Date:</h5>
              <p>{{ $events[0]->event_date }}</p>
            </li>
            <li>
              <h5>Share:</h5>
              <div class="styled-icons icon-sm icon-gray icon-circled">
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <img src="/storage/uploads/{{$events[0]->image_path}}" alt="" height="400px" width="100%">
        </div>
      </div>
      <div class="row mt-60">
        <div class="col-md-12">
          <h4 class="mt-0">Event Description</h4>
          <p>@php    echo $events[0]->event_desc @endphp</p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Registration Form -->
  <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
    <div class="container-fluid">
      <div class="section-title mb-30">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3 class="title text-theme-colored">Registration Form</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form id="booking-form" class="booking-form bg-lightest-transparent p-50 mb-0">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <input type="text" placeholder="Enter Name" id="contact_name" name="contact_name" required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" placeholder="Enter Email" id="contact_email2" name="contact_email2" class="form-control" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" placeholder="Enter Phone" id="contact_phone" name="contact_subject" class="form-control" required="">
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group text-center">
                  <button data-loading-text="Please wait..." class="btn btn-dark btn-theme-colored btn-sm btn-block mt-20 pt-10 pb-10" type="submit">Register now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>




@endsection
