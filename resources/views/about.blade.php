@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')
	<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-box">
                    <h2>{{ $about->title }}<span> US</span></h2>
                    <h4>Welcome message</h4>
                    <p>{!! $about->description !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
