@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')
	<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-box">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Our<span> Destination</span></h2>
                        <h4>Destination Places</h4>
                        @foreach($destinations as $destination)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="coach-box">
                                <img src="{{ asset('public/assets/admin/images/') }}/{{ $destination->img }}">
                                <h3>{{ $destination->name }}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection