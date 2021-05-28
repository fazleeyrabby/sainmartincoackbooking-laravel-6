<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $generalsetting->name }}</title>
    <link rel="icon" href="{{ asset('public/assets/admin/logo/') }}/{{ $generalsetting->favicon }}" type="image/x-icon">
    <!-- Saintmartin Service -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/frontend_asset/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/frontend_asset/') }}/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/frontend_asset/') }}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/frontend_asset/') }}/css/style.css"/>
    <script type="text/css" src="{{ asset('public/assets/frontend_asset/') }}/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
      <script src="{{ asset('public/assets/admin/') }}/js/script.js"></script>
<!--Font Awesome (added because you use icons in your prepend/append)-->
<!-- <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" /> -->

<!-- Inline CSS based on choices in "Settings" tab -->
<!-- <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style> -->

</head>
<body>

<section class="header-top-area" style="background-color: {{ $generalsetting->headerBackgrounColor  }}">
    <div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('public/assets/admin/logo/') }}/{{ $generalsetting->logo  }}" alt="Logo" class="img-responsive"/></a>
            </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <a class="anchor" href="tel:01713 273667"><img src="{{ asset('public/assets/admin/logo/') }}/{{ $generalsetting->phoneCallLogo  }}" alt="Logo" class="img-responsive"/>
                24hr Emergency Service <br> <span>{!! $generalsetting->emergenctHelpService  !!}</span>
            </a>
        </div>
    </div>
</section>

<section class="navbar-area" style="background-color: {{ $generalsetting->menuBackgrounColor  }}">
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="100"> 
        <div class="container">
            <div class="navbar-navbar">
                <div class="navbar-header">  
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <?php
                    $ourprofile = App\Ourprofile::first();
                ?>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul id="myDiv" class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ asset('public/assets/admin/logo') }}/{{ $ourprofile->profile }}" target="#">Our Profile</a></li>
                        <li><a href="{{ url('/service') }}">Services</a></li>
                        <li><a href="{{ url('/booking') }}">Booking</a></li>
                        <li><a href="{{ url('/destination') }}">Destinations</a></li>
                        <li><a href="{{ url('/coach') }}">Coach</a></li>
                        <li><a href="{{ url('/award') }}">Awards</a></li>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/client') }}">Our Clients</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>

<section class="slider-area">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <?php
                $sliders = App\Slider::where('publication_status',1)->get();
              ?>
            <ol class="carousel-indicators">
               @foreach($sliders as $key => $slider)
                <li data-target="#myCarousel" data-slide-to="{{$key}}" class="<?php if($key == 0){echo 'active';}?>"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
              @foreach($sliders as $key => $slider)
                <div class="item <?php if($key == 0){echo 'active';}?>">
                    <img src="public/assets/admin/sliderImage/{{ $slider->img }}" height="500" class="img-responsive">
                </div>
              @endforeach
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-backward" area-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-forward" area-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
 @yield('content')
<!----------Products Details---------->
<section class="category-row">
    <div class="container">
        <div class="header-blog">
            <h2>Our Clients</h2>
        </div>
        
        <div class="row">
           <div class="col-md-12">
              <div class="carousel carousel-showmanymoveone slide" id="carousel-tilenav">
                <?php
                  $clientsliders = App\Clientslider::orderBy('id','DESC')->get();
                ?>
                 <div class="carousel-inner">
                    @foreach($clientsliders as $key => $clientslider)
                    <div class="item <?php if($key == 0) { echo 'active'; } ?>">
                       <div class="col-xs-12 col-sm-6 col-md-3">
                          <a class="best-box" href="#"><img src="{{ asset('public/assets/admin/images/') }}/{{ $clientslider->img }}" class="img-responsive" height="100"></a>
                       </div>
                    </div>
                    @endforeach
                 </div>
                 <a class="left carousel-control" href="#carousel-tilenav" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
                 <a class="right carousel-control" href="#carousel-tilenav" data-slide="next"><i class="fa fa-arrow-right"></i></a>
              </div>
           </div>
        </div>
    </div>
</section>

<section class="footer-top" style="background-color:{{ $generalsetting->footerBackgroundColor  }}">
    <div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3>Follow Us</h3>
            <div class="social-icon">
                <ul>
                    <li><a href="{{ $generalsetting->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $generalsetting->googlePlus }}"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $generalsetting->tweeter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="{{ $generalsetting->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('public/assets/admin/logo/') }}/{{ $generalsetting->logo  }}" alt="Logo" class="img-responsive"/></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3>For Help</h3>
            <p><i class="fa fa-phone" aria-hidden="true"></i> {!! $generalsetting->emergenctHelpService !!}</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> {{ $generalsetting->email }}</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3>Contact Us</h3>
            <h5 style="letter-spacing:1px"><b>For AC Bus Rent:</b> <br>
            {!! $generalsetting->forAcBusRent !!}<br><br>
            <b>information:</b> <br>
            {!! $generalsetting->information !!}</h5>
        </div>
    </div>
</section>

<section class="footer-down">
    <div class="container">
        <p>{!! $generalsetting->footerBottomText !!}</p>
    </div>
</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script>
<!--------------Begin: Javascript---------------->
<script src="{{ asset('public/assets/frontend_asset') }}/js/jquery-2.1.1.js"></script>
<script src="{{ asset('public/assets/frontend_asset') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('public/assets/frontend_asset') }}/js/slider.js"></script>

<!------For Active Menu------>
<script>
$(document).ready(function() {
 var url = window.location.href;
 url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
 url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
 url = url.substr(url.lastIndexOf("/") + 1);
 if(url == ''){
 url = 'index.php';
 }
 $('.navbar-area li').each(function(){
  var href = $(this).find('a').attr('href');
  if(url == href){
   $(this).addClass('active');
  }
 });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('layouts.message')
<script>
    $(document).ready(function(){
        //FANCYBOX
        //https://github.com/fancyapps/fancyBox
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

<script>
$(".carousel-showmanymoveone").carousel({
  interval: 1500
});

(function () {
$(".carousel-showmanymoveone .item").each(function () {
  var itemToClone = $(this);

  for (var i = 1; i < 4; i++) {
     itemToClone = itemToClone.next();

     // wrap around if at end of item collection
     if (!itemToClone.length) {
        itemToClone = $(this).siblings(":first");
     }

     // grab item, clone, add marker class, add to collection
     itemToClone
        .children(":first-child")
        .clone()
        .addClass("cloneditem-" + i)
        .appendTo($(this));
  }
});
})();
</script>



</body>
</html>