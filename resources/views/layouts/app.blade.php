<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<!-- Page Title -->
<title>@yield('page-title')</title>
@yield('meta-tags')
<!-- Favicon and Touch Icons -->
<link href="/assets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="/assets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="/assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="/assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="/assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="/assets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="/assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="/assets/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="/assets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="/assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="/assets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="/assets/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="/assets/css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">
<link href="/assets/css/style.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="/assets/js/jquery-2.2.0.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="/assets/js/jquery-plugin-collection.js"></script>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header class="header">
    <div class="header-top p-0 xs-text-center bg-lightest">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand xs-pull-center mb-0" href="javascript:void(0)"><img src="/assets/images/logo-wide.png" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right sm-text-center">
                <div class="font-20 text-black-333 text-uppercase mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-24"></i> +(91) 8888 4422 02</div>
                <a class="font-12 text-gray" href="#">Call us for more details!</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right sm-text-center">
                <div class="font-20 text-black-333 text-uppercase mb-5 font-weight-600"><i class="fa fa-envelope text-theme-colored font-24"></i> Mail us today</div>
                <a class="font-12 text-gray" href="#"> info@healthcare.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @yield('nav-section')
  </header>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    @yield('main-content')
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer pb-0" data-bg-img="/assets/images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pb-20">
      <div class="row multi-row-clearfix">
        <div class="col-sm-6 col-md-4">
          <div class="widget dark"> <img alt="" src="/assets/images/logo-wide-white@2x.png" style="width: 100%">
            <p class="font-12 mt-10 mb-10">CharityFund is a library of corporate and business templates with predefined web elements which helps you to build your own site.</p>
            <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5" href="/about-us">Read more</a>
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-20">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Pages</h5>
            <ul class="list-border list theme-colored angle-double-right">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Donor Privacy Policy</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Terms of Use</a></li>
            </ul>
          </div>
        </div>
        {{-- <div class="col-sm-6 col-md-3">
          <div class="widget dark">
              <h5 class="widget-title line-bottom">Tags</h5>
              <div class="tags">
                <a href="#">lawyer</a>
                <a href="#">practice</a>
                <a href="#">judge</a>
                <a href="#">courte</a>
                <a href="#">injury</a>
                <a href="#">injustice</a>
                <a href="#">justice</a>
                <a href="#">Script</a>
                <a href="#">evidence</a>
                <a href="#">success</a>
                <a href="#">fight</a>
                <a href="#">attorneys</a>
                <a href="#">consulting</a>
                <a href="#">support</a>
                <a href="#">cases</a>
                <a href="#">law</a>
                <a href="#">criminal</a>
              </div>
          </div>
        </div> --}}
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
            <ul class="list-border">
              <li><a href="#">+(91) 8888 4422 02</a></li>
              <li><a href="#">info@healthcare.com</a></li>
              <li><a href="#" class="lineheight-20">255/900 , Near GG Int'l School, S.T Nagar , Pimpri Pune - 411018</a></li>
            </ul>
            <p class="text-white mb-5 mt-15">Subscribe to our newsletter</p>
            <div class="col-12" id="error_messge"></div>
            <form id="subscriber_idform" class="newsletter-form mt-10">
              <label class="display-block" for="mce-EMAIL"></label>
              <div class="input-group">
                <input type="email" id="subscriber_id" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
            $('#subscriber_idform').submit(function(e){
                e.preventDefault()
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if($('#subscriber_id').val() != ''){
                    $.ajax({
                    type: "POST",
                    url: "/subscriberForm",
                    data: {emailid:$('#subscriber_id').val(), '_token': CSRF_TOKEN},
                    success: function (response) {
                        console.log(response.message)
                        if(response.statuscode==200){
                            $('#error_messge').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + response.message + '</div>')
                            abc = setInterval(function() {
                                $( "#error_messge").html('');
                                clearInterval(abc)
                            }, 5000);
                            $('#subscriber_id').val('')
                        }else{
                            $('#error_messge').html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + response.message + '</div>')
                            abc = setInterval(function() {
                                $( "#error_messge").html('');
                                clearInterval(abc)
                            }, 5000);
                            $('#subscriber_id').val('')
                        }
                    },
                    error: function() {
                        $('#error_messge').html('div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Something Went Wrong! Please try again.</div>')
                        abc = setInterval(function() {
                            $( "#error_messge").html('');
                            clearInterval(abc)
                        }, 5000);
                        $('#subscriber_id').val('')
                    }
                });
                }else{
                    $('#subscriber_idform').prepend('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Please enter your email</div>')
                    abc = setInterval(function() {
                        $( "#error_messge").html('');
                        clearInterval(abc)
                    }, 5000);
                }

              })

            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-theme-colored p-20">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-white font-11 m-0">Copyright &copy;2021 The Healthcare Foundation. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="/assets/js/custom.js"></script>
@yield('script-section')
</body>
</html>
