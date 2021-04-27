@extends('layouts.app')
@section('page-title')
    Contact Us
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
            <li class="active"><a href="/contact-us">Contact</a> </li>
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
            <h2 class="text-white font-36">Contact</h2>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Contact</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider: Contact -->
  <section class="divider">
    <div class="container">
      <div class="row pt-30">
        <div class="col-md-4">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                  <p>255/900 , Near GG Int'l School, S.T Nagar , Pimpri Pune - 411018</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                  <p>+(91) 8888 4422 02</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                  <p>info@healthcare.com</p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-8">
          <h3 class="mt-0 mb-30">Interested in discussing?</h3>
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_name">Name <small>*</small></label>
                  <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_email">Email <small>*</small></label>
                  <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_name">Subject <small>*</small></label>
                  <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_phone">Phone</label>
                  <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="form_name">Message</label>
              <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
            </div>
            <div class="form-group">
              <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
              <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
            </div>
          </form>

          <!-- Contact Form Validation-->
          <script type="text/javascript">
            $("#contact_form").validate({
              submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                  dataType:  'json',
                  success: function(data) {
                    if( data.status == 'true' ) {
                      $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  }
                });
              }
            });
          </script>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider: Google Map -->
  <section>
    <div class="container-fluid p-0">
      <div class="row">

        <!-- Google Map HTML Codes -->
        <div
          data-address="121 King Street, Melbourne Victoria 3000 Australia"
          data-popupstring-id="#popupstring1"
          class="map-canvas autoload-map"
          data-mapstyle="style2"
          data-height="400"
          data-latlng="-37.817314,144.955431"
          data-title="sample title"
          data-zoom="12"
          data-marker="images/map-marker.png">
        </div>
        <div class="map-popupstring hidden" id="popupstring1">
          <div class="text-center">
            <h3>CharityFund Office</h3>
            <p>121 King Street, Melbourne Victoria 3000 Australia</p>
          </div>
        </div>
        <!-- Google Map Javascript Codes -->
        {{-- <script src="http://maps.google.com/maps/api/js"></script> --}}
        <script src="/assets/js/google-map-init.js"></script>

      </div>
    </div>
  </section>



@endsection
