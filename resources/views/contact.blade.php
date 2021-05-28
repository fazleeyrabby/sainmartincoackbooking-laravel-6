@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')
	<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-box">
                    <h2>Contact<span> Us</span></h2>
                    <h4>Shortly contact with us:</h4>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-text">
                            <h2 class="contact_address">Head Office</h2>
                            <p>
                                {{ $generalsetting->address }}<br>
                                <b>For AC Bus Rent: </b>{{ $generalsetting->forAcBusRent }}<br>
                                <b>Information:</b> {{ $generalsetting->information }}<br>
                                <b>Email :</b> {{ $generalsetting->email }}
                            </p>
                        </div>
                    </div> 
            </div>
        </div>
    </div>
</section>
@endsection