<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <title>Hotel Reservation</title>
    <!-- Meta Description -->
    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{ URL::asset('/plugins/css/font-awesome.min.css') }}">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/css/bootstrap.min.css') }}">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/css/jquery.fancybox.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/css/animate.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/css/main.css') }}">
    <!-- media-queries -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/css/media-queries.css') }}">

    <!-- Modernizer Script for old Browsers -->
    <script src="{{ URL::asset('plugins/js/modernizr-2.6.2.min.js') }}"></script>

</head>

<body id="body">

<!-- preloader -->
<div id="preloader">
    <img src="{{ asset('plugins/img/preloader.gif')}}" alt="Preloader">
    {{--<i class="fa fa-spinner fa-spin"></i>--}}
</div>
<!-- end preloader -->

<!-- 
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <a class="navbar-brand" href="#body">
                <h1 id="logo">
                    <img src="{{ asset('plugins/img/logo.png')}}"  alt="Brandi">
                </h1>
            </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li class="current"><a href="#body">Home</a></li>
                {{--<li><a href="#features">Features</a></li>--}}
                {{--<li><a href="#products">Booking</a></li>--}}
                <li><a href="#team">Make booking</a></li>
                {{--<li><a href="http://google.com">Contact</a></li>--}}
            </ul>
        </nav>
        <!-- /main nav -->

    </div>
</header>
<!--
End Fixed Navigation
==================================== -->



<!--
Home Slider
==================================== -->

<section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Indicators bullet -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- End Indicators bullet -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <!-- single slide -->
            <div class="item active" style="background-image: url({{ URL::asset('plugins/img/banner.jpg')}});">
                <div class="carousel-caption">
                    <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Hotel<span> Brandi</span>!</h2>
                    <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">Best rated hotel & room services </span><br> In Nairobi.</h3>
                    <p data-wow-duration="1000ms" class="wow slideInRight animated">Reserve a room in just one click</p>

                    <ul class="social-links text-center">
                        <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end single slide -->

            <!-- single slide -->
            <div class="item" style="background-image: url({{ URL::asset('plugins/img/banner.jpg')}});">
                <div class="carousel-caption">
                    <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Best Price<span> Guarantee</span>!</h2>
                    <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">Best room </span> services.</h3>
                    <p data-wow-duration="500ms" class="wow slideInRight animated">Free breakfast and wifi</p>

                    <ul class="social-links text-center">
                        <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end single slide -->

        </div>
        <!-- End Wrapper for slides -->

    </div>
</section>

<!--
Meet Our Team
==================================== -->

<section id="team" class="team">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                <h2>Make your reservation</h2>
                <div class="devider"><i class="fa fa-spinner fa-spin fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>--}}
               <p>Click on the image to view description</p>
                <br>
                @include('flash::message')
                @include('adminlte-templates::common.errors')
            </div>

            <!-- single member -->
            @if(count($rooms))
                @foreach($rooms as $room)
                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="member-thumb">
                        <img src="{{ asset('storage/'.$room->url)}}" style="width: 100%;height: 100%" alt="Team Member" class="img-responsive">

                        {{--<img src="{{ asset('plugins/img/team/member-1.png')}}" alt="Team Member" class="img-responsive">--}}
                        <figcaption class="overlay">
                            <h5>{{ $room->name }} </h5>
                            <p>{{ $room->description }}</p>
                            <br>
                            <h5>{{ $room->price.' /= per night' }}</h5>
                            <br>
                            @if($room->status == 'vacant')
                                <a class="btn btn-danger btn-block reserve-btn" room-id="{{ $room->id }}" url="{{ url('rooms/'.$room->id) }}"><i class=""></i> Reserve</a>
                            @else
                            <a class="btn btn-success btn-block rsrvd">Reserved</a>
                            @endif

                        </figcaption>
                    </div>
                    {{--<h4>John Filmr Doe</h4>--}}
                    {{--<span>Managing Director</span>--}}
                </figure>
                @endforeach
            @endif
                <div class="modal fadeIn animated" id="booking-modal" role="dialog">
                    {!! Form::open(['route' => 'bookings.store']) !!}
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title text-center">Make reservation for <span id="title"></span></h4>
                                <h4 class="modal-title text-center"><span id="title-price"></span> per night</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control " required placeholder="Enter your full name">
                                </div>
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="number" name="phone_number" class="form-control" required placeholder="Enter your phone number">
                                </div>
                                <div class="form-group">
                                    <label>Nights</label>
                                    <input type="number" id="nights" name="nights" class="form-control " required placeholder="Number of nights">
                                </div>
                                <div class="form-group">
                                    <label>Amount to pay</label>
                                    <input type="number" name="" id="amount-to-pay" class="form-control "readonly>
                                    <input type="hidden" id="amount-per-n">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="room" id="r-to-create">
                                {{--<button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>--}}
                                <button type="submit" class="btn btn-success btn-block">Reserve</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

<!--
End Meet Our Team
==================================== -->

<!--
Some fun facts
==================================== -->


<footer id="footer" class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                <div class="footer-single">
                    <img src="{{ asset('plugins/img/footer-logo.png')}}" alt="">
                    {{--<p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="footer-single">
                    <h6>Subscribe </h6>
                    <form action="#" class="subscribe">
                        <input type="text" name="subscribe" id="subscribe">
                        <input type="submit" value="&#8594;" id="subs">
                    </form>
                    <p>Subscribe to receive our news letter</p>
                    {{--<p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                <div class="footer-single">
                    <h6>Explore</h6>
                    <ul>
                        <li><a href="#">Inside Us</a></li>
                        <li><a href="#">Flickr</a></li>
                        <li><a href="#">Google</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="footer-single">
                    <h6>Support</h6>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Market Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Pressroom</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="copyright text-center">
                    Copyright © 2017 All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
<script src="{{ URL::asset('plugins/js/jquery-1.11.1.min.js') }}"></script>
<!-- Single Page Nav -->
<script src="{{ URL::asset('plugins/js/jquery.singlePageNav.min.js') }}"></script>
<!-- Twitter Bootstrap -->
<script src="{{ URL::asset('plugins/js/bootstrap.min.js') }}"></script>
<!-- jquery.fancybox.pack -->
<script src="{{ URL::asset('plugins/js/jquery.fancybox.pack.js') }}"></script>
<!-- jquery.mixitup.min -->
<script src="{{ URL::asset('plugins/js/jquery.mixitup.min.js') }}"></script>
<!-- jquery.parallax -->
<script src="{{ URL::asset('plugins/js/jquery.parallax-1.1.3.js') }}"></script>
<!-- jquery.countTo -->
<script src="{{ URL::asset('plugins/js/jquery-countTo.js') }}"></script>
<!-- jquery.appear -->
<script src="{{ URL::asset('plugins/js/jquery.appear.js') }}"></script>
<!-- Contact form validation -->
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>--}}
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>--}}
<!-- Google Map -->
{{--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>--}}
<!-- jquery easing -->
<script src="{{ URL::asset('plugins/js/jquery.easing.min.js') }}"></script>
<!-- jquery easing -->
<script src="{{ URL::asset('plugins/js/wow.min.js') }}"></script>
<script>
    var wow = new WOW ({
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       120,          // distance to the element when triggering the animation (default is 0)
            mobile:       false,       // trigger animations on mobile devices (default is true)
            live:         true        // act on asynchronously loaded content (default is true)
        }
    );
    wow.init();
</script>
<!-- Custom Functions -->
<script src="{{ URL::asset('plugins/js/custom.js') }}"></script>

<script type="text/javascript">
    $(function(){
        /* ========================================================================= */
        /*	Contact Form
        /* ========================================================================= */

        $('#contact-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "come on, you have a name don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                email: {
                    required: "no email, no message"
                },
                message: {
                    required: "um...yea, you have to write something to send this form.",
                    minlength: "thats all? really?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"process.php",
                    success: function() {
                        $('#contact-form :input').attr('disabled', 'disabled');
                        $('#contact-form').fadeTo( "slow", 0.15, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function() {
                        $('#contact-form').fadeTo( "slow", 0.15, function() {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });
</script>
</body>
</html>
