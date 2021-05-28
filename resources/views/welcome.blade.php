@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')

<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="about-box">
                <?php
                    $welcomemessage = App\Welcomemessage::first();
                ?>
                  
                    <div class="col-md-3 col-sm-3 col-xs-12 no-padding">
                        
                        <img src="{{ asset('public/assets/admin/images') }}/{{ $welcomemessage->img }}" alt="3">
                        <h3>{{ $welcomemessage->name }}</h3>
                        <h6>{{ $welcomemessage->designation }}<br>
                        Cell: +88 {{ $welcomemessage->contact }}</h6>
                        
                    </div>
                   
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <h2><span>{{ $welcomemessage->title }}</span></h2>
                        <h4>Welcome message</h4>
                        <p>{{ $welcomemessage->description }}</p>
                    </div>
                   
                    <?php
                        $rents = App\Rent::where('publication_status',1)->get();
                    ?>
                    <div class="rent-area">
                        <div class="head-rent">
                            <h2>Rent for our coach</h2>
                            <img src="{{ asset('public/assets/frontend_asset/') }}/img/rent-bar.png" alt="1">
                        </div>
                        <div class="row">
                            @foreach($rents as $rent)
                            <div class="col-md-4 col-sm-6 col-xs-12" style="padding:0 10px!important;">
                                <div class="image-box">
                                    <img src="{{ asset('public/assets/admin/sliderImage') }}/{{ $rent->img }}" alt="1" height="200" >
                                    <div class="top-box">
                                        <h5>{{ $rent->title }}</h5>
                                        <a class="btn btn-box" href="{{ url('coach') }}"><i class="fa fa-flag" aria-hidden="true"></i>View More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="about-box">
                    <h2 style="padding-bottom:20px">DO YOU NEED <span>HELP?</span></h2>
                    <a class="call-to-act" href="tel:"><span>Emergency Call</span><br>{{ $generalsetting->mobile }}</a>
                </div>
                <div class="about-box">
                    <h2 style="padding-bottom:15px">Video<span> Tour</span></h2>
                    <iframe width="100%" height="280" src="{{ $generalsetting->youtubeVideoLink }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="about-box">
                    <h2 style="padding-bottom:20px">How to buy our <span>Ticket?</span></h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <a class="img-panel" target="_blank" href="{{ $generalsetting->buyTicketLinkBkash }}"><img src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->buyTicketBkashLogo  }}" alt="1"></a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <a class="img-panel" href="{{ $generalsetting->buyTicketLinkBus }}" target="_blank"><img src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->buyTicketBusLogo  }}" alt="1"></a>
                        </div>
                    </div>
                </div>
                <div class="about-box">
                    <h2 style="padding-bottom:20px">Member<span> Of</span></h2>
                    <a class="img-panel-big" href="{{ $generalsetting->memberOfLink }}" target="blank"><img src="{{ asset('public/assets/admin/logo') }}/{{ $generalsetting->memberOfLogo  }}" alt="1"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
