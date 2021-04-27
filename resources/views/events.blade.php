@extends('layouts.app')
@section('page-title')
    Events
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
            <li class="active"><a href="/events">Events</a> </li>
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
 <section class="inner-header divider layer-overlay overlay-dark"  data-bg-img="/assets/images/website_images/image1.jpg">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content text-center">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3 class="text-theme-colored font-36">Events</h3>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Events</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: event calendar -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            @foreach ($events as $item)
            @php
                $date = $item->event_date;
                $day = date('d', strtotime($date));
                $mon = date('M', strtotime($date));
                $year = date('Y', strtotime($date))
            @endphp
            <div class="upcoming-events media maxwidth400 bg-light mb-20">
                <div class="row equal-height">
                  <div class="col-sm-4 pr-0 pr-sm-15">
                    <div class="thumb p-15">
                      <img class="img-fullwidth" src="/storage/uploads/{{$item->image_path}}" alt="...">
                    </div>
                  </div>
                  <div class="col-sm-4 border-right pl-0 pl-sm-15">
                    <div class="event-details p-15 mt-20">
                      <h4 class="media-heading text-uppercase font-weight-500">{{$item->event_title}}</h4>
                      <p>@php echo substr($item->event_desc, 0,145) . '...' @endphp</p>
                      <a href="/events/{{$item->event_slug}}" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="event-count p-15 mt-15">
                      <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                        <li class="p-15 mr-5 bg-lightest">{{$mon}}</li>
                        <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> {{$day}}</li>
                        <li class="p-15 bg-lightest">{{$year}}</li>
                      </ul>
                      <ul>
                        <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> at {{$item->event_time}}</li>
                        <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> {{$item->event_loc}}</li>
                      </ul>
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
      </div>
    </div>
  </section>

@endsection
