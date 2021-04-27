@extends('layouts.app')
@section('page-title')
   Gallery
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
            <li class="active"><a href="/gallery">Gallery</a> </li>
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
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="/assets/images/website_images/image1.jpg">
        <div class="container pt-30 pb-30">
          <!-- Section Content -->
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="text-theme-colored font-36">Gallery</h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="#">Home</a></li>
                  <li class="active">Gallery</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
    </section>

     <!-- Section: home -->
     <section id="home" class="divider parallax container mt-50" data-stellar-background-ratio="0.5">
        <div class="maximage-slider">
          <div id="maximage">
            <img src="/assets/images/website_images/image1.jpg" alt="" height="400px"/>
            <img src="/assets/images/website_images/partners.jpg" alt="" height="400px"/>
            <img src="/assets/images/website_images/counters.jpg" alt="" height="400px"/>
          </div>
          <div class="fullscreen-controls"> <a class="img-prev"><i class="pe-7s-angle-left"></i></a> <a class="img-next"><i class="pe-7s-angle-right"></i></a> </div>
        </div>
        <div class="display-table" style="height: 400px">

        </div>
      </section>

      <!-- Section: About -->
      <!-- Gallery Grid 3 -->
    <section>
        <div class="container">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <!-- Portfolio Filter -->
                {{-- <div class="portfolio-filter">
                  <a href="#" class="active" data-filter="*">All</a>
                  <a href="#branding" class="" data-filter=".branding">Branding</a>
                  <a href="#design" class="" data-filter=".design">Design</a>
                  <a href="#photography" class="" data-filter=".photography">Photography</a>
                </div> --}}
                <!-- End Portfolio Filter -->

                <!-- Portfolio Gallery Grid -->
                <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                  <!-- Portfolio Item Start -->
                  <div class="gallery-item design">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item branding photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item design">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item branding">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item design photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item branding">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item branding">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item design photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item branding">
                    <div class="thumb">
                      <img class="img-fullwidth" src="/assets/images/website_images/image1.jpg" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="text-holder">
                        <div class="title text-center">Sample Title</div>
                      </div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="/assets/images/website_images/image1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->
                </div>
                <!-- End Portfolio Gallery Grid -->

              </div>
            </div>
          </div>
        </div>
    </section>

@endsection
