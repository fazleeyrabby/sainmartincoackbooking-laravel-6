@extends('layouts.frontendLayout.frontLayout')
@section('title','Saintmartin Service')
@section('content')
	<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-box">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Our<span> Coach</span></h2>
                        <h4>Our Coach Pictures</h4>
                        @foreach($coachs as $coach)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="coach-box">
                                <img src="{{ asset('public/assets/admin/images/') }}/{{ $coach->img }}">
                                <h3>{{ $coach->name }}</h3>
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