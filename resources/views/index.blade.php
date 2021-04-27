@extends('layouts.app')
@section('page-title')
    Home
@endsection
@section('meta-tags')

@endsection
@section('nav-section')
<div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
      <div class="container">
        <nav id="menuzord" class="menuzord orange bg-light">
          <ul class="menuzord-menu">
            <li class="active"><a href="#">Home</a> </li>
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
<section id="home" class="divider parallax layer-overlay overlay-dark-3" data-bg-img="/assets/images/website_images/image1.jpg">
    <div class="display-table">
      <div class="display-table-cell">
        <div class="container pt-150 pb-150">
          <div class="row">
            <div class="col-md-8">
              <div class="home-content">
                <h1 class="text-white text-uppercase font-60 font-raleway font-weight-700">Sponsor a <span class="text-theme-colored">Child</span></h1>
                <p class="text-white font-weight-400 font-16">Every day we bring hope to millions of children in the world's <br> hardest places as a sign of God's unconditional love.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored font-14 text-uppercase mt-20" href="#">Read more</a>
              </div>
            </div>
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

  <!-- Section: featured project -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <h4 class="text-uppercase line-bottom mt-0">Featured Project</h4>
          <div class="featured-project-carousel owl-nav-top">
            <div class="item">
              <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="http://placehold.it/360x195">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo.</p>
                   <div class="donate-details">
                     <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                     <ul class="pull-right list-inline mt-15">
                       <li>Raised: $1890</li>
                       <li>Goal: $2500</li>
                     </ul>
                   </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="http://placehold.it/360x195">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo.</p>
                   <div class="donate-details">
                     <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                     <ul class="pull-right list-inline mt-15">
                       <li>Raised: $1890</li>
                       <li>Goal: $2500</li>
                     </ul>
                   </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="http://placehold.it/360x195">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo.</p>
                   <div class="donate-details">
                     <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                     <ul class="pull-right list-inline mt-15">
                       <li>Raised: $1890</li>
                       <li>Goal: $2500</li>
                     </ul>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <h4 class="text-uppercase line-bottom mt-0">Became a Volunteer</h4>
          <div class="volunteer-wrapper border-bottom sm-maxwidth500 clearfix pb-15 mb-sm-30">
            <div class="fluid-video-wrapper">
              <iframe src="//player.vimeo.com/video/22029657?title=0&amp;byline=0&amp;portrait=0" height="210"  title="Volunteer policy" allowfullscreen></iframe>
            </div>
            <p class="mb-10 mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo, dolorum iste molestias.</p>
            <p>
              <a href="#" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Join Us</a>
              <span class="pull-right ml-10 mt-12 font-14">volunteers</span>
              <span class="animate-number pull-right font-20 text-theme-colored lineheight-20 mt-5" data-value="2598657" data-animation-duration="2500">0</span>
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <h4 class="text-uppercase line-bottom mt-0">Events</h4>
          <div class="bxslider bx-nav-top">
              @foreach ($events as $item)
              @php
                  $date = $item->event_date;
                  $day = date('d', strtotime($date));
                  $mon = date('M', strtotime($date));
              @endphp
              <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                  <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                      <img alt="..." src="/storage/uploads/{{$item->image_path}}" class="media-object">
                    </div>
                  </div>
                  <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                      <h5 class="media-heading text-uppercase" title="{{$item->event_title}}"><a href="/events/{{$item->event_slug}}">@php echo substr($item->event_title,0,17) . '...'  @endphp</a></h5>
                      <ul>
                        <li><i class="fa fa-clock-o"></i> On {{$item->event_date}}</li>
                        <li> <i class="fa fa-map-marker"></i> {{$item->event_loc}}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                      <ul>
                        <li class="font-36 text-theme-colored font-weight-700">{{$day}}</li>
                        <li class="font-20 text-center text-uppercase">{{$mon}}</li>
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
  </section>

  <!-- Section: Volunteer -->
  <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="/assets/images/website_images/volunteers.jpg">
    <div class="container pb-80">
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

  <!-- divider: Donate Now -->
  <section class="divider"  data-bg-img="/assets/images/website_images/helpusbg.jpg">
    <div class="container pt-0 pb-0">
      <div class="row">
        <div class="col-md-7">
          <div class="bg-theme-colored-transparent-deep p-40">
            <h4 class="text-uppercase line-bottom">Make a Donation Now!</h4>

            <!-- Paypal Both Onetime/Recurring Form Starts -->
            <form id="paypal_donate_form_onetime_recurring" class="form-text-white">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group mb-20">
                    <label><strong>How much do you want to donate?</strong></label>
                    <select name="amount" class="form-control">
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="500">500</option>
                        <option value="500">1000</option>
                        <option value="500">5000</option>
                        <option value="other">Other Amount</option>
                    </select>
                    <div id="custom_other_amount">
                      <label><strong>Custom Amount:</strong></label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <label><strong>Your Full Name</strong></label>
                      <input class="form-control" value="" placeholder="Full name">

                    </div>
                    <div class="form-group mb-20">
                        <label><strong>Email ID</strong></label>
                        <input class="form-control" value="" placeholder="Email">
                    </div>
                    <div class="form-group mb-20">
                        <label><strong>Message</strong></label>
                        <input class="form-control" value="" placeholder="Message">

                    </div>
                  </div>

                <div class="col-sm-12">
                  <div class="form-group mb-20">
                    <button type="submit" class="btn btn-flat btn-dark mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                  </div>
                </div>
              </div>
            </form>

            <!-- Script for Donation Form Custom Amount -->
            <script type="text/javascript">
              $(document).ready(function(e) {
                var $donation_form = $("#paypal_donate_form_onetime_recurring");
                //toggle custom amount
                var $custom_other_amount = $donation_form.find("#custom_other_amount");
                $custom_other_amount.hide();
                $donation_form.find("select[name='amount']").change(function() {
                    var $this = $(this);
                    if ($this.val() == 'other') {
                      $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">₹</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                    }
                    else{
                      $custom_other_amount.children( ".input-group" ).remove();
                      $custom_other_amount.hide();
                    }
                });

                //toggle donation_type_choice
                var $donation_type_choice = $donation_form.find("#donation_type_choice");
                $donation_type_choice.hide();
                $("input[name='payment_type']").change(function() {
                    if (this.value == 'recurring') {
                        $donation_type_choice.show();
                    }
                    else {
                        $donation_type_choice.hide();
                    }
                });


                // submit form on click
                $donation_form.on('submit', function(e){
                        $( "#paypal_donate_form-onetime" ).submit();
                    var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                    var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                    var amount = $donation_form.find("select[name='amount'] option:selected").val();
                    var t3 = $donation_form.find("input[name='t3']:checked").val();

                    if ( amount == 'other') {
                      amount = $donation_form.find("#input_other_amount").val();
                    }

                    // submit proper form now
                    if ( $("input[name='payment_type']:checked", $donation_form).val() == 'recurring' ) {
                        var recurring_form = $('#paypal_donate_form-recurring');

                        recurring_form.find("input[name='item_name']").val(item_name);
                        recurring_form.find("input[name='currency_code']").val(currency_code);
                        recurring_form.find("input[name='a3']").val(amount);
                        recurring_form.find("input[name='t3']").val(t3);

                        recurring_form.find("input[type='submit']").trigger('click');

                    } else if ( $("input[name='payment_type']:checked", $donation_form).val() == 'one_time' ) {
                        var onetime_form = $('#paypal_donate_form-onetime');

                        onetime_form.find("input[name='item_name']").val(item_name);
                        onetime_form.find("input[name='currency_code']").val(currency_code);
                        onetime_form.find("input[name='amount']").val(amount);

                        onetime_form.find("input[type='submit']").trigger('click');
                    }
                    return false;
                });

              });
            </script>



            <!-- Paypal Onetime Form -->
            <form id="paypal_donate_form-onetime" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_donations">
              <input type="hidden" name="business" value="accounts@thememascot.com">

              <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
              <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
              <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

              <input type="hidden" name="no_shipping" value="1">
              <input type="hidden" name="cn" value="Comments...">
              <input type="hidden" name="tax" value="0">
              <input type="hidden" name="lc" value="US">
              <input type="hidden" name="bn" value="PP-DonationsBF">
              <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
              <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
              <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
              <input type="submit" name="submit">
            </form>

            {{-- <!-- Paypal Recurring Form -->
            <form id="paypal_donate_form-recurring" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_xclick-subscriptions">
              <input type="hidden" name="business" value="accounts@thememascot.com">

              <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
              <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
              <input type="hidden" name="a3" value="20"> <!-- updated dynamically -->
              <input type="hidden" name="t3" value="D"> <!-- updated dynamically -->


              <input type="hidden" name="p3" value="1">
              <input type="hidden" name="rm" value="2">
              <input type="hidden" name="src" value="1">
              <input type="hidden" name="sra" value="1">
              <input type="hidden" name="no_shipping" value="0">
              <input type="hidden" name="no_note" value="1">
              <input type="hidden" name="lc" value="US">
              <input type="hidden" name="bn" value="PP-DonationsBF">
              <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
              <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
              <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
              <input type="submit" name="submit">
            </form>
            <!-- Paypal Both Onetime/Recurring Form Ends --> --}}

          </div>
        </div>
        <div class="col-md-5">
        </div>
      </div>
    </div>
  </section>

  <!-- divider: Gallery -->
  <section class="divider bg-lighter">
    <div class="container">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h3 class="text-uppercase mt-0">Gallery</h3>
            <div class="title-icon">
              <i class="flaticon-charity-hand-holding-a-heart"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <div class="gallery-isotope grid-7 gutter-small clearfix" data-lightbox="gallery">
              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg1.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg2.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg3.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg4.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg5.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg6.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg7.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg8.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg9.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg10.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg11.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg12.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg13.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg14.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg15.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg16.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg17.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg18.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg19.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg1.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item">
                <div class="thumb">
                  <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="/assets/images/gallery/gallery-lg2.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider: Funfact -->
  <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5"  data-bg-img="/assets/images/website_images/counters.jpg">
    <div class="container pt-80 pb-80">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact style-1 pb-15 pt-15 p-20 bg-white"> <i class="pe-7s-note2 text-black-light mt-5 font-48 pull-right" data-text-color="#ccc"></i>
            <h2 class="animate-number text-theme-colored mt-0 font-48" data-value="246" data-animation-duration="2000">0</h2>
            <div class="clearfix"></div>
            <h4 class="funfact-title">Causes</h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact style-1 pb-15 pt-15 p-20 bg-white"> <i class="pe-7s-global text-black-light mt-5 font-48 pull-right" data-text-color="#ccc"></i>
            <h2 class="animate-number text-theme-colored mt-0 font-48" data-value="486" data-animation-duration="2500">0</h2>
            <div class="clearfix"></div>
            <h4 class="funfact-title">Places</h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact style-1 pb-15 pt-15 p-20 bg-white"> <i class="pe-7s-users text-black-light mt-5 font-48 pull-right"></i>
            <h2 class="animate-number text-theme-colored mt-0 font-48" data-value="992" data-animation-duration="3000">0</h2>
            <div class="clearfix"></div>
            <h4 class="funfact-title">Volunteers</h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact style-1 pb-15 pt-15 p-20 bg-white"> <i class="pe-7s-medal text-black-light mt-5 font-48 pull-right" data-text-color="#ccc"></i>
            <h2 class="animate-number text-theme-colored mt-0 font-48" data-value="52" data-animation-duration="2500">0</h2>
            <div class="clearfix"></div>
            <h4 class="funfact-title">Awards</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: News -->
  <section id="new_section">
    <div class="container pt-70">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h3 class="text-uppercase mt-0">Recent News</h3>
            <div class="title-icon">
              <i class="flaticon-charity-hand-holding-a-heart"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="news-carousel owl-nav-top mb-sm-80" data-dots="true">
            @foreach ($blogs as $item)
            <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/storage/uploads/{{$item->image_path}}" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" ><i class="fa fa-thumbs-o-up"></i> {{$item->blog_likes}} <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white"><i class="fa fa-comments-o"></i> {{$item->comments}} <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0 text-capitalize"><a href="/blogs/{{$item->blog_slug}}">{{$item->blog_title}}</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">@php echo substr($item->blog_desc, 0, 100) . '...' @endphp</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left mt-0" href="/blogs/{{$item->blog_slug}}">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">{{$item->blog_date}}</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            @endforeach


          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Testimonials and Logo -->
  <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.2" data-bg-img="/assets/images/website_images/says.jpg">
    <div class="container pt-0 pb-0">
      <div class="row equal-height">
        <div class="col-md-5 bg-light-transparent">
          <div class="pt-50 pb-50 pl-20 pr-20">
            <h4 class="line-bottom text-uppercase mt-0">Our Donors Say</h4>
            <div class="testimonial-carousel owl-nav-top">
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                  <div class="content pt-10">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                    <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                  <div class="content pt-10">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                    <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                  <div class="content pt-10">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                    <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider: Partners & Donors -->
  <section>
    <div class="container pt-40 pb-30">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-uppercase line-bottom">Partners &amp; Donors</h4>
          <div class="clients-logo carousel">
            <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
            <div class="item text-left"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
